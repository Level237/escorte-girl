<?php

namespace Tests\Unit;

use App\Services\Api\V1\PublishedAnnouncementQuery;
use PHPUnit\Framework\TestCase;

class PublishedAnnouncementQueryTest extends TestCase
{
    public function test_subscribe_id_maps_to_tier_name(): void
    {
        $this->assertSame('free', PublishedAnnouncementQuery::tierName(0));
        $this->assertSame('premium', PublishedAnnouncementQuery::tierName(1));
        $this->assertSame('gold', PublishedAnnouncementQuery::tierName(2));
        $this->assertSame('vip', PublishedAnnouncementQuery::tierName(3));
        $this->assertNull(PublishedAnnouncementQuery::tierName(4));
    }
}
