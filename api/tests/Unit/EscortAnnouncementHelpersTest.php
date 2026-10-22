<?php

namespace Tests\Unit;

use App\Services\Api\V1\PhoneNormalizer;
use App\Services\Api\V1\Slug;
use PHPUnit\Framework\TestCase;

class EscortAnnouncementHelpersTest extends TestCase
{
    public function test_whatsapp_numbers_are_normalized(): void
    {
        $phones = new PhoneNormalizer;

        $this->assertSame('237699000000', $phones->whatsapp('699000000'));
        $this->assertSame('237699000000', $phones->whatsapp('237699000000'));
        $this->assertSame('699000000', $phones->whatsapp('+699000000'));
    }

    public function test_slug_strips_accents_and_spaces(): void
    {
        $this->assertSame('belle-annonce', (new Slug)->from('Belle annonce'));
    }
}
