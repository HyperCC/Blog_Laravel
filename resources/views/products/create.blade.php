@extends('templates.layout')

@section('title_head', 'Create')

@section('content_body')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                @include('templates.valid_errors')

                <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('products-store') }}">
                    <h1 class="display-4">Crear un Producto</h1>
                    <hr>
                    @include('templates.forms', ['btnText'=>'Crear'])
                </form>

            </div>
        </div>
    </div>

@endsection
