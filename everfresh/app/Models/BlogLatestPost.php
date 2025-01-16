<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogLatestPost extends Model
{
    protected $table = 'blog_latest_posts';
    protected $fillable = ['image','description','date','status'];
}
