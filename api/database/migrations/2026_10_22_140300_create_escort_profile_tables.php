<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $this->lookup('ethnics', 'ethnic_name');
        $this->lookup('skin_colors', 'skin_color_name');
        $this->lookup('shapes', 'shape_name');
        $this->lookup('heights', 'height_name');
        $this->lookup('weights', 'weight_name');
        $this->lookup('services', 'service_name');

        if (! Schema::hasTable('escorts')) {
            Schema::create('escorts', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
                $table->foreignId('quarter_id')->constrained()->restrictOnDelete();
                $table->string('escort_name');
                $table->string('whatsapp_number');
                $table->string('sexuality');
                $table->string('genre');
                $table->unsignedInteger('age');
                $table->text('description');
                $table->unsignedBigInteger('shape_id');
                $table->unsignedBigInteger('height_id');
                $table->unsignedBigInteger('weight_id');
                $table->unsignedBigInteger('skin_color_id');
                $table->unsignedBigInteger('ethnic_id')->nullable();
                $table->string('photo')->nullable();
                $table->boolean('isCompleted')->default(false);
                $table->boolean('isVerified')->default(false);
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('escort_service')) {
            Schema::create('escort_service', function (Blueprint $table) {
                $table->id();
                $table->foreignId('escort_id')->constrained()->cascadeOnDelete();
                $table->foreignId('service_id')->constrained()->cascadeOnDelete();
                $table->timestamps();
            });
        }

        if (! Schema::hasTable('escort_image')) {
            Schema::create('escort_image', function (Blueprint $table) {
                $table->id();
                $table->foreignId('escort_id')->constrained()->cascadeOnDelete();
                $table->foreignId('image_id')->constrained()->cascadeOnDelete();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('escort_image');
        Schema::dropIfExists('escort_service');
        Schema::dropIfExists('escorts');
    }

    private function lookup(string $table, string $name): void
    {
        if (Schema::hasTable($table)) {
            return;
        }

        Schema::create($table, function (Blueprint $blueprint) use ($name) {
            $blueprint->id();
            $blueprint->string($name);
            $blueprint->timestamps();
        });
    }
};
