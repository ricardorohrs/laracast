@extends ('layout')

@section ('header')
<div id="header-featured">
    <div id="banner-wrapper">
        <div id="banner" class="container">
            @auth
                <h2>Bem-vindo, {{ Auth::user()->name }}</h2>
            @else
                <h2>Você não está logado!</h2>
            @endauth

            <p>Blog feito em laravel pelo laracast para estudar para jetimob</p>
            <a href="/articles" class="button">Blog</a> </div>

    </div>
</div>
@endsection
