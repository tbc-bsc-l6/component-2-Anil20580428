<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAboutLeftItem extends Model
{
    protected $table = 'homeaboutleftitems';
    protected $fillable = [
        'title',
        'description',
         'logo'
    ];
}
