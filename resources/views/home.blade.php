@extends('templates.layout')

@section('title_head', 'Home')

@section('content_body')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">

                <h1 class="display-4 text-primary">Desarrollo Web</h1>
                <p class="lead text-secondary">
                    Somos la gran empresa insurgente, pionera en Iquique con un enfoque directo a llevar a las pymes
                    hacia el mundo del internet.
                </p>
                @auth
                    <h4> Hello {{ auth()->user()->name }}</h4>
                @endauth

                <a class="btn btn-lg btn-block btn-primary" href="{{ route('products-index') }}">
                    Contactanos
                </a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('products-index') }}">
                    Portafolio de Productos
                </a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid my-4" src="img/team01.svg" alt="Desarrollo web">
            </div>
        </div>
    </div>

@endsection
