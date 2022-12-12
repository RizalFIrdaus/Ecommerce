<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyNow extends Model
{
    use HasFactory;

    protected $table = 'buynow';

    protected $fillable = [
        'user_id', 'product_id', 'quantity', 'note'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
