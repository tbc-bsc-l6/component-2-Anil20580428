<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurBestPlan extends Model
{
    protected $table = 'our_best_plans';
    protected $fillable = [
        'heading',
        'description'
    ];
}
