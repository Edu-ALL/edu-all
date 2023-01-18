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
        <h1>Mentor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/mentor">Mentor</a></li>
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
                                <h5 class="card-title">Update Mentor <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/mentor">
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
                            <form action="{{ route('update-mentor', ['group' => $mentor[0]->group]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="borderedTabContent">
                                    {{-- Tab English --}}
                                    <div class="tab-pane fade show active" id="bordered-english" role="tabpanel" aria-labelledby="english-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form English</h5>
                                            @if($errors->any())
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Failed Update Mentor!</strong> You have to check some fields in English and Indonesian.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Image Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_en" src="{{ asset('uploaded_files/mentor/'.$mentor[0]->mentor_picture) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Image <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="file" class="form-control" id="image_en" onchange="previewImage_en()" name="mentor_image_en">
                                                            @error('mentor_image_en')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_en" name="mentor_alt_en" value="{{ $mentor[0]->mentor_alt }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            First Name <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="firstname_en" name="mentor_firstname_en" value="{{ $mentor[0]->mentor_firstname }}">
                                                    </div>
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Last name <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="lastname_en" name="mentor_lastname_en" value="{{ $mentor[0]->mentor_lastname }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Graduation <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="mentor_graduation_en" id="graduation_en">
                                                        {{ $mentor[0]->mentor_graduation}}
                                                    </textarea>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Currently Working
                                                    </label>
                                                    <textarea class="textarea" name="mentor_currently_working_en" id="currently_working_en">
                                                        {{ $mentor[0]->currently_working }}
                                                    </textarea>
                                                    @error('mentor_currently_working_en')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Expertise
                                                    </label>
                                                    <textarea class="textarea" name="mentor_expertise_en" id="expertise_en">
                                                        {{ $mentor[0]->expertise }}
                                                    </textarea>
                                                    @error('mentor_expertise_en')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="mentor_description_en" id="description_en">
                                                        {{ $mentor[0]->description }}
                                                    </textarea>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Short Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="mentor_short_description_en" id="short_description_en">
                                                        {{ $mentor[0]->short_desc }}
                                                    </textarea>
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
                                                    <strong>Failed Create Mentor!</strong> You have to check some fields in English and Indonesian.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Image Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_id" src="{{ asset('uploaded_files/mentor/'.$mentor[1]->mentor_picture) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Image <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="file" class="form-control" id="image_id" onchange="previewImage_id()" name="mentor_image_id">
                                                            @error('mentor_image_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_id" name="mentor_alt_id" value="{{ $mentor[1]->mentor_alt }}">
                                                            @error('mentor_alt_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            First Name <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="firstname_id" name="mentor_firstname_id" value="{{ $mentor[1]->mentor_firstname }}">
                                                        @error('mentor_firstname_id')
                                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Last name <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <input type="text" class="form-control" id="lastname_id" name="mentor_lastname_id" value="{{ $mentor[1]->mentor_lastname }}">
                                                        @error('mentor_lastname_id')
                                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Graduation <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="mentor_graduation_id" id="graduation_id">
                                                        {{ $mentor[1]->mentor_graduation}}
                                                    </textarea>
                                                    @error('mentor_graduation_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Currently Working
                                                    </label>
                                                    <textarea class="textarea" name="mentor_currently_working_id" id="currently_working_id">
                                                        {{ $mentor[1]->currently_working }}
                                                    </textarea>
                                                    @error('mentor_currently_working_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Expertise
                                                    </label>
                                                    <textarea class="textarea" name="mentor_expertise_id" id="expertise_id">
                                                        {{ $mentor[1]->expertise }}
                                                    </textarea>
                                                    @error('mentor_expertise_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="mentor_description_id" id="description_id">
                                                        {{ $mentor[1]->description }}
                                                    </textarea>
                                                    @error('mentor_description_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Short Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="mentor_short_description_id" id="short_description_id">
                                                        {{ $mentor[1]->short_desc }}
                                                    </textarea>
                                                    @error('mentor_short_description_id')
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
        const firstname_en = document.getElementById('firstname_en').value;
        const lastname_en = document.getElementById('lastname_en').value;
        const graduation_en = tinymce.get('graduation_en').getContent();
        const description_en = tinymce.get('description_en').getContent();
        const short_description_en = tinymce.get('short_description_en').getContent();
        const image_en = document.getElementById('image_en').value;
        const alt_en = document.getElementById('alt_en').value;
        const submit = document.getElementById('submit');
        if (firstname_en == "" || lastname_en == "" || graduation_en == "" || description_en == "" || short_description_en == "" || image_en == "" || alt_en == "") {
            submit.disabled = true;
        } else {
            submit.disabled = false;
        }
    };

</script>
@endsection