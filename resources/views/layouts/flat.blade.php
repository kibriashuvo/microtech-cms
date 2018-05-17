<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>MicroTech | @yield('header')</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="{{asset('admin-assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="{{asset('admin-assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="{{asset('admin-assets/css/style.css')}}" rel="stylesheet" />

    @yield('css')
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
 
 <style type="text/css">
     .navbar {min-height:100px !important;}
 </style>
</head>
<body>
    
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('dashboard.index')}}">

                    <img class="logo" src="{{asset('admin-assets/img/logo1.png')}}" />
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">

                        <li class="dropdown">
                            {{-- <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a> --}}
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        {{-- <img src="{{asset('admin-assets/img/64-64.jpg')}}" alt="" class="img-rounded" /> --}}
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Guha Corp.</h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                
                                <hr />
                                {{-- <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>
 --}}
                            </div>
                        </li>


                    </ul>
                </div>
            </div>



        </div>
    </div>

    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top-active" href="{{url('/login')}}">Login</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->

    
<div class="content-wrapper">
    
        <div class="container">
           
           
            <div class="row">
                
                @yield('content')
                
            </div>
           
            {{-- row.col-md-6.notice-board --}}
            <hr />

                {{-- class="text-center alert alert-warning"-social-buttons --}}
     
                {{-- div class="table-responsive"                     --}}

                {{-- class="col-md-6"-"alert alert-danger" --}}

        </div>
</div>


    <!-- CONTENT-WRAPPER SECTION END-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 Microtech
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="{{asset('admin-assets/js/jquery-1.11.1.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{asset('admin-assets/js/bootstrap.js')}}"></script>

    @yield('script')

</body>
</html>
