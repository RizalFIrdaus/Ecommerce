<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';
    protected $fillable = [
        'zona_id',
        'name',
        'code',
    ];

    public function cargo()
    {
        return $this->hasMany(Cargo::class, 'zona_id', 'zona_id');
    }
}
