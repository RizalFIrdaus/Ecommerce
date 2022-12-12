<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $table = 'variant';
    protected $fillable = [
        'product_id', 'price', 'variant_name', 'attribute_id'
    ];

    public function Attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id', 'id');
    }
}
