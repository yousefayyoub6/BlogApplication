@extends('Dashboard.Layouts.master')

@section('title')
    Dashbard Blog Application

@stop

@section('content')
    <div class="pagetitle">
        <h1>Blog Application</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Blog Application</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">
                    <!-- users Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Users<span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $countUsers }}</h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End users Card -->

                    <!-- Posts Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Posts</span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-file-earmark-post"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $countPosts }}</h6>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Posts Card -->

                </div>


            </div><!-- End Right side columns -->

        </div>

    @endsection
