<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_profiles extends Model
{
    protected $fillable = [
        'user_id', 'full_name', 'address', 'email', 'phone_number','gender','occupation'
    ];


   public function getFullname(){

        return "$this->full_name";

    }

}
