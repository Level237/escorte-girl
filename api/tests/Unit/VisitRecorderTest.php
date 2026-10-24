<?php

namespace Tests\Unit;

use App\Services\Api\V1\VisitRecorder;
use PHPUnit\Framework\TestCase;

class VisitRecorderTest extends TestCase
{
    public function test_fingerprint_is_stable_for_the_same_visitor(): void
    {
        $visits = new VisitRecorder;

        $first = $visits->fingerprint('127.0.0.1', 'Mozilla/5.0');
        $second = $visits->fingerprint('127.0.0.1', 'Mozilla/5.0');

        $this->assertSame($first, $second);
        $this->assertSame(64, strlen($first));
    }

    public function test_fingerprint_changes_when_ip_or_browser_changes(): void
    {
        $visits = new VisitRecorder;

        $this->assertNotSame(
            $visits->fingerprint('127.0.0.1', 'Mozilla/5.0'),
            $visits->fingerprint('10.0.0.2', 'Mozilla/5.0')
        );
        $this->assertNotSame(
            $visits->fingerprint('127.0.0.1', 'Mozilla/5.0'),
            $visits->fingerprint('127.0.0.1', 'Safari')
        );
    }
}
