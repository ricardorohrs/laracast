@extends ('layout')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <ul class="style1">
                @forelse ($articles as $article)
                <li class="first">
                    <h1>
                        <a href="{{ $article->path() }}">{{ $article->title }}</a>
                    </h1>
                    <p>
                        <img style="width: 75%" src="images/banner.jpg" alt="" class="image image-full" />
                    </p>
                    <p>{{ $article->excerpt }}</p>
                </li>
                @empty
                    <p>Sem artigos relacionados ainda.</p>
                @endforelse
            </ul>
    </div>
</div>
@endsection
