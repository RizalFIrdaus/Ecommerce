<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productFlavor extends Model
{
    use HasFactory;
    protected $table = 'product_flavor';
    protected $fillable = [
        'product_id',
        'flavor_id',
        'price',
        'info',
        'description',
        'composition',
        'weight',
    ];
    public function flavor()
    {
        return $this->belongsTo(Flavor::class, 'flavor_id', 'id');
    }
}
