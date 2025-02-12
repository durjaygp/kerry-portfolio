@extends('backEnd.master')
@section('title','Education')
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
                            <h2>Education List</h2>
                        </div>
                        <div class="mt-3 col-md-8 text-end d-flex justify-content-md-end justify-content-center mt-md-0">
                            <a href="{{route('admin-education.create')}}" class="btn btn-info d-flex align-items-center">
                                <i class="text-white ti ti-new-section me-1 fs-5"></i> Add Education
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table width="100%" id="zero_config" class="table border table-striped table-bordered text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Institute</th>
                                        <th>Duration</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($educations as $edu)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                @if($edu->type == 1)
                                                    <span class="badge bg-success">Education</span>
                                                @elseif($edu->type == 2)
                                                    <span class="badge bg-primary">Work Experience</span>
                                                @endif
                                            </td>
                                            <td>{{ $edu->title }}</td>
                                            <td>{{ $edu->institute }}</td>
                                            <td>{{ $edu->start_year }} - {{ $edu->end_year ?? 'Present' }}</td>
                                            <td>
                                                <div class="action-btn">
                                                    <a href="{{route('admin-education.edit', $edu->id)}}" class="btn btn-sm btn-primary">
                                                        <i class="ti ti-pencil fs-5"></i>
                                                    </a>
                                                    <a href="#" onclick="event.preventDefault(); if (confirm('Are you sure you want to delete?')) document.getElementById('delete-form-{{ $edu->id }}').submit();" class="btn btn-sm btn-danger">
                                                        <i class="ti ti-trash fs-5"></i>
                                                    </a>
                                                    <form id="delete-form-{{ $edu->id }}" action="{{ route('admin-education.destroy', $edu->id) }}" method="post" style="display: none;">
                                                        @csrf
                                                        @method('delete')
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
