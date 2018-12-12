@include('sitelayout.header')


            @include('sitelayout.nav')



                                   @yield('content')
                                   <!-- About Section -->


   <br>
   @auth
   @if(Auth::user()->isAdmin())
   <!-- Start your project here-->
      <div class="container well">
  <!-- Main content -->
    
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{$se}}</h3>
                  <p>Children Has Checkout</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
               <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>{{$send}}</h3>
                  <p>Children Is Yet To Checkout</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{$sef}}<sup style="font-size: 20px">%</sup></h3>
                  <p>Register Parent</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{$ser}}</h3>
                  <p>Register Children</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
         
          </div><!-- /.row -->
          <!-- Main row -->

      </div>





   <div class="container">
    <div class="row">     <div class="col-lg-10 col-lg-offset-2">
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
                                      <form method="POST" action="{{route('child_pickup') }}">
                                        @csrf
                                      <button type="submit" class="btn btn-danger btn-block margin-bottom">
                                  Click Me Refresh Daily Child Pick Up </button>
                                    </form>
                                    <form method="POST" action="{{route('pickup_token') }}">
                                        @csrf
                                      <button type="submit" class="btn btn-danger btn-block margin-bottom">
                                  Click Me To Generate Pick Daily Token</button>
                                    </form>
                                    </div>
  <div class="row">
            <div class="col-xs-12">
     

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">View All Childern For Pickup</h3>
                  <p class="pull-right"> Enter The Token In The Search Box Below </p>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Parent Name</th>
                        <th>Child Name</th>
                        <th>Token</th>
                        <th>Check</th>
                        <th>Generate Token</th>
                      </tr>
                    </thead>
                    <tbody>

                       @foreach ($child as $user)
   <?php // var_dump($user->user->name); ?>
                      <tr>
                        <td>{{$user->getNumberOfMembers($user->parent_id)}}</td>
                        <td>{{$user->full_name}}</td>
                        <td>{{$user->pickup_token}}</td>
                     <td><a href="#" id="{{route('branch.destroy',$user->reg_id)}}" onclick="del(this);" class="btn btn-danger" /><span>Pick Up <i class="fa fa-arrow-circle-right"></i></span></a</td>
                         <td><a href="#" id="{{route('branch.gettoken',$user->reg_id)}}" onclick="del(this);" class="btn btn-danger" /><span>Gte Token <i class="fa fa-arrow-circle-right"></i></span></a</td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>Parent Name</th>
                        <th>Child Name</th>
                        <th>Token</th>
                        <th>Check</th>
                         <th>Generate Token</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

</div>

  





       @elseif(Auth::user()->isGuest())

       

               @else
                   I don't have any records!
               @endif
               @endauth


                                     @yield('footer')


            @include('sitelayout.footer')

@include('sitelayout.footerscript')

<script>
    function del(d){
        var confirmed = confirm('confirm to delete');
        console.log(confirmed);
        console.log(d);
        if(confirmed){
            var id = $(d).attr('id');
            console.log(id);
            $.ajax({
                url: id,
            }).done(function(){
                location.reload();
            });
        }//{{route("branch.destroy",' + id + ')}}
    }
</script>