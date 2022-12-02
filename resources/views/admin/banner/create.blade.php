@extends('layout.admin.app')
@section('css')
<style>
    
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
                                    <i class="fa-solid fa-arrow-left me-1"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#bordered-english" type="button" role="tab" aria-controls="english" aria-selected="true">English</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="indo-tab" data-bs-toggle="tab" data-bs-target="#bordered-indo" type="button" role="tab" aria-controls="indo" aria-selected="false" onclick="checkInput()">Indonesia</button>
                                </li>
                            </ul>
                            <form action="{{ route('create-banner') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="borderedTabContent">
                                    {{-- Tab English --}}
                                    <div class="tab-pane fade show active" id="bordered-english" role="tabpanel" aria-labelledby="english-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form English</h5>
                                            <div class="row g-3">
                                                <div class="col d-flex flex-column gap-2">
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Image</label>
                                                        <input type="file" class="form-control" id="image_en" onchange="previewImage_en()" name="banner_image_en">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Alt</label>
                                                        <input type="text" class="form-control" id="alt_en" name="banner_alt_en">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Title</label>
                                                        <input type="text" class="form-control" id="title_en" name="banner_title_en">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Description</label>
                                                        <textarea class="textarea" name="banner_description_en" id="description_en"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Button</label>
                                                        <input type="text" class="form-control" id="button_en" name="banner_button_en">
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="" class="form-label">Banner Link</label>
                                                        <input type="text" class="form-control" id="link_en" name="banner_link_en">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Image Preview</label>
                                                        <div class="col border rounded" style="min-height: 34px">
                                                            <img class="img-preview img-fluid" id="img_preview_en">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Tab Indonesia --}}
                                    <div class="tab-pane fade" id="bordered-indo" role="tabpanel" aria-labelledby="indo-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form Indonesia</h5>
                                            <div class="row g-3">
                                                <div class="col d-flex flex-column gap-2">
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Image</label>
                                                        <input type="file" class="form-control" id="image_id" onchange="previewImage_id()" name="banner_image_id">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Alt</label>
                                                        <input type="text" class="form-control" id="" name="banner_alt_id">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Title</label>
                                                        <input type="text" class="form-control" id="" name="banner_title_id">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Description</label>
                                                        <textarea class="textarea" name="banner_description_id" id=""></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Button</label>
                                                        <input type="text" class="form-control" id="" name="banner_button_id">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Link</label>
                                                        <input type="text" class="form-control" id="" name="banner_link_id">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="col-12">
                                                        <label for="" class="form-label">Banner Image Preview</label>
                                                        <div class="col border rounded" style="min-height: 34px">
                                                            <img class="img-preview img-fluid" id="img_preview_id">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary" id="submit">
                                                        <i class="fa-solid fa-check me-1"></i> Submit
                                                    </button>
                                                </div>
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
        const image_en = document.getElementById('image_en').value;
        const alt_en = document.getElementById('alt_en').value;
        const title_en = document.getElementById('title_en').value;
        const description_en = tinymce.get('description_en').getContent();
        const button_en = document.getElementById('button_en').value;
        const link_en = document.getElementById('link_en').value;
        const submit = document.getElementById('submit');
        console.log(description_en);

        if (image_en == "" || alt_en == "" || title_en == "" || description_en == "" || button_en == "" || link_en == "") {
            submit.disabled = true;
        } else {
            submit.disabled = false;
        }
    };

</script>
@endsection