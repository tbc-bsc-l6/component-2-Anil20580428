<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQaddList extends Model
{
    protected $table = 'f_a_qadd_lists';
    protected $fillable = ['heading', 'description', 'status'];
}
