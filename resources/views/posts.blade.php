@extends('layout.main')

@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $p)
        <article class="mb-5 border-bottom pb-3">
            <a href="/posts/{{ $p->slug }}" class="text-decoration-none">
                <h2>{{ $p->title }}</h2>
            </a>
            <p>By. <a href="/author/{{ $p->author->username }}" class="text-decoration-none">{{ $p->author->name }}</a> in <a
                    href="/categories/{{ $p->category->username }}" class="text-decoration-none">{{ $p->category->name }}</a>
            </p>
            <p>{{ $p->excerpt }}</p>

            <a href="/posts/{{ $p->slug }}" class="text-decoration-none">Read More</a>
        </article>
    @endforeach
@endsection
