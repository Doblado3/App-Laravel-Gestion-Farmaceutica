@extends('layouts.app')

@section('content')
    <h1>{{ $farmaceuticos->nombre}}</h1>
    <h1>{{ $farmaceuticos->apellidos}}</h1>
    <h1>{{ $farmaceuticos->email}}</h1>
    <h1>{{ $farmaceuticos->dni}}</h1>
    <a href="{{ route('farmaceuticos.edit', $farmaceutico->id) }}">Editar</a>
    <form action="{{ route('farmaceuticos.destroy, $farmaceutico->id) }}" method="POST">
        @csrf 
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
