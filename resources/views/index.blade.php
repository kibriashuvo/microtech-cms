<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MicroTech | Home Page</title>
    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/rev-settings.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--    google fonts exo-->
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">


    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <style media="screen">
        * {
            font-family: 'Exo', sans-serif;
        }
        
        .carousel {
            height: 600px;
        }
        
        .padding-top {
            padding-top: 80px;
        }
        
        .modal-body .col-md-2 {
            background-color: #ddd;
            padding: 40px;
        }
        
        .modal-container {
            max-width: 1100px;
            margin: 70px auto;
        }
        
        .our-services .col-md-2 {
            margin: 5px 0;
            margin-right: 15px;
            background-color: #ddd;
            height: 100px;
        }
        
        .our-history h1 {
            font-style: italic;
            font-family: "cursive-font";
        }
        
        .item-1 {
            position: relative;
            height: 100%;
            background-image: url('images/slide/slider-1.jpg');
            background-size: cover;
        }
        
        .item-2 {
            background-image: url('images/slide/slider-2.jpg');
            background-size: cover;
            height: 100%;
        }
        
        .item-1:before,
        .item-2:before,
        .item-3:before {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-color: #000;
        }
        
        .item-3 {
            position: relative;
            background-image: url('images/slide/slider-3.jpg');
            background-size: cover;
            height: 100%;
        }
        
        .carousel-inner {
            height: 100%;
        }
        
        .carousel-inner .col-md-5 {
            margin-top: 150px;
        }
        
        .span-1 {
            display: block;
            color: #fff;
            background: bisque;
            padding: 8px 10px;
            margin-bottom: -20px;
            font-weight: 800;
            /*            font-family: 'Raleway', sans-serif;*/
            font-family: 'Exo', sans-serif;
            font-size: 37px;
            background-color: #164377;
            text-transform: uppercase;
        }
        
        .carousel-indicators {
            z-index: 9999;
            margin-bottom: 70px;
        }
        
        .carousel p {
            margin-top: 31px;
            color: #fff;
            font-size: 16px;
        }
        
        .one {
            background-color: #5c8884;
            height: 50px;
            padding: 0;
        }
        
        .two {
            background-color: #22312f;
            height: 50px;
            padding: 0;
        }
        
        .our-history {
            background-image: url('images/we-are.jpg');
            background-size: cover;
        }
        /*.principals {
        height:450px;
        padding: 30px 0;
        overflow-y: scroll;
      }*/
        
        .principal {
            border: 2.5px solid #164377;
            /*        padding: 10px;*/
            transition: all .5s;
            position: relative;
            bottom: 0;
            padding: 14% 0;
            margin-bottom: 5px;
            font-size: 20px;
            height: 150px;
            color: #131313;
            /*            margin: 5px;*/
        }
        
        .principal small {
            color: #000;
        }
        
        .principal:hover {
            position: relative;
            bottom: 3px;
        }
        
        .img-responsive {
            width: 100%;
        }
        
        
