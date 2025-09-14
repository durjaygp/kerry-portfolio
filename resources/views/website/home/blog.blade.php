@php
 $setting = setting();
 @endphp
@extends('website.master')
@section('title_meta')
    <title>{{ $setting->name }} - {{ $setting->name }}</title>
    <meta name="description" content="{{ $setting->description }}">
    <meta name="keywords" content="{{ $setting->keywords }}">
    <meta name="author" content="{{ $setting->author }}">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $setting->name }}">
    <meta property="og:description" content="{{ $setting->description }}">
    <meta property="og:image" content="{{ asset($setting->website_logo) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="{{ $setting->name }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $setting->name }}">
    <meta name="twitter:description" content="{{ $setting->description }}">
    <meta name="twitter:image" content="{{ asset($setting->image) }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset($setting->fav_icon ) }}" type="image/x-icon">
@endsection

@section('content')
    <style>
        #main_nav .nav-link {
            color: black!important;
        }

    </style>
    <!-- START ABOUT -->
    <!-- START BLOG -->
    <section class="section bg-light" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2><span class="fw-bold">{{$homepage->blog_section_title}}</span></h2>
                        <p class="mx-auto mt-3 text-muted section-subtitle">{{$homepage->blog_section_paragraph}}</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                @foreach($blogs as $row)
                    <div class="mt-3 col-lg-4">
                        <div class="p-2 border-0 rounded card">
                            <div class="img_blog">
                                <img  src="{{ asset($row->image) }}" alt="{{$row->name}}" class="mx-auto rounded img-fluid d-block">
                            </div>
                            <div class="p-3 content_blog">
                                <div>
                                    <h5 class="mb-0 fw-bold"><a href="{{route('home.blog',$row->slug)}}" class="text-body">{{$row->name}}</a></h5>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0 h6 text-muted date_blog">{{$row->created_at->format('d M Y')}} <a href="javascript:void(0)" class="text-primary fw-bold">By
                                            {{$row->user->name}}</a></p>
                                    <p class="mt-3 desc_blog text-muted">{{\Illuminate\Support\Str::limit($row->description,110)}}</p>
                                    <p class="mb-0 h6"><a href="{{route('home.blog',$row->slug)}}" class="text-muted fw-bold">Read More...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END BLOG -->

@endsection
