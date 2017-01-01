<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MicroTech | About Us</title>
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

    <style media="screen">
     .navbar-nav>li {
       text-transform: uppercase;
     }
      .padding-top {
        padding-top: 80px;
      }
      .social {
        width: 100%;
        text-align: center;
      }
      .fa {
        font-size: 20px;
        margin: 20px 20px 0 2px;
      }
      .margin-0 {
        margin: 0;
      }
      .main-footer .social {
        width: 50%;
      }
      .main-footer  img {
        width: 70%;
      }
      .text p {
        text-align: left;
      }
      .desc {
        margin-bottom: 30px;
      }
      .about-us .who-we-are .col-md-12 {
        margin-bottom: 30px;
      }
      @media screen and (max-width: 700px) {

          .main-header {
            padding-right: 0px;
          }
          .about-us .who-we-are {
            padding-left: 15px;
          }
          .who-we-are h2,.page-title {
            text-align: center;
          }
          .main-footer img {
            width: 70%;
            margin-top: 0;
          }

      }
      @media screen and (max-width: 400px) {
          .social {
            width: 30%;
            margin-bottom: 20px;
          }
      }
      @media screen and (min-width:770px )   {

        .text p {
        font-size: 13px;
        }
      }
      @media screen and (min-width:990px )   {

        .text p {
        font-size: 15px;
        }
        .m-b {
          margin-bottom: 20px;
        }
      }
      @media screen and (min-width:1200px )   {
        .text {
          min-height: 300px;
          display: table;
        }
        .text p {
          display: table-cell;
          vertical-align: middle;
          font-size: 15px;
        }
      }
      @media screen and (max-width:770px  )  {
        .main-content-area {
          padding: 35px 0px;
        }
        .text p {
          padding: 20px 0;
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

                        <li class="current">
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
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    <!--Main nav Ends-->
    <div class="page-title">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6 col-xs-12 pull-left">
                        <h1>services</h1>
                    </div>
                </div>
            </div>
        </div>
    <div class="main-content-area">

        <div class="container">
            <div class="row">

                <!--About Us-->
                <section class="about-us anim-5-all clearfix">
                    <!--Who we are-->
                    <div class="col-md-8 col-md-offset-2 m-b">
                        <p class="desc">MICROTECH is a diversified business organization playing a key role in the development of Power and Energy sectors in Bangladesh since 1979. Our core business is to represent different world-renowned manufactures and suppliers towards our valued clients.</p>
                    </div>
                    <div class="who-we-are clearfix">

                        <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-xs-12 image">
                                <img class="img-responsive" src="images/resource/who-we-are-imag-1.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 text">
                                <p>MICROTECH has a mission, and that mission is to power our whole nation. After this long journey, we can proudly say that, our great mission has seen long progress. This progress is a huge achievement for us. I believe that, this is not a personal achievement. Microtech is a concept, which shapes the standard of power and automation in Bangladesh. Seeing such enthusiasm among our clients, principles and professionals of this field gives me immense pleasure.  I personally would like to welcome you all to our website and hope you would be a part of our long journey.</p>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-xs-12 image">
                                <img class="img-responsive" src="images/resource/who-we-are-imag-1.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 text">
                                <p>MICROTECH has a mission, and that mission is to power our whole nation. After this long journey, we can proudly say that, our great mission has seen long progress. This progress is a huge achievement for us. I believe that, this is not a personal achievement. Microtech is a concept, which shapes the standard of power and automation in Bangladesh. Seeing such enthusiasm among our clients, principles and professionals of this field gives me immense pleasure.  I personally would like to welcome you all to our website and hope you would be a part of our long journey.</p>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-xs-12 image">
                                <img class="img-responsive" src="images/resource/who-we-are-imag-1.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 text">
                                <p>MICROTECH has a mission, and that mission is to power our whole nation. After this long journey, we can proudly say that, our great mission has seen long progress. This progress is a huge achievement for us. I believe that, this is not a personal achievement. Microtech is a concept, which shapes the standard of power and automation in Bangladesh. Seeing such enthusiasm among our clients, principles and professionals of this field gives me immense pleasure.  I personally would like to welcome you all to our website and hope you would be a part of our long journey.</p>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="col-md-6 col-sm-6 col-xs-12 image">
                                <img class="img-responsive" src="images/resource/who-we-are-imag-1.jpg" alt="">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 text">
                                <p>MICROTECH has a mission, and that mission is to power our whole nation. After this long journey, we can proudly say that, our great mission has seen long progress. This progress is a huge achievement for us. I believe that, this is not a personal achievement. Microtech is a concept, which shapes the standard of power and automation in Bangladesh. Seeing such enthusiasm among our clients, principles and professionals of this field gives me immense pleasure.  I personally would like to welcome you all to our website and hope you would be a part of our long journey.</p>
                            </div>
                            </div>
                        </div>

                    </div>
                    <!--Our Services-->
                    <div style="display:none;" class="our-services about clearfix">
                        <div class="sec-icon fa fa-user img-circle"></div>
                        <h2>Our Services</h2>
                        <div class="clearfix"></div>

                        <article class="service-box col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <figure class="icon img-circle">
                                <span class="fa fa-pause"></span>
                            </figure>
                            <div class="description">
                                <h3>
                                    <a href="#">Construction</a>
                                </h3>
                                <div class="content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </article>

                        <article class="service-box col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <figure class="icon img-circle">
                                <span class="fa fa-building"></span>
                            </figure>
                            <div class="description">
                                <h3><a href="#">Renovation</a></h3>
                                <div class="content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </article>

                        <article class="service-box col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <figure class="icon img-circle">
                                <span class="fa fa-database"></span>
                            </figure>
                            <div class="description">
                                <h3>
                                    <a href="#">Architecture</a>
                                </h3>
                                <div class="content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </article>

                        <article class="service-box col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <figure class="icon img-circle">
                                <span class="fa fa-support"></span>
                            </figure>
                            <div class="description">
                                <h3>
                                    <a href="#">Technical Support</a>
                                </h3>
                                <div class="content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </article>

                        <article class="service-box col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <figure class="icon img-circle">
                                <span class="fa fa-wrench"></span>
                            </figure>
                            <div class="description">
                                <h3>
                                    <a href="#">Maintenance</a>
                                </h3>
                                <div class="content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </article>

                        <article class="service-box col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <figure class="icon img-circle">
                                <span class="fa fa-taxi"></span>
                            </figure>
                            <div class="description">
                                <h3>
                                    <a href="#">Isolation</a>
                                </h3>
                                <div class="content">
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </article>

                        <div class="clearfix"></div>
                    </div>

                    <!--Our Team-->
                    <div style="display:none;" class="our-team">
                        <div class="sec-icon fa fa-user img-circle"></div>
                        <h2>Our Team</h2>
                        <div class="clearfix"></div>

                        <article class="member col-md-3 col-sm-6 col-xs-12">
                            <figure class="image">
                                <img src="images/resource/team-member-1.jpg" alt="" title="">
                                <div class="overlay anim-5-all">
                                    <div class="link-icon">
                                        <a href="mailto:abc@mail.com" class="fa fa-envelope-o"></a>
                                    </div>
                                </div>
                            </figure>
                            <h3>Muhibbur Rashid</h3>
                            <h4>CEO</h4>
                            <div class="description">
                                There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration.
                            </div>
                            <div class="social">
                                <a href="#" class="fa fa-facebook-f"></a> &ensp;
                                <a href="#" class="fa fa-twitter"></a> &ensp;
                                <a href="#" class="fa fa-google-plus"></a> &ensp;
                                <a href="#" class="fa fa-linkedin"></a>
                            </div>
                        </article>

                        <article class="member col-md-3 col-sm-6 col-xs-12">
                            <figure class="image">
                                <img src="images/resource/team-member-2.jpg" alt="" title="">
                                <div class="overlay anim-5-all">
                                    <div class="link-icon">
                                        <a href="mailto:abc@mail.com" class="fa fa-envelope-o"></a>
                                    </div>
                                </div>
                            </figure>
                            <h3>Rashed Kabir</h3>
                            <h4>Architect</h4>
                            <div class="description">
                                There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration.
                            </div>
                            <div class="social">
                                <a href="#" class="fa fa-facebook-f"></a> &ensp;
                                <a href="#" class="fa fa-twitter"></a> &ensp;
                                <a href="#" class="fa fa-google-plus"></a> &ensp;
                                <a href="#" class="fa fa-linkedin"></a>
                            </div>
                        </article>

                        <article class="member col-md-3 col-sm-6 col-xs-12">
                            <figure class="image">
                                <img src="images/resource/team-member-3.jpg" alt="" title="">
                                <div class="overlay anim-5-all">
                                    <div class="link-icon">
                                        <a href="mailto:abc@mail.com" class="fa fa-envelope-o"></a>
                                    </div>
                                </div>
                            </figure>
                            <h3>Masum Rana</h3>
                            <h4>Site Engineer</h4>
                            <div class="description">
                                There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration.
                            </div>
                            <div class="social">
                                <a href="#" class="fa fa-facebook-f"></a> &ensp;
                                <a href="#" class="fa fa-twitter"></a> &ensp;
                                <a href="#" class="fa fa-google-plus"></a> &ensp;
                                <a href="#" class="fa fa-linkedin"></a>
                            </div>
                        </article>

                        <article class="member col-md-3 col-sm-6 col-xs-12">
                            <figure class="image">
                                <img src="images/resource/team-member-4.jpg" alt="" title="">
                                <div class="overlay anim-5-all">
                                    <div class="link-icon">
                                        <a href="mailto:abc@mail.com" class="fa fa-envelope-o"></a>
                                    </div>
                                </div>
                            </figure>
                            <h3>Sakib al Hasan</h3>
                            <h4>Quality Manager</h4>
                            <div class="description">
                                There are many variations of passages of Lorem Ipsum available, but
                                the majority have suffered alteration.
                            </div>
                            <div class="social">
                                <a href="#" class="fa fa-facebook-f"></a> &ensp;
                                <a href="#" class="fa fa-twitter"></a> &ensp;
                                <a href="#" class="fa fa-google-plus"></a> &ensp;
                                <a href="#" class="fa fa-linkedin"></a>
                            </div>
                        </article>

                        <div class="clearfix"></div>

                    </div>

                </section>
                <!--About Us End-->

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
                    <article class="col-md-6 col-sm-12 animated" data-animation="fadeInUp" data-delay="0">
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

</script>
<!--End of Tawk.to Script-->

<script>
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

</body>

</html>
