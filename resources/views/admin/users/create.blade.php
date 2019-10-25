@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('content')

	{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
		@csrf
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('mobile', 'Celular') !!}
			{!! Form::text('mobile', null, ['class' => 'form-control', '3001234567' => 'Nombre completo', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo') !!}
			{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@emtel.com.co', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['' => 'Seleccione un nivel de usuario', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection