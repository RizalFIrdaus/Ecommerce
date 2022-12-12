<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHastags extends Model
{
    use HasFactory;

    protected $table = 'product_hastags';
    protected $fillable = [
        'product_id',
        'hastags_id',
        'hastag_status',
    ];

    public function hastag()
    {
        return $this->belongsTo(Hastag::class, 'hastags_id', 'id');
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
