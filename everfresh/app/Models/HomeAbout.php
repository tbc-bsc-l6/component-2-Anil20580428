<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    protected $table = 'homeabouts';
    protected $fillable = [
        'heading',
        'description',
    ];
}
