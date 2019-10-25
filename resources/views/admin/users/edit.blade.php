@extends('admin.template.main')

@section('title', 'Editar usuario')

@section('content')

	{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
		@csrf
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			
			{!! Form::text('name', $user->name, ['class' => 'form-control','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('mobile', 'Celular') !!}
			{!! Form::text('mobile', $user->mobile, ['class' => 'form-control', 'required']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('email', 'Correo') !!}
			{!! Form::text('email', $user->email, ['class' => 'form-control', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '********', 'required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['' => 'Seleccione un nivel de usuario', 'member' => 'Miembro', 'boss' => 'Jefe', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Aceptar', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection