@extends('layouts.admin')
@section('header')
FEEDBACK
@endsection
@section('content')

<style type="text/css">
  td {
    max-width: 150px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

</style>

 @if(Session::has('delete'))

    <div class="col-md-6 col-md-offset-3 alert alert-success alert-dismissable">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <p align="center"><strong>Success!</strong> {{session('delete')}}</p>
    </div>
        
   @endif

 

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
    <div class="panel-heading"><h4>Feedback</strong></h4></div>
    <div class="panel-body">
        
       
      @if (count($datas)===0)
            <div class="alert alert-danger" role="alert">
              <strong>No Feedbacks!!</strong> Please check later!
        </div>
      
        @else
         <div class="table-responsive">

             <form class="form-horizontal" role="form" method="POST" action="{{ url('/view_message_button') }}">
                {!! csrf_field() !!}

                  <table id="message_list" class="table table-bordred table-striped table-hover toggle-circle-filled">

                       <thead>

                        <th>#No.</th>
                        <th> Name</th>                    
                        <th>Email</th>
                        <th>Status</th>
                        <th>Read</th>
                        <th>Delete</th>

                       </thead>
               
                      
                      <tbody>

                        <?php $count=0 ?>
                          
                        @foreach($datas as $data)
                         <?php $count++ ?>
                        
                        <tr>

                        <td>{{

(($datas->currentPage() - 1 ) * $datas->perPage() ) + $count}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        @if($data->isRead==1)
                            <td>Read</td>                        
                        @else
                            <td>Unread</td>
                        @endif
                        <td><button type="submit" name= "id_read" class="btn btn-info btn-sm" value="{{$data->id}}">Read</button></td>  
                        <td><button type="submit" name= "id_delete" class="btn btn-danger btn-sm" value="{{$data->id}}">Delete</button></td>
                        </tr>           

                         @endforeach

                        </tbody>

                </table>
                 {!! $datas->links() !!}
             </form>



            </div>
            @endif

        </div>
    </div>
</div>

</div>
</div>



@endsection


