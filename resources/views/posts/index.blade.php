

@extends('Backend.main_master')
@section('content')
@section('title')
Artistry Avenue
@endsection

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('posts.index') }}>CRUDPosts</a>
            <div class="justify-end">
                <div class="col">
                    <a class="btn btn-sm btn-warning" href={{ route('back.upload') }}>Add Post</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-sm-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">{{ $post->name }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Price: ₹{{ $post->price }}</p>
                            <img src="{{ Storage::url($post->image) }}" class="card-img-top" alt="{{ $post->name }}">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                </div>
                                <div class="col-sm">
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @endsection
