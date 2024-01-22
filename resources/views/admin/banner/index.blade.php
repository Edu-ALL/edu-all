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
        .fs-12 {
            font-size: 12px;
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
                                    <h5 class="card-title my-1">Banner Settings <span>| {{ now()->year }}</span></h5>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('update-banner') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                            <strong>Failed Update Website Settings!</strong> You have to check some fields.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-column mt-4 gap-3">
                                        <div class="d-flex flex-md-row flex-column justify-content-between gap-3">
                                            <div class="col-md-3 col">
                                                <label for="" class="form-label fw-semibold">Preview Image</label>
                                                <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 136px;">
                                                    @if ($data->image)
                                                        <img class="img-preview img-fluid rounded" id="img_preview_data" src="{{ $data->image ? asset('uploaded_files/'.'banner/'.$data->created_at->format('Y').'/'.$data->created_at->format('m').'/'.$data->image) : '' }}">
                                                    @endif
                                                    <img class="img-preview img-fluid rounded" id="img_preview">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-between gap-3">
                                                <div class="row flex-md-row flex-column align-items-md-end justify-content-start gap-md-3 gap-1" style="min-height: 20%">
                                                    <div class="col input-field">
                                                        <label for="image" class="form-label fw-semibold">
                                                            Image
                                                        </label>
                                                        <div class="input-group input-with-btn">
                                                            <input class="form-control " type="file" id="image" name="image" onchange="previewImage()">
                                                            <button class="btn btn-primary" type="button" id="clear_file" disabled style="line-height: 1.4">Clear File</button>
                                                        </div>
                                                        @error('image')
                                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-3 col {{ $data->image ? 'd-block' : 'd-none' }} form-check form-check-inline mt-2 ms-md-0 ms-3">
                                                        <input class="form-check-input" type="checkbox" id="delete_img" name="delete_img" value="delete">
                                                        <label class="form-label fw-semibold mb-0" for="delete_img">Delete Image</label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label for="video_link" class="form-label fw-semibold">
                                                        Video
                                                    </label>
                                                    <input type="text" class="form-control" id="video_link" name="video_link" value="{{ $data->video_link }}">
                                                    <small class="alert pt-1 p-0 m-0 fs-12">Only supports <strong class="text-danger">Youtube</strong> videos. e.g. <b><i>https://youtu.be/eRb6lymJOIM</i></b></small>
                                                    @error('video_link')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="alt" class="form-label fw-semibold">
                                                Alt Image/Video
                                            </label>
                                            <input type="text" class="form-control" id="alt" name="alt" value="{{ $data->alt }}">
                                            @error('alt')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="d-flex flex-md-row flex-column justify-content-between gap-4">
                                            <div class="col">
                                                <label for="accepatance" class="form-label fw-semibold">
                                                    Accepatance
                                                </label>
                                                <input type="text" class="form-control" id="accepatance" name="accepatance" value="{{ $data->accepatance }}">
                                                @error('accepatance')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="mentees" class="form-label fw-semibold">
                                                    Mentees
                                                </label>
                                                <input type="text" class="form-control" id="mentees" name="mentees" value="{{ $data->mentees }}">
                                                @error('mentees')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="d-flex flex-md-row flex-column justify-content-between gap-4">
                                            <div class="col">
                                                <label for="scholarship" class="form-label fw-semibold">
                                                    Scholarship
                                                </label>
                                                <input type="text" class="form-control" id="scholarship" name="scholarship" value="{{ $data->scholarship }}">
                                                @error('scholarship')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="sat_score" class="form-label fw-semibold">
                                                    SAT Score
                                                </label>
                                                <input type="text" class="form-control" id="sat_score" name="sat_score" value="{{ $data->sat_score }}">
                                                @error('sat_score')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="d-flex flex-md-row flex-column justify-content-between gap-4">
                                            <div class="col">
                                                <label for="statisfaction_rate" class="form-label fw-semibold">
                                                    Statisfaction Rate
                                                </label>
                                                <input type="text" class="form-control" id="statisfaction_rate" name="statisfaction_rate" value="{{ $data->statisfaction_rate }}">
                                                @error('statisfaction_rate')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary" id="submit">
                                            <i class="fa-solid fa-pen-to-square me-1"></i> Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('js')
    <script>
        function previewImage(){
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('#img_preview')
            $("#img_preview_data").addClass("d-none")
            $('#clear_file').prop("disabled", false)
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result
            }
        };

        // Clear File
        $('#clear_file').on('click', function() {
            $('#clear_file').prop("disabled", true)
            $('#image').val(null)
            $("#img_preview_data").removeClass("d-none")
            $("#img_preview").attr('src', '')
        });
        
        // Delete Image
        $('#delete_img').on('change', function() {
            if ($('#delete_img').is(":checked")) {
                $('#clear_file').prop("disabled", true)
                $('#image').prop("disabled", true)
                $('#image').val(null)
                $("#img_preview").attr('src', '')
                $("#img_preview_data").addClass("d-none")
            } else {
                $('#image').prop("disabled", false)
                $("#img_preview_data").removeClass("d-none")
            }
        });
    </script>
@endsection
