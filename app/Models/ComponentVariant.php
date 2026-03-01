<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ComponentVariant extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'component_id',
        'name',
        'schema',
    ];

    protected function casts(): array
    {
        return [
            'schema' => 'array',
        ];
    }

    public function component(): BelongsTo
    {
        return $this->belongsTo(Component::class);
    }
}
