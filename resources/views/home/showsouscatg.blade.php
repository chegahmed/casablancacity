@extends('layoutSouscatg')




@section('content')



<section id="contentSection" >
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="left_content">
                <div class="single_page">
                    <ol class="breadcrumb">
                        <li><a href="index.html">{{str_replace('_',' ',$catg.'/'.$scatg) }} /</a></li>

                    </ol>

                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="skin-josh" >

                            <div class="wrapper row-offcanvas row-offcanvas-left">
                                <!-- Left side column. contains the logo and sidebar -->
                                <aside class="left-side sidebar-offcanvas " >
                                    <section class="sidebar ">
                                        <div class="page-sidebar  sidebar-nav">


                                            <!-- BEGIN SIDEBAR MENU -->
                                            <ul id="menu" class="page-sidebar-menu">
                                                @foreach($categories as $cat)
                                                <li>
                                                    <a href="{{asset($cat->stug) }}" style="background-color:  #3573b7">
                                                        <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                                        <span class="title">{{$cat->name}} </span>
                                                        <span class="fa arrow"></span>
                                                    </a>

                                                </li>

                                                @if(strcasecmp( $cat->name,$catg)==0)



                                                @foreach($souscategories as $scat)
                                                @if( $scat->idcatg == $cat->id)
                                                <li style="background-color: #4597c4 ">
                                                    <a href="{{$scat->stug}}">
                                                        <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                                        <span class="title">{{$scat->name}} </span>
                                                        <span class="fa arrow"></span>
                                                    </a>

                                                </li>
                                                @endif
                                                @endforeach

                                                @endif
                                                @endforeach


                                            </ul>
                                            <!-- END SIDEBAR MENU -->
                                        </div>
                                    </section>
                                    <!-- /.sidebar -->
                                </aside>

                            </div>

                        </div>

                    </div>


                    <div class="col-lg-6">




                        @foreach($actualites as $actualite)

                        @if(strcasecmp( $actualite->stug,$catg.'/'.$scatg)==0)



                        <h3 style="color:  #ce1f30; font-weight: bold">{!! $actualite->titre !!}</h3>
                        <div class="post_commentbox">
                            <a href="#"><i class="fa fa-user"></i>Wpfreeware</a>
                            <span><i class="fa fa-calendar"></i>{{$actualite->created_at}}</span>
                            <a href="#"><i class="fa fa-tags"></i>{{str_replace('_',' ',$actualite->url) }}</a>
                        </div>






                        {!! $actualite->content !!}


                        @endif


                        @endforeach


                         @foreach($souscategories as $scat)


                        @if(strcasecmp( $scat->stug ,$scatg)==0)
                        
                        @foreach($s_scategories as $s_scat)
                                                @if( $s_scat->id_souscatg == $scat->id)
                                                
                  

                        <div class="col-xs-12">
                            <a  href="{{$scat->stug}}/{{$s_scat->stug}}"  style="text-align:left; padding-left:6px" class="btn btn-default btn-lg btn-block">{{$s_scat->name}}
                                <span class="pull-right">
                                    <span  class="glyphicon glyphicon-chevron-right">               
                                    </span>      
                                </span>
                            </a>   
                        </div>
                        @endif
                        @endforeach

                        @endif
                        @endforeach



                        </ul>


                        <div class="social_link">
                            <ul class="sociallink_nav">
                                <li><a href="https://www.facebook.com/ahmed.chega"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="related_post">
                            <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
                            <ul class="spost_nav wow fadeInDown animated">
                                <li>
                                    <div class="media">
                                        <a class="media-left" href="single_page.html">
                                            <img src="{{asset('img/post_img1.jpg')}}" alt="img">
                                        </a>
                                        <div class="media-body">
                                            <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a>                        
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <a class="media-left" href="single_page.html">
                                            <img src="{{asset('img/post_img2.jpg')}}" alt="img">
                                        </a>
                                        <div class="media-body">
                                            <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a>                                
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <a class="media-left" href="single_page.html">
                                            <img src="{{asset('img/post_img1.jpg')}}" alt="img">
                                        </a>
                                        <div class="media-body">
                                            <a class="catg_title" href="single_page.html"> Aliquam malesuada diam eget turpis varius</a>                               
                                        </div>
                                    </div>
                                </li>               
                            </ul>
                        </div>
                    </div>            

                    <div class="col-lg-3 col-md-3 col-sm-3">

                        <aside class="right_content">
                            <div class="single_sidebar">
                                <h2><span>NOS ACTUALITÉS</span></h2>
                                <ul class="spost_nav">

                                   
                                    
                                     @foreach($nosactualites as $key=>$nosactualite)  
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="single_page.html" class="media-left">
                                                <img alt="img" src="{{asset($nosactualite->image)}}">
                                            </a>
                                            <div class="media-body">
                                                <a href="single_page.html" class="catg_title"> {{$nosactualite->url}}</a>                        
                                            </div>
                                        </div>
                                    </li>
                                
                                    @endforeach


                                </ul>
                            </div>
                            <div class="single_sidebar">
                                <h2><span>COMMUNIQUÉS DE PRESSE</span></h2>
                                <ul class="spost_nav">

                                    @foreach($communique_presses as $key=>$comm_press)
                                
                                    <li>
                                        <div class="media wow fadeInDown">
                                            <a href="single_page.html" class="media-left">
                                                <img alt="img" src="{{asset($comm_press->image)}}">
                                            </a>
                                            <div class="media-body">
                                                <a href="#" class="catg_title"> {{$comm_press->url}}</a>                        
                                            </div>
                                        </div>
                                    </li>

                                    @endforeach



                                </ul>
                            </div>
                            <div class="single_sidebar wow fadeInDown">
                                <h2><span>VOTRE ARRONDISSEMENT</span></h2>
                                <select class="catgArchive">
                                    <option>Choisissez votre arrondissement</option>
                                    <option>arrondissement Anfa</option>
                                    <option>arrondissement ain choq</option>
                                    <option>arrondissement sidi momen</option>
                                    <option>arrondissement sbata</option>
                                </select>
                            </div>
                            <!-- End category Archive -->
                            <!-- sponsor add -->
                            <div class="single_sidebar wow fadeInDown">
                                <h2><span>LES SITES DE LA VILLE CASABLANCA</span></h2>
                                <ul>
                                    @foreach($services as $key=>$service)
                                    @if($service->titre =='Les_site_de_la_ville_casablanca')
                                    <li><a href="#">{{$service->url}}</a></li>

                                    @endif
                                    @endforeach

                                </ul>
                            </div>

                        </aside>
                    </div>

                </div>
            </div>
         


        </div>

</section>


@endsection