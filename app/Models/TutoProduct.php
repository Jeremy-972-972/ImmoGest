<?php

namespace App\Models;

use App\Models\TutoProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TutoProduct extends Model
{
    use HasFactory;
/**
 * Get the user that owns the phone.
 */
public function categorie(): BelongsTo
{
    return $this->belongsTo(TutoProduct::class, 'category_products_id' , 'id');
}
}
