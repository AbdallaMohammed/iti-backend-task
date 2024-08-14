@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body bg-white">
                <table class="table">
                    <tbody>
                        <tr>
                            <th scope="row">ID</th>
                            <td>{{ $post->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Title</th>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Content</th>
                            <td>{{ $post->content }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created By</th>
                            <td>{{ $post->user?->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created At</th>
                            <td>{{ $post->created_at->diffForHumans() }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit Post</a>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection