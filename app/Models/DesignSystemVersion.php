<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DesignSystemVersion extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'design_system_id',
        'version',
        'changelog',
        'snapshot',
        'is_published',
    ];

    protected function casts(): array
    {
        return [
            'snapshot' => 'array',
            'is_published' => 'boolean',
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
    public function scopePublished($query): mixed
    {
        return $query->where('is_published', true);
    }
}
