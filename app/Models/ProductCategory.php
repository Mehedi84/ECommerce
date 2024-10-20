<?php

namespace App\Models;

use App\Models\ProductSubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function ProductSubCategory()
    {
        return $this->hasMany(ProductSubCategory::class);
    }
}