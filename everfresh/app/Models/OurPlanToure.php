<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OurPlanToure extends Model
{
    protected $table = 'our_plan_toures';
    protected $fillable =[
        'enhancedsecurity','suggestion','work','calling','moving','cleaning','price','planType','cleaning','status'
    ];
}
