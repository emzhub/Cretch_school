<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Mail\MailMember;
use App\Mail\MailMtoken;
use Illuminate\Support\Facades\Mail;
use App\user_childs;
use App\historys;
use App\User;
use App\user_profiles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
  public function __construct()
 {
     $this->middleware('auth');
 }
 public function admin()
 {
     return view('admin');
 }

 public function show_Console()
 {
     return view('ControlRoom.Add_Console');
 }
 public function show_Games()
 {
     return view('ControlRoom.Add_Games');
 }
 public function show_Team()
 {
     return view('ControlRoom.Add_Team');
 }
    public function sendEmail(Request $request){

try {

    foreach ($request->to as $to){
          Mail::to($to)//$request->to)
              //->cc($request->cc)
              //->bcc($request->bcc)
              ->send(new MailMember($request));
            }


   // Mail::send(...);
return redirect()
                ->back()
                ->with('status','Mail Successfully Sent!');
} catch (Exception $ex) {
    // Debug via $ex->getMessage();
   return redirect()
                ->back()
                ->with('errors',$ex->getMessage());
}


    }

       public function gettoken(Request $request)
    {
        //
      $number = 1;
       $id = $request->id;
     //  $data = array('status'=>$number,'pickup_token'=>000000);

       foreach (user_childs::where('reg_id',$id)->get() as $user) {
 $number =  mt_rand(13, rand(100, 99999990)); // better than rand()

    // call the same function if the barcode exists already
    $barcodeNumberExists=user_childs::where('pickup_token',$number)->exists();

    if ($barcodeNumberExists > 0) {
        return gettoken();
    }else{

$data = array( 'email' => $user->email, 'class' => $user->class, 'fname' => $user->full_name, 'first_name' => config('app.name'), 'from' => 'noreply@cretch-school.com', 'from_name' => 'Cretch-School','mee' => $number);

Mail::send( 'mails.member_token', $data, function($message) use ($data)
{
    $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject( 'Welcome!' );

});


    $user->pickup_token = $number;
    $user->save();
}
       }
// return redirect()->back()->with('status', "Token Generated For All .....");
        //return view('branch.all');
         return response()->json(['success' => true,]);
    }


    function generatetokeNumber() {
     // foreach(user_childs::all() as $user) {
      foreach (user_childs::where('pickup_token', '0')->get() as $user) {
    // $to=$user->parent_id;

   // foreach (user_profiles::where('user_id',$to)->get() as $members){

// dd($to);
// dd($members->email);
        # code...
    $number =  mt_rand(13, rand(100, 99999990)); // better than rand()

    // call the same function if the barcode exists already
    $barcodeNumberExists=user_childs::where('pickup_token',$number)->exists();

    if ($barcodeNumberExists > 0) {
        return generatetokeNumber();
    }else{
    // Mail::to($to)
    //           ->send(new MailMtoken($number));

$data = array( 'email' => $user->email, 'class' => $user->class, 'fname' => $user->full_name, 'from' => 'noreply@cretch-school.com', 'from_name' => 'Cretch-School','mee' => $number);

Mail::send( 'mails.member_token', $data, function($message) use ($data)
{
    $message->to( $data['email'] )->from( $data['from'], $data['fname'] )->subject( 'Welcome!' );

});


    $user->pickup_token = $number;
    $user->save();
}
}
//}
    // otherwise, it's valid and can be used
 return redirect()->back()->with('status', "Token Generated For All .....");
}

// function barcodeNumberExists($number) {
//     // query the database and return a boolean
//     // for instance, it might look like this in Laravel
//     return user_childs::where('pickup_token',$number)->exists();
// }


public function generatePICKUP(Request $request){
   $number = 0;
   foreach (user_childs::all() as $user) {
 $data = array('status'=>$number);
 $user->status = $number;
    $user->save();

}
 $message ='Post has been successfully added!';
      return redirect()->back()->with('status', $message);
}

       public function destroy(Request $request)
    {
        //
      $number = 1;
       $id = $request->id;
      // dd($id);
       $data = array('status'=>$number,'pickup_token'=>000000);
$idg=mt_rand(13, rand(100, 99999990)); // better than rand()
    $barcodeNumberExists = historys::where('history_id', $idg)->exists();
          if ($barcodeNumberExists > 0) {
        return destroy();
    }else{
        $ch=DB::table('user_childs')->where('reg_id', $id)->first();
  // dd($ch);
        $pid=$ch->parent_id;
      $sd= User::where('user_id',$pid)->first();
      if($ch->pickup_token!=0){
        historys::create(array(
                    'history_id' => $id,
                    'parent_name' => $sd->name,
                      'child_name' => $ch->full_name
                            ));
                            // Update
                             //  user_childs::updateData($id, $data);
                           DB::table('user_childs')->where('reg_id', $id)->update($data);
      }

           }


        //DB::delete('delete * from')

        //return \Gate::denies('view-branches', $this->user) ? redirect()->route('dashboard') :
            //$branch->delete();
           // view('branch.all',compact('users'));
    //    $user = \Auth::user();

        //$sql = 'DELETE * from users WHERE id = "?"';
     //   DB::table('users')->where('id', '=', $id)->delete();
        //DB::delete($sql,$id);


        //return view('branch.all');
         return response()->json(['success' => true,]);
    }
