<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homeslider extends Model
{
    protected $table = 'homesliders';
    protected $fillable = [
        'heading1',
        'heading2',
        'description',
        'sliderimage',
    ];
}
