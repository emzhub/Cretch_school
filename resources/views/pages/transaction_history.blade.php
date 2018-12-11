@extends('layouts.site')

@section('title') T-History  @endsection

@section('content')
<!-- Start your project here-->

<div class="container well">
<div class="row">
<br>
<div class="col-md-12">
 <br>
 <br>
<!--Table-->
<h1 class="text-center">Transaction History</h1>
<!--Table--><br>



</div>
</div>

<!--Table-->
<!--Table-->
<div class="table-responsive">
<!--Table-->
<table class="table">

<!--Table head-->
<thead class="mdb-color darken-3">
    <tr class="text-white">
        <th>Transaction ID/th>
        <th>Type</th>
        <th>Amount</th>
        <th>Method/Description</th>
        <th>Status</th>
        <th>Date/Time</th>
        <th>Balance</th>
        <th>Bonus Balance</th>
    </tr>
</thead>
<!--Table head-->

<!--Table body-->
<tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@fat</td>
        <td>@fat</td>
        <td>@fat</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>@twitter</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
</tbody>
<!--Table body-->

</table>
<!--Table-->
<!--Table-->
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
