<?php

namespace App\Services\Api\V1;

class PhoneNormalizer
{
    public function whatsapp(string $phone): string
    {
        $phone = preg_replace('/\s+/', '', $phone) ?? $phone;
        $first = $phone[0] ?? '';

        if ($first === '6') {
            return '237'.$phone;
        }

        if ($first === '2') {
            return $phone;
        }

        return substr($phone, 1);
    }
}
