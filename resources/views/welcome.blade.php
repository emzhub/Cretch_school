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
                  <h3>150</h3>
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
                  <h3>65</h3>
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
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
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
                  <h3>44</h3>
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
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                         <td>X</td>
                      </tr>
                     
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>Parent Name</th>
                        <th>Child Name</th>
                        <th>Token</th>
                        <th>Check</th>
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

