<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImages;
use App\Models\ProductHastags;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'category_id',
        'province_id',
        'name',
        'slug',
        'brand',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'weight',
        'trending',
        'status',
        'meta_tittle',
        'meta_keyword',
        'meta_description',
        'sold',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function brands()
    {
        return $this->belongsTo(Brands::class, 'brand', 'name');
    }
    public function ProductImages()
    {
        return $this->hasMany(ProductImages::class, 'product_id', 'id');
    }
    public function _ProductImages()
    {
        return $this->belongsTo(ProductImages::class, 'id', 'product_id');
    }
    public function Hasteg()
    {
        return $this->hasMany(Hastag::class, 'product_id', 'id');
    }
    public function _Hasteg()
    {
        return $this->belongsTo(Hastag::class, 'id', 'product_id');
    }
    public function ProductHastags()
    {
        return $this->hasMany(ProductHastags::class, 'product_id', 'id');
    }
    public function _ProductHastags()
    {
        return $this->belongsTo(ProductHastags::class, 'id', 'product_id');
    }
    public function provice()
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
    public function wishlist()
    {
        return $this->belongsTo(Wishlists::class, 'id', 'product_id');
    }
    public function productColor()
    {
        return $this->hasMany(productColor::class, 'product_id', 'id');
    }
    public function productFlavor()
    {
        return $this->hasMany(productFlavor::class, 'product_id', 'id');
    }
}
