<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MicroTech | Career</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

       <!--    google fonts exo-->
   <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    
    
    
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">


    <style media="screen">
        .padding-top {
            padding-top: 80px;
        }
        .services .service-post {
          position: relative;
          padding: 0px;
          margin: 1%;
          border: 2px solid;
          background-color: aliceblue;
          margin-top: 0;
          margin-bottom: 20px;
          border-radius: 5px;
      }
      .services .service-post .post-inner {
        background: none;
      }
      .services .service-nav ul li a {
        font-size: 16px;
      }
      @media screen and (min-width:768px )  {
        .services .service-post {
          width: 97%;
      }
      .services .service-nav ul li .job-o-current {
        color: #fff;
      }
      }
      @media screen and (min-width:1000px )  {
        .services .service-post {
          position: relative;
          padding: 0px;
          width: 48%;
          margin: 1%;
          border: 2px solid;
          background-color: aliceblue;
          margin-top: 0;
          margin-bottom: 20px;
          border-radius: 5px;
      }
      }
      @media screen and (max-width:750px )  {
        .services .service-post {
          padding: 0px 20px;
      }
       .services .service-post .content h3 {
          margin: 20px 0px 15px;
          font-weight: 500;
      }
      }
    </style>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!--Preloader Box-->
        <div class="preloader"></div>

        <!--Main nav-->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                       <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/about_us') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ url('/projects') }}">Projects</a>
                        </li>

                        <li>
                            <a href="{{ url('/services') }}">services</a>
                        </li>
                        <li>
                            <a href="{{ url('/products') }}">Products</a>
                        </li>
                        <li class="current">
                            <a href="{{ url('/career') }}">Career</a>
                        </li>
                        <li>
                            <a href="{{ url('/gallery') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!--Main nav Ends-->
        <div class="page-title">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                        <h1>Career</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content-area">

            <div class="auto-container">
                <div class="row">

                    <!--Services-->
                    <section class="services clearfix">

                        <!--Service Nav-->
                        <nav class="service-nav col-md-3 col-sm-12">

                            <ul class="anim-5-all clearfix">
                                <li>
                                  <a class="job-o-current" href="{{ url('/career') }}">Present Vacency
                                      <span class="job-o-current" class="fa fa-angle-right pull-right"></span>
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ url('/internship') }}">Internship
                                      <span class="fa fa-angle-right pull-right"></span>
                                  </a>
                                </li>
                                <li>
                                  <a href="{{ url('/career-cv') }}">Drop your CV
                                      <span class="fa fa-angle-right pull-right"></span>
                                  </a>
                                </li>
                            </ul>

                        </nav>

                        <!--Service Posts-->
                        <div class="service-posts clearfix col-md-9 col-sm-12">

                              @if (count($datas)===0)
                                <div class="alert alert-info" role="alert">
                                      <p align="center"><strong>Sorry!!</strong> Currenly there are no internship openings!</p>
                                </div>
                              
                                @endif
                             

                            @foreach($datas as $data) 
                                                    <!--Service Post-->
                            <article class="service-post col-md-6 col-sm-6">
                                <div class="post-inner anim-5-all">
                                    <div class="content">
                                        <h3>
                                        <a href="#{{$data->id}}" data-toggle="collapse"><strong>{{$data->job_title}}</strong></a>
                                    </h3>
                                        <div class="description collapse" id="{{$data->id}}" >
                                            <p>
                                                {{$data->details}}
                                            </p>
                                        </div>
                                        <div class="deadline">
                                            <strong>Apply Deadline: {{$data->deadline}}</strong>
                                                
                                        
                                        </div>
                                    </div>
                                </div>
                            </article>

                            @endforeach
                            <div class="row col-md-6 col-md-offset-4">
                                {!! $datas->links() !!}
                            </div>

                           
                        </div>

                    </section>
                    <!--Services End-->

                </div>
            </div>

        </div>


        <!--Main Footer-->
        <footer class="main-footer">
            <!--Upper-->
            <div class="upper anim-5-all">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Tags-->
                        <article class="col-md-3 col-sm-6 col-xs-12 animated" data-animation="fadeInUp" data-delay="100">

                            <img src="http://www.microtechbd.com/images/iso.png" alt="Urs Certification">
                        </article>
                        <!--Tags End-->

                        <!--Twitter Feeds-->
                        <article class="col-md-3 col-sm-6 col-xs-12 animated" data-animation="fadeInUp" data-delay="150">
                            <div id="map" style="width:100%;height:300px">
                                <iframe style="width:100%;height:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3351081186597!2d90.40831401498782!3d23.73542658459682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f5ae86138d%3A0x9164dfa8721de836!2sMahtab+Center%2C+Shahid+Syed+Nazrul+Islam+Sharani%2C+Dhaka!5e0!3m2!1sbn!2sbd!4v1481608826325" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                            </div>
                            <!-- <script>
                          var map;
                          function initMap() {
                            map = new google.maps.Map(document.getElementById('map'), {
                              //  center: {lat: 23.7099, lng: 90.4071},
                              center:{lat: 23.7354266, lng: 90.408314},
                              zoom: 8
                            });
                          } -->
                            </script>
                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQl9gZ_WwSJnMWGWMvMwuF-UpK7xLPuTg&callback=initMap" async defer></script>



                        </article>
                        <!--Twitter Feeds End-->

                        <!--About Us-->
                        <article class="col-md-6 col-sm-12 col-xs-12 animated" data-animation="fadeInUp" data-delay="0">
                            <div class="widget about footer-bottom">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="description">
                                            <h4><u>Corporate Office</u></h4>
                                            <p>177, Shahid Syed Nazrul Islam Sarani</p>
                                            <p>Mahatab Centre, Floor # 4th, Suit # 8</p>
                                            <p>Bijoynagar, Dhaka-1000</p>
                                            <p>Bangladesh.</p>
                                            <p>Phone : +880 2 9362112, +880 2 9352263</p>
                                            <p>Direct : +880 2 9348271</p>
                                            <p>Fax : +880 2 8363742 </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="description">
                                            <h4><u>United Kingdom Office</u></h4>
                                            <p>Microtech Global Ltd.</p>
                                            <p>1 Mollis House, 2A Gale street</p>
                                            <p>London E3 3RW</p>
                                            <p>Phone : +880 2 9362112, +880 2 9352263</p>
                                            <p>Direct : +880 2 9348271</p>
                                            <p>Fax : +880 2 8363742 </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="social text-center">
                                    <a href="http://www.facebook.com" class="fa fa-facebook-f"></a> &ensp;
                                    <a href="http://www.twitter.com" class="fa fa-twitter"></a> &ensp;
                                    <a href="https://plus.google.com/collections/featured" class="fa fa-google-plus"></a> &ensp;
                                    <a href="https://www.flickr.com/" class="fa fa-flickr"></a> &ensp;
                                    <a href="https://www.linkedin.com/" class="fa fa-linkedin"></a> &ensp;
                                    <a href="https://www.pinterest.com/" class="fa fa-pinterest"></a>
                                </div>
                            </div>
                        </article>
                        <!--About Us End-->


                    </div>
                </div>
            </div>

            <!--Bottom-->
            <div class="bottom">
                <div class="auto-container">
                    &copy; 2016 <a class="elixeur" style="text-decoration:none;" target="_blank" href="http://www.Elixeur.com">Elixeur</a>
                </div>
            </div>


        </footer>


        <!--Scroll to top-->
        <div id="return-to-top" class="go-to-top img-circle anim-3 fa fa-angle-up"></div>

    </div>
    <!--End pagewrapper-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/script.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var wrap = $("body");

        wrap.on("scroll", function (e) {

            if (this.scrollTop > 147) {
                wrap.addClass("padding-top");
            } else {
                wrap.removeClass("padding-top");
            }

        });
        // ===== Scroll to Top ====
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200); // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200); // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function () { // When arrow is clicked
            $('body,html').animate({
                scrollTop: 0 // Scroll to top of body
            }, 500);
        });
    </script>
    <!--End of Tawk.to Script-->


</body>

</html>
