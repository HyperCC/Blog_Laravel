@extends('templates.layout')

@section('title_head', 'About')

@section('content_body')


    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img class="img-fluid my-4" src="img/developer01.svg" alt="Quienes somos">
            </div>

            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Acerca de nosotros</h1>
                <p class="lead text-secondary">
                    Nos dedicamos a colocar en internet a las pymes que requieran mas que una red social para
                    publicitarse de manera profesional, accesible al tipo de usuario comun, por que entendemos que no
                    son grandes empresas, siempre se comienza de abajo y nosotros queremos ser una de las bases para
                    darse a conocer hacia el mundo.
                </p>

                <a class="btn btn-lg btn-block btn-primary" href="{{ route('products-index') }}">
                    Contactanos
                </a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('products-index') }}">
                    Portafolio de Productos
                </a>
            </div>

        </div>
    </div>

@endsection
