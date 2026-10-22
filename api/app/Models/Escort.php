<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Escort extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'quarter_id',
        'escort_name',
        'whatsapp_number',
        'sexuality',
        'genre',
        'age',
        'description',
        'shape_id',
        'height_id',
        'weight_id',
        'skin_color_id',
        'ethnic_id',
        'photo',
        'isCompleted',
        'isVerified',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function quarter(): BelongsTo
    {
        return $this->belongsTo(Quarter::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'escort_service');
    }

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'escort_image');
    }
}
