<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuditLog extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'design_system_id',
        'action',
        'payload',
        'created_by',
    ];

    protected function casts(): array
    {
        return [
            'payload' => 'array',
        ];
    }

    public function designSystem(): BelongsTo
    {
        return $this->belongsTo(DesignSystem::class);
    }
}
