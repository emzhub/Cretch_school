<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class user_childs extends Model
{
   protected $fillable = [
      'reg_id','parent_id','email','full_name','class','DOB','gender','pickup_token','status'
  ];

    protected $guarded = ['id'];

 public static function getNumberOfcheckchild(){
$us= 1;
  return DB::table('user_childs')->where('status',$us)->get()->count();


        // return user_childs::where('status', '1')->get()->count();
    }


public static function getNumberOfMembers($branch_id){
 // return DB::table('users')->where('user_id', $branch_id)->first();
$sd= User::where('user_id', $branch_id)->first();
        return $sd->name;
    }

    public static function getNumberOfcheckoutchild(){
$us= 0;
        // $uu= user_childs::where('status', '0')->get()->count();
  return DB::table('user_childs')->where('status',$us)->get()->count();
   //   if(!$exist){
   // 	return 0;
   // }
   // else{
   // 	return $exist;
   // }

    }
    public static function getNumberOfparent(){

        return User::where('isadmin', 'default')->get()->count();
    }
        public static function getNumberOfchilds(){

        return user_childs::get()->count();
    }

 public static function updateData($id,$data){
    DB::table('user_childs')
      ->where('reg_id', $id)
      ->update($data);
  }
    

   public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
