@extends('layouts.admin')



@section('header')
Projects
@stop

@section('css')
<style type="text/css">
  td {
    max-width: 150px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>
@stop



@section('content')


@if(Session::has('deleted_project'))
<div class="alert alert-info alert-dismissable text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{session('deleted_project')}}</strong>
</div>
@elseif(Session::has('created_project'))
<div class="alert alert-info alert-dismissable text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{session('created_project')}}</strong>
</div>
@elseif(Session::has('updated_project'))
<div class="alert alert-info alert-dismissable text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{session('updated_project')}}</strong>
</div>
@endif



<div class="col-md-8 col-md-offset-2">
   
@if(count($projects)>0)
    <div class="table-responsive">

                  <table id="message_list" class="table table-bordred table-striped table-hover toggle-circle-filled">

                       <thead>

                        <th>#No.</th>     
                        <th>Image</th>
                        <th>Name</th> 
                        <th>Categories</th>
                        <th>Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        

                       </thead>



          @php $count=0; @endphp
                      
                      <tbody>

            @foreach($projects as $project)
                            @php $count++; @endphp
                             
                            
                                            {{-- modal --}}



            <div class="modal fade" id="delete{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h4 class="modal-title custom_align text-danger" id="Heading">Delete Project</h4>
                            </div>
                            <div class="modal-body">
                                {{-- <input type="hidden" name="path" value="{{$project->path}}"> --}}
                                <div class="alert alert-danger text-center"><p>
                                <span class="glyphicon glyphicon-warning-sign"></span> <strong> Are you sure you want to delete this project?<br>Name: {{$project->name}}</strong>
                                </p>
                                <p>
                                <img style="height:120px; width: auto;" src="{{file_exists(public_path($project->path))? asset($project->path) : asset('/gallery-images/no-image-available.jpg')}} ">
                                </p>
                                </div>
                                

                            </div>
                            <div class="modal-footer ">
                                {!!Form::open(['method'=>'DELETE','action'=>['ProjectsController@destroy', $project->id]])!!}
                            {!!Form::button('<span class="glyphicon glyphicon-ok-sign"></span>Yes',['type'=>'submit','class'=>'btn btn-sm btn-danger'])!!}
                            {!!Form::close()!!}
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                            </div>

                    </div>
                </div>
            </div>



                            {{-- modal --}}

                                      <tr style="height:50px;">
                                          <td>{{(($projects->currentPage() - 1 ) * $projects->perPage()) + $count}}</td>
                                          <td><img height=50 src="{{file_exists(public_path($project->path))? asset($project->path) : asset('/gallery-images/no-image-available.jpg')}}"></td>
                                          <td><strong>{{$project->name}}</strong></td>
                                          <td>
                                          {{-- @if(isset($project->pdcategories)) --}}
                                          @foreach($project->pjcategories as $pjc)
                                            <p><span class="label label-primary">{{$pjc->category}}</span></p>
                                          @endforeach
                                          {{-- @endif --}}
                                          </td>
                                          <td>{{$project->details}}</td>                    
                                      <td><a class="btn btn-info btn-sm" href="{{route('dashboard-projects.edit',$project->id)}}">Edit</a></td>

                                      <td><a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$project->id}}">Delete</a></td>  
           
                                      </tr>           
              @endforeach
                      
                        </tbody>

                </table>
                {{$projects->links()}}



@else <div class="row text-center"><h4><strong>No Project Found</strong></h4></div>
@endif
            </div>




</div>
@stop