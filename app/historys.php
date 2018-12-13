<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historys extends Model
{
     protected $fillable = [
      'history_id','parent_name','child_name','deleted_at'
  ];
}
