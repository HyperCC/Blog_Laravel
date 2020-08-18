@extends('templates.layout')

@section('title_head', 'Producto | '.$produ->title)

@section('content_body')

    <div class="container">
        <div class="bg-white p-5 shadow rounded">
            <h1> {{ $produ->title }}</h1>
            <p class="lead text-secondary"> {{ $produ->description }}</p>
            <p class="text-black-50">
                <small> {{ $produ->created_at->diffForHumans() }} </small>
            </p>

            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('products-index') }}">Reresar</a>
                @auth
                    <div class="btn-group">
                        <a class="btn btn-primary" href="{{ route('products-edit', $produ) }}">
                            Editar</a>
                        <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-proj').submit()">
                            Eliminar
                        </a>
                    </div>

                    <form class="d-none" id="delete-proj" method="POST" action="{{ route('products-destroy', $produ) }}">
                        @csrf
                        @method('DELETE')
                    </form>
                @endauth
            </div>

        </div>
    </div>
@endsection



