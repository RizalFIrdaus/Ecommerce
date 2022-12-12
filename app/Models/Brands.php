<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'image',

    ];
    public function Products()
    {
        return $this->hasMany(Product::class, 'brand', 'name');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'name', 'brand');
    }
}
