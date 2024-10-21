<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductChildCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'product_sub_categories_id'];


    public function ProductSubCategoryName()
    {
        return $this->belongsTo(ProductSubCategory::class, 'product_sub_categories_id', 'id');
    }
}