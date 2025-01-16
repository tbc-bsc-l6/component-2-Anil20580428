<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    protected $table = 'user_contacts';
    protected $fillable = ['firstName', 'lastName', 'email', 'comment', 'status'];
}
