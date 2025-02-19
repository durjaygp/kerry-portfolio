@extends('backEnd.master')
@section('title','Admin Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch">
                <div class="card w-100 bg-light-info overflow-hidden shadow-none">
                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="d-flex align-items-center mb-7">
                                    <div class="rounded-circle overflow-hidden me-6">
                                        <img src="{{asset('back/assets/images/profile/user-1.jpg')}}" alt="" width="40" height="40">
                                    </div>
                                    <h5 class="fw-semibold mb-0 fs-5">Welcome back {{auth()->user()->name}}!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $totalgame = \App\Models\Category::count();
                $totaluser = \App\Models\User::count();
                $totalblog = \App\Models\Blog::count();
                $totalproduct = \App\Models\Product::count();
                $totalService = \App\Models\Service::count();
                $newSupport = \App\Models\Support::count();
                $openSupport = \App\Models\Support::where('status',1)->count();
                $totalsale = \App\Models\Order::sum('total_price');
            @endphp



            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-success shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back/assets/images/svgs/icon-database.svg')}}" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Projects</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalproduct}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-success shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back/assets/images/svgs/icon-dd-application.svg')}}" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Service</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalService}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-warning shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/assets/images/svgs/icon-user-male.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total User</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totaluser}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-success shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/assets/images/svgs/icon-briefcase.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Category</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalgame}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <div class="card border-0 zoom-in bg-light-warning shadow-none">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('back')}}/assets/images/svgs/icon-connect.svg" width="50" height="50" class="mb-3" alt="" />
                                <p class="fw-semibold fs-3 text-warning mb-1">Total Blog</p>
                                <h5 class="fw-semibold text-warning mb-0">{{$totalblog}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                    <p class="highcharts-description">

                    </p>
                </figure>
            </div>
        </div>
    </div>
@endsection

