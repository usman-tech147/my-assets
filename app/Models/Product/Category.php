<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'product-categories';
    protected $fillable = ['name'];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class,'category_fk_id');
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
