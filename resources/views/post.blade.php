@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By: Sabil in <a href="/categories/{{ $post->category->name }}">{{ $post->category->name }}</a></h5>

        {!! $post->body !!}

    </article>

    <a href="/posts">Back to Posts</a>
@endsection
