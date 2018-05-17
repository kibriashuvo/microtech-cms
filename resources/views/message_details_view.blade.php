@extends('layouts.admin')
@section('header')
MESSAGE DETAILS
@endsection
@section('content')

 @if(Session::has('mark'))

    <div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <p align="center"><strong>Success!</strong> {{session('mark')}}</p>
    </div>
        
    @endif


       @if(Session::has('mail_sent'))

    <div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <p align="center"><strong>Success!</strong> {{session('mail_sent')}}</p>
    </div>
        
   @endif

  <div class='container'>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading col-md-12">
                    
                      <div class="col-md-8">
                      <h4><strong>Message Details</strong></h4>
                      </div>
                      <div class="row col-md-4">



                       <form class="form" role="form" method="POST" action="{{ url('/message_details_btn_action') }}" enctype="multipart/form-data">
                                      {!! csrf_field() !!}
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      
                        @if(!$data->isRead)
                         <button type="submit" name="mark" class="btn btn-warning" value="{{$data->id}}">Mark as Read</button>
                        @else
                          <button type="submit" name="mark" class="btn btn-warning" value="{{$data->id}}" style="visibility :hidden;" disabled="true">Mark as Read</button>

                         @endif
                          


                           <button type="submit" name="reply" class="btn btn-success" value="{{$data->id}}">Reply</button>
                            <button type="submit" name="back" class="btn btn-info" value='back'>Back</button>
                            </form>


                          
                        
                      </div>

                </div>
              <br><br><br>
                <div class="panel-body">
    

                             
               

<div class="col-md-12">

            <table class="table">
                                      <thead>                                       
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th class="col-md-3" scope="row">Name:</th>
                                          <td class="col-md-9">{{ $data->name }}</td>                                         
                                        </tr>
                                        <tr>
                                          <th scope="row">Email:</th>
                                          <td>{{ $data->email }}</td>
                                       
                                        <tr>
                                          <th scope="row">Phone:</th>
                                          @if($data->phone!='')
                                            <td>{{ $data->phone }}</td>
                                          @else
                                            <td>Not Available</td>
                                         @endif
                                        </tr>
                                         <tr style="height:250px;overflow-y:scroll;">
                                          <th scope="row">Message:</th>
                                          <td>{{ $data->text }}</td> 
                                        </tr>   
                                        <tr>
                                        <th scope="row">Delete this Message:</th>
                                        <td>
                            <button class="btn btn-danger pull-right" data-title="Delete" data-toggle="modal" data-target="#delete" data-placement="top" data-toggle="tooltip" title="Deletes the Message"><i class="glyphicon glyphicon-bin"></i>Delete</button></td>
                                        </tr>                                     
                                          
                                      </tbody>
                                    </table>




</div>










         

		</div>
        
                </div>
            </div>
        </div>


    <!-- ==================MODAL=======================  -->



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/message_details_btn_action') }}">
                    {!! csrf_field() !!}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">Delete this Message</h4>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="path" value="{{$data->image}}">
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Message?</div>

                    </div>
                    <div class="modal-footer ">
                        <button type="submit" name="delete" class="btn btn-success" value="{{$data->id}}"><span class="glyphicon glyphicon-ok-sign"></span>Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection