<?php

namespace App\Models\Product;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


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
        return $this->belongsTo(Fabric::class,'fabric_fk_id')->withDefault([
            'name' => 'N/A'
        ]);
    }

    public function quality()
    {
        return $this->belongsTo(Quality::class,'quality_fk_id')->withDefault([
            'name' => 'N/A'
        ]);
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

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getImageAttribute($value)
    {
        return (is_null($value) || !(File::exists('images/'.$value))) ? 'nophoto.png' : $value;
    }

    public function getPriceAttribute($value)
    {
        return '$'.number_format($value,2,'.','');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->toFormattedDateString();
    }

}
