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
        <h1>Blogs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/blogs">Blogs</a></li>
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
                                <h5 class="card-title">Create New Blogs <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/blogs">
                                    <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('create-blogs') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col py-3">
                                    @if($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Create Blogs!</strong> You have to check this field.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-column gap-2">
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col-md-2 col">
                                                <label for="" class="form-label">Thumbnail Preview</label>
                                                <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                    <img class="img-preview img-fluid" id="img_preview">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Thumbnail <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="file" class="form-control" id="thumbnail" onchange="previewImage()" name="blog_thumbnail">
                                                    @error('blog_thumbnail')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Alt <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="alt_en" name="blog_alt" value="{{ old('blog_alt') }}">
                                                    @error('blog_alt')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    Language <span style="color: var(--red)">*</span>
                                                </label>
                                                <div class="col">
                                                    <select class="select2" name="lang" id="lang">
                                                        <option value=""></option>
                                                        <option value="en" {{ old('lang') == 'en' ? 'selected' : '' }}>English</option>
                                                        <option value="id" {{ old('lang') == 'id' ? 'selected' : '' }}>Indonesia</option>
                                                    </select>
                                                </div>
                                                @error('lang')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    Category <span style="color: var(--red)">*</span>
                                                </label>
                                                <div class="col">
                                                    <select class="select2" name="category" id="category">
                                                        <option value=""></option>
                                                        <optgroup label="Language : English">
                                                            @foreach ($category_en as $category)
                                                            <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                                                {{ $category->category_name }}
                                                            </option>
                                                            @endforeach
                                                        </optgroup>
                                                        <optgroup label="Language : Indonesia">
                                                            @foreach ($category_id as $category)
                                                            <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>
                                                                {{ $category->category_name }}
                                                            </option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                @error('category')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    Mentor
                                                </label>
                                                <div class="col">
                                                    <select class="select2" name="mentor" id="mentor">
                                                        <option value=""></option>
                                                        <optgroup label="Language : English">
                                                            @foreach ($mentor_en as $mentor)
                                                                <option value="{{ $mentor->id }}" {{ old('mentor') == $mentor->id ? 'selected' : '' }}>
                                                                    {{ $mentor->mentor_firstname.' '.$mentor->mentor_lastname }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                        <optgroup label="Language : Indonesia">
                                                            @foreach ($mentor_id as $mentor)
                                                                <option value="{{ $mentor->id }}" {{ old('mentor') == $mentor->id ? 'selected' : '' }}>
                                                                    {{ $mentor->mentor_firstname.' '.$mentor->mentor_lastname }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                                @error('mentor')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Title <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="blog_title" name="blog_title" value="{{ old('blog_title') }}">
                                            @error('blog_title')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Slug <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="blog_slug" name="blog_slug" value="{{ old('blog_slug') }}">
                                            @error('blog_slug')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                Description <span style="color: var(--red)">*</span>
                                            </label>
                                            <textarea class="textarea" name="blog_description" id="blog_description">
                                                {{ old('blog_description') }}
                                            </textarea>
                                            @error('blog_description')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                SEO Title <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="seo_title" name="seo_title" value="{{ old('seo_title') }}">
                                            @error('seo_title')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                SEO Keyword <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="seo_keyword" name="seo_keyword" placeholder="Add keywords separated by commas (,)" value="{{ old('seo_keyword') }}">
                                            @error('seo_keyword')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">
                                                SEO Description <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="seo_desc" name="seo_desc" value="{{ old('seo_desc') }}">
                                            @error('seo_desc')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-primary" id="submit">
                                            <i class="fa-solid fa-check me-1"></i> Submit
                                        </button>
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

    // function SelectLang(){
    //     var lang = document.getElementById('lang').value;
    //     var category = document.getElementById('category');
    //     var mentor = document.getElementById('mentor');
    //     var listCategory;
    //     var listMentor;
    //     if (lang == 'en') {
    //         listCategory = `<optgroup label="Language : English">
    //                             @foreach ($category_en as $category)
    //                             <option value="{{ $category->id }}">
    //                                 {{ $category->category_name }}
    //                             </option>
    //                             @endforeach
    //                         </optgroup>`;
    //         listMentor =   `<optgroup label="Language : English">
    //                             @foreach ($mentor_en as $mentor)
    //                                 <option value="{{ $mentor->id }}">
    //                                     {{ $mentor->mentor_firstname.' '.$mentor->mentor_lastname }}
    //                                 </option>
    //                             @endforeach
    //                         </optgroup>`;
    //     } else {
    //         listCategory = `<optgroup label="Language : Indonesia">
    //                             @foreach ($category_id as $category)
    //                             <option value="{{ $category->id }}">
    //                                 {{ $category->category_name }}
    //                             </option>
    //                             @endforeach
    //                         </optgroup>`;
    //         listMentor =   `<optgroup label="Language : Indonesia">
    //                             @foreach ($mentor_id as $mentor)
    //                                 <option value="{{ $mentor->id }}">
    //                                     {{ $mentor->mentor_firstname.' '.$mentor->mentor_lastname }}
    //                                 </option>
    //                             @endforeach
    //                         </optgroup>`;
    //     }
    //     category.innerHTML += listCategory;
    //     mentor.innerHTML += listMentor;
    // }
</script>
@endsection