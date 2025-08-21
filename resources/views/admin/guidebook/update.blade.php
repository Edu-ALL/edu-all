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
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Guidebook</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/guidebook">Guidebook</a></li>
                <li class="breadcrumb-item active">Update</li>
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
                                <h5 class="card-title">Update Guidebook <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/guidebook">
                                    <i class="fa-solid fa-arrow-left me-md-1"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('update-guidebook', ['group' => $guidebook[0]->group]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="card-title">Form General</h5>
                                @if($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Failed Update Guidebook!</strong> You have to check some fields in English and Indonesian.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="col-12">
                                    <label for="" class="form-label">
                                        Category <span style="color: var(--red)">*</span>
                                    </label>
                                    <div class="col">
                                        <select class="select2" name="guidebook_category" id="category">
                                            <option value=""></option>
                                            <option value="Getting Started" {{ $guidebook[0]->guidebook_category == 'Getting Started' ? 'selected' : '' }}>Getting Started</option>
                                            <option value="Build Your Profile" {{ $guidebook[0]->guidebook_category == 'Build Your Profile' ? 'selected' : '' }}>Build Your Profile</option>
                                            <option value="Apply to Your Dream University" {{ $guidebook[0]->guidebook_category == 'Apply to Your Dream University' ? 'selected' : '' }}>Apply to Your Dream University</option>
                                            <option value="Grab The Scholarship" {{ $guidebook[0]->guidebook_category == 'Grab The Scholarship' ? 'selected' : '' }}>Grab The Scholarship</option>
                                        </select>
                                    </div>
                                    @error('guidebook_category')
                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                    @enderror
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered pt-3" id="borderedTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#bordered-english" type="button" role="tab" aria-controls="english" aria-selected="true">English</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="indo-tab" data-bs-toggle="tab" data-bs-target="#bordered-indo" type="button" role="tab" aria-controls="indo" aria-selected="false" onclick="checkInput()">Indonesia</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="borderedTabContent">
                                    {{-- Tab English --}}
                                    <div class="tab-pane fade show active" id="bordered-english" role="tabpanel" aria-labelledby="english-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form English</h5>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Image Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_en" src="{{ Storage::url('guidebook/'.$guidebook[0]->created_at->format('Y').'/'.$guidebook[0]->created_at->format('m').'/'.$guidebook[0]->guidebook_image) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Image
                                                            </label>
                                                            <input type="file" class="form-control" id="image_en" onchange="previewImage_en()" name="guidebook_image_en">
                                                            @error('guidebook_image_en')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_en" name="guidebook_alt_en" value="{{ $guidebook[0]->guidebook_alt }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Link <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="link_en" name="guidebook_link_en" value="{{ $guidebook[0]->guidebook_link }}">
                                                    @error('guidebook_link_en')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Tab Indonesia --}}
                                    <div class="tab-pane fade" id="bordered-indo" role="tabpanel" aria-labelledby="indo-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form Indonesia</h5>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Image Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_id" src="{{ Storage::url('guidebook/'.$guidebook[1]->created_at->format('Y').'/'.$guidebook[1]->created_at->format('m').'/'.$guidebook[1]->guidebook_image) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Image
                                                            </label>
                                                            <input type="file" class="form-control" id="image_id" onchange="previewImage_id()" name="guidebook_image_id">
                                                            @error('guidebook_image_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_id" name="guidebook_alt_id" value="{{ $guidebook[1]->guidebook_alt }}">
                                                            @error('guidebook_alt_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Link <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="link_id" name="guidebook_link_id" value="{{ $guidebook[1]->guidebook_link }}">
                                                    @error('guidebook_link_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary" id="submit">
                                                    <i class="fa-solid fa-pen-to-square me-1"></i> Update
                                                </button>
                                            </div>
                                        </div>
                                    </div>
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
    function previewImage_en(){
        const image = document.querySelector('#image_en')
        const imgPreview = document.querySelector('#img_preview_en')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function previewImage_id(){
        const image = document.querySelector('#image_id')
        const imgPreview = document.querySelector('#img_preview_id')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function checkInput(){
        const category = document.getElementById('category').value;
        const image_en = document.getElementById('image_en').value;
        const alt_en = document.getElementById('alt_en').value;
        const link_en = document.getElementById('link_en').value;
        const submit = document.getElementById('submit');
        if (alt_en == "" || category == "" || link_en == "") {
            submit.disabled = true;
        } else {
            submit.disabled = false;
        }
    };

</script>
@endsection