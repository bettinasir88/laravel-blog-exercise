@extends('Blog.layout')

@section('content')

<div class="posts">
    <h1 class="content-subhead">Posts</h1>

    @foreach ($posts as $post)
        <section class="post">
            <header class="post-header">
                <h2 class="post-title">
                    <a href="{{ route('posts.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                </h2>

                <p class="post-meta">
                    By {{ $post->user->name }}
                </p>
            </header>

            <div class="post-description">
                <p>
                    {{ $post->text }}
                </p>
            </div>
        </section>
    @endforeach
</div>

@endsection