@extends('layouts.site')

@section('title') Pickup History @endsection

@section('content')

   <div class="container">
<div class="row">
          <div class="col-xs-12">


            <div class="box">
              <div class="box-header">
                <h3 class="box-title">View Pickup history</h3>
                <p class="pull-right"> Enter The Parent Name In The Search Box Below </p>
              </div><!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Parent Name</th>
                      <th>Child Name</th>
                      <th>Check Out Time</th>
                    </tr>
                  </thead>
                  <tbody>
     @foreach ($members as $user)
   <?php // var_dump($user->user->name); ?>
                      <tr>
                        <td>{{$user->parent_name}}</td>
                        <td>{{$user->child_name}}</td>
                        <td>{{$user->created_at}}</td>
                     </tr>
                      @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                     <th>Parent Name</th>
                      <th>Child Name</th>
                    <th>Check Out Time</th>
                    </tr>
                  </tfoot>
                </table>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
</div>


  @endsection


  @section ('footer')
