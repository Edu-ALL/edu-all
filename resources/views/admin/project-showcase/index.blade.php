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
    .badge {
        font-size: 12px !important;
        letter-spacing: 1px;
        top: 5px;
        left: 90px;
    }
    .first-img {
        left: -8px;
        top: 6px;
    }
</style>
@endsection
@section('content')
@include('layout.admin.header')
@include('layout.admin.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Project Showcase</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Project Showcase</li>
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
                                <h5 class="card-title">List Project Showcase <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/project-showcase/create">
                                    <i class="fa-solid fa-plus me-md-1 me-0"></i><span class="d-md-inline d-none"> Create new</span>
                                </a>
                            </div>
                            <table class="table datatable display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Thumbnail</th>
                                        <th scope="col">Gallery</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($project_showcase as $project)
                                        <tr>
                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $project->name }}</td>
                                            <td>{{ $project->category }}</td>
                                            <td>{{ $project->project_name }}</td>
                                            <td>
                                                <img data-original="{{ asset('uploaded_files/'.'project-showcase/'.$project->created_at->format('Y').'/'.$project->created_at->format('m').'/'.$project->thumbnail) }}" alt="" width="100">
                                            </td>
                                            <td style="overflow: auto">
                                                <div class="container-fluid position-relative p-0 my-2">
                                                    @if (count(json_decode($project->gallery)) > 1)
                                                        <div class="cointainer-fluid p-0">
                                                            <img class="position-absolute first-img" data-original="{{ asset('uploaded_files/'.'project-showcase/'.$project->created_at->format('Y').'/'.$project->created_at->format('m').'/'.json_decode($project->gallery)[0]) }}" alt="" width="100">
                                                            <img data-original="{{ asset('uploaded_files/'.'project-showcase/'.$project->created_at->format('Y').'/'.$project->created_at->format('m').'/'.json_decode($project->gallery)[1]) }}" alt="" width="100">
                                                        </div>
                                                        <span class="position-absolute translate-middle badge border border-light rounded-pill bg-primary">
                                                            {{ count(json_decode($project->gallery))-1 }}+
                                                        </span>
                                                    @elseif (count(json_decode($project->gallery)) <= 1)
                                                        <div class="cointainer-fluid p-0">
                                                            <img data-original="{{ asset('uploaded_files/'.'project-showcase/'.$project->created_at->format('Y').'/'.$project->created_at->format('m').'/'.json_decode($project->gallery)[0]) }}" alt="" width="100">
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                            @if ($project->status == 'active')
                                                <td class="text-center">
                                                    <button 
                                                    class="btn btn-success"
                                                    type="button"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#deactivate"
                                                    style="text-transform: capitalize;"
                                                    onclick="formDeactivate({{ $project->id }})"
                                                    >
                                                        <span data-bs-toggle="tooltip" data-bs-title="Deactivate this project showcase">
                                                            {{ $project->status }}
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
                                                    onclick="formActivate({{ $project->id }})"
                                                    >
                                                        <span class="p-0" data-bs-toggle="tooltip" data-bs-title="Activate this project showcase">
                                                            {{ $project->status }}
                                                        </span>
                                                    </button>
                                                </td>
                                            @endif
                                            <td class="text-center">
                                                <div class="d-flex flex-row gap-1">
                                                    <a type="button" class="btn btn-warning" href="/admin/project-showcase/{{ $project->id }}/edit">
                                                        <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this project showcase"></i>
                                                    </a>
                                                    <button 
                                                    type="button"
                                                    class="btn btn-danger"
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#delete"
                                                    onclick="formDelete({{ $project->id }})"
                                                    >
                                                        <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this project showcase"></i>
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
                <p id="desc-info">Are you sure, you want to Deactivate this project showcase?</p>
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
                <p id="desc-info">Are you sure, you want to Activate this project showcase?</p>
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
                <p id="desc-info">Are you sure, you want to Delete this project showcase?</p>
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
            $('#form_deactivate').attr('action', '{{ url('/admin/project-showcase/deactivate/') }}' + '/' + id);
        };
        function formActivate(id){
            $('#form_activate').attr('action', '{{ url('/admin/project-showcase/activate/') }}' + '/' + id);
        };
        function formDelete(id){
            $('#form_delete').attr('action', '{{ url('/admin/project-showcase/delete/') }}' + '/' + id);
        };
        // Tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
@endsection