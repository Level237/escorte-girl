<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('announcement_visits', function (Blueprint $table) {
            $table->string('visitor_hash', 64)->nullable()->after('announcement_id');
            $table->index(['announcement_id', 'visitor_hash', 'created_at'], 'announcement_visits_unique_window');
        });
    }

    public function down(): void
    {
        Schema::table('announcement_visits', function (Blueprint $table) {
            $table->dropIndex('announcement_visits_unique_window');
            $table->dropColumn('visitor_hash');
        });
    }
};
