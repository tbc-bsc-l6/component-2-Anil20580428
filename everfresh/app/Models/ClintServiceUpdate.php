<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClintServiceUpdate extends Model
{
    protected $table = 'clint_service_updates';
    protected $fillable = ['shine', 'happy', 'employee', 'branch'];
}
