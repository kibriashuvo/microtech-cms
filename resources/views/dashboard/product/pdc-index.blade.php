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
    <div class="panel-heading"><h4><strong>Product Category List</strong></h4></div>
    <div class="panel-body">


@if(count($pdcategories)>0)
    <div class="table-responsive col-md-12">

                  <table id="message_list" class="table table-bordred table-striped table-hover toggle-circle-filled">

                       <thead>

                        <th>#No.</th>     
                        <th>Name</th>
                        <th>Rename</th>
                    
                       </thead>


                      
                      <tbody>

            @foreach($pdcategories as $cat)
                  
                             
                                  <tr>
                                          <td>{{$cat->id}}</td>
                                          <td>{{$cat->category}}</td>
                                          <td><a href="{{route('pdc.rename', $cat->id)}}" class="btn btn-sm btn-success">Rename</a></td>
                                  </tr>           
              @endforeach
                      
                        </tbody>

                </table>
                {{$pdcategories->links()}}


</div>

@else <div class="row text-center"><h4><strong>No Category Found</strong></h4></div>
@endif

</div>
</div>
</div>
</div>
</div>

</div>
@endsection