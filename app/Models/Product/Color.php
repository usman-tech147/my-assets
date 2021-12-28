<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;


    protected $fillable = ['name'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_color',
            'color_fk_id','product_fk_id')
            ->withTimestamps()
            ->withPivot(['in_stock']);
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }
}
