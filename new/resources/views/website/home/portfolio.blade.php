@extends('website.master')
@section('title_meta')
    <title>{{ $port->name }} - {{ setting()->name }}</title>
    <meta name="description" content="{{ $port->description }}">
    <meta name="keywords" content="{{ $port->seo_keywords }}">
    <meta name="author" content="{{ setting()->author }}">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $port->name }}">
    <meta property="og:description" content="{{ $port->description }}">
    <meta property="og:image" content="{{ asset($port->image) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ setting()->name }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $port->name }}">
    <meta name="twitter:description" content="{{ $port->description }}">
    <meta name="twitter:image" content="{{ asset($port->image) }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset(setting()->fav_icon ) }}" type="image/x-icon">
@endsection

@section('content')
    <style>
        #main_nav .nav-link {
            color: black!important;
        }

    </style>
    <!-- START ABOUT -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="mt-3">
                        <img src="{{ asset($port->image) }}" alt="{{ $port->name }}, {{ $port->description }}" class="mx-auto img-fluid d-block img-thumbnail w-75">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mt-3">
                        <h1><span class="fw-bold">{{ $port->name }}</span></h1>
                        <a href="" class="btn btn-sm btn-primary">{{ $port->productCategory->name }}</a>
                        <p class="mt-4 text-muted">{{ $port->description }}</p>
                        <p class="mt-4 text-muted">{!! $port->main_content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->
@endsection
