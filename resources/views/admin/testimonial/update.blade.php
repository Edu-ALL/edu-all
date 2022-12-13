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
        <h1>Testimonial</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/testimonial">Testimonial</a></li>
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
                                <h5 class="card-title">Update Testimonial <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/testimonial">
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
                            <form action="" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="borderedTabContent">
                                    {{-- Tab English --}}
                                    <div class="tab-pane fade show active" id="bordered-english" role="tabpanel" aria-labelledby="english-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form English</h5>
                                            @if($errors->any())
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Failed Update Testimonial!</strong> You have to check some fields in English and Indonesian.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Name <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="name_en" name="testi_name_en" value="{{ $testimonial[0]->testi_name }}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="testi_desc_en" id="desc_en">
                                                        {{ $testimonial[0]->testi_desc }}
                                                    </textarea>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Program <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="program_en" name="testi_program_en" value="{{ $testimonial[0]->testi_program }}">
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Thumbnail Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_en" src="{{ asset('uploaded_files/testimonial/'.$testimonial[0]->testi_thumbnail) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Thumbnail <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="file" class="form-control" id="thumbnail_en" onchange="previewImage_en()" name="testi_thumbnail_en" value="{{ $testimonial[0]->testi_thumbnail }}">
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_en" name="testi_alt_en" value="{{ $testimonial[0]->testi_alt }}">
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
                                            @if($errors->any())
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Failed Create Testimonial!</strong> You have to check some fields in English and Indonesian.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Name <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="name_id" name="testi_name_id" value="{{ $testimonial[0]->testi_name }}">
                                                    @error('testi_name_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="testi_desc_id" id="desc_id">
                                                        {{ $testimonial[0]->testi_desc }}
                                                    </textarea>
                                                    @error('testi_desc_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Program <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="program_id" name="testi_program_id" value="{{ $testimonial[0]->testi_program }}">
                                                    @error('testi_program_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Thumbnail Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_id" src="{{ asset('uploaded_files/testimonial/'.$testimonial[0]->testi_thumbnail) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Thumbnail <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="file" class="form-control" id="thumbnail_id" onchange="previewImage_id()" name="testi_thumbnail_id" value="{{ $testimonial[0]->testi_thumbnail}}">
                                                            @error('testi_thumbnail_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_id" name="testi_alt_id" value="{{ $testimonial[0]->testi_alt }}">
                                                            @error('testi_alt_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-center mt-3">
                                                <button type="submit" class="btn btn-primary" id="submit">
                                                    <i class="fa-solid fa-check me-1"></i> Submit
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
        const image = document.querySelector('#thumbnail_en')
        const imgPreview = document.querySelector('#img_preview_en')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function previewImage_id(){
        const image = document.querySelector('#thumbnail_id')
        const imgPreview = document.querySelector('#img_preview_id')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function checkInput(){
        const name_en = document.getElementById('name_en').value;
        const desc_en = tinymce.get('desc_en').getContent();
        const program_en = document.getElementById('program_en').value;
        const thumbnail_en = document.getElementById('thumbnail_en').value;
        const alt_en = document.getElementById('alt_en').value;
        const submit = document.getElementById('submit');
        if (name_en == "" || desc_en == "" || program_en == "" || thumbnail_en == "" || alt_en == "") {
            submit.disabled = true;
        } else {
            submit.disabled = false;
        }
    };

</script>
@endsection