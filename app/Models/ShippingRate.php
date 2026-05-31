<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_label',
        'service_type',
        'price_from',
        'price_text',
        'note',
        'min_weight_kg',
        'is_active',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'price_from' => 'integer',
            'min_weight_kg' => 'decimal:2',
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }
}
