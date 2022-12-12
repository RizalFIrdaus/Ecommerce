<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subsnews extends Model
{
    use HasFactory;

    protected $table = 'subnews';

    protected $fillable = [
        'user_id', 'email', 'active'
    ];
}
