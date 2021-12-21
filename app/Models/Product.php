<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    const STATUS_AVAILABLE = 'Available';
    const STATUS_SOLD_OUT = 'Sold Out';
    const STATUS_PAUSED = 'Paused';

    public function getPriceFormattedAttribute()
    {
        return 'R$'. number_format($this->price, 2, ',', '.');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
