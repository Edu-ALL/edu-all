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
            <h1>Success Stories</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/success-stories">Success Stories</a></li>
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
                                    <h5 class="card-title">Update Success Stories <span>| {{ now()->year }}</span></h5>
                                    <a type="button" class="btn btn-primary" href="/admin/success-stories">
                                        <i class="fa-solid fa-arrow-left me-md-1"></i><span class="d-md-inline d-none"> Back
                                            to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form
                                    action="{{ route('update-success-stories', ['group' => $success_stories[0]->group]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="card-title">Form General</h5>
                                    @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Update Success Stories!</strong> You have to check some fields in
                                            English and Indonesian.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-column gap-2">
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col-md-2 col">
                                                <label for="" class="form-label">Thumbnail Preview</label>
                                                <div class="col d-flex align-items-center justify-content-center border rounded"
                                                    style="min-height: 110px">
                                                    <img class="img-preview img-fluid" id="thumbnail_img_preview"
                                                        src="{{ asset('uploaded_files/' . 'success-stories/' . $success_stories[0]->created_at->format('Y') . '/' . $success_stories[0]->created_at->format('m') . '/' . $success_stories[0]->thumbnail) }}">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Thumbnail
                                                    </label>
                                                    <input type="file" class="form-control" id="thumbnail"
                                                        onchange="previewImage('thumbnail')" name="story_thumbnail">
                                                    @error('story_thumbnail')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Alt <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="alt"
                                                        name="story_alt" value="{{ $success_stories[0]->thumbnail_alt }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col-md-2 col">
                                                <label for="" class="form-label">Home Thumbnail Preview</label>
                                                <div class="col d-flex align-items-center justify-content-center border rounded"
                                                    style="min-height: 110px">
                                                    <img class="img-preview img-fluid" id="home_thumbnail_img_preview"
                                                        src="{{ asset('uploaded_files/' . 'success-stories/' . $success_stories[0]->created_at->format('Y') . '/' . $success_stories[0]->created_at->format('m') . '/' . $success_stories[0]->home_thumbnail) }}">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Home Thumbnail
                                                    </label>
                                                    <input type="file" class="form-control" id="home_thumbnail"
                                                        onchange="previewImage('home_thumbnail')"
                                                        name="story_home_thumbnail">
                                                    @error('story_home_thumbnail')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Alt <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="home_alt"
                                                        name="story_home_alt"
                                                        value="{{ $success_stories[0]->home_thumbnail_alt }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    Name <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="name" name="story_name"
                                                    value="{{ $success_stories[0]->name }}" onchange="checkInput()">
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    Link
                                                </label>
                                                <input type="text" class="form-control" id="video_link"
                                                    name="story_video_link" value="{{ $success_stories[0]->video_link }}">
                                                @error('story_video_link')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Category <span style="color: var(--red)">*</span>
                                            </label>
                                            <div class="col">
                                                <select class="select2" name="story_category" id="category"
                                                    onchange="checkInput()">
                                                    <option value=""></option>
                                                    <option value="Admission Mentoring"
                                                        {{ $success_stories[0]->category == 'Admission Mentoring' ? 'selected' : '' }}>
                                                        Admission Mentoring</option>
                                                    <option value="Passion Project"
                                                        {{ $success_stories[0]->category == 'Passion Project' ? 'selected' : '' }}>
                                                        Passion Project</option>
                                                </select>
                                            </div>
                                            @error('story_category')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
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
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col">
                                                            <label for="" class="form-label">
                                                                Badge 1 <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <textarea class="textarea" name="story_badge1_en" id="badge1_en">
                                                            {{ $success_stories[0]->badge_1 }}
                                                        </textarea>
                                                        </div>
                                                        <div class="col">
                                                            <label for="" class="form-label">
                                                                Badge 2
                                                            </label>
                                                            <textarea class="textarea" name="story_badge2_en" id="badge2_en">
                                                            {{ $success_stories[0]->badge_2 }}
                                                        </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Summary Description <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <textarea class="textarea" name="story_summary_description_en" id="summary_description_en">
                                                        {{ $success_stories[0]->summary_description }}
                                                    </textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Description <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <textarea class="textarea" name="story_description_en" id="description_en">
                                                        {{ $success_stories[0]->description }}
                                                    </textarea>
                                                    </div>
                                                    <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                        <div class="col-md-2 col">
                                                            <label for="" class="form-label">Achievement
                                                                Preview</label>
                                                            <div class="col d-flex align-items-center justify-content-center border rounded"
                                                                style="min-height: 110px">
                                                                <img class="img-preview img-fluid"
                                                                    id="achievement_preview_en"
                                                                    src="{{ $success_stories[0]->achievement_image ? asset('uploaded_files/' . 'success-stories/' . $success_stories[0]->created_at->format('Y') . '/' . $success_stories[0]->created_at->format('m') . '/' . $success_stories[0]->achievement_image) : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col d-flex flex-column gap-2">
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Achievement Image
                                                                </label>
                                                                <input type="file" class="form-control"
                                                                    id="achievement_img_en"
                                                                    onchange="previewAchievement_en()"
                                                                    name="story_achievement_img_en">
                                                                @error('story_achievement_img_en')
                                                                    <small
                                                                        class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Achievement Alt
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="achievement_alt_en"
                                                                    name="story_achievement_alt_en"
                                                                    value="{{ $success_stories[0]->achievement_alt }}">
                                                            </div>
                                                        </div>
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
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col">
                                                            <label for="" class="form-label">
                                                                Badge 1 <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <textarea class="textarea" name="story_badge1_id" id="badge1_id">
                                                            {{ $success_stories[1]->badge_1 }}
                                                        </textarea>
                                                        </div>
                                                        <div class="col">
                                                            <label for="" class="form-label">
                                                                Badge 2
                                                            </label>
                                                            <textarea class="textarea" name="story_badge2_id" id="badge2_id">
                                                            {{ $success_stories[1]->badge_2 }}
                                                        </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Summary Description <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <textarea class="textarea" name="story_summary_description_id" id="summary_description_id">
                                                        {{ $success_stories[1]->summary_description }}
                                                    </textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="" class="form-label">
                                                            Description <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <textarea class="textarea" name="story_description_id" id="description_id">
                                                        {{ $success_stories[1]->description }}
                                                    </textarea>
                                                        @error('story_description_id')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                        <div class="col-md-2 col">
                                                            <label for="" class="form-label">Achievement
                                                                Preview</label>
                                                            <div class="col d-flex align-items-center justify-content-center border rounded"
                                                                style="min-height: 110px">
                                                                <img class="img-preview img-fluid"
                                                                    id="achievement_preview_id"
                                                                    src="{{ $success_stories[1]->achievement_image ? asset('uploaded_files/' . 'success-stories/' . $success_stories[0]->created_at->format('Y') . '/' . $success_stories[0]->created_at->format('m') . '/' . $success_stories[1]->achievement_image) : '' }}">
                                                            </div>
                                                        </div>
                                                        <div class="col d-flex flex-column gap-2">
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Achievement Image
                                                                </label>
                                                                <input type="file" class="form-control"
                                                                    id="achievement_img_id"
                                                                    onchange="previewAchievement_id()"
                                                                    name="story_achievement_img_id">
                                                                @error('story_achievement_img_id')
                                                                    <small
                                                                        class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="" class="form-label">
                                                                    Achievement Alt
                                                                </label>
                                                                <input type="text" class="form-control"
                                                                    id="achievement_alt_id"
                                                                    name="story_achievement_alt_id"
                                                                    value="{{ $success_stories[1]->achievement_alt }}">
                                                                @error('story_achievement_alt_id')
                                                                    <small
                                                                        class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
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
        function previewImage(id) {
            const image = document.querySelector('#' + id)
            const imgPreview = document.querySelector('#' + id + '_img_preview')
            imgPreview.style.display = 'block'
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        };

        function previewAchievement_en() {
            const image = document.querySelector('#achievement_img_en')
            const imgPreview = document.querySelector('#achievement_preview_en')
            imgPreview.style.display = 'block'
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        };

        function previewAchievement_id() {
            const image = document.querySelector('#achievement_img_id')
            const imgPreview = document.querySelector('#achievement_preview_id')
            imgPreview.style.display = 'block'
            const oFReader = new FileReader()
            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        };

        function checkInput() {
            const thumbnail = document.getElementById('thumbnail').value;
            const alt = document.getElementById('alt').value;
            const name = document.getElementById('name').value;
            const category = document.getElementById('category').value;
            const video_link = document.getElementById('video_link').value;
            const badge1_en = document.getElementById('badge1_en').value;
            const summary_description_en = tinymce.get('summary_description_en').getContent();
            const description_en = tinymce.get('description_en').getContent();
            // const achievement_img_en = document.getElementById('achievement_img_en').value;
            // const achievement_alt_en = document.getElementById('achievement_alt_en').value;
            const submit = document.getElementById('submit');
            if (alt == "" || name == "" || badge1_en == "" || summary_description_en == "" || description_en == "") {
                submit.disabled = true;
            } else {
                submit.disabled = false;
            }
        };
    </script>
@endsection
