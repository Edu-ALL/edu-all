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
                                            <td>
                                                <button 
                                                class="btn {{ $banner->banner_status == 'active' ? 'btn-success' : 'btn-danger' }}"
                                                type="button"
                                                id="banner_status"
                                                value="{{ $banner->banner_status }}"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#status"
                                                style="text-transform: capitalize;"
                                                onclick="formStatus({{ $banner->group }})"
                                                >
                                                    {{ $banner->banner_status }}
                                                </button>
                                            </td>
                                            <td>
                                                <a type="button" class="btn btn-warning" href="/admin/banner/{{ $banner->group }}/edit" >
                                                    <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i>
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

{{-- Modal Activate Deactive --}}
<div class="modal fade" id="status" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header">
                <div class="col d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-circle-info"></i>
                    <h6 class="modal-title ms-3" id="title-info"></h6>
                </div>
            </div>
            <div class="modal-body text-center mt-3 mb-1">
                <p id="desc-info"></p>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                <button type="submit" style="font-size: 13px" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <form action="" method="POST" id="form_status">
                    @csrf
                    <button type="submit" id="btn-status" style="font-size: 13px; background: var(--danger)"></button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        function formStatus(group){
            $('#form_status').attr('action', '{{ url('/admin/banner/deactivate/') }}' + '/' + group);
            var status = document.getElementById("banner_status").value;
            var title = document.getElementById("title-info");
            var desc = document.getElementById("desc-info");
            var btnStatus = document.getElementById("btn-status");
            if (status == 'active') {
                title.innerHTML = "Deactivate";
                desc.innerHTML = "Are you sure, you want to Deactivate this banner?";
                btnStatus.innerHTML = "Deactivate";
            } else {
                title.innerHTML = "Activate";
                desc.innerHTML = "Are you sure, you want to Activate this banner?";
                btnStatus.innerHTML = "Activate";
            }
        }
    </script>
@endsection