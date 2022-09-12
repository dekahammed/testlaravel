@extends('layout.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($posts as $p)
        <article class="mb-5">
            <a href="/posts/{{ $p->slug }}">
                <h2>{{ $p->title }}</h2>
            </a>
            <p>{{ $p->excerpt }}</p>
        </article>
    @endforeach
@endsection
