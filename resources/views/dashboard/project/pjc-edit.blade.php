@extends('layouts.admin')

@section('header')
Rename Category
@stop

@section('content')
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


{!!Form::submit('Rename Category',['class'=>'btn btn-primary col-sm-4 pull-left'])!!}
{!!Form::close()!!}
{{-- 
{!!Form::open(['method'=>'DELETE','action'=>['AddCategoriesController@destroy',$category->id]])!!}
{!!Form::submit('Delete Category',['class'=>'btn btn-danger col-sm-4 pull-right'])!!} --}}
{!!Form::close()!!}


</div>

@endsection