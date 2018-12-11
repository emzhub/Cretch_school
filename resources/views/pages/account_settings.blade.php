@extends('layouts.site')

@section('title') Account-Settings  @endsection

@section('content')
<!-- Start your project here-->
<br>
<br>

<section>
<br>
<br><br>
<br>
 <!--Carousel Wrapper-->
<!--/.Carousel Wrapper-->
<!--/.Carousel Wrapper-->

   <!-- Start your project here-->
   <br>
   <div class="container well">
  <div class="row">
           <div class="col-md-6 col-md-offset-3"  >
                @if (session('status3'))

                    <div class="alert alert-success">
                        {{ session('status3') }}
                    </div>
                @endif
               
            </div>
  <br>
   <div class="col-md-9">
    <br>
    <br>
    <br>
       <form id="" role="form"  method="POST" action="{{route('store_settings')}}">
                        @csrf
        <!--Table-->
<!--Table-->
<div class="table-responsive">
<!--Table-->
<table class="table">

   <!--Table head-->

   <!--Table head-->

   <!--Table body-->
        @foreach($exist as $theme)
   <tbody>
      
       <tr>
           <td>

               <h6>Fullname</h6>
               <br>
               <p>{{ Auth::user()->name }}</p>
           </td>
           <td><h6>Username</h6>
           <br>
               <p>{{ Auth::user()->username }}</p>
           </td>
       </tr>
       <tr>
           <td><h6>City</h6>
           <br>
           <input type="text" id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $theme->city }}">
            @if ($errors->has('city'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
           </td>
           <td><h6>State/Province</h6>
           <br>
           <input type="text" id="state" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $theme->state }}">
            @if ($errors->has('state'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
           </td>
       </tr>
       <tr>
          <td><h6>Zip/Postal code</h6>
           <br>
           <input type="text" id="zip" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" value="{{ $theme->zip }}">
            @if ($errors->has('zip'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                @endif
           </td>
            <td><h6>Country</h6>
           <br>
             <input type="text" id="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ $theme->country}}">
              @if ($errors->has('country'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
           </td>
       </tr>
       <tr>
           <td><h6>Gender</h6>
           <br>
           <select  class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender">
<option value="" disabled selected>Select Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>

           </select>
             @if ($errors->has('gender'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
           </td>
           <td>
           <h6>XBOX LIVE GAMERTAG</h6>
           <br>
           <input type="text"  id="xbox_name" class="form-control{{ $errors->has('xbox_name') ? ' is-invalid' : '' }}" name="xbox_name" value="{{ $theme->xbox_name }}">
            @if ($errors->has('xbox_name'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('xbox_name') }}</strong>
                                    </span>
                                @endif
           </td>
       </tr>
       <tr>
             <td>
           <h6>PSN USERNAME</h6>
           <br>
           <input type="text" id="psn_name" class="form-control{{ $errors->has('psn_name') ? ' is-invalid' : '' }}" name="psn_name" value="{{ $theme->psn_name }}">
            @if ($errors->has('psn_name'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('psn_name') }}</strong>
                                    </span>
                                @endif
           </td>
             <td>
           <h6>MOBILE GAME ID</h6>
           <br>
           <input type="text"   id="mobile_id" class="form-control{{ $errors->has('mobile_id') ? ' is-invalid' : '' }}" name="mobile_id" value="{{ $theme->mobile_id }}">
          @if ($errors->has('mobile_id'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('mobile_id') }}</strong>
                                    </span>
                                @endif
           </td>

       </tr>

   </tbody>
        @endforeach
   <!--Table body-->

</table>
</div>
<div class="row">
<div class="col-md-8">
   <a href="{{ url('email_settings') }}" class="text-primary"><u>Email Notification Settings</u></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="{{ route('change_password') }}" class="text-primary"><u>Change password</u></a>
</div>
<div class="col-md-4">

  <a><button class="btn btn-warning pull-right">Save Changes</button></a>
</div>
</div>
  </form>
<!--Table-->
       <br>

     <div class="row">



</div>
  <br>
   </div>

    <div class="col-md-3">
       <br>
       <br>
       <br>
        <table class="table mdb-color darken-3">

           <tr>
           <td>

               <h1 class="text-center text-success">$7.00</h1>
               <h6 class="text-center text-white">Balance</h6>
              <hr>
             <a href="#" class="white-text"><i class="fas fa-plus"></i>&nbsp;Add Funds</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="white-text">|</span>
             <a href="#" class="white-text pull-right"><i class="fas fa-arrow-down"></i>&nbsp;&nbsp;Withdraw</a>
             <hr>
             <a href="#"><h6 class="text-center text-white">Transaction History</h6></a>
           </td>

       </tr>
        </table>
   </div>







</div>




</div>


<!--Modal: Login / Register Form-->
@include('layouts.crmodel')

@endsection

  @section ('footer')
  <script >

//   var room = 1;
// function cat_fields() {
//
//  room++;
//  var objTo = document.getElementById('cat_fields')
//  var divtest = document.createElement("div");
// divtest.setAttribute("class", "form-group removeclass"+room);
// var rdiv = 'removeclass'+room;
//  divtest.innerHTML = ' <div class="form-group row"> <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>     <div class="col-md-6"> <input type="text" class="form-control" id="subname[]" name="subname[]" value="" placeholder="Enter Sub Industries Name....">    </div> </div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_cat_fields('+ room +');"> <span class="icon-minus-sign" aria-hidden="true"></span>Remove </button></div></div></div></div><div class="clear"></div>';
//
//  objTo.appendChild(divtest)
// }
// function remove_cat_fields(rid) {
//   $('.removeclass'+rid).remove();
// }
</script>

@endsection
