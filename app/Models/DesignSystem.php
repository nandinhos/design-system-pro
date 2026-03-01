<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DesignSystem extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'current_version_id',
        'is_active',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }

    public function currentVersion(): BelongsTo
    {
        return $this->belongsTo(DesignSystemVersion::class, 'current_version_id');
    }

    public function versions(): HasMany
    {
        return $this->hasMany(DesignSystemVersion::class);
    }

    public function tokens(): HasMany
    {
        return $this->hasMany(Token::class);
    }

    public function themes(): HasMany
    {
        return $this->hasMany(Theme::class);
    }

    public function componentInstances(): HasMany
    {
        return $this->hasMany(ComponentInstance::class);
    }

    public function auditLogs(): HasMany
    {
        return $this->hasMany(AuditLog::class);
    }

    public function exports(): HasMany
    {
        return $this->hasMany(Export::class);
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
