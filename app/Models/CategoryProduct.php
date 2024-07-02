<?php

namespace App\Models;

use App\Models\TutoProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryProduct extends Model
{
    use HasFactory;
    
 /**
  * Get all of the products for the TutoProduct
  *
  * @return \Illuminate\Database\Eloquent\Relations\HasMany
  */
 public function products(): HasMany
 {
     return $this->hasMany(TutoProduct::class, 'category_products_id' , 'id');
 }

}
