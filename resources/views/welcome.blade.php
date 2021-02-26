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

@section ('email')
<div class="container-fluid">
    <div class="row">
        <div id="form-email">
            <form method="post" action="/" class="bg-white p-6 rounded shadow-nd">
                @csrf

                <div class="mb-5">
                    <label for="email" class="block text-xs uppercase font-semibold mb-1">Email</label>

                    <input type="text" id="email" name="email" class="border px-2 py-1 text-sm w-full">

                    @error('email')
                        <div class="text-red-500 text-xs">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-outline-secondary">Enviar</button>

                @if (session('message'))
                    <div class="text-green-500 text-xs mt-2">
                        {{ session('message') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
