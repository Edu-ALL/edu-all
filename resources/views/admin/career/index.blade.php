@extends('layout.admin.app')
@section('css')
    <style>
        .paginate_button a,
        .paginate_button a:hover,
        .paginate_button a:focus,
        .form-select:focus {
            box-shadow: none !important;
        }

        .dataTables_info,
        .dataTables_paginate {
            margin-top: 12px !important;
        }
    </style>
@endsection
@section('content')
    @include('layout.admin.header')
    @include('layout.admin.sidebar')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Careers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Careers</li>
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
                                    <h5 class="card-title">List Careers <span>| {{ now()->year }}</span></h5>
                                    <a class="btn btn-primary" href="{{ url('/admin/careers/create') }}">
                                        <i class="fa-solid fa-plus me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Create new</span>
                                    </a>
                                </div>
                                <table class="table display" id="listcareer" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Job Position</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Work Type</th>
                                            <th scope="col">Application Deadline</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Last Updated</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Modal Deactive --}}
    <div class="modal fade" id="inactive" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header">
                    <div class="col d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-circle-info"></i>
                        <h6 class="modal-title ms-2" id="title-info">Set to Inactive</h6>
                    </div>
                </div>
                <div class="modal-body text-center mt-3 mb-1">
                    <p id="desc-info">Are you sure, you want to change the status of this Career to Inactive?</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                    <button type="submit" style="font-size: 13px" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <form action="" method="POST" id="form_deactivate">
                        @csrf
                        <button type="submit" id="btn-status"
                            style="font-size: 13px; background: var(--danger);">Set</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal Activate --}}
    <div class="modal fade" id="active" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0">
                <div class="modal-header">
                    <div class="col d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-circle-info"></i>
                        <h6 class="modal-title ms-2" id="title-info">Set to Active</h6>
                    </div>
                </div>
                <div class="modal-body text-center mt-3 mb-1">
                    <p id="desc-info">Are you sure, you want to change the status of this Career to Active?</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                    <button type="submit" style="font-size: 13px" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <form action="" method="POST" id="form_activate">
                        @csrf
                        <button type="submit" id="btn-status"
                            style="font-size: 13px; background: var(--success);">Set</button>
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
                    <p id="desc-info">Are you sure, you want to Delete this career?</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                    <button type="submit" style="font-size: 13px" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <form action="" method="POST" id="form_delete">
                        @csrf
                        <button type="submit" id="btn-status"
                            style="font-size: 13px; background: var(--danger);">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // List Careers
        $(function() {
            $('#listcareer').DataTable({
                scrollX: true,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{{ route('data-careers') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'job_position',
                        name: 'job_position'
                    },
                    {
                        data: 'department',
                        name: 'department'
                    },
                    {
                        data: 'work_type',
                        name: 'work_type'
                    },
                    {
                        data: 'application_deadline',
                        name: 'application_deadline',
                        class: 'text-center',
                        "render": function(value) {
                            if (value === null) return "";
                            return moment(value).format('MMM, Do YYYY');
                        }
                    },
                    {
                        data: 'status',
                        name: 'status',
                        class: 'text-center'
                    },
                    {
                        data: 'last_updated',
                        name: 'last_updated',
                        class: 'text-center',
                        type: 'date',
                        "render": function(value) {
                            if (value === null) return "";
                            return moment(value).format('MMM, Do YYYY');
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        class: 'text-center'
                    },
                ]
            });
        });
    
        function formDeactivate(id){
            $('#form_deactivate').attr('action', '{{ url('/admin/careers/deactivate/') }}' + '/' + id);
        };
        function formActivate(id){
            $('#form_activate').attr('action', '{{ url('/admin/careers/activate/') }}' + '/' + id);
        };

        function formDelete(id) {
            $('#form_delete').attr('action', '{{ url('/admin/careers/delete/') }}' + '/' + id);
        };

        $(document).ajaxComplete(function() {
            // Tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
                tooltipTriggerEl))
        });
    </script>
@endsection
