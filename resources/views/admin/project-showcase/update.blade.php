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
        <h1>Project Showcase</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/project-showcase">Project Showcase</a></li>
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
                                <h5 class="card-title">Update Project Showcase <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/project-showcase">
                                    <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('update-project-showcase', ['id' => $project_showcase->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="card-title">Form Project Showcase</h5>
                                @if($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Failed Update Project Showcase!</strong> You have to check some fields.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="col d-flex flex-column gap-2">
                                    <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Full Name <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="full_name" name="full_name" value="{{ $project_showcase->name }}">
                                            @error('full_name')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-5 col">
                                            <label for="" class="form-label">
                                                Category <span style="color: var(--red)">*</span>
                                            </label>
                                            <div class="col">
                                                <select class="select2" name="category" id="category">
                                                    <option value=""></option>
                                                    <option value="Business" {{ $project_showcase->category == 'Business' ? 'selected' : '' }}>Business</option>
                                                    <option value="Science & Tech" {{ $project_showcase->category == 'Science & Tech' ? 'selected' : '' }}>Science & Tech</option>
                                                    <option value="Art" {{ $project_showcase->category == 'Art' ? 'selected' : '' }}>Art</option>
                                                    <option value="Social" {{ $project_showcase->category == 'Social' ? 'selected' : '' }}>Social</option>
                                                    <option value="Health" {{ $project_showcase->category == 'Health' ? 'selected' : '' }}>Health</option>
                                                </select>
                                            </div>
                                            @error('category')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Project Name <span style="color: var(--red)">*</span>
                                        </label>
                                        <textarea class="textarea" name="project_name" id="project_name">
                                            {{ $project_showcase->project_name }}
                                        </textarea>
                                        @error('project_name')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Description <span style="color: var(--red)">*</span>
                                        </label>
                                        <textarea class="textarea" name="description" id="description">
                                            {{ $project_showcase->description }}
                                        </textarea>
                                        @error('description')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                        <div class="col-md-2 col">
                                            <label for="" class="form-label">Thumbnail Preview</label>
                                            <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                <img class="img-preview img-fluid" id="img_preview" src="{{ asset('uploaded_files/'.'project-showcase/'.$project_showcase->created_at->format('Y').'/'.$project_showcase->created_at->format('m').'/'.$project_showcase->thumbnail) }}">
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column gap-2">
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Thumbnail
                                                </label>
                                                <input type="file" class="form-control" id="thumbnail" onchange="previewImage()" name="thumbnail">
                                                @error('thumbnail')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Alt <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="alt" name="alt" value="{{ $project_showcase->alt }}">
                                                @error('alt')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Gallery
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
                                        <div class="col d-flex flex-row flex-wrap align-items-start justify-content-start border rounded p-2 gap-1" style="min-height: 110px" id="output">
                                            @foreach (json_decode($project_showcase->gallery) as $image)
                                                <div class="image col-2" id="preview-image">
                                                    <img class="img-fluid" src="{{ asset('uploaded_files/'.'project-showcase/'.$project_showcase->created_at->format('Y').'/'.$project_showcase->created_at->format('m').'/'.$image) }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center mt-3">
                                    <button type="submit" class="btn btn-primary" id="submit">
                                        <i class="fa-solid fa-pen-to-square me-1"></i> Update
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
        const image = document.querySelector('#thumbnail')
        const imgPreview = document.querySelector('#img_preview')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };

    const output = document.querySelector("#output")
    const input = document.querySelector("#gallery")
    const preview = document.querySelector("#preview-image")
    let imagesArray = []
    input.addEventListener("change", () => {
        preview.remove()
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