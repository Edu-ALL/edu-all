@extends('layout.admin.app')
@section('css')
<style>
    .alert-warning {
        font-size: 14px;
    }
    .fs-12 {
        font-size: 12px;
    }
</style>
@endsection
@section('content')
@include('layout.admin.header')
@include('layout.admin.sidebar')
<main id="main" class="main" style="overflow: hidden !important">
    <div class="pagetitle">
        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Settings</li>
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
                                <h5 class="card-title my-1">Website Settings</h5>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('update-website-settings') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                {{-- <h5 class="card-title">Form General</h5> --}}
                                @if($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                                        <strong>Failed Update Website Settings!</strong> You have to check some fields.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="col d-flex flex-column mt-4 gap-4">
                                    <div class="col-12">
                                        <label for="" class="form-label fw-semibold">
                                            Website Name <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="website_name" name="website_name" value="{{ $data->website_name }}">
                                        @error('website_name')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="d-flex flex-row justify-content-between gap-4">
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col-md-4 col">
                                                <label for="" class="form-label fw-semibold">Preview</label>
                                                <div class="img-preview col d-flex align-items-center justify-content-center border rounded p-1" style="min-height: 110px">
                                                    <img class="img-fluid" id="preview_logo_primary" src="{{ asset('uploaded_files/'.'website-settings/'.$data->website_primary_logo) }}">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label fw-semibold">
                                                        Primary Logo
                                                    </label>
                                                    <input type="file" class="form-control" id="primary_logo" onchange="previewLogoPrimary()" name="primary_logo">
                                                    @error('primary_logo')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label fw-semibold">
                                                        Alt
                                                    </label>
                                                    <input type="text" class="form-control" id="alt_primary_logo" name="alt_primary_logo" value="{{ $data->alt_primary_logo }}">
                                                    @error('alt_primary_logo')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col-md-4 col">
                                                <label for="" class="form-label fw-semibold">Preview</label>
                                                <div class="img-preview col d-flex align-items-center justify-content-center border rounded p-1" style="min-height: 110px">
                                                    <img class="img-fluid" id="preview_logo_secondary" src="{{ asset('uploaded_files/'.'website-settings/'.$data->website_secondary_logo) }}">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label fw-semibold">
                                                        Secondary Logo
                                                    </label>
                                                    <input type="file" class="form-control" id="secondary_logo" onchange="previewLogoSecondary()" name="secondary_logo">
                                                    @error('secondary_logo')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label fw-semibold">
                                                        Alt
                                                    </label>
                                                    <input type="text" class="form-control" id="alt_secondary_logo" name="alt_secondary_logo" value="{{ $data->alt_secondary_logo }}">
                                                    @error('alt_secondary_logo')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label fw-semibold">
                                            Address
                                        </label>
                                        <textarea class="textarea" name="address" id="address">
                                            {{ $data->address }}
                                        </textarea>
                                        @error('address')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="d-flex flex-row justify-content-between gap-4">
                                        <div class="col">
                                            <label for="" class="form-label fw-semibold">
                                                Phone Number (WhatsApp) <span style="color: var(--red)">*</span>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text form-label mb-0">+62</span>
                                                <input type="number" class="form-control" id="phone_number_wa" name="phone_number_wa" value="{{ $data->phone_number_wa }}">
                                                @error('phone_number_wa')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label fw-semibold">
                                                Phone Number 1 <span style="color: var(--red)">*</span>
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text form-label mb-0">+62</span>
                                                <input type="number" class="form-control" id="phone_number_1" name="phone_number_1" value="{{ $data->phone_number_1 }}">
                                                @error('phone_number_1')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label fw-semibold">
                                                Phone Number 2
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text form-label mb-0">+62</span>
                                                <input type="number" class="form-control" id="phone_number_2" name="phone_number_2" value="{{ $data->phone_number_2 }}">
                                                @error('phone_number_2')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label fw-semibold">
                                                Phone Number 3
                                            </label>
                                            <div class="input-group">
                                                <span class="input-group-text form-label mb-0">+62</span>
                                                <input type="number" class="form-control" id="phone_number_3" name="phone_number_3" value="{{ $data->phone_number_3 }}">
                                                @error('phone_number_3')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between gap-4">
                                        <div class="col">
                                            <label for="" class="form-label fw-semibold">
                                                Email
                                            </label>
                                            <input type="text" class="form-control" id="email" name="email" value="{{ $data->email }}">
                                            @error('email')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label fw-semibold">
                                                LinkedIn
                                            </label>
                                            <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $data->linkedin }}">
                                            @error('linkedin')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between gap-4">
                                        <div class="col">
                                            <label for="" class="form-label fw-semibold">
                                                Instagram
                                            </label>
                                            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $data->instagram }}">
                                            @error('instagram')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label fw-semibold">
                                                Youtube
                                            </label>
                                            <input type="text" class="form-control" id="youtube" name="youtube" value="{{ $data->youtube_channel }}">
                                            @error('youtube')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-5">
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
    function previewLogoPrimary(){
        const image = document.querySelector('#primary_logo')
        const imgPreview = document.querySelector('#preview_logo_primary')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function previewLogoSecondary(){
        const image = document.querySelector('#secondary_logo')
        const imgPreview = document.querySelector('#preview_logo_secondary')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
</script>
@endsection