{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 --}}
@extends('layouts.admin')

@section('header')
Create Product
@stop

@section('content')

<div class="container">
<div class="row">
<div class="col-md-10 col-sm-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading"><h4><strong>Create Product</strong></h4></div>
        <div class="panel-body">

{!!Form::open(['method'=>'POST','action'=>'ProductsController@store', 'files'=>true])!!}

<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
<div class="form-group">
{!!Form::label('name','Product Name:')!!}
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
      <strong class="text-danger">{{ $errors->first('category') }}</strong>
  </span>
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

  

<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
{!!Form::submit('Add Product',['class'=>'btn btn-primary'])!!}
</div>

{!!Form::close()!!}

</div>
</div>
</div>
</div>
</div>


@stop




{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

{{-- </div> --}}



