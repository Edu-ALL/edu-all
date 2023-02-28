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
        <h1>Project Showcase</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/project-showcase">Project Showcase</a></li>
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
                                <h5 class="card-title">Create New Project Showcase <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/project-showcase">
                                    <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('create-project-showcase') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="card-title">Form Project Showcase</h5>
                                @if($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Failed Create Project Showcase!</strong> You have to check some fields.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="col d-flex flex-column gap-2">
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Full Name <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}">
                                        @error('full_name')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Category <span style="color: var(--red)">*</span>
                                            </label>
                                            <div class="col">
                                                <select class="select2" name="category" id="category">
                                                    <option value=""></option>
                                                    <option value="Business" {{ old('category') == 'Business' ? 'selected' : '' }}>Business</option>
                                                    <option value="Science & Tech" {{ old('category') == 'Science & Tech' ? 'selected' : '' }}>Science & Tech</option>
                                                    <option value="Art" {{ old('category') == 'Art' ? 'selected' : '' }}>Art</option>
                                                    <option value="Social" {{ old('category') == 'Social' ? 'selected' : '' }}>Social</option>
                                                    <option value="Health" {{ old('category') == 'Health' ? 'selected' : '' }}>Health</option>
                                                </select>
                                            </div>
                                            @error('category')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Project Name <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="project_name" name="project_name" value="{{ old('project_name') }}">
                                            @error('project_name')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Gallery <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="file" class="form-control" id="gallery" name="gallery[]" multiple>
                                        @error('gallery')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Gallery Preview
                                        </label>
                                        <div class="col d-flex flex-row flex-wrap align-items-center justify-content-start border rounded p-2 gap-1" style="min-height: 110px" id="output">
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
    const output = document.querySelector("#output")
    const input = document.querySelector("#gallery")
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