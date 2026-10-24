<?php

namespace App\Services\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use League\OAuth2\Server\AuthorizationServer;
use League\OAuth2\Server\Exception\OAuthServerException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory;

class AccessTokenIssuer
{
    public function issue(User $user, string $password)
    {
        $client = Client::query()
            ->where('revoked', false)
            ->where('password_client', true)
            ->first() ?? Client::query()->find(2);

        if (! $client) {
            return response()->json([
                'message' => 'Client OAuth introuvable.',
            ], 500);
        }

        $secret = $this->clientSecret($client);

        if (! $secret) {
            return response()->json([
                'message' => 'Secret OAuth indisponible. Définissez PASSPORT_PASSWORD_CLIENT_SECRET.',
            ], 500);
        }

        $psr = (new PsrHttpFactory)->createRequest(Request::create(rtrim((string) config('app.url'), '/').'/oauth/token', 'POST', [
            'grant_type' => 'password',
            'client_id' => (string) $client->id,
            'client_secret' => $secret,
            'username' => $user->phone_number,
            'password' => $password,
            'scope' => $this->scope((int) $user->role_id),
        ]));

        try {
            $payload = json_decode(app(AuthorizationServer::class)->respondToAccessTokenRequest(
                $psr,
                app(ResponseInterface::class)
            )->getBody()->__toString(), true);
        } catch (OAuthServerException $e) {
            return response()->json($e->getPayload(), $e->getHttpStatusCode());
        }

        return response()->json($payload);
    }

    private function clientSecret(Client $client): ?string
    {
        $configured = config('services.passport.password_client_secret');
        if (is_string($configured) && $configured !== '') {
            return $configured;
        }

        $stored = (string) ($client->getRawOriginal('secret') ?? '');
        if ($stored !== '' && ! str_starts_with($stored, '$2') && ! str_starts_with($stored, '$argon')) {
            return $stored;
        }

        return null;
    }

    public function scope(int $roleId): string
    {
        return match ($roleId) {
            1 => 'admin',
            2 => 'escort',
            3 => 'customer',
            default => '',
        };
    }
}
