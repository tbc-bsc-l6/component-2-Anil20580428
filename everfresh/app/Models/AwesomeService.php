<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AwesomeService extends Model
{
    protected $table = 'awesome_services';
    protected $fillable = [
        'title',
        'description',
        'status'
    ];
}
