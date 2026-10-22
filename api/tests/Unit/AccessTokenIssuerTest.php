<?php

namespace Tests\Unit;

use App\Services\Api\V1\AccessTokenIssuer;
use PHPUnit\Framework\TestCase;

class AccessTokenIssuerTest extends TestCase
{
    public function test_role_maps_to_passport_scope(): void
    {
        $issuer = new AccessTokenIssuer;

        $this->assertSame('admin', $issuer->scope(1));
        $this->assertSame('escort', $issuer->scope(2));
        $this->assertSame('customer', $issuer->scope(3));
        $this->assertSame('', $issuer->scope(9));
    }
}
