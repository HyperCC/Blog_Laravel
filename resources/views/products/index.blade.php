@extends('templates.layout')

@section('title_head', 'Products')

@section('content_body')

    <div class="container">

        <div class="justify-content-between d-flex align-items-center mb-3">
            <h1 class="display-3">Products</h1>
            @auth
                <a class="btn btn-primary" href="{{ route('products-create') }}">
                    Crear nuevo proyecto
                </a>
            @endauth
        </div>

        <p class="lead text-secondary">Historial completo de todos los proyetoe existentes.</p>

        <ul class="list-group">
            @forelse($prod as $pd)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="d-flex text-secondary justify-content-between align-items-center"
                       href="{{ route('products-show', $pd) }}">
                        <span class="font-weight-bold">
                            {{ $pd->title }}
                        </span>
                        <span class="text-black-50">
                            {{ $pd->created_at->format('d/m/Y') }}
                        </span>
                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    no hay elementos en la DB
                </li>
            @endforelse
            {{ $prod->links() }}

        </ul>

    </div>

@endsection
