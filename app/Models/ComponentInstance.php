<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ComponentInstance extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'design_system_id',
        'component_id',
        'identifier',
        'config_json',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'config_json' => 'array',
            'is_active' => 'boolean',
        ];
    }

    public function designSystem(): BelongsTo
    {
        return $this->belongsTo(DesignSystem::class);
    }

    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<self>  $query
     * @return \Illuminate\Database\Eloquent\Builder<self>
     */
    public function scopeActive($query): mixed
    {
        return $query->where('is_active', true);
    }
}
