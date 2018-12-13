@extends('layouts.site')

@section('title') Add Child @endsection

@section('content')
<!-- Start your project here-->
     <div class="container">
  <div class="row">

              <div class="col-lg-9 col-xs-12">
                  <div class="register-box-body">
                     <h1> <p class="login-box-msg"><b>Register Child</b></p></h1>
              <div class="col-lg-10 col-lg-offset-2">
                                    @if (session('status'))

                                                  <div class="alert alert-success">
                                                      {{ session('status') }}
                                                  </div>
                                              @endif
                                            <!--   @if (count($errors) > 0)
                                                  @foreach ($errors->all() as $error)

                                                      <div class="alert alert-danger">{{ $error }}</div>

                                                  @endforeach

                                              @endif -->


                                    </div>
               <form id="send-announcement-form" role="form"  method="POST" action="{{route('add_child')}}">
                                    @csrf
                                    <div id="cat_fields">

                                   </div>







                      <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Parents</label>
                    <select class="form-control select2" name="Parent_id" style="width: 100%;">
                      <option selected="selected">Select Parent</option>
                      @foreach ($members as $member)
                                            <option value="{{$member->user_id}}">{{ucwords($member->getFullname())}}</option>
                                          @endforeach
                    </select>
                  </div><!-- /.form-group -->

                </div><!-- /.col -->

              </div><!-- /.row -->
            </div><!-- /.box-body -->
                                              <div class="form-group has-feedback">
                        <input type="text" placeholder="Full name" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}"  autofocus>
                          @if ($errors->has('fullname'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('fullname') }}</strong>
                                                </span>
                                            @endif
                    <!--     <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
                      </div>

                        <div class="form-group has-feedback">
                        <input type="text"  placeholder="Date Of Birth" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}"  autofocus>
                          @if ($errors->has('dob'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('dob') }}</strong>
                                                </span>
                                            @endif
                      </div>


                      <!-- <div class="form-group has-feedback">
                        <input type="class"  placeholder="Class"class="form-control{{ $errors->has('class') ? ' is-invalid' : '' }}" name="class" value="{{ old('class') }}"  autofocus>
                          @if ($errors->has('class'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('class') }}</strong>
                                                </span>
                                            @endif
                      </div> -->

                      <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Class</label>
                    <select class="form-control select" name="class" style="width: 100%;">
                      <option selected="selected">Select Class</option>
                      <option value="0-2">0-2</option>
                        <option value="3-5">3-5</option>
                        <option value="6-8">6-8</option>
                          <option value="9-12">9-12</option>
                              <option value="Maidens(househelps)">Maidens(househelps)</option>
                    </select>
                    @if ($errors->has('class'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('class') }}</strong>
                                          </span>
                                      @endif
                  </div><!-- /.form-group -->

                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Sex</label>
                    <select class="form-control select" name="gender" style="width: 100%;">
                      <option selected="selected">Select Gender</option>
                      <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @if ($errors->has('gender'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('gender') }}</strong>
                                          </span>
                                      @endif
                  </div><!-- /.form-group -->

                </div><!-- /.col -->

              </div><!-- /.row -->
            </div><!-- /.box-body -->
                      <!-- <div class="form-group has-feedback">
                        <input type="gender"  placeholder="Gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}"  autofocus>
                          @if ($errors->has('gender'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('gender') }}</strong>
                                                </span>
                                            @endif
                      </div> -->


                            <div class="input-group-btn">
                               <!--      <button class="btn btn-success" type="button"  onclick="cat_fields();"> <span class="icon-plus-sign" aria-hidden="true"></span>Add More  </button> -->
                                     <button type="submit" class="btn btn-primary btn-block btn-flat pull-right">Register</button>
                                    </div>
                                   <!--  <div class="form-group row mb-0 pull-right">
                                        <div class="col-md-6 offset-md-4">

                                        </div>
                                    </div> -->
                                </form>
          </div>
            </div>
          </div>


            </div>


  @endsection


  @section ('footer')
  <script >

  var room = 1;
function cat_fields() {

 room++;
 var objTo = document.getElementById('cat_fields')
 var divtest = document.createElement("div");
divtest.setAttribute("class", "form-group removeclass"+room);
var rdiv = 'removeclass'+room;
 divtest.innerHTML = ' <div class="form-group has-feedback"><input type="text" placeholder="Full name" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}"  autofocus> @if ($errors->has('fullname')) <span class="invalid-feedback" role="alert"> <strong>{{ $errors->first('fullname') }}</strong> </span> @endif </div><div class="form-group has-feedback"> <input type="text"  placeholder="Home address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}"  autofocus>@if ($errors->has('address'))<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('address') }}</strong></span>@endif </div>   <div class="form-group has-feedback"><input type="tel"  placeholder="Phone Number "class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}"  autofocus>@if ($errors->has('phone'))<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('phone') }}</strong></span>@endif</div><div class="form-group has-feedback"><input type="occupation"  placeholder="Occupation" class="form-control{{ $errors->has('Occupation') ? ' is-invalid' : '' }}" name="Occupation" value="{{ old('Occupation') }}"  autofocus>@if ($errors->has('Occupation'))<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('Occupation') }}</strong></span>@endif</div><div class="form-group has-feedback"><input type="email"  placeholder="Email"class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  autofocus>@if ($errors->has('email'))<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('email') }}</strong></span>@endif</div><div class="form-group has-feedback"><input type="gender"  placeholder="Gender" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="{{ old('gender') }}"  autofocus>@if ($errors->has('gender'))<span class="invalid-feedback" role="alert"><strong>{{ $errors->first('gender') }}</strong></span>@endif</div>       <div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_cat_fields('+ room +');"> <span class="icon-minus-sign" aria-hidden="true"></span>Remove </button></div></div></div></div><div class="clear"></div>';

 objTo.appendChild(divtest)
}
function remove_cat_fields(rid) {
  $('.removeclass'+rid).remove();
}
</script>

@endsection
