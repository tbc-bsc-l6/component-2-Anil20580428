<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurBanner extends Model
{
    protected $table = 'our_banners';
    protected $fillable = [
        'logo',
        'heading',
        'description'
    ];
}
