<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="gallery-asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="gallery-asset/css/sh-gallery.css">
    <link rel="stylesheet" href="gallery-asset/source/gallery.css">
    
    <!--    google fonts exo-->
   <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <style media="screen">
         * {
            font-family: 'Exo', sans-serif;
        }
      #main {
        padding-top: 40px;
      }
      footer {
        margin-top: 0;
      }
      .page-title h1 {
        text-align:left;
      }
      @media screen and (max-width:920px )  {
        .page-title h1 {
          text-align: center;
        }
      }
      .page-title h1 {
        font-family: 'PT Sans', sans-serif;
      }
    </style>

    <title>MicroTech | Gallery</title>
    <!-- share buttons -->
    <script type="text/javascript">
        (function (doc, script) {
            var js,
                fjs = doc.getElementsByTagName(script)[0],
                add = function (url, id) {
                    if (doc.getElementById(id)) {
                        return;
                    }
                    js = doc.createElement(script);
                    js.src = url;
                    id && (js.id = id);
                    fjs.parentNode.insertBefore(js, fjs);
                };
            add("//connect.facebook.net/en_US/all.js#xfbml=1", "facebook-jssdk");
            add("//platform.twitter.com/widgets.js", "twitter-wjs");
        }(document, "script"));
    </script>
    <!-- end share buttons -->
</head>

<body>
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
                        <li>
                            <a href="{{ url('/career') }}">Career</a>
                        </li>
                        <li class="current">
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
                      <div class="col-md-3 col-sm-3 col-xs-12 pull-left">
                          <h1>Gallery</h1>
                      </div>
                  </div>
              </div>
      </div>
    <div id="main">
        <div class="container">
         @if (count($datas)===0)
                        <div class="alert alert-info" role="alert">
                              <p align="center"><strong>Sorry!!</strong> Currently there are no images in Gallery!!!</p>
                        </div>
            @endif

            <section id="advanced-usage">
                <div id="grid" class="clearfix">
                @foreach($datas as $data)
               
                    <div class="box item beach">
                        <a href="{{asset($data->path)}}" class="shinybox-isotope" title='Gallery'>
                            <img src="{{file_exists(public_path($data->path))? asset($data->path) : asset('admin-assets/img/no-image-available.jpg')}}">
                        </a>
                    </div>
                    
                @endforeach


                  
                </div>

            </section>
            <div class="col-md-12 col-md-offset-5">
                {!! $datas->links() !!}
            </div>
             
        </div>
    </div>

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
                    <article class="col-md-6 col-sm-12 col-xs-12 animated" style="text-align: left;" data-animation="fadeInUp" data-delay="0">
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

          <!--Scroll to top-->
        <div id="return-to-top" class="img-circle anim-3 fa fa-angle-up"></div>


    </footer>
    <script src="gallery-asset/lib/ios-orientationchange-fix.js"></script>
    <script src="gallery-asset/lib/jquery-2.0.3.min.js"></script>
    <script src="gallery-asset/lib/jquery.isotope.min.js"></script>
    <script src="gallery-asset/lib/jquery.shinybox.js"></script>
    <script type="text/javascript">

        jQuery(function ($) {

            /* Basic Gallery */
            $(".shinybox").shinybox();

            /* Video */
            $(".shinybox-video").shinybox();


            /* Dynamic Gallery */
            $("#gallery").click(function (e) {
                e.preventDefault();
                $.shinybox([
                    {
                        href: 'http://swipebox.brutaldesign.com/assets/full/reine.jpg',
                        title: 'My Caption'
                    },
                    {
                        href: 'http://swipebox.brutaldesign.com/assets/full/nuke.jpg',
                        title: 'My Second Caption'
                    }
				]);
            });


            /* Isotope */
            var shinyboxInstance = $(".shinybox-isotope:not(.isotope-hidden .shinybox-isotope)").shinybox();

            var $container = $('#grid');
            var optionFilter = $('#filter'),
                optionFilterLinks = optionFilter.find('a');
            optionFilterLinks.attr('href', '#');

            onAnimationCompleted = function () {
                shinyboxInstance.refresh();
            };

            optionFilterLinks.click(function () {
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: '.' + selector,
                    itemSelector: '.item',
                    layoutMode: 'fitRows',
                    animationEngine: 'best-available',
                }, onAnimationCompleted);

                // Highlight the correct filter
                optionFilterLinks.removeClass('active');
                $(this).addClass('active');


                return false;
            });
        });
        // ===== Scroll to Top ====
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200) { // If page is scrolled more than 50px
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
