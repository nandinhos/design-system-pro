<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Theme extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'design_system_id',
        'name',
        'config_json',
        'is_default',
    ];

    protected function casts(): array
    {
        return [
            'config_json' => 'array',
            'is_default' => 'boolean',
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
    public function scopeDefault($query): mixed
    {
        return $query->where('is_default', true);
    }
}
