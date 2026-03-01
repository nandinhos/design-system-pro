<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Component extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'base_schema',
        'preview_template',
        'blade_path',
        'version',
        'is_core',
    ];

    protected function casts(): array
    {
        return [
            'base_schema' => 'array',
            'is_core' => 'boolean',
        ];
    }

    public function variants(): HasMany
    {
        return $this->hasMany(ComponentVariant::class);
    }

    public function instances(): HasMany
    {
        return $this->hasMany(ComponentInstance::class);
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder<self>  $query
     * @return \Illuminate\Database\Eloquent\Builder<self>
     */
    public function scopeCore($query): mixed
    {
        return $query->where('is_core', true);
    }
}
