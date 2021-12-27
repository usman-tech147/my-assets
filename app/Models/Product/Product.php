<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * @method static Builder where($key, $operator, $value=null)
 * */

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['subcategory_fk_id','fabric_fk_id','quality_fk_id','name','price',
        'description','sale_date_before','image','status'];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategory_fk_id');
    }
    public function fabric()
    {
        return $this->belongsTo(Fabric::class,'fabric_fk_id');
    }

    public function quality()
    {
        return $this->belongsTo(Quality::class,'quality_fk_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_color',
            'product_fk_id','color_fk_id')
            ->withTimestamps()
            ->withPivot(['in_stock']);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class,'product_size',
            'product_fk_id','size_fk_id')
            ->withTimestamps();
    }

}
