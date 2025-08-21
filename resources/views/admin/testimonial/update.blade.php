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
                                        <i class="fa-solid fa-arrow-left me-md-1"></i><span class="d-md-inline d-none"> Back
                                            to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('update-testimonial', ['group' => $testimonial[0]->group]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="card-title">Form General</h5>
                                    @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Update Mentor!</strong> You have to check some fields in English
                                            and Indonesian.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-column gap-2">
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col-md-5">
                                                <label for="" class="form-label">
                                                    Name <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="name" name="testi_name"
                                                    value="{{ $testimonial[0]->testi_name }}">
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    Category <span style="color: var(--red)">*</span>
                                                </label>
                                                <div class="col">
                                                    <select class="select2" name="testi_category" id="category"
                                                        onchange="selectCategory()">
                                                        <option value=""></option>
                                                        <option value="Admissions Mentoring"
                                                            {{ $testimonial[0]->testi_category == 'Admissions Mentoring' ? 'selected' : '' }}>
                                                            Admissions Mentoring</option>
                                                        <option value="Experiential Learning"
                                                            {{ $testimonial[0]->testi_category == 'Experiential Learning' ? 'selected' : '' }}>
                                                            Experiential Learning</option>
                                                        <option value="Academic Preparation"
                                                            {{ $testimonial[0]->testi_category == 'Academic Preparation' ? 'selected' : '' }}>
                                                            Academic Preparation</option>
                                                        <option value="Exclusive Program School"
                                                            {{ $testimonial[0]->testi_category == 'Exclusive Program School' ? 'selected' : '' }}>
                                                            Exclusive Program School</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col d-none" id="sub_category_col">
                                                <label for="" class="form-label">
                                                    Sub Category
                                                    {{-- <span style="color: var(--red)">*</span> --}}
                                                </label>
                                                <div class="col">
                                                    <select class="select2" name="testi_subcategory" id="subcategory">
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Subtitle
                                            </label>
                                            <textarea class="textarea" name="testi_subtitle" id="subtitle">
                                            {{ $testimonial[0]->testi_subtitle }}
                                        </textarea>
                                        </div>
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col-md-2 col">
                                                <label for="" class="form-label">Thumbnail Preview</label>
                                                <div class="col d-flex align-items-center justify-content-center border rounded"
                                                    style="min-height: 110px">
                                                    <img class="img-preview img-fluid" id="img_preview"
                                                        src="{{ $testimonial[0]->testi_thumbnail != null ? Storage::url('testimonial/' . $testimonial[0]->created_at->format('Y') . '/' . $testimonial[0]->created_at->format('m') . '/' . $testimonial[0]->testi_thumbnail) : '' }}">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <div class="col d-flex flex-row justify-content-between">
                                                        <label for="" class="form-label">
                                                            Thumbnail
                                                        </label>
                                                        <small
                                                            class="alert text-danger p-0 m-0 fs-12 text-decoration-underline"
                                                            onclick="clearThumbnail()" style="cursor: pointer">Clear
                                                            Input</small>
                                                        <input class="d-none" type="text" id="checkThumbnail"
                                                            name="checkThumbnail">
                                                    </div>
                                                    <input type="file" class="form-control" id="thumbnail"
                                                        onchange="previewImage()" name="testi_thumbnail"
                                                        value="{{ $testimonial[0]->testi_thumbnail }}">
                                                    @error('testi_thumbnail')
                                                        <small
                                                            class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Alt
                                                    </label>
                                                    <input type="text" class="form-control" id="alt"
                                                        name="testi_alt" value="{{ $testimonial[0]->testi_alt }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs nav-tabs-bordered pt-3" id="borderedTab" role="tablist">
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
                                                        <label for="" class="form-label">
                                                            Description <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <textarea class="textarea" name="testi_desc_en" id="desc_en">
                                                        {{ $testimonial[0]->testi_desc }}
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
                                                        <label for="" class="form-label">
                                                            Description <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <textarea class="textarea" name="testi_desc_id" id="desc_id">
                                                        {{ $testimonial[1]->testi_desc }}
                                                    </textarea>
                                                        @error('testi_desc')
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
            const image = document.querySelector('#thumbnail')
            const imgPreview = document.querySelector('#img_preview')
            imgPreview.style.display = 'block'
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        };

        function checkInput() {
            const name = document.getElementById('name').value;
            const category = document.getElementById('category').value;
            const desc_en = tinymce.get('desc_en').getContent();
            const submit = document.getElementById('submit');
            if (name == "" || category == "" || desc_en == "") {
                submit.disabled = true;
            } else {
                submit.disabled = false;
            }
        };

        function clearThumbnail() {
            $('#thumbnail').val(null);
            $('#alt').val(null);
            $('#img_preview').attr('src', '');
            $('#checkThumbnail').val('true');
        }

        let sub_admission = ['Undergraduate Program', 'Graduate Program', 'University Transfer Program'];
        let sub_academic = ['Academic Tutoring', 'SAT/ACT Preparation'];
        let sub_school = ['Admission Accelerator', 'Experiential Learning', 'Teacher Focused'];

        function selectCategory() {
            let category = $('#category').val()
            $('#subcategory').html('<option value=""></option>')
            if (category == 'Admissions Mentoring') {
                $('#sub_category_col').removeClass('d-none')
                sub_admission.forEach(element => {
                    $('#subcategory').append(
                        '<option value="' + element + '">' + element + '</option>'
                    )
                });

                // for update 
                $('#subcategory').val('{{ $testimonial[0]->testi_subcategory }}').trigger('change')
            } else if (category == 'Academic Preparation') {
                $('#sub_category_col').removeClass('d-none')
                sub_academic.forEach(element => {
                    $('#subcategory').append(
                        '<option value="' + element + '">' + element + '</option>'
                    )
                });

                // for update 
                $('#subcategory').val('{{ $testimonial[0]->testi_subcategory }}').trigger('change')
            } else if (category == 'Exclusive Program School') {
                $('#sub_category_col').removeClass('d-none')
                sub_school.forEach(element => {
                    $('#subcategory').append(
                        '<option value="' + element + '">' + element + '</option>'
                    )
                });

                // for update 
                $('#subcategory').val('{{ $testimonial[0]->testi_subcategory }}').trigger('change')
            } else {
                $('#sub_category_col').removeClass('d-none').addClass('d-none')
            }
        }


        // for update 
        selectCategory()
    </script>
@endsection
