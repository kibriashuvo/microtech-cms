@extends('layouts.admin')



@section('header')
Photo List
@stop

@section('content')
	

	@if(Session::has('added_image'))
	<div class="alert alert-info alert-dismissable text-center">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<strong>{{session('added_image')}}</strong>
	</div>
	@elseif(Session::has('deleted_image'))
	<div class="alert alert-info alert-dismissable text-center">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>{{session('deleted_image')}}</strong>
	</div>
	@endif





		@if(count($images)>0)
		<div class="row container-fluid">
			@foreach($images as $image)



{{-- modal --}}

            <div class="modal fade" id="delete{{$image->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h4 class="modal-title custom_align text-danger" id="Heading">Delete Product</h4>
                            </div>
                            <div class="modal-body">
                                {{-- <input type="hidden" name="path" value="{{$product->path}}"> --}}
                                <div class="alert alert-danger text-center">
                                <p>
                                <span class="glyphicon glyphicon-warning-sign"></span> <strong> Are you sure you want to delete this image?</strong>
                                </p>
                                <p>
                                <img style="height:120px; width: auto;" src="{{file_exists(public_path($image->path))? asset($image->path) : asset('/gallery-images/no-image-available.jpg')}} ">
                                </p>
                                </div>
                            </div>
                            <div class="modal-footer ">
                            {!!Form::open(['method'=>'DELETE','action'=>['ImageController@destroy', $image->id]])!!}
                            <p class="row container-fluid">
                            {!!Form::button('<span class="glyphicon glyphicon-ok-sign"></span>Yes',['type'=>'submit','class'=>'btn btn-md btn-danger col-sm-2 pull-right'])!!}
                            {!!Form::close()!!}
                                <button type="button" class="btn btn-md btn-default col-sm-2 pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                            </div>
                            </p>

                    </div>
                </div>
            </div>

{{-- modal --}}



			  <div class="col-sm-6 col-md-3">
			    <div class="thumbnail" style="border: 1px solid #164377;">
			      <img style="height: 150px;" class="img-responsive" src="{{file_exists(public_path($image->path))? asset($image->path) : asset('/gallery-images/no-image-available.jpg')}}  " alt="...">
			      <div class="caption">
			        {{-- <h3>Thumbnail label</h3> --}}
			        {{-- <p>...</p> --}}
			        <div class="row container-fluid"">
			        {{-- <a href="#" class="btn btn-primary pull-left" role="button">Button</a> --}}
					<a class="btn btn-danger pull-right" data-toggle="modal" data-target="#delete{{$image->id}}">Delete</a>
			        </div>
			      </div>
			    </div>
			  </div>
			@endforeach
		</div>
		<div class="container-fluid col-md-offset-5 col-md-5">
		{{$images->links()}}
		</div>
		@else
			<div class="text-center">
				No image found.
			</div>
		@endif


 @endsection 