@extends('templates.layout')

@section('title_head', 'Contact')

@section('content_body')

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form method="" action="#" class="bg-white shadow rounded py-3 px-4">

                    @csrf

                    <h1 class="display-4">Contact</h1>
                    <hr>

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror"
                               type="text" name="name" id="name" placeholder="Nombre.." value="{{old('name')}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror"
                               type="email" name="email" id="email" placeholder="Email.." value="{{old('email')}}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror"
                               type="text" name="subject" id="subject" placeholder="Asunto.." value="{{old('subject')}}">
                        @error('subject')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror"
                                  name="content" id="content" placeholder="Escribe el contenido de tu mensaje.." >
                {{old('content')}}
            </textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Enviar</button>

                </form>
            </div>
        </div>


    </div>

@endsection
