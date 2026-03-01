<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Export extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'design_system_id',
        'version_id',
        'type',
        'content',
    ];

    public function designSystem(): BelongsTo
    {
        return $this->belongsTo(DesignSystem::class);
    }

    public function version(): BelongsTo
    {
        return $this->belongsTo(DesignSystemVersion::class, 'version_id');
    }
}
