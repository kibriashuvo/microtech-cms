@extends('layouts.admin')

@section('header')
Project Category
@stop


@section('content')

@if(Session::has('updated_category'))
<div class="alert alert-info alert-dismissable text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{session('updated_category')}}</strong>
</div>
@endif





<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
    <div class="panel-heading"><h4><strong>Project Category List</strong></h4></div>
    <div class="panel-body">





@if(count($pjcategories)>0)
    <div class="table-responsive">

                  <table id="message_list" class="table table-bordred table-striped table-hover toggle-circle-filled">

                       <thead>

                        <th>#No.</th>     
                        <th>Name</th>
                        <th>Rename</th>
                    
                       </thead>


                      
                      <tbody>

            @foreach($pjcategories as $cat)
                  
                             
                                  <tr>
                                          <td>{{$cat->id}}</td>
                                          <td>{{$cat->category}}</td>
                                          <td><a href="{{route('pjc.rename', $cat->id)}}" class="btn btn-sm btn-success">Rename</a></td>
                                  </tr>           
              @endforeach
                      
                        </tbody>

                </table>
                {{$pjcategories->links()}}


</div>

</div>
</div>
</div>
</div>
</div>




@else <div class="row text-center"><h4><strong>No Category Found</strong></h4></div>
@endif



@endsection