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
            <h1>Regular Talk</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/regular-talk">Regular Talk</a></li>
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
                                    <h5 class="card-title">Create New Regular Talk <span>| {{ now()->year }}</span></h5>
                                    <a type="button" class="btn btn-primary" href="/admin/regular-talk">
                                        <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Back to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('create-regular-talk') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h5 class="card-title">Form Regular Talk</h5>
                                    @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Create Regular Talk!</strong> You have to check some fields.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-column gap-2">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Topic <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="topic" name="topic"
                                                value="{{ old('topic') }}" oninput="createSlug()">
                                            @error('topic')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Slug <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="topic_slug" name="topic_slug"
                                                value="{{ old('topic_slug') }}">
                                            @error('topic_slug')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col row">
                                            <div class="col-md-3">
                                                <label for="" class="form-label">
                                                    Date <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="date" class="form-control" id="date" name="date"
                                                    value="{{ old('date') }}">
                                                @error('date')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-md-2">
                                                <label for="" class="form-label">
                                                    Time <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="time" class="form-control" id="time" name="time"
                                                    value="{{ old('time') }}">
                                                @error('time')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-md-2">
                                                <label for="" class="form-label">
                                                    Recommended for? <span style="color: var(--red)">*</span>
                                                </label>
                                                <select name="recommended_for" id="" class="form-control form-select">
                                                    <option value="parents">Parents</option>
                                                    <option value="students">Students</option>
                                                    <option value="both" selected>Both</option>
                                                </select>
                                                @error('recommended_for')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-md-5">
                                                <label for="" class="form-label">
                                                    Form Link <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="url" class="form-control" id="form_link" name="form_link"
                                                    value="{{ old('form_link') }}">
                                                @error('form_link')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Description <span style="color: var(--red)">*</span>
                                            </label>
                                            <textarea class="textarea" name="description" id="description">
                                            {{ old('description') }}
                                        </textarea>
                                            @error('description')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Key Takeaways <span style="color: var(--red)">*</span>
                                            </label>
                                            <textarea class="textarea" name="key_takeaways" id="key_takeaways">
                                            {{ old('key_takeaways') }}
                                        </textarea>
                                            @error('key_takeaways')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Speaker Image <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="file" class="form-control" id="speaker" name="speaker[]"
                                                multiple>
                                            @error('speaker')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Speaker Image Preview
                                            </label>
                                            <div class="col d-flex flex-row flex-wrap align-items-center justify-content-start border rounded p-2 gap-1"
                                                style="min-height: 110px" id="output">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary" id="submit">
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
        function createSlug() {
            const topic = document.getElementById('topic').value.toLowerCase().replace(/[^a-zA-Z ]/g, "").split(
                ' ').join('-');
            const topic_slug = document.getElementById('topic_slug');
            topic_slug.value = topic;
        };
    </script>

    <script>
        const output = document.querySelector("#output")
        const input = document.querySelector("#speaker")
        let imagesArray = []
        input.addEventListener("change", () => {
            imagesArray = []
            const files = input.files
            for (let i = 0; i < files.length; i++) {
                imagesArray.push(files[i])
            }
            displayImages()
        })

        function displayImages() {
            let images = ""
            imagesArray.forEach((image, index) => {
                images += `<div class="image col-2">
                        <img class="img-fluid" src="${URL.createObjectURL(image)}">
                    </div>`
            })
            output.innerHTML = images
        }
    </script>
@endsection
