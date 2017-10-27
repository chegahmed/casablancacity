<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NewsFeed</title>

        <!-- Bootstrap -->
        <link href="designeUsers/css/stylemenu.css" rel="stylesheet">
        <link href="designeUsers/css/bootstrap.min.css" rel="stylesheet">
        <!-- for fontawesome icon css file -->
        <link href="designeUsers/css/font-awesome.min.css" rel="stylesheet">
        <!-- for content animate css file -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- google fonts  -->
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>   
        <!-- for news ticker css file -->
        <link href="designeUsers/css/li-scroller.css" rel="stylesheet">
        <!-- slick slider css file -->
        <link href="designeUsers/css/slick.css" rel="stylesheet">
        <!-- for fancybox slider -->
        <link href="designeUsers/css/jquery.fancybox.css" rel="stylesheet">    
        <!-- website theme file -->
        <!-- <link href="css/theme-red.css" rel="stylesheet"> -->

        <link href="designeUsers/css/theme.css" rel="stylesheet">
        <!-- main site css file -->    
        <link href="designeUsers/style.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- =========================
          //////////////This Theme Design and Developed //////////////////////
          //////////// by www.wpfreeware.com======================-->

        <!-- Preloader -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- End Preloader -->

        <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

        <div class="container">
            <!-- start header section -->
            <header id="header">    
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="header_top">
                            <div class="header_top_left">
                                <ul class="top_nav">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    <li><a href="{{asset('/')}}">français</a></li>
                                    <li><a href="{{asset('ar_home')}}">العربية</a></li>
                                </ul>
                            </div>
                            <div class="header_top_right">


                                <p>  Date : {{ date('d-m-Y')}}<br/>Heure : {{date('H:i:s')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="header_bottom">
                            <div class="logo_area">
                                <!-- for your img logo format
                                <a href="home.html" class="logo">
                                 News <span>Feed</span>
                                  <img src="img/logo.jpg" alt="logo">
                                </a> -->
                                <!-- for your text logo format -->
                                <a href="#" class="logo">
                                    <img src="images/logo.png" alt="logo">
                                </a> 
                            </div>
                            <div class="add_banner">
                                <a href="#"><img src="img/addbanner_728x90_V1.jpg" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>  
            </header><!-- End header section --> 
            <!-- start nav section --> 
            <section id="navArea">
                <!-- Start navbar -->
                <nav class="navbar navbar-inverse" role="navigation">      
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>          
                    </div>


                    <div class="menu-container">
                        <div class="menu">
                            <ul>

                                <li class="active"><a href=""><span class="fa fa-home "></span><span class="mobile-show">Home</span></a></li>
                                @foreach($categories as $key=>$cat)
                                <li><a href="{{ asset(  $cat->stug )}}">{{ $cat ->name }}</a>
                                    <ul>
                                        @foreach($souscategories as $s_catg)
                                        @if( $s_catg->idcatg ==$cat ->id)
                                        <li><a href="{{ asset(  $cat->stug .'/'. $s_catg->stug  )}}" style="color: red">{{$s_catg->name}}</a>
                                            <ul>
                                                @foreach($s_scategories as $s_scat)
                                                @if( $s_scat->id_souscatg == $s_catg->id)
                                                <li><a href="{{ asset(  $cat->stug .'/'. $s_catg->stug .'/'.$s_scat->stug  )}}">{{$s_scat->name}}</a></li>
                                                @endif
                                                @endforeach

                                            </ul>
                                        </li>

                                        @endif
                                        @endforeach

                                    </ul>
                                </li>

                                @endforeach


                            </ul>

                        </div>
                    </div>





                </nav>
            </section><!-- End nav section -->



            <section id="newsSection">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <!-- start news sticker -->
                        <div class="latest_newsarea">      
                            <span>Nouvelles Dernières</span>


                            <ul id="ticker01" class="news_sticker">
                                @foreach($services as $key=>$service)
                                @if($service->titre =='Actualites')
                                <li><a href="#"><img src="{{$service->image}}" alt="">{{$service->url}}</a></li> 
                                @endif
                                @endforeach          
                            </ul>
                            <div class="social_area">
                                <ul class="social_nav">
                                    <li class="facebook"><a href="#"></a></li>
                                    <li class="twitter"><a href="#"></a></li>
                                    <li class="flickr"><a href="#"></a></li>
                                    <li class="pinterest"><a href="#"></a></li>
                                    <li class="googleplus"><a href="#"></a></li>
                                    <li class="vimeo"><a href="#"></a></li>
                                    <li class="youtube"><a href="#"></a></li>
                                    <li class="mail"><a href="mailto:info@smartnews.com"></a></li>
                                </ul>
                            </div>      
                        </div><!-- End news sticker -->
                    </div>
                </div>
            </section>

            <!-- start slider section -->
            <section id="sliderSection">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <!-- Set up your HTML -->
                        @yield('content')

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading text-center">    
                                        <h1 style="color: brown">Coordonnées</h1>
                                        <h5>Commune de Casablanca</h5>
                                        <p>Email : contact@casablancacity.ma<p>
                                    </div>
                                    <div class="panel-body" style="padding:10px !important;">
                                        <div id="gmap-top" class="gmap"></div>

                                        <iframe src="https://www.google.com/maps/d/embed?mid=1yUvLBoN3IDwSvctgHsuydmLcwcg" width="640" height="480"></iframe>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="latest_post">
                            <h2><span>NOS ACTUALITÉS</span></h2>
                            <div class="latest_post_container">
                                <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
                                <ul class="latest_postnav">



                                    @foreach($actualites as $key=>$actualite)



                                    <li>
                                        <div class="media">
                                            <a href="single_page.html" class="media-left">
                                                <img alt="img" src="{{$actualite->image}}">
                                            </a>
                                            <div class="media-body">
                                                <a href="single_page.html" class="catg_title"> {{$actualite->url}}</a>                        
                                            </div>
                                        </div>
                                    </li>

                                    @endforeach




                                </ul>
                                <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ==================End content body section=============== -->    
            <footer id="footer">       
                <div class="footer_top">
                    <div class="row">
                        @foreach($categories as $catgo)
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <div class="footer_widget wow fadeInDown">
                                <h2>{{$catgo->name}}</h2>
                                <ul class="tag_nav">
                                    @foreach($souscategories as $scat)
                                    @if( $scat->idcatg == $catgo->id)
                                    <li><a href="#">{{$scat->name}}</a></li>
                                    @endif
                                    @endforeach

                                </ul>              
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div>       
                <div class="footer_bottom">
                    <p class="copyright">
                        All Rights Reserved - {{date('Y') }}  <a href="#">DevoSysteme</a>
                    </p>
                    <p class="developer">Developed By <a href="">Chega Ahmed</a></p>
                </div>    
            </footer>
        </div> <!-- /.container -->


        <!-- jQuery Library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
        <!-- For content animatin  -->
        <script src="designeUsers/js/wow.min.js"></script>
        <!-- bootstrap js file -->
        <script src="designeUsers/js/bootstrap.min.js"></script> 
        <!-- slick slider js file -->
        <script src="designeUsers/js/slick.min.js"></script> 
        <!-- news ticker jquery file -->
        <script src="designeUsers/js/jquery.li-scroller.1.0.js"></script>
        <!-- for news slider -->
        <script src="designeUsers/js/jquery.newsTicker.min.js"></script>
        <!-- for fancybox slider -->
        <script src="designeUsers/js/jquery.fancybox.pack.js"></script>
        <!-- custom js file include -->    
        <script src="designeUsers/js/custom.js"></script> 

        <script src="designeUsers/js/megamenu.js"></script>




    </body>
</html>