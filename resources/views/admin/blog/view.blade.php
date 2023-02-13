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
    .select-position *,
    .select-position:active * {
        font-size: 14px !important;
        box-shadow: none !important;
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
                                            <div class="col p-0 desc-textarea" style="max-height: 300px; overflow: auto">
                                                {!! $blog->blog_description !!}
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
                                                    {{ $blog->duration_read }} Minute
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
                                                onclick="formCreate({{ $blog->id }})"
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
                                                    <th scope="col">Position</th>
                                                    <th scope="col">Link</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($blog->blog_widget as $widget)
                                                    <tr>
                                                        <th scope="row">{{ $i++ }}</th>
                                                        <td>{{ $widget->title }}</td>
                                                        <td>{!! Str::limit($widget->description, 150, '...') !!}</td>
                                                        <td>{{ $widget->position }}</td>
                                                        <td>
                                                            <a href="{{ $widget->link }}" target="_blank">{{ $widget->link }}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="d-flex flex-row gap-1">
                                                                <button 
                                                                class="btn btn-warning"
                                                                type="button"
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#widget"
                                                                style="text-transform: capitalize;"
                                                                onclick="formUpdate({{ $widget->blog_id }}, {{ $widget->id }}, '{{ $widget->title }}', '{!! $widget->description !!}', '{{ $widget->link }}', '{{ $widget->position }}')"
                                                                >
                                                                    <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this blog widget"></i>
                                                                </button>
                                                                <button 
                                                                type="button"
                                                                class="btn btn-danger"
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#delete"
                                                                onclick="formDelete({{ $widget->blog_id }}, {{ $widget->id }})"
                                                                >
                                                                    <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this blog widget"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
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

{{-- Modal Blog Widget --}}
<div class="modal fade" id="widget" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable"> 
        <div class="modal-content border-0">
            <div class="modal-header">
                <div class="col d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-circle-info"></i>
                    <h6 class="modal-title ms-2" id="title-info"></h6>
                </div>
            </div>
            <div class="modal-body py-0" style="overflow-x: hidden">
                <form action="" method="POST" id="form_widget">
                    @csrf
                    <h5 class="card-title">Form Blog Widget</h5>
                    <div class="col d-flex flex-column gap-md-2 gap-2">
                        <div class="col">
                            <label for="" class="form-label">
                                Title <span style="color: var(--red)">*</span>
                            </label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                            @error('title')
                                <small class="alert text-danger d-block p-0 m-0 fs-12">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="" class="form-label">
                                Description <span style="color: var(--red)">*</span>
                            </label>
                            <textarea class="textarea" name="description" id="description">
                                {{ old('description') }}
                            </textarea>
                            @error('description')
                                <small class="alert text-danger d-block p-0 m-0 fs-12">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="" class="form-label">
                                Position <span style="color: var(--red)">*</span>
                            </label>
                            <div class="col select-position">
                                <select class="form-select gap-4" name="position" id="position">
                                    <option value="" selected>Select Position</option>
                                    @for ($i = 1; $i < (int)substr_count($blog->blog_description, '</p>') + 1; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <small class="alert d-block p-1 m-0 fs-12">Note: Select Widget position after the Paragraph</small>
                            @error('position')
                                <small class="alert text-danger d-block p-0 m-0 fs-12">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col mb-3">
                            <label for="" class="form-label">
                                Link <span style="color: var(--red)">*</span>
                            </label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa-solid fa-link" style="font-size: 14px"></i>
                                </span>
                                <input type="text" class="form-control" name="link" id="link" value="{{ old('link') }}">
                            </div>
                            @error('link')
                                <small class="alert text-danger d-block p-0 m-0 fs-12">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 py-3">
                <button type="submit" style="font-size: 13px" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" id="btn-submit-widget" form="form_widget" style="font-size: 13px; background: var(--blue);">Submit</button>
            </div>
        </div>
    </div>
</div>
{{-- Modal Delete --}}
<div class="modal fade" id="delete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header">
                <div class="col d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-circle-info"></i>
                    <h6 class="modal-title ms-2" id="title-info">Delete</h6>
                </div>
            </div>
            <div class="modal-body text-center mt-3 mb-1">
                <p id="desc-info">Are you sure, you want to Delete this blog widget?</p>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 mb-2">
                <button type="submit" style="font-size: 13px" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <form action="" method="POST" id="form_delete">
                    @csrf
                    <button type="submit" id="btn-status" style="font-size: 13px; background: var(--danger);">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function formCreate(id){
        $("#title-info").text("Add new Blog Widget");
        $('#title').attr('value', '');
        tinymce.get("description").setContent('');
        $('#link').attr('value', '');
        $('#position').val('').change();
        $('#form_widget').attr('action', '{{ url('/admin/blogs/widget/') }}' + '/' + id);
    };
    function formUpdate(blog_id, id, title, desc, link, position){
        $("#title-info").text("Update Blog Widget");
        $('#title').attr('value', title);
        tinymce.get("description").setContent(desc);
        $('#link').attr('value', link);
        $('#position').val(position).change();
        $('#form_widget').attr('action', '{{ url('/admin/blogs/widget/') }}' + '/' + blog_id + '/' + id);
    };
    function formDelete(blog_id, id){
        $('#form_delete').attr('action', '{{ url('/admin/blogs/widget/delete/') }}' + '/' + blog_id + '/' + id);
    };
    // Tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
@endsection