@extends('Admin.layout')

@section('content')

<div id="main">
    <div class="header">
        <h1>Posts</h1>
        <h2>Create, edit or delete your posts here</h2>
    </div>

    <div class="content">
        <div class="pure-button-group" role="group">
            <a href="{{ route('admin.posts.create') }}" class="pure-button" role="button">Create a post</a>
        </div>
        <table class="pure-table pure-table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Published</th>
                    <th>Last updated</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td><a href="{{ route('admin.posts.edit', ['post' => $post->slug]) }}">{{ $post->title }}</a></td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->is_published ? 'Yes' : 'No' }}</td>
                        <td>{{ $post->updated_at->format('d-m-Y H:i') }}</td>
                        <td>
                            {{ Form::open(['route' => ['admin.posts.destroy', $post->slug], 'method' => 'delete']) }}
                                {{ Form::submit('Delete', ['class' => 'pure-button']) }}
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection