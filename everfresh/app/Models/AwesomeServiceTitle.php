<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AwesomeServiceTitle extends Model
{
    protected $table = 'awesome_service_titles';
    protected $fillable = ['heading', 'description'];
}
