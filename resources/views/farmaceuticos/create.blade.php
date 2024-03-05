@extends('layouts.app')

@section('content')
    <h1>Nuevo Farmacéutico</h1>
    <form action="{{ route('farmaceuticos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required>
        <label for="email">Email:</label>
        <input type="text" name="email" required>
        <label for="dni">DNI:</label>
        <input type="text" name="dni" required>

        <buttpm type="submit">Guardar</button>
    </form>
@endsection