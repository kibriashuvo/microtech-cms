<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Reply</title>
    
     <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    
    <!-- For the plug-in dependencies -->
    <script type="text/javascript" src='http://code.jquery.com/jquery-latest.min.js'></script>
    
    
    <!-- For Bootstrap UI Button -->
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    
    
    <script type="text/javascript" src="{{ URL::asset('js/multiple-emails.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/multiple-emails.css') }}" />

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

    </head>

    <body>
        
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
                    <button type="submit" value='{{$data->id}}' name="back" class="btn btn-info pull-right" >Back</button>


                     
                    </form>
                                        

               

                        
                   
                    
                        
                     </div>
                     
                    
                    
                        
                      </div>
                    
                        
                        
                     
            </div>
        </div>
        
                </div>
            </div>
        </div>
    
    <br/>
    




    </body>