<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BogAdd extends Model
{
    protected $table = 'bog_adds';
    protected $fillable = [
        'image',
        'date',
        'profile',
        'heading',
        'description1',
        'description2',
        'description3',
        'status',
    ];
}
