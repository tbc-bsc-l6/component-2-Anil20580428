<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TextWidget extends Model
{
    protected $table = 'text_widgets';
    protected $fillable = ['title','description'];
}
