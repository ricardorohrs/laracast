@extends ('layout')

@section ('content')
<div id="wrapper">
    <div id="page" class="container">
        <ul class="style1">
                @foreach ($articles as $article)
                <li class="first">
                    <h1>
                        <a href="{{ $article->path() }}">{{ $article->title }}</a>
                    </h1>
                    <p>
                        <img style="width: 75%" src="images/banner.jpg" alt="" class="image image-full" />
                    </p>
                    <p>{{ $article->excerpt }}</p>
                </li>
                @endforeach
            </ul>
    </div>
</div>
@endsection
