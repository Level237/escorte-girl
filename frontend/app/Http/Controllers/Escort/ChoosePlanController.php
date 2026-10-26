<?php

namespace App\Http\Controllers\Escort;

use App\Http\Controllers\Controller;
use App\Services\Api\MemberShip\MemberShipService;

class ChoosePlanController extends Controller
{
    public function PlanShow($id, $adsId)
    {
        $membership = (new MemberShipService())->show($id);
        $payload = $this->payload($membership);

        if ($payload === null) {
            return redirect()
                ->route('membership.display', ['adsId' => $adsId, 'membership' => 'null'])
                ->withErrors(['msg' => 'Abonnement introuvable.']);
        }

        return redirect()->route('membership.display', [
            'adsId' => $adsId,
            'membership' => $payload,
        ]);
    }

    public function PlanPremium()
    {
        $memberships = (new MemberShipService())->showPremium();
        $membership = is_array($memberships) ? ($memberships[0] ?? $memberships) : null;
        $payload = $this->payload($membership);

        if ($payload === null) {
            return back()->withErrors(['msg' => 'Abonnement introuvable.']);
        }

        return redirect()->route('upgrade-plan', ['membership' => $payload]);
    }

    private function payload(mixed $membership): ?string
    {
        if (is_object($membership) && isset($membership->data)) {
            $membership = $membership->data;
        }

        if (is_object($membership)) {
            $membership = (array) $membership;
        }

        if (! is_array($membership)) {
            return null;
        }

        $id = $membership['id'] ?? null;
        $name = $membership['membership_name'] ?? ($membership['name'] ?? null);
        $price = $membership['price'] ?? null;

        if ($id === null || $name === null || $price === null) {
            return null;
        }

        return $id.'.'.$name.'.'.$price;
    }
}
