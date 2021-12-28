<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = 'product-subcategories';
    protected $fillable = ['category_id', 'name'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_fk_id');
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