/*
        @media screen and (max-width: 412px)
        .our-services .col-xs-12 {
            width: 100%;
            margin: 3px;
            padding: 6% 0;
        }
*/
        @media screen and (min-width: 412px)
        .our-services .col-sm-6 {
            width: 44%;
            margin: 3px;
            padding: 6% 0;
        }
        
        @media screen and (min-width:768px) {
            .our-services .col-sm-6 {
                width: 44%;
                margin: 3px;
                padding: 4% 0;
            }
        }
        @media screen and (min-width:992px) {
            .our-services .col-md-4 {
                width: 31.3%;
                margin: 1%;
            }
        }
        @media screen and (min-width:1024px) {
            .our-services .col-md-4 {
                width: 30%;
                margin: 1%;
            }
        }
       
        
        
        
        
        
        

  
        @media screen and (max-width: 1150px) {
            .single-what-we-do {
                margin-bottom: 15px;
            }
            .single-what-we-do .content {
                padding-top: 10%;
            }
        }
        
        @media screen and (max-width: 700px) {
            .carousel {
                height: 450px;
            }
            .single-what-we-do .img-wrap,
            .single-what-we-do .content {
                width: 100%;
            }
            .single-what-we-do .img-wrap img {
                width: 98%;
            }
            .our-services {
                padding: 10px;
            }
            .our-services.style-three {
                padding-bottom: 50px;
            }
            .single-what-we-do .content {
                padding-top: 0;
            }
            .owl-carousel .owl-item img:hover {
                transform: scale(2);
            }
            /*.our-services .col-md-2 {
        margin-right: 15%;
      }*/
        }
        
        @media screen and (max-width: 450px) {
            /*.carousel  {
           height: 440px;
      }*/
            .carousel-indicators {
                margin-bottom: 0;
            }
            .span-1 {
                font-size: 24px;
            }
            .featured-services .container-box {
                margin: 0;
            }
        }
        
        .slide-item {
            color: #fff;
            position: relative;
        }
        
        .slide-item p {
            border: 2px solid #164377;
            background-color: #fff;
            color: #000;
            font-size: 20px;
            margin: 10px;
            padding: 9% 0;
            position: relative;
            text-align: center;
            height: 140px;
        }
        
        .slide-item p:hover {
            background: #164377;
            color: #fff;
        }
        
        .principal:hover small {
            color: #fff;
        }
        
        @media screen and (max-width:800px) {
            .slide-item p {
                font-size: 20px;
            }
        }
        
        .client-logos h1,
        .featured-services h1 {
            text-transform: uppercase;
        }
        
        .principal:hover {
            background-color: #164377;
            color: #fff;
        }
        
        .btn-content {
            margin: 30px 0;
        }
        
        .btn-content>a {
            padding: 15px;
            font-size: 15px;
            border: 2px solid #164377;
            background: #fff;
            color: #164377;
            border-radius: 5px;
            transition: all .3s;
        }
        
        .btn-content>a:hover {
            background: #164377;
            color: #fff;
        }
        
    </style>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<div id="google_translate_element" style="position: fixed;bottom: 0;left: 0;z-index: 9999"></div>
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
                        <li class="current">
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
                        <li>
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
        <!-- slider starts here -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item item-1 active">
                    <div class="container">
                        <div class="row">
                            <!-- <div class="col-md-5 animated bounceInUp">
                         <h1 class="text-center"><span class="span-1">MAKE YOUR DREAM</span><br><span class="span-1">WITH US</span></h1>
                       </div> -->
                        </div>
                    </div>
                </div>
                <div class="item item-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 col-md-push-7 animated bounceInUp">
                                <h1 class="text-center"><span class="span-1">Invest today</span><br><span class="span-1">to power</span><br><span class="span-1"> tomorrow</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item item-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 animated bounceInUp">
                                <h1 class="text-center"><span class="span-1">Make your </span><br><span class="span-1">dream</span><br><span class="span-1">with us</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Featured Services-->
        <section class="featured-services">
            <div class="auto-container">

                <!--Box Container-->
                <div class="container-box anim-5-all">
                    <div class="bar bg-white"></div>
                    <header class="sec-title">
                        <span class="double-line"></span> &ensp;
                        <h1>We Are Microtech</h1> &ensp;
                        <span class="double-line"></span>
                        <p>
                            One can always rely on us. We are
                        </p>
                    </header>

                    <div class="col-lg-6 single-what-we-do clearfix">
                        <div class="img-wrap ">
                            <img class="img-responsive" src="images/aa.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Pioneer in Power Industry</h3>
                            <!-- <p>
                            Lorem Ipsum is simply dummy the printing and typesetting industry. Lorem Ipsum
                        </p> -->
                        </div>
                    </div>
                    <div class="col-lg-6 single-what-we-do clearfix">
                        <div class="img-wrap ">
                            <img class="img-responsive" src="images/aa.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Always on schedule</h3>
                            <!-- <p>
                            Lorem Ipsum is simply dummy the printing and typesetting industry. Lorem Ipsum
                        </p> -->
                        </div>
                    </div>
                    <div class="col-lg-6 single-what-we-do clearfix content-left">
                        <div class="img-wrap ">
                            <img class="img-responsive" src="images/aa.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Provide Cost Efficient Solutions</h3>
                            <!-- <p>
                            Lorem Ipsum is simply dummy the printing and typesetting industry. Lorem Ipsum
                        </p> -->

                        </div>
                    </div>
                    <div class="col-lg-6 single-what-we-do clearfix content-left">
                        <div class="img-wrap ">
                            <img class="img-responsive" src="images/aa.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Care for the Environment </h3>
                            <!-- <p>
                            Lorem Ipsum is simply dummy the printing and typesetting industry. Lorem Ipsum
                        </p> -->
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
                <!--Box Container End-->

            </div>
        </section>
        <!--Testimonials-->
        <section class="testimonials" style="display:none;">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Section Title-->
                    <header class="sec-title clearfix">
                        <span class="double-line"></span> &ensp;
                        <h1>Testimonials</h1> &ensp;
                        <span class="double-line"></span>
                    </header>
                    <div class="quote-icon theme-color">
                        <span class="fa fa-quote-left"></span>
                    </div>

                    <!--Slider-->
                    <div class="slider clearfix">

                        <!--Slide Item-->
                        <article class="slide-item anim-5-all">
                            <figure class="avatar">
                                <img src="images/resource/testimonial-avatar-1.jpg" alt="" title="">
                            </figure>
                            <div class="content">
                                <span class="curve"></span>
                                <div class="quote-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.
                                </div>
                                <div class="quote-author">
                                    <strong class="theme-color">Grey White,</strong> CEO/Google Inc
                                </div>
                            </div>
                        </article>
                        <!--Slide Item-->
                        <article class="slide-item anim-5-all">
                            <figure class="avatar">
                                <img src="images/resource/testimonial-avatar-2.jpg" alt="" title="">
                            </figure>
                            <div class="content">
                                <span class="curve"></span>
                                <div class="quote-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.
                                </div>
                                <div class="quote-author">
                                    <strong class="theme-color">Grey White,</strong> CEO/Google Inc
                                </div>
                            </div>
                        </article>
                        <!--Slide Item-->
                        <article class="slide-item anim-5-all">
                            <figure class="avatar">
                                <img src="images/resource/testimonial-avatar-1.jpg" alt="" title="">
                            </figure>
                            <div class="content">
                                <span class="curve"></span>
                                <div class="quote-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.
                                </div>
                                <div class="quote-author">
                                    <strong class="theme-color">Grey White,</strong> CEO/Google Inc
                                </div>
                            </div>
                        </article>
                        <!--Slide Item-->
                        <article class="slide-item anim-5-all">
                            <figure class="avatar">
                                <img src="images/resource/testimonial-avatar-2.jpg" alt="" title="">
                            </figure>
                            <div class="content">
                                <span class="curve"></span>
                                <div class="quote-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.
                                </div>
                                <div class="quote-author">
                                    <strong class="theme-color">Grey White,</strong> CEO/Google Inc
                                </div>
                            </div>
                        </article>
                        <!--Slide Item-->
                        <article class="slide-item anim-5-all">
                            <figure class="avatar">
                                <img src="images/resource/testimonial-avatar-1.jpg" alt="" title="">
                            </figure>
                            <div class="content">
                                <span class="curve"></span>
                                <div class="quote-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.
                                </div>
                                <div class="quote-author">
                                    <strong class="theme-color">Grey White,</strong> CEO/Google Inc
                                </div>
                            </div>
                        </article>
                        <!--Slide Item-->
                        <article class="slide-item anim-5-all">
                            <figure class="avatar">
                                <img src="images/resource/testimonial-avatar-2.jpg" alt="" title="">
                            </figure>
                            <div class="content">
                                <span class="curve"></span>
                                <div class="quote-text">
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.
                                </div>
                                <div class="quote-author">
                                    <strong class="theme-color">Grey White,</strong> CEO/Google Inc
                                </div>
                            </div>
                        </article>

                    </div>
                    <!--Slider End-->

                </div>
            </div>
        </section>


        <!--Our History-->
        <section class="our-history parallax-section text-center">
            <h1>We are since 1979</h1>
        </section>

        <!--Client Logos-->
        <section class="client-logos">
            <header class="sec-title">
                <span class="double-line"></span> &ensp;
                <h1>Our Clients</h1> &ensp;
                <span class="double-line"></span>
                <p>
                    These are some of the companies we have previously worked with
                </p>
            </header>
            <!-- <div class="your-class">
          <div>your content</div>
          <div>your content</div>
          <div>your content</div>
        </div> -->
            <div class="auto-container">
                <div class="row anim-5-all clearfix">

                    <div class="your-class responsive">
                        <div class="slide-item">
                            <p>Bangladesh Power Development
                                <br> Board</p>
                        </div>
                        <div class="slide-item">
                            <p>Rural Electrification
                                <br> Board</p>
                        </div>
                        <div class="slide-item">
                            <p>West Zone Power
                                <br> Distribution Co., Ltd.</p>
                        </div>
                        <div class="slide-item">
                            <p>Barind Multipurpose Dev
                                <br> Authority </p>
                        </div>
                        <div class="slide-item">
                            <p>Bangladesh Chemical Industries
                                <br> Corp</p>
                        </div>
                        <div class="slide-item">
                            <p>Directorate General Defence
                                <br> Purchase</p>
                        </div>
                        <div class="slide-item">
                            <p>Dhaka Power Distribution
                                <br>Co., Ltd.</p>
                        </div>
                        <div class="slide-item">
                            <p>Dhaka Electric Supply
                                <br> Company Ltd.</p>
                        </div>
                        <div class="slide-item">
                            <p>Power Grid Co., of
                                <br> Bangladesh Ltd</p>
                        </div>
                        <div class="slide-item">
                            <p>Rural Power Company
                                <br> Ltd</p>
                        </div>
                        <div class="slide-item">
                            <p>Meghnaghat Power Plant
                                <br> Ltd</p>
                        </div>
                        <div class="slide-item">
                            <p>Haripur Power Plant
                                <br> Ltd.</p>
                        </div>
                        <div class="slide-item">
                            <p>Enia Sa,
                                <br> Greece</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="our-services style-three">
            <header class="sec-title">
                <span class="double-line"></span> &ensp;
                <h1>OUR PRINCIPALS</h1> &ensp;
                <span class="double-line"></span>
            </header>
            <div class="cotainer">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p style="padding-bottom: 15px">
                            The principal organizations of MICROTECH have been contributing tremendously to improve its service line since its inception. It's being patronized by followings overseas principals
                        </p>
                    </div>
                </div>
            </div>
            <div class="container principals text-center">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 principal">
                        Gas Turbine Control Corporation
                        <br>
                        <small>USA</small>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 principal">
                        Bridgeport Associates Inc
                        <br>
                        <small>USA</small>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 principal">
                        Allied Dynamic Corporation
                        <br>
                        <small>USA</small>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 principal">
                        P C Industries
                        <br>
                        <small>USA</small>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 principal">
                        Tyco Valves And Controls Distribution Ltd.
                        <br>
                        <small>UK</small>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 principal">
                        Microtech Global Ltd.
                        <br>
                        <small>UK</small>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-content" style="width:100%;text-align:center">
                            <a href="principal-dtls.html">Show more</a>
                        </div>
                    </div>
                </div>
            </div>




            <div style="display:none;" class="auto-container">
                <div class="container-box anim-5-all clearfix">

                    <div class="service-style-three-wrap">
                        <div class="col-lg-6 single-service-style-three skew-right-one">
                            <div class="border">
                                <i class="flaticon flaticon-draft"></i>
                                <div class="content">
                                    <h4>Lorem</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and hindustry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-service-style-three skew-left-one ">
                            <div class="border">
                                <i class="flaticon flaticon-barrow"></i>
                                <div class="content">
                                    <h4>Ipsum</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and hindustry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-service-style-three skew-right-two">
                            <div class="border">
                                <i class="flaticon flaticon-houses30"></i>
                                <div class="content">
                                    <h4>Lorem</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and hindustry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-service-style-three skew-left-two">
                            <div class="border">
                                <i class="flaticon flaticon-forklift2"></i>
                                <div class="content">
                                    <h4>Ipsum</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and hindustry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-service-style-three skew-right-one">
                            <div class="border">
                                <i class="flaticon flaticon-water78"></i>
                                <div class="content">
                                    <h4>Lorem</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and hindustry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 single-service-style-three skew-left-one">
                            <div class="border">
                                <i class="flaticon flaticon-roller1"></i>
                                <div class="content">
                                    <h4>Ipsum</h4>
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and hindustry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button style="float:right;margin-top:60px;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            Watch all Principles
                        </button>
                    </div>
                </div>
            </div>
        </section>


        <!--Project Three Column-->
        <section style="margin-top:60px;display:none;" class="project three-col  parallax-section text-center" style="background-image:url(images/parallax/banner-bg-1.jpg);">
            <div class="auto-container">
                <div class="row">
                    <!--Section Title-->
                    <header class="sec-title">
                        <span class="double-line"></span> &ensp;
                        <h1>Project</h1> &ensp; <span class="double-line"></span>
                    </header>
                    <!--Filters-->
                    <ul class="filter-tabs style-two anim-3-all">
                        <li class="filter" data-role="button" data-filter="all">All</li>
                        <li class="filter" data-role="button" data-filter="school">School</li>
                        <li class="filter" data-role="button" data-filter="bridge">Bridge</li>
                        <li class="filter" data-role="button" data-filter="architecture">Architecture</li>
                        <li class="filter" data-role="button" data-filter="house">House</li>
                        <li class="filter" data-role="button" data-filter="mall">Mall</li>
                        <li class="filter" data-role="button" data-filter="flat">Flat</li>
                    </ul>

                    <!--Items Container-->
                    <div class="filter-list items-container clearfix">

                        <!--Item-->
                        <div class="mix mix_all mall house architecture bridge">
                            <figure class="image">
                                <img src="images/resource/project-image-1.jpg" alt="" title="">
                            </figure>
                            <div class="overlay anim-5-all">
                                <div class="pop-icon">
                                    <a href="images/resource/project-image-1.jpg" data-rel="prettyPhoto" title="Architecture" class="fa fa-camera"></a>
                                </div>
                                <div class="title">
                                    <span>Architecture</span>
                                </div>
                                <div class="link-icon">
                                    <a href="single-project.html" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>

                        <!--Item-->
                        <div class="mix mix_all flat mall house bridge school">
                            <figure class="image">
                                <img src="images/resource/project-image-2.jpg" alt="" title="">
                            </figure>
                            <div class="overlay anim-5-all">
                                <div class="pop-icon">
                                    <a href="images/resource/project-image-2.jpg" data-rel="prettyPhoto" title="House" class="fa fa-camera"></a>
                                </div>
                                <div class="title">
                                    <span>House</span>
                                </div>
                                <div class="link-icon">
                                    <a href="single-project.html" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>

                        <!--Item-->
                        <div class="mix mix_all flat mall architecture bridge school">
                            <figure class="image">
                                <img src="images/resource/project-image-3.jpg" alt="" title="">
                            </figure>
                            <div class="overlay anim-5-all">
                                <div class="pop-icon">
                                    <a href="images/resource/project-image-3.jpg" data-rel="prettyPhoto" title="Mall" class="fa fa-camera"></a>
                                </div>
                                <div class="title">
                                    <span>Mall</span>
                                </div>
                                <div class="link-icon">
                                    <a href="single-project.html" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>

                        <!--Item-->
                        <div class="mix mix_all flat mall house architecture bridge">
                            <figure class="image">
                                <img src="images/resource/project-image-4.jpg" alt="" title="">
                            </figure>
                            <div class="overlay anim-5-all">
                                <div class="pop-icon">
                                    <a href="images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a>
                                </div>
                                <div class="title">
                                    <span>Bridge</span>
                                </div>
                                <div class="link-icon">
                                    <a href="single-project.html" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>

                        <!--Item-->
                        <div class="mix mix_all mall house architecture bridge school">
                            <figure class="image">
                                <img src="images/resource/project-image-5.jpg" alt="" title="">
                            </figure>
                            <div class="overlay anim-5-all">
                                <div class="pop-icon">
                                    <a href="images/resource/project-image-5.jpg" data-rel="prettyPhoto" title="School" class="fa fa-camera"></a>
                                </div>
                                <div class="title">
                                    <span>School</span>
                                </div>
                                <div class="link-icon">
                                    <a href="single-project.html" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>

                        <!--Item-->
                        <div class="mix mix_all flat house architecture bridge school">
                            <figure class="image">
                                <img src="images/resource/project-image-6.jpg" alt="" title="">
                            </figure>
                            <div class="overlay anim-5-all">
                                <div class="pop-icon">
                                    <a href="images/resource/project-image-6.jpg" data-rel="prettyPhoto" title="Flat" class="fa fa-camera"></a>
                                </div>
                                <div class="title">
                                    <span>Flat</span>
                                </div>
                                <div class="link-icon">
                                    <a href="single-project.html" class="fa fa-link"></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a href="#" class="theme-btn full-btn">View All</a>

                </div>
            </div>
        </section>

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
                            <a href="https://www.google.com.bd/maps/place/Mahtab+Center,+Shahid+Syed+Nazrul+Islam+Sharani,+Dhaka/@23.7351387,90.4075207,17z/data=!4m5!3m4!1s0x3755b8f5ae86138d:0x9164dfa8721de836!8m2!3d23.7354266!4d90.4105027?authuser=1">
                                <div id="map" style="width:100%;height:300px">
                                    <iframe style="width:100%;height:100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.3351081186597!2d90.40831401498782!3d23.73542658459682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f5ae86138d%3A0x9164dfa8721de836!2sMahtab+Center%2C+Shahid+Syed+Nazrul+Islam+Sharani%2C+Dhaka!5e0!3m2!1sbn!2sbd!4v1481608826325" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>

                            </a>
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
                    &copy; 2016 Copyright Elixeur
                </div>
            </div>


        </footer>
        <!--    go-to-top-->

        <!--Scroll to top-->
        <div id="return-to-top" class="img-circle anim-3 fa fa-angle-up"></div>

    </div>
    <!--End pagewrapper-->


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/revolution.min.js"></script>
    <script src="js/rev-slider.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/script.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        $(document).ready(function () {
            $('.carousel').carousel({
                interval: 2000
            });
            $('.your-class').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                prevArrow: '',
                nextArrow: '',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
      },
                    {
                        breakpoint: 730,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: true
                        }
      },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
      },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
            });
        });
        // ===== Scroll to Top ==== 
        $(window).scroll(function () {
            if ($(this).scrollTop() > 700) { // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(100); // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(100); // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function () { // When arrow is clicked
            $('body,html').animate({
                scrollTop: 0 // Scroll to top of body
            }, 500);
        });
    </script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
}
</script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        

</body>

</html>