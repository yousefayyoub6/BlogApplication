@extends('Dashboard.Layouts.master')

@section('title')

    Show Posts

@stop

@section('content')
    <div class="container">
        <div class="pagetitle">
            <h1>Show Posts</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Post ( {{ $countPosts }} )</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <div class="row ">
            @foreach ($posts as $post)
                <div class="col-md-4 d-flex">
                    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
                        <div class="card-header">Post</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->content }}</p>
                        </div>
                        <!--BUTTON START-->
                        <div class="m-2">
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#Edit_Post{{ $post->id }}"><i
                                    class="fas fa fa-edit fs-4"></i></button>
                            <button class="btn" data-bs-toggle="modal" data-bs-target="#delete{{ $post->id }}"><i
                                    class="fas fa fa-trash fs-4"></i></button>
                        </div>
                    </div>
                </div>
                @include('Dashboard.Admin.Postmanage.Edit')
                @include('Dashboard.Admin.Postmanage.Delete')
            @endforeach
        </div>
        <div class="text-center mt-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
