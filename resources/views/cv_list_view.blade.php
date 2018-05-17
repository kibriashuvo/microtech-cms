@extends('layouts.admin')
@section('header')
VIEW CV UPLOADS
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

    <div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <p align="center"><strong>Success!</strong> {{session('delete')}}</p>
    </div>
        
   @endif

 

<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
    <div class="panel-heading"><h4><strong>Applicants List</strong></h4></div>
    <div class="panel-body">
        
       
      @if (count($datas)===0)
            <div class="alert alert-danger" role="alert">
              <p align="center"><strong>List Empty!!</strong> No Applicants!</p>
        </div>
      
        @else
         <div class="table-responsive">

             <form class="form-horizontal" role="form" method="POST" action="{{ url('/cv_view_button') }}">
                {!! csrf_field() !!}

                  <table id="message_list" class="table table-bordred table-striped table-hover toggle-circle-filled">

                       <thead>

                        <th>#No.</th>
                        <th data-toggle="true"> Name</th>                    
                        <th>Email</th>
                        <th>Address</th>
                        <th>Download</th>
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
                        <td style="text-overflow: ellipsis;">{{$data->address}}</td>                        
                        <td><button type="submit" name= "download" class="btn btn-info btn-sm" value="{{$data->id}}">Download</button></td>  
                        <td><button type="submit" name= "delete" class="btn btn-danger btn-sm" value="{{$data->id}}">Delete</button></td>
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