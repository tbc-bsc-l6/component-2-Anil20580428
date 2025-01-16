<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogAuthor extends Model
{
    protected $table = 'blog_authors';
    protected $fillable = ['profile','title1','title2','description'];
}
