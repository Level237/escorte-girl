<?php

namespace App\Services\Api\V1;

use App\Models\Announcement;
use App\Models\Announcement_visit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitRecorder
{
    public const WINDOW_HOURS = 24;

    public function record(Announcement $announcement, ?string $visitorHash = null, ?Request $request = null): bool
    {
        $request ??= request();
        $hash = $this->normalizeHash($visitorHash) ?? $this->fingerprint(
            $request->ip(),
            (string) $request->userAgent()
        );

        $ownerId = Auth::guard('api')->id();
        if ($ownerId && (int) $ownerId === (int) $announcement->user_id) {
            return false;
        }

        $alreadyCounted = Announcement_visit::query()
            ->where('announcement_id', $announcement->id)
            ->where('visitor_hash', $hash)
            ->where('created_at', '>=', Carbon::now()->subHours(self::WINDOW_HOURS))
            ->exists();

        if ($alreadyCounted) {
            return false;
        }

        Announcement_visit::query()->create([
            'announcement_id' => $announcement->id,
            'visitor_hash' => $hash,
        ]);

        return true;
    }

    public function fingerprint(?string $ip, ?string $userAgent): string
    {
        return hash('sha256', trim((string) $ip).'|'.strtolower(trim((string) $userAgent)));
    }

    private function normalizeHash(?string $hash): ?string
    {
        if (! is_string($hash) || $hash === '') {
            return null;
        }

        $hash = strtolower(trim($hash));

        return preg_match('/^[a-f0-9]{64}$/', $hash) ? $hash : null;
    }
}
