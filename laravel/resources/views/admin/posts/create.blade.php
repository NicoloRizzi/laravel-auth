@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">New Post</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="body">Description:</label>
            <textarea name="body" id="body" value="{{ old('body') }}"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Create post">
    </form>
</div>
@endsection
