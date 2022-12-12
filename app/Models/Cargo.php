<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargo';
    protected $fillable = [
        'zona_id',
        'name',
        'min_weight',
        'max_weight',
        'price',

    ];
}
