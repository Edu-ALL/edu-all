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
        <h1>Banner</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/banner">Banner</a></li>
                <li class="breadcrumb-item active">Create</li>
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
                                <h5 class="card-title">Create New Banner <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/banner">
                                    <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('create-banner') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="card-title">Choose Region and Language</h5>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label">
                                            Region <span style="color: var(--red)">*</span>
                                        </label>
                                        <div class="col">
                                            <select class="select2" name="region" id="region" onchange="checkInput()">
                                                <option value=""></option>
                                                @foreach ($regions as $regions)
                                                    <option value="{{ $regions->region_id }}" {{ old('region') == $regions->region_id ? 'selected' : '' }}>
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
                                            Language <span style="color: var(--red)">*</span>
                                        </label>
                                        <div class="col">
                                            <select class="select2" name="lang" id="lang" onchange="checkInput()">
                                                <option value=""></option>
                                                @foreach ($languages as $languages)
                                                    <option value="{{ $languages->language_id }}" {{ old('lang') == $languages->language_id ? 'selected' : '' }}>
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
                                <ul class="nav nav-tabs nav-tabs-bordered pt-4"></ul>
                                <h5 class="card-title">Form Banner</h5>
                                @if($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Failed Create Banner!</strong> You have to check some fields.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                    <div class="col-md-2 col">
                                        <label for="" class="form-label">Banner Image Preview</label>
                                        <div class="col d-flex align-items-center justify-content-center border rounded p-1" style="min-height: 110px">
                                            <img class="img-preview img-fluid" id="img_preview">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">
                                            Banner Image (Desktop) <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="file" class="form-control" id="image" onchange="previewImage()" name="banner_image">
                                        @error('banner_image')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col d-flex flex-md-row flex-column pt-2 gap-md-3 gap-2">
                                    <div class="col-md-2 col">
                                        <label for="" class="form-label">Banner Image Preview</label>
                                        <div class="col d-flex align-items-center justify-content-center border rounded p-1" style="min-height: 110px">
                                            <img class="img-preview img-fluid" id="img_mobile_preview">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">
                                            Banner Image (Mobile) <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="file" class="form-control" id="image_mobile" onchange="previewImageMobile()" name="banner_image_mobile">
                                        @error('banner_image_mobile')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col d-flex flex-column pt-2 gap-2">
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Banner Alt <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="alt" name="banner_alt" value="{{ old('banner_alt') }}">
                                        @error('banner_alt')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Banner Title
                                        </label>
                                        <input type="text" class="form-control" id="banner_title" name="banner_title" value="{{ old('banner_title') }}">
                                        @error('banner_title')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Banner Description
                                        </label>
                                        <textarea class="textarea" name="banner_description" id="banner_description">
                                            {{ old('banner_description') }}
                                        </textarea>
                                        @error('banner_description')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Banner Button <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="banner_button" name="banner_button" value="{{ old('banner_button') }}">
                                            @error('banner_button')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col">
                                            <label for="" class="form-label">
                                                Banner Button Color <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="color" class="form-control pick-color" id="banner_button_color" name="banner_button_color" value="{{ old('banner_button_color') }}">
                                            @error('banner_button_color')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Banner Link <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="banner_link" name="banner_link" value="{{ old('banner_link') }}">
                                        @error('banner_link')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary" id="submit" disabled>
                                        <i class="fa-solid fa-check me-1"></i> Submit
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
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function previewImageMobile(){
        const image = document.querySelector('#image_mobile')
        const imgPreview = document.querySelector('#img_mobile_preview')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function checkInput(){
        const region = document.getElementById('region').value;
        const lang = document.getElementById('lang').value;
        const submit = document.getElementById('submit');
        if (region != '' && lang != '') {
            submit.disabled = false;
        }
    };
    checkInput();
</script>
@endsection