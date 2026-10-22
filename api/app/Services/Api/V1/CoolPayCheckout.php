<?php

namespace App\Services\Api\V1;

use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class CoolPayCheckout
{
    public function link(string $publicKey, int $amount, string $transactionRef, User $user): Response
    {
        return Http::acceptJson()->withBody(json_encode([
            'transaction_amount' => $amount,
            'transaction_currency' => 'XAF',
            'transaction_reason' => 'Abonnement Annonce',
            'app_transaction_ref' => $transactionRef,
            'customer_phone_number' => $user->phone_number,
            'customer_name' => $user->username,
            'customer_email' => (string) ($user->email ?? ''),
            'customer_lang' => 'fr',
        ]), 'application/json')->post('https://my-coolpay.com/api/'.$publicKey.'/paylink');
    }
}
