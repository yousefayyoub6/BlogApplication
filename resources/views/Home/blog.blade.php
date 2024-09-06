@extends('layouts.app')

@section('title')
    Blog Application

@stop

@section('header')
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('{{ asset('assets/Home/img/home-bg.jpg') }}')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1> Blog Application</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')

    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                @foreach ($posts as $post)
                    <div class="post-preview">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <p class="post-subtitle">{{ $post->content }}</p>
                        <p class="post-meta fs-6">
                            published in
                            {{ $post->created_at->format('d/m/Y') }}
                        </p>
                        <button class="btn fs-6" data-bs-toggle="modal"
                            data-bs-target="#comment{{ $post->id }}">Comment<i
                                class="fa-regular fa-comment ms-3"></i></button>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    @include('Home.Showcomments')
                @endforeach

                <div class="text-center mb-4">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
