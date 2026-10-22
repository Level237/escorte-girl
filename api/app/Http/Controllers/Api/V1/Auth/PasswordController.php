<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Api\V1\PasswordResetToken;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function __construct(private PasswordResetToken $tokens) {}

    public function questions(Request $request): JsonResponse
    {
        $data = $request->validate([
            'phone_number' => ['required', 'string'],
        ]);

        $user = User::query()->where('phone_number', $data['phone_number'])->first();

        if (! $user) {
            return response()->json(['message' => 'Compte introuvable.'], 404);
        }

        if (! $user->isSecure) {
            return response()->json([
                'message' => "Ce compte n'a pas encore de question de sécurité.",
            ], 409);
        }

        $questions = $user->questions->map(fn ($question) => [
            'id' => $question->id,
            'question' => $question->question_name,
        ])->values();

        return response()->json(['data' => $questions]);
    }

    public function verify(Request $request): JsonResponse
    {
        $data = $request->validate([
            'phone_number' => ['required', 'string'],
            'question_id' => ['required', 'integer'],
            'answer' => ['required', 'string'],
        ]);

        $user = User::query()->where('phone_number', $data['phone_number'])->first();

        if (! $user) {
            return response()->json(['message' => 'Compte introuvable.'], 404);
        }

        $question = $user->questions->firstWhere('id', (int) $data['question_id']);
        $expected = $question?->pivot?->answer;

        if (! is_string($expected) || ! hash_equals($expected, $data['answer'])) {
            return response()->json(['message' => 'Réponse incorrecte.'], 422);
        }

        return response()->json([
            'data' => [
                'reset_token' => $this->tokens->issue($user->phone_number),
            ],
        ]);
    }

    public function update(Request $request): JsonResponse
    {
        $data = $request->validate([
            'phone_number' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'max:30'],
            'reset_token' => ['required', 'string'],
        ]);

        if (! $this->tokens->consume($data['phone_number'], $data['reset_token'])) {
            return response()->json(['message' => 'Jeton de réinitialisation invalide.'], 422);
        }

        $user = User::query()->where('phone_number', $data['phone_number'])->first();

        if (! $user) {
            return response()->json(['message' => 'Compte introuvable.'], 404);
        }

        $user->password = $data['password'];
        $user->save();

        return response()->json([
            'data' => ['reset' => true],
        ]);
    }
}
