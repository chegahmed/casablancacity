<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>casablancacity</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <style type="text/css">
            body{
                background:url("{{asset('images/library.jpg')}}") no-repeat center center fixed;
                background-size: 100% auto;
            }
            header{}
        </style>
    </head>
    <body>
        <header class="jumbotron">
            <div class="container">
                <div class="col-md-10">
                <h1>casablanca city !</h1>
                <p>Administration du site.</p>
                </div>
                
                <div class="col-md-2">
                    <a href="/">Home</a><br/>
                    @if(Auth::check())
                    
                    
                    <a href="admin">{{ Auth::user()->name}}'s</a><br/>
                    <a href="author/1">Your Details</a><br/>
                    <a href="auth/logout">Logout</a><br/>
                    @else
                    <a href="login">Login</a><br/>
                    <a href="register">Register</a><br/>
                    @endif
                    Date : {{ date('Y-m-d')}}<br/>Heure : {{date('H:i:s')}}
                    
                </div>
                
                </div>
        </header>
        @if(Session::has('m'))
        <div class="container">
            <?php $a = []; $a = session()->pull('m') ?>
            <div class="alert alert-{{$a[0]}}">
                {{ $a[1]}}
            </div>
        </div>
        
        @endif
        
        @yield('content')
        
        
        
         <footer class="container">
            &copy; All Right Reserved for Chega Ahmed - 2015
        </footer>
    </body>
</html>
