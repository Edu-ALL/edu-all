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
                                        <i class="fa-solid fa-plus me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Create new</span>
                                    </a>
                                </div>
                                <table class="table display" id="listbanner" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Image (Desktop)</th>
                                            <th scope="col">Image (Mobile)</th>
                                            <th scope="col">Region</th>
                                            <th scope="col">Language</th>
                                            <th scope="col">Status</th>
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
        <section class="section dashboard mt-3">
            <div class="col-lg-12">
                <div class="card" style="overflow: hidden">
                    <div class="card-body py-3">
                        <div class="d-flex flex-row align-items-center justify-content-between">
                            <h5 class="card-title p-0 m-0">Banner Sort</h5>
                        </div>
                        {{-- <h5 class="card-title">Choose Region and Language</h5> --}}
                        <div class="row mt-3">
                            <div class="col">
                                <label for="" class="form-label">
                                    Region
                                </label>
                                <div class="col">
                                    <select class="select2" name="region" id="region">
                                        <option value=""></option>
                                        @foreach ($regions as $regions)
                                            <option value="{{ $regions->region_id }}">
                                                {{ $regions->region }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('region')
                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label for="" class="form-label">
                                    Language
                                </label>
                                <div class="col">
                                    <select class="select2" name="lang" id="lang">
                                        <option value=""></option>
                                        @foreach ($languages as $languages)
                                            <option value="{{ $languages->language_id }}">
                                                {{ $languages->language }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('lang')
                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="container-fluid p-0 my-3">
                            <div class="row mx-0 gap-2" id="listBanner">
                                
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
                    <p id="desc-info">Are you sure, you want to Deactivate this banner?</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                    <button type="submit" style="font-size: 13px" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <form action="" method="POST" id="form_deactivate">
                        @csrf
                        <button type="submit" id="btn-status"
                            style="font-size: 13px; background: var(--danger);">Deactivate</button>
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
                    <p id="desc-info">Are you sure, you want to Activate this banner?</p>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                    <button type="submit" style="font-size: 13px" data-bs-dismiss="modal"
                        aria-label="Close">Cancel</button>
                    <form action="" method="POST" id="form_activate">
                        @csrf
                        <button type="submit" id="btn-status"
                            style="font-size: 13px; background: var(--success);">Activate</button>
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
                    <p id="desc-info">Are you sure, you want to Delete this banner?</p>
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
        // List Banner
        $(function() {
            $('#listbanner').DataTable({
                scrollX: true,
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: '{{ route('data-banner') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'image',
                        name: 'image'
                    },
                    {
                        data: 'image_mobile',
                        name: 'image_mobile'
                    },
                    {
                        data: 'region',
                        name: 'region',
                        class: 'text-center'
                    },
                    {
                        data: 'language',
                        name: 'language',
                        class: 'text-center'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        class: 'text-center'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        class: 'text-center'
                    },
                ]
            });
        });
        function formDeactivate(id) {
            $('#form_deactivate').attr('action', '{{ url('/admin/banner/deactivate/') }}' + '/' + id);
        };
        function formActivate(id) {
            $('#form_activate').attr('action', '{{ url('/admin/banner/activate/') }}' + '/' + id);
        };
        function formDelete(id) {
            $('#form_delete').attr('action', '{{ url('/admin/banner/delete/') }}' + '/' + id);
        };

        $('#lang').change(function(){
            let region = $('#region').val()
            let lang = $('#lang').val()
            getListBanner(region, lang)
        });

        async function getListBanner(region, lang){
            let url_banner_list = "{{ url('api/banner/list') }}/"+region+"-"+lang
            try {
                swal.showLoading();
                const response = await axios.get(url_banner_list);
                let data = response.data
                let numberOrder = data.length
                $('#listBanner').html('')
                for (let i = 0; i < numberOrder; i++) {
                    $('#listBanner').append(
                        `
                        <div class="col-2 p-0 m-0">
                            <div class="card-item">
                                <div class="card-body p-1 pb-0 text-center">
                                    <div class="col p-0 m-0">
                                        <form action="" method="POST" id="form-order${i}">
                                            @csrf
                                            <select class="form-select" name="orderNumber" id="listOrder${i}" onchange="updateOrder('#form-order${i}', ${data[i].id}, '${data[i].region}', '${data[i].lang}')">
                                                <option value="">Select Order</option>
                                            </select>
                                        </form>
                                        
                                        <img class="mt-1" src="{{ asset('uploaded_files/banner/${data[i].created_at.substring(0, 4)}/${data[i].created_at.substring(5, 7)}/${data[i].banner_img}') }}" alt="" width="100%" style="border-radius: 4px;">
                                    </div>
                                    <h5 class="card-desc mt-2">${data[i].banner_title}</h5>
                                </div>
                            </div>
                        </div>
                        `
                    )
                    var selector = "#listOrder" + i
                    for (let j = 0; j <= numberOrder; j++) {
                        if (j == (numberOrder)) {
                            $(selector).append(
                                `<option value="unorder" data-order="${j+1}">-- Delete Order --</option>`
                            )
                        } else {
                            $(selector).append(
                                `<option value="${j+1}" data-order="${j+1}">${j+1}</option>`
                            )
                        }
                    }
                }
                for (let i = 0; i < numberOrder; i++) {
                    var selector = "#listOrder" + i
                    for (let j = 0; j < numberOrder; j++) {
                        if (data[i].banner_order == (j+1)) {
                            $(selector).val((j+1));
                        }
                    }
                }
            } catch (error) {
                console.error(error);
            }
            swal.close();
        }

        async function updateOrder(selector, id, region, lang){
            let order = $(selector + ' select').val()
            let url = '{{ url('/admin/banner/list/order/') }}' + '/' + id
            try {
                swal.showLoading();
                const response = await axios.post(url, {
                    orderNumber:order
                })

                let data = response.data
                if(data=='Success') {
                    notif('success','The sort has been successful')
                    setTimeout(() => {
                        getListBanner(region, lang)
                    }, 2000);
                } else {
                    notif('error','Please try again!')
                }
            } catch(error) {
                console.error(error);
                swal.close();
            }

            // $(selector).attr('action', '{{ url('/admin/banner/list/order/') }}' + '/' + id);
            // $(selector).submit();
        }

        $(document).ajaxComplete(function() {
            // Tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        });
    </script>
@endsection
