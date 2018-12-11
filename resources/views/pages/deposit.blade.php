@extends('layouts.site')

@section('title') Deposit  @endsection

@section('content')
<!-- Start your project here-->
<br>
<br>
<br><br>
<br>
<br>
<div class="container">

<h1>Frequently Asked Questions</h1>
<hr>
<div class="row">

   <div class="col-md-3">

    <ul class="nav  md-pills pills-primary flex-column mdb-color darken-3" role="tablist">
        <li class="nav-item te">
            <a class="nav-link active text-white" href="#general" role="tab">General
            </a>
            <hr>
        </li>
        <li class="nav-item ">
            <a class="nav-link text-white"  href="#play_matches" role="tab">Play Matches
            </a>
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white"  href="#Money_payments" role="tab">Money and payments
            </a>
            <hr>
        </li>
           <li class="nav-item">
            <a class="nav-link text-white"  href="#Accounts" role="tab">Accounts
            </a>
        </li>
    </ul>
</div>

   <div class="col-md-9">


<!--Accordion wrapper-->
   <h6 class="text-grey"><u><b>GENERAL</b></u></h6>
<div id="general">
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

<!-- Accordion card -->

<div class="card  mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" href="#generalTwo" aria-expanded="false" aria-controls="generalTwo">
            <h5 class="mb-1 text-white">
                What is Esurf Games? <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="generalTwo" class="collapse show" role="tabpanel" aria-labelledby="generalTwo" data-parent="#accordionEx" >
        <div class="card-body text-white">
           <small class="text-orange">Esurf Games is a video game social startup. We specialize in hosting social gaming tournaments, online
Players come to compete in tournaments for free and for cash and awesome prizes.
We host tournaments on Xbox One,Xbox 360, Playstation 4, Playstation 3, PC and moblie phones.</small>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" href="#generalThree" aria-expanded="false" aria-controls="generalThree">
            <h5 class="mb-0 text-white">
               How do i Sign up ?<i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="generalThree" class="collapse" role="tabpanel" aria-labelledby="generalThree" data-parent="#accordionEx">
        <div class="card-body text-white">
          <small class="text-orange">please click her to <a href="home_registration.html"><h6 class="text-success">sign up</h6></a></small>
        </div>
    </div>
</div>
 <!-- Accordion card -->
<div class="card  mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFour">
        <a class="collapsed" data-toggle="collapse" href="#generalFour" aria-expanded="false" aria-controls="generalFour">
            <h5 class="mb-0 text-white">
                Is the site secure? <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="generalFour" class="collapse" role="tabpanel" aria-labelledby="generalFour" data-parent="#accordionEx">
        <div class="card-body text-white">
       <small class="text-orange"> Esurf Games places the highest concern on making sure your sensitive information is protected.
        Our databases and servers are highly secured with high encryption and we never store your credit card information.
        All credit card transactions are done securely through Stripe.</small>

    </div>
</div>
 <!-- Accordion card -->

</div>

   </div>
   <br>

   <h6 class="text-grey"><u><b>PLAY MATCHES</b></u></h6>
<div id="play_matches">
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

<!-- Accordion card -->

