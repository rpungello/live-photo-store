<?php

namespace App\Models;

use Database\Factories\PhotoFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    /** @use HasFactory<PhotoFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'race_id',
        'filename',
        'size',
        'taken_at',
    ];

    /**
     * @return BelongsTo<Race, $this>
     */
    public function race(): BelongsTo
    {
        return $this->belongsTo(Race::class);
    }

    protected function casts(): array
    {
        return [
            'taken_at' => 'datetime',
        ];
    }
}