public function save_add_team(Request $request)
{
    #code


     foreach ($request->catname as $cat_name)
        {
          $post = team::create(array(
           'team_id' => mt_rand(13, rand(100, 99999990)),
           'name' => $cat_name
           // 'author' => Auth::user()->id
       ));
        }
        $message ='Post has been successfully added!';
      return redirect()->back()->with('status', $message);
}
public function save_add_game(Request $request)
{
       $this->validate($request, [
            'fullname' => 'required|string|max:255',
            'Parent_id' => 'required|numeric|min:0',
            'dob' => 'required|string|max:255',
           'class' => 'required|string|max:255',
               'gender' => 'required|string|max:40',

        ]);
      $useremail= DB::table('user_profiles')->where('user_id',$request->get('Parent_id'))->first();
        $fullname=$request->get('fullname');
        $dob=$request->get('dob');
        $class=$request->get('class');
        $Parent_id=$request->get('Parent_id');
        $gender=$request->get('gender');
        $Parent_email=$useremail->email;


         $user_id = mt_rand(13, rand(100, 99999990));
                                           $exist =DB::table('user_childs')->where('reg_id',$user_id)->first();
                                             if(!$exist){

                                          user_childs::create(array(
                                                'reg_id' => $user_id,
                                                'parent_id' => $Parent_id,
                                                  'email' => $Parent_email,
                                                 'class' => $class,
                                                 'full_name' => $fullname,
                                                 'DOB' =>$dob,
                                                 'gender' =>$gender,
                                                 'pickup_token' => 0,
                                                 'status' => 0
                                           ));
                                         }
        $message ='Post has been successfully added!';
      return redirect()->back()->with('status', $message);
}
//
// public function create_sub_industry()
// {
//   $items = industries::all(['ind_id', 'name']);
//    return view('ControlRoom.sub_industry', compact('items',$items));
// }
//
//
public function save_add_console(Request $request)
{


        $this->validate($request, [
            'fullname' => 'required|string|max:255',
            // 'username' => 'required|string|max:40',
            'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:6|confirmed',
            'address' => 'required|string|max:255',
           'phone' => 'required|numeric|min:0',
           'Occupation' => 'required|string|max:255',
               'gender' => 'required|string|max:40',

        ]);
        $fullname=$request->get('fullname');
        $email=$request->get('email');
        $phone=$request->get('phone');
        $address=$request->get('address');
        $gender=$request->get('gender');
        $Occupation=$request->get('Occupation');
         $user_id = mt_rand(13, rand(100, 99999990));
                                           $exist =DB::table('users')->where('user_id',$user_id)->first();
                                             if(!$exist){
                                              $password=111111;
                                       User::create(array(
                                                'name' => $fullname,
                                                'user_id' => $user_id,
                                                'email' => $email,
                                                 'phone' => $phone,
                                                'username' => $fullname.$user_id,
                                                'password' => Hash::make($password),
                                                 'ip_address' =>  request()->ip(),
                                                 'isadmin' => User::DEFAULT_TYPE
                                            ));

                                           user_profiles::create(array(
                                                'user_id' => $user_id,
                                                'email' => $email,
                                                 'phone_number' => $phone,
                                                 'full_name' => $fullname,
                                                 'address' =>$address,
                                                 'gender' =>$gender,
                                                 'occupation' => $Occupation
                                           ));

                                           $data = array( 'email' => $email,  'password' => $password, 'username' => $fullname.$user_id, 'first_name' => config('app.name'), 'from' => 'noreply@cretch-school.com', 'from_name' => 'Cretch-School','mee' => $user_id);

Mail::send( 'mails.member_welcome_message', $data, function($message) use ($data)
{
    $message->to( $data['email'] )->from( $data['from'],  $data['first_name'] )->subject( 'Welcome!' );

});



                                         }
    #code
   //         foreach ($request->fullname as $fullname)
   //      {
   //         foreach ($request->address as $address)
   //            {
   //                   foreach ($request->phone as $phone)
   //                {

   //                       foreach ($request->Occupation as $Occupation)
   //                    {
   //                         foreach ($request->email as $email)
   //                    {
   //                         foreach ($request->gender as $gender)
   //                    {

   //                  }
   //                  //else{

   //                 // }

   //             }
   //               }
   //        }
   //           }
   //   }
   // }
        $message ='Post has been successfully added!';
      return redirect()->back()->with('status', $message);
}



}
