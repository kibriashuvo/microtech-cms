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
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
    <div class="panel-heading"><h4><strong>Add Projects</strong></h4></div>
    <div class="panel-body">


{!!Form::open(['method'=>'POST','action'=>'ProjectsController@store', 'files'=>true])!!}

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
{!!Form::label('category','Select Categories:')!!}

<select class="form-control category-select" multiple="true" name="category[]" tooltip="Click Here To Select Multiple Categories">

         @foreach($pjcategories as $pjc)
        
          <option value="{{$pjc->id}}">{{$pjc->category}}</option>

        @endforeach

</select>

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
{!!Form::submit('Add Project',['class'=>'btn btn-primary'])!!}
</div>

{!!Form::close()!!}

</div>
</div>
</div>
</div>
</div>





{{-- <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script> --}}
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
  };
</script>







@endsection
