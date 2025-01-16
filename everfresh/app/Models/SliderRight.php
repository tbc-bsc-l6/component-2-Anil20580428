<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderRight extends Model
{
    protected $table = 'sliderrights';
    protected $fillable = [
        'heading',
        'description',
    ];
}
