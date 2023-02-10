@extends('layout.admin.app')
@section('css')
<style>
    .alert-warning {
        font-size: 14px;
    }
    .fs-12 {
        font-size: 12px;
    }
    .vr {
        background-color: #ebeef4;
        width: 2px;
        opacity: 100%;
    }
    .pic-profile {
        border: 2px solid #ebeef4;
        border-radius: 5px;
    }
    .pic-profile img {
        border-radius: 5px;
    }
</style>
@endsection
@section('content')
@include('layout.admin.header')
@include('layout.admin.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Blogs</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/blogs">Blogs</a></li>
                <li class="breadcrumb-item active">Detail</li>
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
                                <div>
                                    <h5 class="card-title">Detail Blogs <span>| {{ now()->year }}</span></h5>
                                </div>
                                <div class="col d-flex flex-row gap-2" style="max-width: fit-content">
                                    <div class="p-0" style="max-width: fit-content">
                                        <a type="button" class="btn btn-warning d-inline" href="/admin/blogs/{{ $blog->id }}/edit">
                                            <i class="fa-solid fa-pen-to-square me-md-1 me-0"></i><span class="d-md-inline d-none"> Edit Blogs</span>
                                        </a>
                                    </div>
                                    <div class="p-0" style="max-width: fit-content">
                                        <a type="button" class="btn btn-primary d-inline" href="/admin/blogs">
                                            <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col pb-4">
                                <div class="col d-flex flex-column gap-4">
                                    <div>
                                        Count Paragraph : {{ substr_count($blog->blog_description, '</p>') }}
                                    </div>
                                    <div class="pic-profile">
                                        <img class="img-fluid" src="{{ asset('uploaded_files/blogs/'.$blog->blog_thumbnail) }}" alt="">
                                    </div>
                                    <div class="col d-flex flex-column justify-content-center gap-2 px-1">
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">Title</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="m-0">
                                                    {{ $blog->blog_title }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">Slug</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="m-0">
                                                    {{ $blog->slug }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">Category</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="m-0">
                                                    {{ $blog->blog_category->category_name }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">Mentor</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="m-0">
                                                    {{ $blog->mt_id == null ? '-' : $blog->mentor->mentor_firstname.' '.$blog->mentor->mentor_lastname }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">Description</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0 desc-textarea">
                                                {!! Str::limit($blog->blog_description, 800, '...') !!}
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">SEO Title</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="m-0">
                                                    {{ $blog->seo_title }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">SEO Keyword</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="m-0">
                                                    {{ $blog->seo_keyword }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">SEO Description</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="m-0">
                                                    {{ $blog->seo_desc }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">Duration Read</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="m-0">
                                                    {{ $blog->duration_read }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="field-detail d-flex flex-row align-items-start">
                                            <div class="col-md-2 col-3 p-0">
                                                <h6 class="m-0 card-title p-0">Status</h6>
                                            </div>
                                            <div class="col-1 text-center p-0" style="max-width: 22px">
                                                <p class="m-0">:</p>
                                            </div>
                                            <div class="col p-0">
                                                <p class="card-title text-uppercase p-0 m-0 {{ $blog->blog_status == 'publish' ? 'text-success' : 'text-danger' }}">
                                                    {{ $blog->blog_status }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="widget-tab" data-bs-toggle="tab" data-bs-target="#bordered-widget" type="button" role="tab" aria-controls="widget" aria-selected="true">Blog Widget</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="borderedTabContent">
                                {{-- Tab Blog Widget --}}
                                <div class="tab-pane fade show active" id="bordered-widget" role="tabpanel" aria-labelledby="widget-tab">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <h5 class="card-title">List Blog Widget <span>| {{ now()->year }}</span></h5>
                                            <button 
                                                class="btn btn-primary"
                                                type="button"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#widget"
                                                style="text-transform: capitalize;"
                                                {{-- onclick="formCreate({{ $blog->id }})" --}}
                                                >
                                                    <i class="fa-solid fa-plus me-md-1 me-0"></i><span class="d-md-inline d-none">Add new widget</span>
                                            </button>
                                        </div>
                                        <table class="table datatable display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Link</th>
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <ul class="nav nav-tabs nav-tabs-bordered mt-4" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="read-tab" data-bs-toggle="tab" data-bs-target="#bordered-read" type="button" role="tab" aria-controls="read" aria-selected="true">Blog Read</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="borderedTabContent">
                                {{-- Tab Blog Read --}}
                                <div class="tab-pane fade show active" id="bordered-read" role="tabpanel" aria-labelledby="read-tab">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <h5 class="card-title">List Blog Read <span>| {{ now()->year }}</span></h5>
                                        </div>
                                        <table class="table datatable display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">IP Address</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($blog->blog_read as $blog_read)
                                                    <tr>
                                                        <th class="w-25" scope="row">{{ $i++ }}</th>
                                                        <td>{{ $blog_read->ip_address }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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