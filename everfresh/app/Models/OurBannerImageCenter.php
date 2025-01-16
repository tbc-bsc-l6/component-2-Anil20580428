<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurBannerImageCenter extends Model
{
    protected $table = 'our_banner_imagecenters';
    protected $fillable = [
        'logo',
        'name',
        'description',
        'position',
        'status'
    ];
}
