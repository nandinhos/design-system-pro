<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Token extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'design_system_id',
        'category',
        'path',
        'value',
        'type',
        'is_global',
    ];

    protected function casts(): array
    {
        return [
            'is_global' => 'boolean',
        ];
    }

    public function designSystem(): BelongsTo
    {
        return $this->belongsTo(DesignSystem::class);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<self>  $query
     * @return \Illuminate\Database\Eloquent\Builder<self>
     */
    public function scopeByCategory($query, string $category): mixed
    {
        return $query->where('category', $category);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<self>  $query
     * @return \Illuminate\Database\Eloquent\Builder<self>
     */
    public function scopeGlobal($query): mixed
    {
        return $query->where('is_global', true);
    }
}
