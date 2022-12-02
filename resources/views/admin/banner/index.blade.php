@extends('layout.admin.app')
@section('css')
<style>
    .paginate_button a,
    .paginate_button a:hover, 
    .paginate_button a:focus,
    .form-select:focus {
        box-shadow: none !important;
    }
    .dataTables_info, .dataTables_paginate {
        margin-top: 12px !important;
    }
</style>
@endsection
@section('content')
@include('layout.admin.header')
@include('layout.admin.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Banner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Banner</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="col d-flex flex-column gap-3">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row align-items-center justify-content-between">
                                <h5 class="card-title">List Banners <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/banner/create">
                                    <i class="fa-solid fa-plus me-md-1 me-0"></i> Create new
                                </a>
                            </div>
                            <table class="table datatable display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Language</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($banners as $banner)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $banner->banner_title }}</td>
                                            <td>{!! $banner->banner_description !!}</td>
                                            <td>
                                                <img src="{{ asset('uploaded_files/banner/'.$banner->banner_img) }}" alt="" width="80">
                                            </td>
                                            <td>{{ $banner->lang == 'en' ? 'English' : 'Indonesia'}}</td>
                                            <td style="text-transform: capitalize;">
                                                <a type="button" class="btn btn-primary" href="">
                                                    {{ $banner->banner_status}}
                                                </a>
                                            </td>
                                            <td class="d-flex flex-column gap-1" style="min-width: 100px">
                                                <a type="button" class="btn btn-primary" href="">
                                                    <i class="fa-solid fa-eye me-md-1 me-0"></i> View
                                                </a>
                                                <a type="button" class="btn btn-warning" href="/admin/banner/{{ $banner->group }}/edit">
                                                    <i class="fa-solid fa-pen-to-square me-md-1 me-0"></i> Update
                                                </a>
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
    </section>
</main>
@endsection