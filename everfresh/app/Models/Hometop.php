<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hometop extends Model
{
    protected $table = 'hometops';
    protected $fillable = [
        'logo',
        'number',
        'location',
    ];
}
