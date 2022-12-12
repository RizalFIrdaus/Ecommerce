<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $table = 'province';

    protected $fillable = [
        'title',
        'slug',
        'vector',
        'image',
        'description',
        'kebudayaan',
        'makanan',
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'province_id', 'id');
    }
    public function _product()
    {
        return $this->belongsTo(Product::class, 'id', 'province_id');
    }
}
