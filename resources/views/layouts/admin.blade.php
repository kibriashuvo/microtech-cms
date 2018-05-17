<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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
                            <li><a class="menu-top-active" href="{{route('dashboard.index')}}">Dashboard</a></li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Products <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-ul-li"><a href="{{route('dashboard-products.index')}}">All Products</a></li>
                                    <li class="dropdown-ul-li"><a href="{{route('dashboard-products.create')}}">Add Products</a></li>
                                    <li class="dropdown-ul-li"><a href="{{route('pdc.index')}}">Product Categories</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Projects <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-ul-li"><a href="{{route('dashboard-projects.index')}}">All Projects</a></li>
                                    <li class="dropdown-ul-li"><a href="{{route('dashboard-projects.create')}}">Add Projects</a></li>
                                    <li class="dropdown-ul-li"><a href="{{route('pjc.index')}}">Project Categories</a></li>
                                </ul>
                            </li>


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Career <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    
                                           <li class="dropdown-ul-li"><a href="{{url('/post_new_jobs')}}">Post Job Advertisement</a></li>

                                            <li class="dropdown-ul-li"><a href="{{url('/vacancy_list')}}">Vacancy List</a></li>
                                            <li class="dropdown-ul-li"><a href="{{url('/post_new_internship')}}">Post Internship Advertisement</a></li>
                                            <li class="dropdown-ul-li"><a href="{{url('/internship_list')}}">Internship List</a></li>
                             <!--               <li class="dropdown-ul-li"><a href="{{url('/view_applicants')}}">View Uploaded CV</a></li> -->

                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Gallery <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    
                                        <li class="dropdown-ul-li"><a href="{{route('dashboard-gallery.index')}}">Photo List</a></li>
                                        <li class="dropdown-ul-li"><a href="{{route('dashboard-gallery.create')}}">Add Photo</a></li>
                                        
                                </ul>
                            </li>



                   <!--         <li><a href="{{url('/view_messages')}}"> <i class="fa fa-envelope" aria-hidden="true"></i> email</a>
                            </li>
                    -->
                           <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::guest() ? 'Admin' : Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                   


                                    <li class="dropdown-ul-li">
                                    <a href="{{ route('password.change') }}">
                                        Change Password
                                    <i class="fa fa-key" aria-hidden="true"></i> 
                                    </a>
                                    </li>

                                    <li class="dropdown-ul-li">
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>


                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
          <div class="row">
              @if(Session::has('password_changed'))
                    <div class="alert alert-info" style="text-align:center;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>{{session('password_changed')}}</strong>
                    </div>
                @endif
            
            @if(Session::has('welcome'))
                <div class="col-md-12 text-center">
                    <div class="alert alert-info">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Welcome!</strong>
                    </div>
                </div>
            @endif    

            </div>

<div class="content-wrapper">
    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <h4 class="page-head-line">CMS | @yield('header')</h4>

                </div>

            </div>
           
           
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
    <script type="text/javascript">
        window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
        });
        }, 5000);
    </script>
    @yield('script')

</body>
</html>
