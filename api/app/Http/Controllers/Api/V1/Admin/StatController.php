<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Payment;
use App\Models\Town;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class StatController extends Controller
{
    public function users(): JsonResponse
    {
        $current = User::query()->count();
        $previous = User::query()
            ->whereNull('suspended_at')
            ->whereBetween('created_at', [Carbon::now()->subDays(60), Carbon::now()->subDays(31)])
            ->count();

        return response()->json(['data' => $this->trend($current, $previous)]);
    }

    public function escorts(): JsonResponse
    {
        return response()->json(['data' => $this->window(User::query()->where('role_id', 2))]);
    }

    public function income(): JsonResponse
    {
        [$from, $to, $previousFrom, $previousTo] = $this->ranges();
        $current = Payment::query()->whereBetween('created_at', [$from, $to]);
        $previous = Payment::query()->whereBetween('created_at', [$previousFrom, $previousTo])->count();

        return response()->json([
            'data' => $this->trend($current->count(), $previous) + [
                'total' => $current->sum('price'),
            ],
        ]);
    }

    public function announcements(): JsonResponse
    {
        return response()->json(['data' => $this->window(Announcement::query())]);
    }

    public function currentWeek(): JsonResponse
    {
        $total = Payment::query()
            ->where('created_at', '>', Carbon::now()->startOfWeek())
            ->where('created_at', '<', Carbon::now()->endOfWeek())
            ->sum('price');

        return response()->json(['data' => ['total' => $total]]);
    }

    public function previousWeek(): JsonResponse
    {
        $total = Payment::query()
            ->where('created_at', '>', Carbon::now()->startOfWeek()->subDays(7))
            ->where('created_at', '<', Carbon::now()->startOfWeek()->subDays(1))
            ->sum('price');

        return response()->json(['data' => ['total' => $total]]);
    }

    public function towns(): JsonResponse
    {
        $towns = Town::query()
            ->withCount(['ads as count' => fn ($query) => $query->where('status', 1)])
            ->orderByDesc('count')
            ->limit(5)
            ->get(['id', 'town_name'])
            ->map(fn (Town $town) => [
                'id' => $town->id,
                'town_name' => $town->town_name,
                'count' => $town->count,
            ]);

        return response()->json(['data' => $towns]);
    }

    private function window($query): array
    {
        [$from, $to, $previousFrom, $previousTo] = $this->ranges();

        return $this->trend(
            (clone $query)->whereBetween('created_at', [$from, $to])->count(),
            (clone $query)->whereBetween('created_at', [$previousFrom, $previousTo])->count()
        );
    }

    private function ranges(): array
    {
        return [
            Carbon::now()->subDays(30),
            Carbon::now(),
            Carbon::now()->subDays(60),
            Carbon::now()->subDays(31),
        ];
    }

    private function trend(int $current, int $previous): array
    {
        if ($previous < $current) {
            $percent = $previous > 0 ? ($previous * 100) / max($current - $previous, 1) : 100;
        } else {
            $diff = $previous - $current;
            $percent = $diff !== 0 ? ($previous * 100) / $diff : 0;
        }

        return [
            'monthly' => $current,
            'percent' => number_format($percent),
        ];
    }
}
