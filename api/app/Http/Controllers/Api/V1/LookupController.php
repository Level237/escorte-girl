<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\LookupResource;
use App\Models\AnnouncementCategory;
use App\Models\Question;
use App\Models\Service;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class LookupController extends Controller
{
    public function categories(): AnonymousResourceCollection
    {
        $rows = AnnouncementCategory::query()
            ->orderBy('title')
            ->get(['id', 'title'])
            ->map(fn ($row) => ['id' => $row->id, 'name' => $row->title]);

        return LookupResource::collection($rows);
    }

    public function ethnicities(): AnonymousResourceCollection
    {
        return $this->fromTable('ethnics', 'ethnic_name');
    }

    public function skinColors(): AnonymousResourceCollection
    {
        return $this->fromTable('skin_colors', 'skin_color_name');
    }

    public function shapes(): AnonymousResourceCollection
    {
        return $this->fromTable('shapes', 'shape_name');
    }

    public function heights(): AnonymousResourceCollection
    {
        return $this->fromTable('heights', 'height_name');
    }

    public function weights(): AnonymousResourceCollection
    {
        return $this->fromTable('weights', 'weight_name');
    }

    public function services(): AnonymousResourceCollection
    {
        $rows = Service::query()
            ->orderBy('service_name')
            ->get(['id', 'service_name'])
            ->map(fn ($row) => ['id' => $row->id, 'name' => $row->service_name]);

        return LookupResource::collection($rows);
    }

    public function questions(): AnonymousResourceCollection
    {
        $rows = Question::query()
            ->orderBy('question_name')
            ->get(['id', 'question_name'])
            ->map(fn ($row) => ['id' => $row->id, 'name' => $row->question_name]);

        return LookupResource::collection($rows);
    }

    private function fromTable(string $table, string $nameColumn): AnonymousResourceCollection
    {
        if (! Schema::hasTable($table)) {
            return LookupResource::collection(collect());
        }

        $rows = DB::table($table)
            ->orderBy($nameColumn)
            ->get(['id', $nameColumn])
            ->map(fn ($row) => ['id' => $row->id, 'name' => $row->{$nameColumn}]);

        return LookupResource::collection($rows);
    }
}
