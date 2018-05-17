@extends('layouts.admin')

@section('header')
Rename Category
@stop

@section('content')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
    <div class="panel-heading"><h4><strong>Edit Project Category</strong></h4></div>
    <div class="panel-body">


<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">

{!!Form::model($pjc,['method'=>'POST', 'route'=>['pjc.update',$pjc->id]])!!}
<div class="form-group">
{!!Form::label('category','Category Name:')!!}
{!!Form::text('category',null,['class'=>'form-control'])!!}
 @if ($errors->has('category'))
  <span class="help-block">
      <strong class="text-danger">{{ $errors->first('category') }}</strong>
  </span>
@endif
</div>
</div>

<div class="col-sm-offset-3 col-sm-8 col-sm-offset-3">
{!!Form::submit('Rename Category',['class'=>'btn btn-primary col-sm-4 pull-left'])!!}
{!!Form::close()!!}


</div>
</div>
</div>
</div>
</div>
</div>




{{-- 
{!!Form::open(['method'=>'DELETE','action'=>['AddCategoriesController@destroy',$category->id]])!!}
{!!Form::submit('Delete Category',['class'=>'btn btn-danger col-sm-4 pull-right'])!!} --}}
{!!Form::close()!!}




@endsection