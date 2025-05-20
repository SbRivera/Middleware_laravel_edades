@extends('app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Bienvenido a mi página</h1>
        <p class="lead text-center">NRS de desarrollo seguro</p>
        
        <div class="text-center mt-4">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">LOGIN</a>
            <a href="{{ route('admin') }}" class="btn btn-primary btn-lg">ADMIN</a>
            <a href="{{ route('usuarios') }}" class="btn btn-primary btn-lg">USUARIOS</a>
        </div>
    </div>
@endsection
