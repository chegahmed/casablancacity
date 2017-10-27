@extends('master')
   
  @section('content')

        <div class="container" style="opacity: 0.9">
            <div class="panel panel-default">
           {!! Form::open(["url"=>"/auth/login"]) !!}
           <table class="table" style="width: 50%; margin: 0 auto;">
               @if(count($errors)>0)
               <tr>
                   <td colspan="2">
                       <div class="alert alert-danger">
                           <ul>
                               @foreach($errors->all() as $error)
                               <li>{{$error}}}</li>
                               @endforeach
                           </ul>
                       </div>
                   </td>
               </tr>
               @endif
               <tr>
                   <td colspan="2">
                       <h1 class="well text-center">Login Form</h1>
                   </td>
               </tr>
               <tr>
                   <td>Enter email address :</td>
                   <td>
                       {!! Form::email("email") !!}
                   </td>
               </tr>
                <tr>
                   <td>Enter the password :</td>
                   <td>
                       {!! Form::password("password") !!}
                   </td>
               </tr>
                <tr>
                   <td>Remember me ? :</td>
                   <td>
                       {!! Form::checkbox("remember") !!}
                   </td>
               </tr>
                <tr>
                   
                    <td>
                       {!! Form::submit("Login") !!}
                   </td>
                   <td>
                       <a href="{{asset('password/email')}}">Forgot your password ?!</a>
                   </td>
               </tr>
                <tr>
                   
                    <td colspan="2">
                       <a href="{{asset('auth/facebook')}}">auth facebook</a>
                   </td>
               </tr>
           </table>
           {!! Form::close() !!}
        </div>
        </div>
       
  @endsection