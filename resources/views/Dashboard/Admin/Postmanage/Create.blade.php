@extends('Dashboard.Layouts.master')

@section('title')

    Add Post

@stop

@section('content')
    <div class="card shadow p-4">
        <h1 class="card-title text-center">Add Post</h1>
        <div class="card-body">
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
                </div>
                <div class="mb-3">
                    <label for="ContenT" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="ContenT" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Post</button>
                <div class="mt-3">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    @endsection
