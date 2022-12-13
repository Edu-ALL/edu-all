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
        <h1>Blog Category</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/blog-category">Blog Category</a></li>
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
                                <h5 class="card-title">Update Blog Category <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/blog-category">
                                    <i class="fa-solid fa-arrow-left me-1"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('update-blog-category', ['id' => $blog_category->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col py-3 mt-1">
                                    {{-- <h5 class="card-title">Form Indonesia</h5> --}}
                                    @if($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Create Blog Category!</strong> You have to check this field.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="row g-3">
                                        <div class="col d-flex flex-column gap-2">
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Blog Category Name
                                                    <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $blog_category->category_name }}">
                                                @error('category_name')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary" id="submit">
                                                <i class="fa-solid fa-check me-1"></i> Submit
                                            </button>
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
    
</script>
@endsection