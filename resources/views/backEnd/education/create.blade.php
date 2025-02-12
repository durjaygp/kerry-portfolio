@extends('backEnd.master')
@section('title','Create Education')
@section('content')
    <div class="container-fluid">
        <div class="overflow-hidden shadow-none card bg-light-info position-relative">
            <div class="px-4 py-3 card-body">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="mb-8 fw-semibold">@yield('title')</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted" href="{{route('admin.index')}}">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">@yield('title')</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="{{asset('back')}}/assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-content searchable-container list">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <h2>@yield('title')</h2>
                        </div>
                        <div class="mt-3 col-md-8 text-end d-flex justify-content-md-end justify-content-center mt-md-0">
                            <a href="{{route('admin-education.index')}}" class="btn btn-info d-flex align-items-center">
                                <i class="text-white ti ti-list me-1 fs-5"></i> Education List
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('admin-education.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="type" class="form-label fw-semibold">Type</label>
                                    <select name="type" id="" class="form-select">
                                        <option value="">Select</option>
                                        <option value="1">Education</option>
                                        <option value="2">Work Experience</option>
                                    </select>
                                    @error('type') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="title" class="form-label fw-semibold">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Degree or Course Title" value="{{ old('title') }}">
                                    @error('title') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <label for="institute" class="form-label fw-semibold">Institute</label>
                                    <input type="text" name="institute" class="form-control" placeholder="Institute Name" value="{{ old('institute') }}">
                                    @error('institute') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="start_year" class="form-label fw-semibold">Start Year</label>
                                    <input type="text" name="start_year" class="form-control" placeholder="YYYY" value="{{ old('start_year') }}">
                                    @error('start_year') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="end_year" class="form-label fw-semibold">End Year</label>
                                    <input type="text" name="end_year" class="form-control" placeholder="YYYY Or Present" value="{{ old('end_year') }}">
                                    @error('end_year') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label for="description" class="form-label fw-semibold">Description</label>
                                    <textarea name="description" cols="10" rows="3" class="form-control" placeholder="Brief description">{{ old('description') }}</textarea>
                                    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>


                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
