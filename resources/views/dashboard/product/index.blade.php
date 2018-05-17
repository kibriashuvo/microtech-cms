@extends('layouts.admin')



@section('header')
Products
@stop

@section('css')
<style type="text/css">
  td {
    max-width: 150px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
</style>
@stop



@section('content')


@if(Session::has('deleted_product'))
<div class="alert alert-info alert-dismissable text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{session('deleted_product')}}</strong>
</div>
@elseif(Session::has('created_product'))
<div class="alert alert-info alert-dismissable text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{session('created_product')}}</strong>
</div>
@elseif(Session::has('updated_product'))
<div class="alert alert-info alert-dismissable text-center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{session('updated_product')}}</strong>
</div>
@endif

<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
    <div class="panel-heading"><h4><strong>Product List</strong></h4></div>
    <div class="panel-body">

   @if(count($products)>0)

    <div class="table-responsive">

                  <table id="message_list" class="table table-bordred table-striped table-hover toggle-circle-filled">

                       <thead>

                        <th>#No.</th>     
                        <th>Image</th>
                        <th>Name</th> 
                        <th>Category</th>
                        <th>Details</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        

                       </thead>


               @php $count=0; @endphp
                      
                      <tbody>

              @foreach($products as $product)
                            @php $count++; @endphp
                             
                            
                                            {{-- modal --}}



            <div class="modal fade" id="delete{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                <h4 class="modal-title custom_align text-danger" id="Heading">Delete Product</h4>
                            </div>
                            <div class="modal-body">
                                {{-- <input type="hidden" name="path" value="{{$product->path}}"> --}}
                                <div class="alert alert-danger text-center">
                                <span class="glyphicon glyphicon-warning-sign"></span> <strong> Are you sure you want to delete this project?<br>Name: {{$product->name}}<br> Category: {{$product->pdcategory->category}}</strong>
                                </p>
                                <p>
                                <img style="height:120px; width: auto;" src="{{file_exists(public_path($product->path))? asset($product->path) : asset('admin-assets/img/no-image-available.jpg')}} ">
                                </p>
                                </div>
                                

                            </div>
                            <div class="modal-footer ">
                                {!!Form::open(['method'=>'DELETE','action'=>['ProductsController@destroy', $product->id]])!!}
                            {!!Form::button('<span class="glyphicon glyphicon-ok-sign"></span>Yes',['type'=>'submit','class'=>'btn btn-sm btn-danger'])!!}
                            {!!Form::close()!!}
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                            </div>

                    </div>
                </div>
            </div>



                            {{-- modal --}}

                                      <tr style="height:50px;">
                                          <td>{{(($products->currentPage() - 1 ) * $products->perPage()) + $count}}</td>
                                          <td><img height=50 src="{{file_exists(public_path($product->path))? asset($product->path) : asset('admin-assets/img/no-image-available.jpg')}}"></td>
                                          <td>{{$product->name}}</td>
                                          <td>{{$product->pdcategory->category}}</td>
                                          <td>{{$product->details}}</td>                    
                                      <td><a class="btn btn-info btn-sm" href="{{route('dashboard-products.edit',$product->id)}}">Edit</a></td>

                                      <td><a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$product->id}}">Delete</a></td>  
                        {{--     <td>
                            {!!Form::open(['method'=>'DELETE','action'=>['ProductsController@destroy', $product->id]])!!}
                            {!!Form::submit('Delete',['class'=>'btn btn-sm btn-danger'])!!}
                            {!!Form::close()!!}
                            </td> --}}
                                      </tr>           


            


              @endforeach
                       
                        </tbody>

                </table>
                {{$products->links()}}


@else <div class="row text-center"><h4><strong>No Product Found</strong></h4></div>
@endif
            </div>
            </div>
</div>
</div>
</div>
</div>


                        {{--   <tr></tr>
                          <tr>
                              <td>{{$product->path}}</td>
                              <td>Category: {{$product->pdcategory->category}}</td>
                              <td>Details: {{$product->details}}</td>
                          </tr> 
                        </tbody>
                  </table> 
            </div>       
        </div>
      </div> --}}








@stop