<div class="card  mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" href="#play_matchesTwo" aria-expanded="false" aria-controls="play_matchesTwo">
            <h5 class="mb-0 text-white">
                How does Esurf Games work? <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="play_matchesTwo" class="collapse show" role="tabpanel" aria-labelledby="play_matchesTwo" data-parent="#accordionEx" >
        <div class="card-body text-white">
          <small class="text-orange"> <p> Esurf Games is a social gaming company. We act as a secure third party for players to compete in one-on-one competitions and tournaments- for cash, and for other awesome prizes. </p>

           <p> To get started, you’ll want to SIGN UP <a href="home_registration.html" class="text-success"><u>here</u></a>. After you’re signed up, check out our OPEN MATCHES here. This page allows you to join an existing open match, create your own match or use the main lobby chat to organize a match with another member of the community. </p>

            <p>Once you’ve accepted a challenge or entered a tournament, the entry fee money from each player's account will be withdrawn and the combined prize pool will be held in our secure escrow account. Players can communicate through the match lobby chat or by private message as they set up their game and prepare to face off! </p>

           <p> After you’ve completed your game, you and your opponent(s) will report the outcome of the match. Once the score is verified, the winner’s account will automatically be credited with the winnings!</small></p>
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" href="#play_matchesThree" aria-expanded="false" aria-controls="play_matchesThree">
            <h5 class="mb-0 text-white">
                How do i play a match<i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="play_matchesThree" class="collapse" role="tabpanel" aria-labelledby="play_matchesThree" data-parent="#accordionEx">
        <div class="card-body text-white">
            <small class="text-orange"><p class="">The exact steps vary by game, but in general:</p>
            <ol>
                <li>Add your opponent as a friend onXbox One, Xbox 360, Playstation 4, Playstation 3, PC, moblie phones.using their Gamertag or Username.
                </li>
                 <li>Go to the game mode where you can play a friend online. For example, the Online Friendlies mode in FIFA.
                </li>
                <li>Send a game invite to your opponent.
                </li>
                <li>Check and confirm the match rules and settings.
                </li>
                <li>Start the match.
                </li>
            </ol>
</small>
        </div>
    </div>
</div>
 <!-- Accordion card -->
<div class="card  mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFour">
        <a class="collapsed" data-toggle="collapse" href="#play_matchesFour" aria-expanded="false" aria-controls="gplay_matchesFour">
            <h5 class="mb-0 text-white">
                What happens if my opponent or I get disconnected in an online match? <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="play_matchesFour" class="collapse" role="tabpanel" aria-labelledby="play_matchesFour" data-parent="#accordionEx">
        <div class="card-body text-white">
            <small class="text-orange">It is the responsibility of each player to ensure that their connection is suitable for playing online. If a player gets disconnected we recommend that they communicate with their opponent to figure out a way to finish the match — i.e. if the disconnection happened at half-time, the match should be completed after one half of the new game.</small>
        </div>
    </div>
</div>
 <!-- Accordion card -->
<div class="card mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFive">
        <a class="collapsed" data-toggle="collapse" href="#play_matchesFive" aria-expanded="false" aria-controls="play_matchesFive">
            <h5 class="mb-0 text-white">
                what are disputes and how do they get handled?<i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="play_matchesFive" class="collapse" role="tabpanel" aria-labelledby="play_matchesFive" data-parent="#accordionEx">
        <div class="card-body text-white">
    <small class="text-orange">After completing your Head-to-Head match or Tournament competition, both teams will report the scoreline from the game. In the event that both players do not report the scoreline, a “dispute” is created. <br>

    We take our gaming very seriously at Players’ Lounge and disputes are no different.<br>
       Disputes generally come from two circumstances: <br>
       <ol>
           <li>Accidental - You won 3-1. But in your gamer’s glee, you mistakenly report 3-0. We understand this happens occasionally, but please take an extra moment next time. </li>
           <li>Intentional - You lost 2-0. You report that you won 2-0. This is a very serious offense and can result in your account being banned from Players’ Lounge.</li>

       </ol>

          </small>
        </div>
    </div>
</div>
<div class="card mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFive">
        <a class="collapsed" data-toggle="collapse" href="#play_matchesFive" aria-expanded="false" aria-controls="play_matchesFive">
            <h5 class="mb-0 text-white">
                Esurf Games Tournaments<i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="play_matchesFive" class="collapse" role="tabpanel" aria-labelledby="play_matchesFive" data-parent="#accordionEx">
        <div class="card-body text-white">
    <small class="text-orange">After completing your Head-to-Head match or Tournament competition, both teams will report the scoreline from the game. In the event that both players do not report the scoreline, a “dispute” is created. <br>

    We take our gaming very seriously at Players’ Lounge and disputes are no different.<br>
       Disputes generally come from two circumstances: <br>
       <ol>
           <li>Accidental - You won 3-1. But in your gamer’s glee, you mistakenly report 3-0. We understand this happens occasionally, but please take an extra moment next time. </li>
           <li>Intentional - You lost 2-0. You report that you won 2-0. This is a very serious offense and can result in your account being banned from Players’ Lounge.</li>

       </ol>

          </small>
        </div>
    </div>
