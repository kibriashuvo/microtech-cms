@extends('layouts.admin')
@section('header')
POST INTERNSHIP ADVERTISEMENT 
@endsection
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>Post Internship Advertisement</strong></h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/save_internship_details') }}" enctype="multipart/form-data">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Job Title</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" required="required">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <div class="form-group">  
                                  <textarea class="form-control" rows="15" id="details" name="details"></textarea>
                                </div>
                            </div>
                        </div>

                      
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Deadline</label>

                            <div class="col-md-6">
                                 <input type="date" name="deadline" required="true">
                            </div>
                        </div>   


                         

                        
                         <div class="form-group">
                           <div class="col-md-8 col-md-offset-4">
                            
                            
                                <button type="submit" class="btn btn-primary btn-warning col-md-3" value="update">
                                    POST OFFER
                                </button>

                                </form>
                                 
                                 <form  method="GET" action="{{ url('/internship_list') }}">
                                <button type="submit" class="btn btn-primary btn-info col-md-offset-1 col-md-3">BACK
                                </button>


                            </form>

                            </div>
                        </div>

                     </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection