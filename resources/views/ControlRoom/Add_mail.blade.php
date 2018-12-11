@extends('layouts.site')

@section('title') MailBox @endsection

@section('content')
<!-- Start your project here-->
   <hr>
          <h1><b>Email Parent</b></h1>
          <div class="row">
                         <div class="col-lg-10 col-lg-offset-2">
                                    @if (session('status'))

                                                  <div class="alert alert-success">
                                                      {{ session('status') }}
                                                  </div>
                                              @endif
                                              @if (count($errors) > 0)
                                                  @foreach ($errors->all() as $error)

                                                      <div class="alert alert-danger">{{ $error }}</div>

                                                  @endforeach

                                              @endif


                                    </div>
              <section class="col-lg-12 connectedSortable">
                  <br>
                  
  
              
                
                <div class="box box-info">
                  <div class="box-header">
                    <i class="fa fa-envelope"></i>
                    <h3 class="box-title">Quick Email/ Announcement to parent</h3>
                  
                   
                  </div>
                  <div class="box-body">
                 <form id="send-announcement-form" role="form"  method="POST" action="{{route('sendMail')}}">
                                    @csrf
                          <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Email to:</label>
                    <select class="form-control select2" name="to[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                      <option selected="selected">Select Parent</option>
                      @foreach ($members as $member)
                                            <option value="{{$member->email}}">{{ucwords($member->getFullname())}}</option>
                                          @endforeach
                    </select>
                  </div><!-- /.form-group -->
               
                </div><!-- /.col -->
             
              </div><!-- /.row -->
            </div><!-- /.box-body -->
                      <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                      </div>
                     <div class="form-group">
                    <textarea id="compose-textarea" name="message" class="form-control" style="height: 300px">
                  
                    </textarea>
                  </div>
                  
            
                  <div class="box-footer clearfix">
                    <button class="pull-right btn btn-info" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
                  </div>
                </div>
                </form>
                </div>
  
              </section>
            </div>
  @endsection


  @section ('footer')
   <script>
      
    </script>

@endsection

