<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\SubCategory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image'];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function subcategory()
    {
        return $this->hasMany(SubCategory::class);
    }
}
