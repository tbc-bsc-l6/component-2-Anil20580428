<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceBook extends Model
{
    protected $table = 'service_books';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'postcode',
        'address',
        'city',
        'choose',
        'comment',
        'status',
    ];
}
