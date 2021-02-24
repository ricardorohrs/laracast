@extends('layout')

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css"/>
@endsection

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">Editar Artigo</h1>

        <form method="post" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')

            <div class="field">
                <label class="label" for="title">Título</label>

                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{ $article->title }}">

                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="excerpt">Resumo</label>

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt">{{ $article->excerpt }}</textarea>

                    @error('excerpt')
                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field">
                <label class="label" for="body">Texto</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body">{{ $article->body  }}</textarea>

                    @error('body')
                    <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" style="display: flex"  type="submit">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
