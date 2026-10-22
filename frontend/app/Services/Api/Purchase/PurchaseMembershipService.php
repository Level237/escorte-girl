<?php

namespace App\Services\Api\Purchase;

use App\Services\Api\UrlApiService;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PurchaseMembershipService{

    public function purchaseWithCredit($memberShip_id,$announcement_id){

        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post(UrlApiService::endpoint('v1/me/announcements/'.$announcement_id.'/subscription'), [
            'membership_id' => $memberShip_id,
        ]);
        $data=json_decode($response);

        return $data;
    }

    public function initPayment($price){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post($url."/api/v1/init/payment/",[
            'price'=>$price
        ]);
        $data=json_decode($response);

        return $data;
    }

    public function verifyPayment($memberShip_id,$announcement_id){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post($url."/api/v1/verify/payment/".$memberShip_id."/".$announcement_id);
        $data=json_decode($response);

        return $data;
    }
    public function verifyUserPayment(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post($url."/api/v1/subscribe/member/momo");
        $data=json_decode($response);

        return $data;
    }
    public function verifyUserPaymentWithCredit(){
        $url=(new UrlApiService())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->acceptJson()->post(UrlApiService::endpoint('v1/me/subscription'));
        $data=json_decode($response);

        return $data;
    }

    public function initPayCoolPay($announcementId, $membershipId, $transactionRef)
    {
        return $this->checkout('v1/payments/boosts', [
            'announcement_id' => $announcementId,
            'membership_id' => $membershipId,
            'transaction_ref' => $transactionRef,
        ]);
    }

    public function initPayCoolPayCredit($price, $transactionRef)
    {
        return $this->checkout('v1/payments/credits', [
            'amount' => $price,
            'transaction_ref' => $transactionRef,
        ]);
    }

    public function initPayCoolPayPlan($transactionRef)
    {
        return $this->checkout('v1/payments/plans', [
            'transaction_ref' => $transactionRef,
        ]);
    }

    private function checkout(string $path, array $body): object
    {
        $response = Http::withToken(Session::get('tokenUser'))
            ->acceptJson()
            ->post(UrlApiService::endpoint($path), $body);
        $data = $response->json('data') ?? [];

        return (object) [
            'payment_url' => $data['payment_url'] ?? null,
            'transaction_ref' => $data['transaction_ref'] ?? null,
        ];
    }
}
