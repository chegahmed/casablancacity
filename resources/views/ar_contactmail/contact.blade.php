
@extends('ar_templaetContact')


@section('content')

 <!-- start contact area -->
            <div class="contact_area">
              <h2>اتصل بنا</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labolore magna aliqua. Ut enim ad minim veniam. Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

           
	
				{!! Form::open(['url' => 'ar_contact'],['class' =>'contact_form']) !!}
					<div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
						{!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'الاسم']) !!}
						{!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'البريد الالكتروني']) !!}
						{!! $errors->first('email', '<small class="help-block">:message</small>') !!}
					</div>
					<div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
						{!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'رسالتك']) !!}
						{!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
					</div>
					{!! Form::submit('ارسال !', ['class' => 'btn btn-info pull-right col-md-2']) !!}
				{!! Form::close() !!}
		
              


            </div>
            <!-- End contact area -->

@endsection