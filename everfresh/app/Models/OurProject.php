<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurProject extends Model
{
    protected $table = 'our_projects';
    protected $fillable=[
        'title','description',
    ];
}
