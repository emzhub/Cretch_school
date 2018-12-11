<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true .scrollbar-light-blue">

    <div class="modal-dialog cascading-modal" role="document" >
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 mdb-color darken-3" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link text-white" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-american-sign-language-interpreting"></i>&nbsp;&nbsp;Create Match</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content mdb-color darken-3">
                    <!--Panel 7-->
<!--

                    <div class="portlet-body chat-widget" style="overflow-y: auto; width: auto; height: 300px;">
-->

                    <div class="tab-pane fade in show active portlet-body chat-widget" id="panel8" role="tabpanel" style="overflow-y: auto; width: auto; height: 500px;">
  @if (count($errors) > 0)
                    @foreach ($errors->all() as $error)

                        <div class="alert alert-danger">{{ $error }}</div>

                    @endforeach

                @endif
                        <!--Body-->
                        <div class="modal-body mb-1">
                                 <form id="" role="form"  method="POST" action="{{route('store_match')}}">
                        @csrf
                            <div class="md-form form-sm mb-5">

<select class="mdb-select" name="challange">
    <option value="" disabled selected> Match Option</option>

    <option value="Open challange">Open challange</option>
    <option value="Direct challenge">Direct challenge</option>
</select>
   <select class="mdb-select pull-right" name="console">
    <option value="" disabled selected> Choose Console</option>

       @foreach ($console as  $value)
        <option value="{{ $value->console_id }}"> {{ $value->name }}</option>
    @endforeach
</select>

                            </div>

                            <div class="md-form form-sm mb-4">

                            <select   class="mdb-select" name="games">

    <option value="" disabled selected> Choose Game</option>
    @foreach ($games as  $value)
        <option value="{{ $value->game_id}}"> {{ $value->name }}</option>
    @endforeach
</select>

    <div class="pull-right some">
   <select class="mdb-select" name="price">

    <option value="" disabled selected > Bet Prize</option>

    <option value="$5">$5</option>
    <option value="$10">$10</option>
    <option value="$20">$20</option>
                                 </select><br>
                                 <a id="post-somer">Select custom price</a>
                               </div>
                                <br>
                                <br>
                               <div class="newsfeeds">
                             
                                <input type="number" class="white-text" name="custom-price" placeholder="Enter custom price"><br>
                                  <a  id="postback-bt">Select Default Price</a> 
                            </div>
                 <!--   <select  onchange="document.getElementById('s_games').style.display='block';" class="mdb-select" name="games">

    <option value="" disabled selected>Game rule</option>
           <option value="" selected="selected">Select an Option</option>
                              <option value="1">Not Allowed</option>
                              <option value="2">Allowed</option>
</select> -->
<div id="c">
        <a  id="postback-games">Set Game For FIFA rulse</a> </div>
                            </div>
  <span id="s_games">
                            <div class="md-form form-sm mb-4">
                             <a  id="hid_rules">Hide Game For FIFA rulse</a>      
                            <hr>
                          <br>

                             <h5 class="text-center white-text"><u>GAME RULES</u></h5>
                             <br>
                             <br>
                            <select name="level" class="mdb-select pull-left">

    <option value="" disabled selected> Any Start level</option>

    <option value="3">3 Stars</option>
    <option value="3.5">3 1/2 Stars</option>
    <option value="4">4 Stars </option>
    <option value="4.5">4 1/2 Stars</option>
</select>
   <select class="mdb-select pull-right" name="team">

    <option value="" disabled selected > Any Team</option>

      @foreach ($team as  $value)
        <option value="{{$value->team_id}}"> {{ $value->name }}</option>
    @endforeach


                                </select>
                                <br>
                                <br>
                                 <select class="mdb-select pull-left" name="time">

    <option value="" disabled selected> Half lenght</option>

    <option value="4 minutes">4 minutes</option>
    <option value="5 minutes">5 minutes</option>
    <option value="6 minutes">6 minutes</option>
    <option value="7 minutes">7 minutes</option>
</select>
                            <select class="mdb-select pull-right" name="attack">

    <option value="" disabled selected> Legacy Defending</option>

    <option value="0">Not Allowed</option>
    <option value="1">Allowed</option>
</select>
                            </div>
</span>

                            <br>
                            <hr>
                           <div class="text-center mt-2">
                                <button class="btn btn-info">Create Match <i class="fa fa-sign-in ml-1"></i></button>
                            </div>
                                    </form>
                        </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->


               </div>
               </div>