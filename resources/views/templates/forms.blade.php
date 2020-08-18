@csrf

<div class="form-group">
    <label for="title">Nombre </label>
    <input class="form-control border-0 bg-light shadow-sm" name="title" type="text"
           value="{{ old('title', $prdct->title) }}">
</div>


<div class="form-group">
    <label for="url">Url</label>
    <input class="form-control border-0 bg-light shadow-sm" name="url" type="text"
           value="{{ old('url', $prdct->url) }}">
</div>

<div class="form-group">
    <label for="description">Descripcion</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
              name="description">{{ old('description', $prdct->description) }} </textarea>
</div>

<button class="btn btn-primary btn-lg btn-block" type="submit">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('products-index') }}">Cancelar</a>


