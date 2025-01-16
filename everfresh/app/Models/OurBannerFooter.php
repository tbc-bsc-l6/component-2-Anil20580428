<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurBannerFooter extends Model
{
    protected $table = 'our_banner_footers';
    protected $fillable = ['logo','description'];
}
