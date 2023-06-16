@extends('layouts.main')

@section('container')
  @foreach ($posts as $post)
      <article class="mb-5">
        <h2>
          <a href="{{ route('view.blog.slug', ['slug' => $post['slug']]) }}">{{ $post['title'] }}</a>
        </h2>
        <h3>Author : {{ $post['author'] }}</h3>
        <p>{{ $post['body'] }}</p>
      </article>
  @endforeach
@endsection