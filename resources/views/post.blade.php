@extends('layout.main')

@section('container')
    <h1>{{ $post->title }}</h1>

    <p>
        By. <a href="/author/{{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
    </p>

    {!! $post->body !!}


    <a href="/posts" class="d-block mt-3">Back To Post</a>
@endsection
