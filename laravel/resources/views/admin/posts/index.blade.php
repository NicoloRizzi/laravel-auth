@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Blog Archive</h1>
    @if (session('post-deleted'))
        <div class="alert alert-success">
            <h4>Post deleted successfully</h4>
        </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                    <td>
                    <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-success">Show</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="wrap-pagination mt-5 d-flex justify-content-end">
        {{$posts->links()}}
    </div>
</div>
@endsection
