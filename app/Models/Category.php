<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'image',

    ];


    public function Product()
    {
        return $this->belongsTo(Product::class, 'id', 'category_id');
    }
    public function Products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    public function brand()
    {
        return $this->hasMany(Brands::class, 'category_id', 'id');
    }
}
