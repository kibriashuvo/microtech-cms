@extends('layouts.admin')

@section('header')
Create Project
@stop


@section('content')

<link href="{{asset('admin-assets/css/select2.min.css')}}" rel="stylesheet" />
{{-- <link href="{{asset('bootstrap.min.css')}}" rel="stylesheet" /> --}}
<style type="text/css">
  .select2-container--default .select2-selection--multiple {
    border: 1px solid #ccc!important;
  }

</style>

<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
    <div class="panel-heading"><h4><strong>Edit Project</strong></h4></div>
    <div class="panel-body">

{!!Form::model($project,['method'=>'PATCH','action'=>['ProjectsController@update', $project->id],'files'=>true])!!}


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
{!!Form::label('category','Categories:')!!}
{!!Form::select('category[]',$pjcategories,null,['class'=>'form-control category-select','multiple'=>'true'])!!}
{{-- <select class="form-control category-select" multiple="true" name="category[]">

         @foreach($pjcategories as $pjc)
        
          <option value="{{$pjc->id}}">{{$pjc->category}}</option>

        @endforeach

</select>
 --}}
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

<div class="col-sm-offset-3 col-sm-9 col-sm-offset-3">

{!!Form::submit('Update Project',['class'=>'btn btn-primary col-sm-3 pull-left'])!!}
{!!Form::close()!!}
</div>

</div>
</div>
</div>
</div>
</div>



{{-- {!!Form::open(['method'=>'DELETE','action'=>['ProductsController@destroy', $project->id]])!!}
<div class="form-group">
{!!Form::submit('Delete Product',['class'=>'btn btn-danger col-sm-3 pull-right'])!!}
</div>
{!!Form::close()!!}
 --}}

</div>

<script src="{{asset('admin-assets/js/jquery.2.1.3.min.js')}}"></script>
<script src="{{asset('admin-assets/js/select2.min.js')}}"></script>

<script type="text/javascript">
  if ($('.category-select').length > 0) {
    $('.category-select').select2({
    language: {

      noResults: function (params) {
        return "";
      }
    }
    });

    $('.category-select').select2().val({!! json_encode($project->pjcategories()->getRelatedIds()) !!}).trigger('change');
  
};
</script>

@endsection