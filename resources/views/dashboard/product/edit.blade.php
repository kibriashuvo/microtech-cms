@extends('layouts.admin')

@section('header')
Create Product
@stop




@section('content')

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
    <div class="panel-heading"><h4><strong>Edit Product</strong></h4></div>
    <div class="panel-body">




{!!Form::model($product,['method'=>'PATCH','action'=>['ProductsController@update', $product->id],'files'=>true])!!}


<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
<div class="form-group">
{!!Form::label('name','Project Name:')!!}
{!!Form::text('name',null,['class'=>'form-control','required'])!!}
 @if ($errors->has('name'))
  <span class="help-block">
      <strong class="text-danger">{{ $errors->first('name') }}</strong>
  </span>
@endif
</div>
</div>


<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
<div class="form-group">
{!!Form::label('category','Category:')!!}
{!!Form::select('category',[''=>'Choose Category']+ $pdcategories,null,['class'=>'form-control'])!!}
 @if ($errors->has('category'))
  <span class="help-block">
w  </span>
@endif
</div>
</div>



<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
<div class="form-group">
{!!Form::label('details','Details:')!!}
{!!Form::textarea('details',null,['class'=>'form-control','rows'=>4, 'required'])!!} {{-- ,'rows'=>3 --}}
 @if ($errors->has('details'))
  <span class="help-block">
      <strong class="text-danger">{{ $errors->first('details') }}</strong>
  </span>
@endif
</div>
</div>

<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
<div class="form-group">
{!!Form::label('image','Photo:')!!}
{!!Form::file('image',['class'=>'form-control'])!!}
 @if ($errors->has('image'))
  <span class="help-block">
      <strong class="text-danger">{{ $errors->first('image') }}</strong>
  </span>
@endif
</div>
</div>



<div class="row col-sm-offset-3 col-sm-9 col-sm-offset-3">
{!!Form::submit('Update Product',['class'=>'btn btn-primary col-sm-3 pull-left'])!!}
{!!Form::close()!!}


{{-- {!!Form::open(['method'=>'DELETE','action'=>['ProductsController@destroy', $product->id]])!!}
<div class="form-group">
{!!Form::submit('Delete Product',['class'=>'btn btn-danger col-sm-3 pull-right'])!!}
</div>
{!!Form::close()!!}
 --}}</div>

 </div>
 </div>
 </div>
 </div>
 </div>
 
@endsection
