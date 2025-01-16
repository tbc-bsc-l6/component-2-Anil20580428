<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMembers extends Model
{
    protected $table = 'team_member';
    protected $fillable = ['name', 'image', 'position', 'status'];
}
