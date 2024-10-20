<?php

namespace App\Models;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductSubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'product_categories_id'];


    public function ProductCategoryName()
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id', 'id');
    }
}