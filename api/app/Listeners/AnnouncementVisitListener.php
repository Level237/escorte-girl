<?php

namespace App\Listeners;

use App\Events\AnnouncementVisitEvent;
use App\Services\Api\V1\VisitRecorder;

class AnnouncementVisitListener
{
    public function __construct(private VisitRecorder $visits) {}

    public function handle(AnnouncementVisitEvent $event): void
    {
        if (! $event->announcement) {
            return;
        }

        $this->visits->record($event->announcement);
    }
}
