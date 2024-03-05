@extends('layouts.app')

@section('content')
    <h1>Editar Farmaceutico</h1>
    <form action="{{ route('farmaceuticos.update', $farmaceutico->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $farmaceutico->nombre }}" required>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="{{ $farmaceutico->apellidos }}" required>
        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ $farmaceutico->email }}" required>
        <label for="dni">DNI:</label>
        <input type="text" name="dni" value="{{ $farmaceutico->dni }}" required>

        <button type="submit">Guardar cambios</button>
    </form>
@endsection