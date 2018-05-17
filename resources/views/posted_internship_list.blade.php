@extends('layouts.admin')
@section('header')
INTERNSHIP ADVERTISEMENT LIST
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

 @if(Session::has('edit'))

    <div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <p align="center"><strong>Success!</strong> {{session('edit')}}</p>
    </div>
        
   @endif

 @if(Session::has('add'))

    <div class="col-md-10 col-md-offset-1 alert alert-success alert-dismissable">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
         <p align="center"><strong>Success!</strong> {{session('add')}}</p>
    </div>
        
   @endif

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
    <div class="panel-heading"><h4><strong>Internship Advertisement List</strong></h4></h4></div>
    <div class="panel-body">
        
       
      @if (count($datas)===0)
            <div class="alert alert-danger" role="alert">
             <p align="center"><strong>List Empty!!</strong>  Currently there are no Intership Advertisements!</p>
        </div>
      
        @else
         <div class="table-responsive">

             <form class="form-horizontal" role="form" method="POST" action="{{ url('/internship_list_button') }}">
                {!! csrf_field() !!}

                  <table id="message_list" class="table table-bordred table-striped table-hover toggle-circle-filled">

                       <thead>

                        <th>#No.</th>
                        <th data-toggle="true">Job Title</th>                    
                        <th>Details</th>
                        <th>Deadline</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        

                       </thead>
               
                      
                      <tbody>

                        <?php $count=0 ?>
                          
                        @foreach($datas as $data)
                         <?php $count++ ?>
                        
                        <tr>

                        <td>{{

(($datas->currentPage() - 1 ) * $datas->perPage() ) + $count}}</td>
                        <td>{{$data->job_title}}</td>
                        <td>{{$data->details}}</td> 
                        <td>{{$data->deadline}}</td>                        
                        <td><button type="submit" name= "edit" class="btn btn-info btn-sm" value="{{$data->id}}">Edit</button></td>  
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

