@extends('layouts.app')

@section('content')

<meta http-equiv="refresh" content="5;url=/">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EMTEL</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido {{ Auth::user()->name }} al programador de tareas, te has logueado con exito.
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection
