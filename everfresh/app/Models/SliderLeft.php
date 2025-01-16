<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderLeft extends Model
{
    protected $table = 'sliderlefts';
    protected $fillable = [
        'heading',
        'day1',
        'day2',
        'title',
        'phone',
    ];
}
