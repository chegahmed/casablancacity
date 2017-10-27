

{!! Form::open(array('route'=>'createRegister','id'=>'register','method'=>'post')) !!}
<table>
    <tr>
        <td>User Name</td>
        <td>{!! Form::text('username',null,array('id'=>'username','required')) !!}</td>
    </tr>
     <tr>
        <td>Email</td>
        <td>{!! Form::email('email',null,array('id'=>'email','required')) !!}</td>
    </tr>
    <tr>
        <td>Password</td>
        <td>{!! Form::password('password',array('id'=>'password','required')) !!}</td>
    </tr>
     <tr>
        <td>Password conferme</td>
        <td>{!! Form::password('confirm_password',array('id'=>'confirm_password','required')) !!}</td>
    </tr>
     <tr>
        <td>{!! Form::submit('Register') !!}</td>
    </tr>
    
</table>




{!! Form::close() !!}