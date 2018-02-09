@extends('Admin.layout')

@section('content')

<div id="main">
    <div class="header">
        <h1>Create a post</h1>
    </div>

    <div class="content">
        {{ Form::model($post, ['route' => ['admin.posts.store'], 'class' => 'pure-form pure-form-aligned']) }}

            @include('Admin.Post.form')

        {{ Form::close() }}
    </div>
</div>

@endsection