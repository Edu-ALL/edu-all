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
                                        <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Back to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('update-mentor', ['group' => $mentor[0]->group]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="card-title">Form General</h5>
                                    @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Create Mentor!</strong> You have to check some fields in English
                                            and Indonesian.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                        <div class="col-md-2 col">
                                            <label for="" class="form-label">Image Preview</label>
                                            <div class="col d-flex align-items-center justify-content-center border rounded"
                                                style="min-height: 110px">
                                                <img class="img-preview img-fluid" id="img_preview"
                                                    src="{{ asset('uploaded_files/' . 'mentor/' . $mentor[0]->created_at->format('Y') . '/' . $mentor[0]->created_at->format('m') . '/' . $mentor[0]->mentor_picture) }}">
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column gap-2">
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Image
                                                </label>
                                                <input type="file" class="form-control" id="image"
                                                    onchange="previewImage()" name="mentor_image">
                                                @error('mentor_image')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Alt <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="alt" name="mentor_alt"
                                                    value="{{ $mentor[0]->mentor_alt }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="" class="form-label">
                                            Full Name <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="fullname" name="mentor_fullname"
                                            value="{{ $mentor[0]->mentor_fullname }}" onchange="checkLength()">
                                        <small class="d-none alert text-danger ps-0 fs-12" id="checkFullname">Maximum length
                                            of Full Name is 24 characters</small>
                                        @error('mentor_fullname')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col d-flex flex-md-row flex-column pt-2 pb-3 gap-md-3 gap-2">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Slug <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="slug" name="mentor_slug"
                                                value="{{ $mentor[0]->mentor_slug }}">
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Category <span style="color: var(--red)">*</span>
                                            </label>
                                            <div class="col">
                                                <select class="select2" name="mentor_category" id="category">
                                                    <option value=""></option>
                                                    <option value="ALL-In Mentor"
                                                        {{ $mentor[0]->mentor_category == 'ALL-In Mentor' ? 'selected' : '' }}>
                                                        ALL-In Mentor</option>
                                                    <option value="Profile Building Mentor"
                                                        {{ $mentor[0]->mentor_category == 'Profile Building Mentor' ? 'selected' : '' }}>
                                                        Profile Building Mentor</option>\
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="english-tab" data-bs-toggle="tab"
                                                data-bs-target="#bordered-english" type="button" role="tab"
                                                aria-controls="english" aria-selected="true">English</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="indo-tab" data-bs-toggle="tab"
                                                data-bs-target="#bordered-indo" type="button" role="tab"
                                                aria-controls="indo" aria-selected="false"
                                                onclick="checkInput()">Indonesia</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="borderedTabContent">
                                        {{-- Tab English --}}
                                        <div class="tab-pane fade show active" id="bordered-english" role="tabpanel"
                                            aria-labelledby="english-tab">
                                            <div class="col py-2">
                                                <h5 class="card-title">Form English</h5>
                                                <div class="col d-flex flex-column gap-2">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="" class="form-label">
                                                                    Meta Title <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="meta_title_en"
                                                                    value="{{ $mentor[0]->meta_title }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="" class="form-label">
                                                                    Meta Description <span
                                                                        style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="meta_desc_en" value="{{ $mentor[0]->meta_desc }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Graduation <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <textarea class="textarea" name="mentor_graduation_en" id="graduation_en">
                                                        {{ $mentor[0]->mentor_graduation }}
                                                    </textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Currently Working
                                                        </label>
                                                        <textarea class="textarea" name="mentor_currently_working_en" id="currently_working_en">
                                                        {{ $mentor[0]->currently_working }}
                                                    </textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Expertise
                                                        </label>
                                                        <textarea class="textarea" name="mentor_expertise_en" id="expertise_en">
                                                        {{ $mentor[0]->expertise }}
                                                    </textarea>
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
                                        <div class="tab-pane fade" id="bordered-indo" role="tabpanel"
                                            aria-labelledby="indo-tab">
                                            <div class="col py-2">
                                                <h5 class="card-title">Form Indonesia</h5>
                                                <div class="col d-flex flex-column gap-2">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="" class="form-label">
                                                                    Meta Title <span style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="meta_title_id"
                                                                    value="{{ $mentor[1]->meta_title }}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="" class="form-label">
                                                                    Meta Description <span
                                                                        style="color: var(--red)">*</span>
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    name="meta_desc_id" value="{{ $mentor[1]->meta_desc }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Graduation <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <textarea class="textarea" name="mentor_graduation_id" id="graduation_id">
                                                        {{ $mentor[1]->mentor_graduation }}
                                                    </textarea>
                                                        @error('mentor_graduation_id')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
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
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
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
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
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
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
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
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
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
        function previewImage() {
            const image = document.querySelector('#image')
            const imgPreview = document.querySelector('#img_preview')
            imgPreview.style.display = 'block'
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        };

        function createSlug() {
            let fullname = document.getElementById('fullname').value.toLowerCase().replace(/[^a-zA-Z ]/g, "").split(' ')
                .join('-');
            let slug = document.getElementById('slug');
            slug.value = fullname;
        };

        function checkLength() {
            let fullname = document.getElementById('fullname').value.length;
            let checkFullname = document.getElementById('checkFullname');
            if (fullname > 24) {
                checkFullname.classList.remove('d-none');
            } else {
                checkFullname.classList.add('d-none');
            }
            createSlug();
        }

        function checkInput() {
            const firstname = document.getElementById('firstname').value;
            const lastname = document.getElementById('lastname').value;
            const slug = document.getElementById('slug').value;
            const category = document.getElementById('category').value;
            const graduation_en = tinymce.get('graduation_en').getContent();
            const description_en = tinymce.get('description_en').getContent();
            const short_description_en = tinymce.get('short_description_en').getContent();
            const image = document.getElementById('image').value;
            const alt = document.getElementById('alt').value;
            const submit = document.getElementById('submit');
            if (firstname == "" || slug == "" || category == "" || graduation_en == "" || description_en == "" ||
                short_description_en == "" || alt == "") {
                submit.disabled = true;
            } else {
                submit.disabled = false;
            }
        };
    </script>
@endsection
