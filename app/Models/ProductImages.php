<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    use HasFactory;

    protected $table = "product_images";
    protected $fillable = [
        'product_id',
        'image',
    ];

    public function proimage()
    {
        return $this->belongsTo(Category::class, 'product_id', 'id');
    }
}
