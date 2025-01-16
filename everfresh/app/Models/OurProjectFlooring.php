<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurProjectFlooring extends Model
{
    protected $table = 'our_project_floorings';
    protected $fillable = [
        'projectType',
        'title',
        'name',
        'description',
        'date',
        'author',
        'category',
        'website',
        'image',
        'status',
    ];
}
