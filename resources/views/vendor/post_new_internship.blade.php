

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">






<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>Post Internship Advertisement</strong></h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/save_job_details') }}" enctype="multipart/form-data">
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
                                  <textarea class="form-control" rows="5" id="details" name="details"></textarea>
                                </div>
                            </div>
                        </div>

                      
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Deadline</label>

                            <div class="col-md-6">
                                 <input type="date" name="deadline">
                            </div>
                        </div>   


                         

                        
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>POST OFFER
                                </button>
                            </div>
                        </div>

                     </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






