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
            <h1>Academic Score</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Academic Score</li>
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
                                    <h5 class="card-title">List Academic Score <span>| {{ now()->year }}</span></h5>
                                    <a type="button" class="btn btn-primary" href="/admin/academic-score/create">
                                        <i class="fa-solid fa-plus me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Create new</span>
                                    </a>
                                </div>
                                <table class="table display" id="listimportantdates" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Score Raw</th>
                                            <th scope="col">Score Final</th>
                                            <th scope="col" width="3%">Order</th>
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
                    <p id="desc-info">Are you sure, you want to Delete this Academic Score?</p>
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
        // List Academic Score
        function getData() {
            $('#listimportantdates').DataTable({
                scrollX: true,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{{ route('data-academic-score') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name',
                    },
                    {
                        data: 'subject',
                        name: 'subject',
                    },
                    {
                        data: 'score_raw',
                        name: 'score_raw',
                    },
                    {
                        data: 'score_final',
                        name: 'score_final',
                    },
                    {
                        data: 'order',
                        name: 'order',
                    },
                    {
                        data: 'action',
                        name: 'action',
                        class: 'text-center'
                    },
                ]
            });
        }
        getData();

        function formDelete(id) {
            $('#form_delete').attr('action', '{{ url('/admin/academic-score/delete/') }}' + '/' + id);
        };

        function changeOrder(id) {
            let orderScore = $('#order_' + id).val();

            $.ajax({
                url: '{{ url('/admin/academic-score/change-order') }}',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    type: 'academic',
                    order: orderScore
                },
                success: function(response) {
                    if (response.status == 'success') {
                        notif('success', response.message);
                        $('#listimportantdates').DataTable().destroy();
                        getData();
                    } else {
                        $('#listimportantdates').DataTable().destroy();
                        getData();
                        notif('error', response.message);
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }
        // Tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
@endsection
