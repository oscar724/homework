@extends('admin.template.main')

@section('title', 'Lista de usuarios')

@section('content')
	@csrf
	<table class="table table-stripped">
		<br><thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Celular</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Acción</th>
			<th></th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td><span class="btn btn-dark disabled">{{$user->id}}</span></td>
				<td>{{$user->name}}</td>
				<td>{{$user->mobile}}</td>
				<td>{{$user->email}}</td>
				<td>
					@if($user->type == "admin")
						<span class="btn btn-dark disabled">Administrador</span>
					@elseif($user->type == "boss")
						<span class="btn btn-success disabled">Jefe</span>
					@else
						<span class="btn btn-info disabled">Miembro</span>
					@endif
				</td>
				<td>
					<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyficon-wrench" aria-hidden="true">Editar</span></a>
				</td>
				<td>
					<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('Seguro que desea eliminar este usuario?')" class="btn btn-danger"><span class="glyphicon glyficon-remove-circle" aria-hidden="true">Eliminar</span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div>
		{!! $users->render("pagination::bootstrap-4") !!}
	</div>
	<a href="{{ route('users.create') }}" class="btn btn-primary">Registrar nuevo usuario</a><br><br>
@endsection