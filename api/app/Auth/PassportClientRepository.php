<?php

namespace App\Auth;

use Laravel\Passport\Bridge\ClientRepository;

class PassportClientRepository extends ClientRepository
{
    public function validateClient(string $clientIdentifier, ?string $clientSecret, ?string $grantType): bool
    {
        $record = $this->clients->findActive($clientIdentifier);

        if (! $record || $clientSecret === null || $clientSecret === '') {
            return false;
        }

        $stored = (string) $record->getRawOriginal('secret');

        if ($stored === '') {
            return false;
        }

        if (str_starts_with($stored, '$2') || str_starts_with($stored, '$argon')) {
            return $this->hasher->check($clientSecret, $stored);
        }

        return hash_equals($stored, $clientSecret);
    }
}
