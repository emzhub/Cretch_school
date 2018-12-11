@extends('layouts.site')

@section('title') create-tournaments  @endsection

@section('content')
<!-- Start your project here-->




 <section>
  !--Carousel Wrapper--><!--Carousel Wrapper-->
  <br>
  <br>
  <br>
@include('layouts.caro')
<!--/.Carousel Wrapper-->
<!--/.Carousel Wrapper-->
   <br>
    <!-- Start your project here-->
    <div class="container well">
   <div class="row">
        <div class="col-md-6 col-md-offset-3"  >
                @if (session('status2'))

                    <div class="alert alert-success">
                        {{ session('status2') }}
                    </div>
                @endif
               
            </div>
   <div class="col-md-9">
       <div class="col-md-1">


       </div>
       <div class="col-md-8">

         <div class="card">
             <div class="card-header"></div>
             <div class="card-body">

         <form id="" role="form"  method="POST" action="{{route('store_tourna')}}">
  @csrf
       <h1 class="text-center"><u>Create A Tournament</u></h1>

       <br>


       <div class="md-form form-sm mb-5">

                             
<select class="mdb-select"  name="no_players">
<option value="" disabled selected>Min. PLAYERS TO START</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
    @if ($errors->has('no_players'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('no_players') }}</strong>
                                    </span>
                                @endif
                                  <br>
                                </div>
                                 <div class="md-form form-sm mb-5">

<select class="mdb-select pull-right" name="martch_time">
<option value="" disabled selected>TIME TO PLAY MATCH</option>
<option value="24 hours">24 hours</option>
<option value="36 hours">36 hours</option>
<option value="48 hours">48 hours</option>
<option value="60 hours"> 60 hours</option>
</select>
  <br>
                                @if ($errors->has('martch_time'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('martch_time') }}</strong>
                                    </span>
                                @endif
       </div>
       <label><b class="text-center">TOURNAMENT TITLE</b></label><br><textarea name="title"></textarea>  @if ($errors->has('title'))
                                    <span class="alert alert-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif

       <br>
       <hr>
      <div class="text-center mt-2">
           <button class="btn btn-info">Create Tournament <i class="fa fa-sign-in ml-1"></i></button>
       </div>
       </form>


     </div>
   </div>

       <br>
       <br>
       </div>
       <div class="col-md-1"></div>
   </div>

    <div class="col-md-3">

    <div class="card mdb-color darken-3 text-center z-depth-2">
            <div class="card-body">
                <p class="white-text mb-0">Tell a friend-You get $5</p>
            </div>
        </div>
       <br>
       <br>
    <div class="card text-center">
    <div class="card-header mdb-color darken-3 black-text">

<div>
  <select class="pull-left" >
    <option>FIFA</option>
    <option>All games</option>

  </select>

  <h6 class="text-success">208 ONLINE</h6>
</div>
    </div>
    <div class="card-body">

            <div class="portlet portlet-default">
                <div class="portlet-heading">


                    <div class="clearfix"></div>
                </div>
                <div id="chat" class="panel">
                    <div>
                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p><hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/1/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:23 PM</span>
                                        </h6><hr>
                                        <p>Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith
                                            <span class="small pull-right">12:28 PM</span>
                                        </h6><hr>
                                        <p>Yeah I did. Everything looks good.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:39 PM</span>
                                        </h6><hr>
                                        <p class="well">No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    </div>
                    <div>
                              <form>
                            <div>
                              <div class="input-group">
                                <input placeholder="type message" type="text" class="form-control" name="message" />
                                <span>
                                  <button class="btn btn-sm btn btn-mdb-color " type="button">
                                    Send
                                  </button>
                                </span>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
    </div>

</div>
   <br>
   <div class="card text-center">
    <div class="card-header mdb-color darken-3 white-text">

<div>


  <h6 class="white-text">FEEDS</h6>
</div>
    </div>
    <div class="card-body">

            <div class="portlet portlet-default">
                <div class="portlet-heading">


                    <div class="clearfix"></div>
                </div>
                <div id="chat" class="panel">
                    <div>
                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center text-muted small">January 1, 2014 at 12:23 PM</p><hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/1/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:23 PM</span>
                                        </h6><hr>
                                        <p>Hi, I wanted to make sure you got the latest product report. Did Roddy get it to you?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith
                                            <span class="small pull-right">12:28 PM</span>
                                        </h6><hr>
                                        <p>Yeah I did. Everything looks good.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://lorempixel.com/30/30/people/7/" alt="">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading">Jane Smith
                                            <span class="small pull-right">12:39 PM</span>
                                        </h6><hr>
                                        <p class="well">No not yet, the transaction hasn't cleared yet. I will let you know as soon as everything goes through. Any idea where you want to get lunch today?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    </div>

                </div>
            </div>
    </div>

</div>
    </div>
    </div>
    </div>
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
