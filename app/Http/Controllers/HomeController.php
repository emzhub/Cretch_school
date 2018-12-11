<?php

namespace App\Http\Controllers;
use Hash;
use App\User;
use App\user_profiles;
use App\user_childs;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $child = user_childs::where('status', '0')->get();
      $send=user_childs::getNumberOfcheckoutchild();
        $se=user_childs::getNumberOfcheckchild();
        $sef=user_childs::getNumberOfparent();
        $ser=user_childs::getNumberOfchilds();
       return view('home',compact('child',$child,'send',$send,'se',$se,'sef',$sef,'ser',$ser));
     //    return view('home');
    }

  public function home()
    {
         $child = user_childs::where('status', '0')->get();
       return view('welcome',compact('child',$child));
   // return view('welcome');
}
public function show_parent()
    {
       return view('ControlRoom.Add_Parent');
    }
    public function show_child()
    {
         $members = user_profiles::all();
         return view('ControlRoom.Add_Child',compact('members',$members)); 
    }
public function show_mail()
{
     $members = user_profiles::all();
         return view('ControlRoom.Add_mail',compact('members',$members)); 
}
}
