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
            <h1>Applicants for {{ $career->job_position }} Position</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/careers">Careers</a></li>
                    <li class="breadcrumb-item active">{{ $career->job_position }}</li>
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
                                    <h5 class="card-title">List Applicants <span>| {{ now()->year }}</span></h5>
                                </div>
                                <table class="table display" id="listApplicant" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Question 1</th>
                                            <th scope="col">Question 2</th>
                                            <th scope="col">Question 3</th>
                                            <th scope="col">CV</th>
                                            <th scope="col">UTM Code</th>
                                            <th scope="col">Submitted At</th>
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
                    <p id="desc-info">Are you sure, you want to Delete this applicant?</p>
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
            $('#listApplicant').DataTable({
                scrollX: true,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{{ route('data-applicants', ['job_id' => $job_id]) }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'screen_1',
                        name: 'screen_1',
                    },
                    {
                        data: 'screen_2',
                        name: 'screen_2'
                    },
                    {
                        data: 'screen_3',
                        name: 'screen_3'
                    },
                    {
                        data: 'cv_path',
                        name: 'cv_path',
                        render: function(data, type, row) {
                            if (!data) {
                                return '<span class="text-muted">No CV</span>';
                            }

                            return `<a href="${data}" target="_blank" class="btn btn-sm btn-primary">
                                <i class="fa fa-download"></i>
                            </a>`;
                        },
                    },
                    {
                        data: 'utm_code',
                        name: 'utm_code',
                        render: function(data, type, row) {
                            if (!data) {
                                return '<span class="text-muted">-</span>';
                            }
                            return data;
                        },
                    },
                    {
                        data: 'submitted_at',
                        name: 'submitted_at',
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

        function formDelete(id) {
            $('#form_delete').attr('action', '{{ url('/admin/applicant/delete/') }}' + '/' + id);
        };

        $(document).ajaxComplete(function() {
            // Tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(
                tooltipTriggerEl))
        });
    </script>
@endsection