</div>

</div>

   </div>
   <br>

   <h6 class="text-grey"><u><b>MONEY AND PAYMENTS</b></u></h6>
<div id="Money_payments">
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

<!-- Accordion card -->

<div class="card  mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" href="#Money_paymentsTwo" aria-expanded="false" aria-controls="Money_paymentsTwo">
            <h5 class="mb-0 text-white">
                Collapsible Group Item #2 <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="Money_paymentsTwo" class="collapse show" role="tabpanel" aria-labelledby="pMoney_payments" data-parent="#accordionEx" >
        <div class="card-body text-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" href="#Money_paymentsThree" aria-expanded="false" aria-controls="Money_paymentsThree">
            <h5 class="mb-0 text-white">
                Collapsible Group Item #3 <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="Money_paymentsThree" class="collapse" role="tabpanel" aria-labelledby="Money_paymentsThree" data-parent="#accordionEx">
        <div class="card-body text-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>
 <!-- Accordion card -->
<div class="card  mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFour">
        <a class="collapsed" data-toggle="collapse" href="#Money_paymentsFour" aria-expanded="false" aria-controls="Money_paymentsFour">
            <h5 class="mb-0 text-white">
                Collapsible Group Item #4 <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="Money_paymentsFour" class="collapse" role="tabpanel" aria-labelledby="Money_paymentsFour" data-parent="#accordionEx">
        <div class="card-body text-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>
 <!-- Accordion card -->
<div class="card mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFive">
        <a class="collapsed" data-toggle="collapse" href="#Money_paymentsFive" aria-expanded="false" aria-controls="Money_paymentsFive">
            <h5 class="mb-0 text-white">
                Collapsible Group Item #5 <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="Money_paymentsFive" class="collapse" role="tabpanel" aria-labelledby="Money_paymentsFive" data-parent="#accordionEx">
        <div class="card-body text-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>

</div>

   </div>
   <br>

   <h6 class="text-grey"><u><b>Accounts</b></u></h6>
<div id="Accounts">
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

<!-- Accordion card -->

<div class="card  mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo">
        <a class="collapsed" data-toggle="collapse" href="#AccountsTwo" aria-expanded="false" aria-controls="Accountswo">
            <h5 class="mb-0 text-white">
                Collapsible Group Item #2 <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="AccountsTwo" class="collapse show" role="tabpanel" aria-labelledby="AccountsTwo" data-parent="#accordionEx" >
        <div class="card-body text-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>
<!-- Accordion card -->

<!-- Accordion card -->
<div class="card mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingThree">
        <a class="collapsed" data-toggle="collapse" href="#AccountsThree" aria-expanded="false" aria-controls="AccountsThree">
            <h5 class="mb-0 text-white">
                Collapsible Group Item #3 <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="AccountsThree" class="collapse" role="tabpanel" aria-labelledby="AccountsThree" data-parent="#accordionEx">
        <div class="card-body text-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>
 <!-- Accordion card -->
<div class="card  mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFour">
        <a class="collapsed" data-toggle="collapse" href="#AccountsFour" aria-expanded="false" aria-controls="AccountsFour">
            <h5 class="mb-0 text-white">
                Collapsible Group Item #4 <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="AccountsFour" class="collapse" role="tabpanel" aria-labelledby="AccountsFour" data-parent="#accordionEx">
        <div class="card-body text-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>
 <!-- Accordion card -->
<div class="card mdb-color darken-3">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingFive">
        <a class="collapsed" data-toggle="collapse" href="#AccountsFive" aria-expanded="false" aria-controls="AccountsFive">
            <h5 class="mb-0 text-white">
                Collapsible Group Item #5 <i class="fa fa-angle-down rotate-icon pull-right"></i>
            </h5>
        </a>
    </div>

    <!-- Card body -->
    <div id="AccountsFive" class="collapse" role="tabpanel" aria-labelledby="AccountsFive" data-parent="#accordionEx">
        <div class="card-body text-white">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf
            moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
        </div>
    </div>
</div>

</div>

   </div>


</div>

</div>
</div>


<!--Modal: Login / Register Form--><div>
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
