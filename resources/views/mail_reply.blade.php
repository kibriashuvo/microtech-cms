
	
	
	


@extends('layouts.admin')
@section('header')
EMAIL REPLY
@endsection
@section('content')





		
<div class='container'>
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h4><strong>Compose Mail</strong></h4></div>

                <div class="panel-body">
                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/send_mail') }}" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                <div class='row'>
                    

                    <div class='form-group'>
                        <label for="body" class="col-sm-2 control-label" style="text-align:center;">To:</label>
                          <div class="col-sm-9">                            
                            <input type='text' id='example_emailBS' name='mails' class='form-control' value='["{{$data->email}}"]' placeholder="Enter Recepients">
                        </div>
                    </div>
                       
            <!--  test---            
                        <div class='col-sm-offset-2 col-sm-4'>
                            <h4>Current email addresses</h4>
                            <pre id='current_emailsBS'></pre>
                        </div>

            -->
    
                    <div class="form-group">
                          <label for="subject" class="col-sm-2 control-label" style="text-align:center;">Subject</label>
                          <div class="col-sm-9">                              
                            <input type="text" class="form-control" name="subject" placeholder="Enter your subject">
                            <input type="hidden" name="id" value="{{$data->id}}">
                        </div>
                    </div>                
                  
                    
                     <div class="form-group">
                          <label for="body" class="col-sm-2 control-label" style="text-align:center;">Message</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" rows="15" name="mail_body" placeholder="Type Here" required></textarea>                       
                              
                             
                          </div>  
                    </div>
                    
                    
                  <div class="form-group">
                      <div class="col-sm-2">

                      </div>
                    <div class="col-md-9">
                    	
                  	<button type="submit" value='send' name="send" class="btn btn-success pull-right" ><span class="glyphicon glyphicon-envelope"></span> Send</button> 
					
					</form>

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/back_to_view') }}" enctype="multipart/form-data">
                                {!! csrf_field() !!}
					<button type="submit" value='{{$data->id}}' name="back" class="btn btn-info " >Back</button>


                     
					</form>
                                      	

               

                    	
                   
                    
                    	
                   	 </div>
                     
                    
                    
                        
                      </div>
                    
                        
                        
                     
			</div>
		</div>
        
                </div>
            </div>
        </div>
	
	<br/>
	




@endsection


@section('script')




  <script type="text/javascript" src="{{ URL::asset('js/multiple-emails.js') }}"></script>
   

  <script type="text/javascript">
  
    //Plug-in function for the bootstrap version of the multiple email
    $(function() {
      //To render the input device to multiple email input using BootStrap icon
      $('#example_emailBS').multiple_emails({position: "bottom"});
      //OR $('#example_emailBS').multiple_emails("Bootstrap");
      
      //Shows the value of the input device, which is in JSON format
      $('#current_emailsBS').text($('#example_emailBS').val());
      $('#example_emailBS').change( function(){
        $('#current_emailsBS').text($(this).val());
      });
    });
    
    
  </script>


  <!-- For the plug-in dependencies -->

@endsection


@section('css')
  <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
  
 <link rel="stylesheet" href="{{ URL::asset('css/multiple-emails.css') }}" />
@endsection