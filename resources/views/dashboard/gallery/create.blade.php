{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 --}}
@extends('layouts.admin')

@section('header')
Insert Images
@stop

@section('css')
<style>

fieldset{
    background: #FCFCFC;
    padding: 16px;
    border: 1px solid #164377;
    /*border: 1px solid #D5D5D5;*/
}
.addfields{
    margin: 10px 0;
}

.upbtn{
    margin: 70px 0;
}

#choicesDisplay {
    padding: 10px;
    background: rgb(227, 250, 227);
    border: 1px solid rgb(171, 239, 171);
    color: rgb(9, 56, 9);
}
.remove{
    background: #C76868;
    color: #FFF;
    font-weight: bold;
    font-size: 21px;
    border: 0;
    cursor: pointer;
    display: inline-block;
    padding: 4px 9px;
    vertical-align: top;
    line-height: 100%;   
}
input[type="text"],
select{
    padding:5px;
}
</style>
@endsection

@section('content')
{{-- {!!Form::open(['method'=>'POST','action'=>'ImageController@store', 'files'=>true])!!}

<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
<div class="form-group">
{!!Form::label('image','Insert Images:')!!}
{!!Form::file('image',['class'=>'form-control','required'])!!}
 @if ($errors->has('image'))
  <span class="help-block">
      <strong class="text-danger">{{ $errors->first('image') }}</strong>
  </span>
@endif
</div>
</div>
  

<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3">
{!!Form::submit('Add Image',['class'=>'btn btn-primary'])!!}
</div>

{!!Form::close()!!} --}}
  @if (count($errors) > 0)
      
  <div class="alert alert-danger alert-dismissable text-center col-sm-offset-2 col-sm-8 col-sm-offset-2">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
      </div>
  @endif


{{-- <div class="col-sm-offset-3 col-sm-6 col-sm-offset-3"> --}}

{!!Form::open(['method'=>'POST','action'=>'ImageController@store', 'files'=>true])!!}

<div class="col-sm-offset-3 col-sm-6 col-sm-offset-3" ng-app="angularjs-starter" ng-controller="MainCtrl">
   <div class="row col-md-12"  data-ng-repeat="choice in choices">

      {!!Form::file("@{{choice.id }}" ,['ng-model'=>'choice.name','class'=>'form-control addfields','required'])!!}
       
 {{--       @if ($errors->has('image'))
        <span class="help-block">
          <strong class="text-danger">{{ $errors->first('image') }}</strong>
          </span>
        @endif   --}}
      <button class="btn btn-md btn-danger container-fluid pull-left" ng-show="$last" ng-click="removeChoice()"><i class="glyphicon glyphicon-minus"></i></button>
{{-- <br ng-show="$last"> --}}
   </div>

      <a class="addfields btn btn-md btn-success container-fluid " ng-click="addNewChoice()"><i class="glyphicon glyphicon-plus"></i> Add More... </a>

   <input type="hidden" name="total" value="@{{total}}">
       
 {{--   <div id="choicesDisplay">
      @{{ choices }} @{{total}}
   </div> --}}
{{--    <div id="choicesDisplay">
  
   </div> --}}

</div>
<div class="col-sm-offset-5 col-sm-2 col-sm-offset-5">

{!!Form::button('<i class="fa fa-cloud-upload" aria-hidden="true"></i>  Upload Image',['class'=>'btn btn-primary upbtn', 'type'=>'submit'])!!}
</div>

{!!Form::close()!!}

{{-- </div> --}}



@stop

@section('script')
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
<script type="text/javascript">
  var app = angular.module('angularjs-starter', []);

  app.controller('MainCtrl', function($scope) {

  $scope.choices = [{id: 'image'}];
  $scope.total = 1;
  $scope.addNewChoice = function() {
    var newItemNo = $scope.choices.length;
    $scope.choices.push({'id':'image'+newItemNo});
    $scope.total =  $scope.choices.length;

  };
    
  $scope.removeChoice = function() {
    var lastItem = $scope.choices.length-1;
    $scope.choices.splice(lastItem);
    $scope.total = $scope.choices.length;
  }; 

});

</script>
@stop