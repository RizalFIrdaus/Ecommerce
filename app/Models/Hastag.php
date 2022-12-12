<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hastag extends Model
{
    use HasFactory;

    protected $table = 'hastag';
    protected $fillable = [
        'name',
        'slug',
        'hastag',
        'status'
    ];
    public function productHastag()
    {
        return $this->hasMany(ProductHastags::class, 'hastags_id', 'id');
    }
    public function _productHastag()
    {
        return $this->belongsTo(ProductHastags::class, 'id', 'hastags_id');
    }
}
