<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeetOurTeam extends Model
{
    protected $table ='meet_our_teams';
    protected $fillable = [
        'heading','description'
    ];
}
