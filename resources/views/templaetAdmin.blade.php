<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you 

     the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
   @yield('css')
    <!--end of page level css-->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="admin" class="logo">
            <img src="images/logo.png" alt="Logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
               <div class="col-md-8">
                    <a href="/">Home</a><br/>
                    @if(Auth::check())
                    
                    
                    <a href="admin">{{ Auth::user()->name}}'s</a><br/>
                    <a href="author/1">Your Details</a><br/>
                    <a href="auth/logout">Logout</a><br/>
                    @else
                    <a href="login">Login</a><br/>
                    <a href="register">Register</a><br/>
                    @endif
                   
                    
                </div>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        
                    </div><br><br><br><br><br><br><br>
                    <div class="clearfix "></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li class="active">
                            <a href="categorie">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="souscategorie">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Sous Catégories</span>
                                <span class="fa arrow"></span>
                            </a>
                            
                        </li>
                        <li>
                            <a href="s_scategorie">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Sous Sous Catégories </span>
                                <span class="fa arrow"></span>
                            </a>
                           
                        </li>
                        <li>
                            <a href="service">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Service </span>
                                <span class="fa arrow"></span>
                            </a>
                           
                        </li>
                           <li>
                            <a href="actualite">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Actualite </span>
                                <span class="fa arrow"></span>
                            </a>
                           
                        </li>
                        <li class="active">
                            <a href="ar_categorie">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">الفئات</span>
                            </a>
                        </li>
                            <li>
                            <a href="ar_souscategorie">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">الفئات الفرعية </span>
                                <span class="fa arrow"></span>
                            </a>
                           
                        </li>
                      <li>
                            <a href="ar_s_scategorie">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">الفئات الجزئية </span>
                                <span class="fa arrow"></span>
                            </a>
                           
                        </li>
                       <li>
                            <a href="ar_service">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">الخدمات </span>
                                <span class="fa arrow"></span>
                            </a> 
                        </li>
                       <li>
                            <a href="ar_actualite">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">المواضيع </span>
                                <span class="fa arrow"></span>
                            </a> 
                        </li>
                        
                        
                     
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Bienvenue  Admin</h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                            Home
                        </a>
                    </li>
                </ol>
            </section>
            <section class="content">
              
                 @if(Session::has('m'))
        <div class="container">
            <?php $a = []; $a = session()->pull('m') ?>
            <div class="alert alert-{{$a[0]}}">
                {{ $a[1]}}
            </div>
        </div>
        
        @endif
                  
        @yield('content')
                
        
                
                
            </section>
        </aside>
        <!-- right-side -->
    </div>
    
   @yield('javascript')
</body>
</html>
