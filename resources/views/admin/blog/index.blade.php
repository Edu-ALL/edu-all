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
        <h1>Blogs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Blogs</li>
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
                                <h5 class="card-title">List Blogs <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/blogs/create">
                                    <i class="fa-solid fa-plus me-md-1 me-0"></i> Create new
                                </a>
                            </div>
                            <table class="table datatable display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Slug</th>
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
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $blog->blog_title }}</td>
                                            <td>{{ $blogcategory->find($blog->cat_id) != null ? $blogcategory->find($blog->cat_id)->category_name : '-' }}</td>
                                            {{-- <td>{{ $blogcategory->where('id', $blog->cat_id)->first()->category_name }}</td> --}}
                                            <td>{{ $blog->slug }}</td>
                                            <td>
                                                <img src="{{ asset('uploaded_files/blogs/'.$blog->blog_thumbnail) }}" alt="" width="80">
                                            </td>
                                            <td>{{ $blog->lang == 'en' ? 'English' : 'Indonesia'}}</td>
                                            @if ($blog->blog_status == 'active')
                                                <td class="text-center">
                                                    <button 
                                                    class="btn btn-success"
                                                    type="button"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#deactivate"
                                                    style="text-transform: capitalize;"
                                                    onclick="formDeactivate({{ $blog->id }})"
                                                    >
                                                        <span data-bs-toggle="tooltip" data-bs-title="Deactivate this blog">
                                                            {{ $blog->blog_status }}
                                                        </span>
                                                    </button>
                                                </td>
                                            @else
                                                <td class="text-center">
                                                    <button 
                                                    class="btn btn-danger"
                                                    type="button"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#activate"
                                                    style="text-transform: capitalize;"
                                                    onclick="formActivate({{ $blog->id }})"
                                                    >
                                                        <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this blog">
                                                            {{ $blog->blog_status }}
                                                        </span>
                                                    </button>
                                                </td>
                                            @endif
                                            <td class="text-center">
                                                <div class="d-flex flex-row gap-1">
                                                    <a type="button" class="btn btn-warning" href="/admin/blogs/{{ $blog->id }}/edit">
                                                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this blog"></i>
                                                    </a>
                                                    <button 
                                                    type="button"
                                                    class="btn btn-danger"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#delete"
                                                    onclick="formDelete({{ $blog->id }})"
                                                    >
                                                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this blog"></i>
                                                    </button>
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
    </section>
</main>

{{-- Modal Deactive --}}
<div class="modal fade" id="deactivate" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header">
                <div class="col d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-circle-info"></i>
                    <h6 class="modal-title ms-2" id="title-info">Deactivate</h6>
                </div>
            </div>
            <div class="modal-body text-center mt-3 mb-1">
                <p id="desc-info">Are you sure, you want to Deactivate this blog?</p>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                <button type="submit" style="font-size: 13px" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <form action="" method="POST" id="form_deactivate">
                    @csrf
                    <button type="submit" id="btn-status" style="font-size: 13px; background: var(--danger);">Deactivate</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal Activate --}}
<div class="modal fade" id="activate" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header">
                <div class="col d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-circle-info"></i>
                    <h6 class="modal-title ms-2" id="title-info">Activate</h6>
                </div>
            </div>
            <div class="modal-body text-center mt-3 mb-1">
                <p id="desc-info">Are you sure, you want to Activate this blog?</p>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                <button type="submit" style="font-size: 13px" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <form action="" method="POST" id="form_activate">
                    @csrf
                    <button type="submit" id="btn-status" style="font-size: 13px; background: var(--success);">Activate</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal Delete --}}
<div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header">
                <div class="col d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-circle-info"></i>
                    <h6 class="modal-title ms-2" id="title-info">Delete</h6>
                </div>
            </div>
            <div class="modal-body text-center mt-3 mb-1">
                <p id="desc-info">Are you sure, you want to Delete this blog?</p>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                <button type="submit" style="font-size: 13px" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <form action="" method="POST" id="form_delete">
                    @csrf
                    <button type="submit" id="btn-status" style="font-size: 13px; background: var(--danger);">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        function formDeactivate(id){
            $('#form_deactivate').attr('action', '{{ url('/admin/blogs/deactivate/') }}' + '/' + id);
        };
        function formActivate(id){
            $('#form_activate').attr('action', '{{ url('/admin/blogs/activate/') }}' + '/' + id);
        };
        function formDelete(id){
            $('#form_delete').attr('action', '{{ url('/admin/blogs/delete/') }}' + '/' + id);
        };
        // Tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
@endsection