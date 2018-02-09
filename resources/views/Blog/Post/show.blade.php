@extends('Blog.layout')

@section('content')

<div class="posts">
    <section class="post">
        <header class="post-header">
            <h2 class="post-title">{{ $post->title }}</h2>

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
</div>

@endsection