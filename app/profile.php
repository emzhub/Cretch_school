<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable = [
        'user_id', 'full_name', 'address', 'email', 'phone_number','gender','occupation'
    ];
}
