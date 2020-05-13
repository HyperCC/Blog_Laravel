
@extends('layout')

@section('title', 'Portafolio')

@section('content')

    <h1>PORTFOLIO</h1>

    <ul>
        @forelse($Portlist as $porta)
            <li>{{ $porta['title'] }}</li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>

@endsection