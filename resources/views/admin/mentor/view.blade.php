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
        <h1>Mentor</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/mentor">Mentor</a></li>
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
                                <h5 class="card-title">Detail Mentor <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/mentor">
                                    <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#bordered-english" type="button" role="tab" aria-controls="english" aria-selected="true">English</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="indo-tab" data-bs-toggle="tab" data-bs-target="#bordered-indo" type="button" role="tab" aria-controls="indo" aria-selected="false">Indonesia</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="borderedTabContent">
                                {{-- Tab English --}}
                                <div class="tab-pane fade show active" id="bordered-english" role="tabpanel" aria-labelledby="english-tab">
                                    <div class="col py-4">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <h5 class="card-title p-0">Profile English</h5>
                                            <a type="button" class="btn btn-warning" href="/admin/mentor/{{ $mentor[0]->group }}/edit">
                                                <i class="fa-solid fa-pen-to-square me-md-1 me-0"></i><span class="d-md-inline d-none"> Edit Profile Mentor</span>
                                            </a>
                                        </div>
                                        <div class="col d-flex flex-md-row flex-column justify-content-center gap-md-3">
                                            <div class="col-md-3 d-flex align-items-center justify-content-center pt-md-0 pt-3 px-md-5 px-5">
                                                <div class="pic-profile p-1">
                                                    <img class="img-fluid" src="{{ asset('uploaded_files/mentor/'.$mentor[0]->mentor_picture) }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-center gap-2 py-md-3 py-4 px-0">
                                                <div class="field-detail d-flex flex-row align-items-start">
                                                    <div class="col-md-2 col-3 p-0">
                                                        <h6 class="m-0 card-title p-0">Full Name</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0">
                                                        <p class="m-0">{{ $mentor[0]->mentor_firstname.' '.$mentor[0]->mentor_lastname }}</p>
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-start">
                                                    <div class="col-md-2 col-3 p-0">
                                                        <h6 class="m-0 card-title p-0">Graduation</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[0]->mentor_graduation !!}
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-start">
                                                    <div class="col-md-2 col-3 p-0">
                                                        <h6 class="m-0 card-title p-0">Currently Working</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[0]->currently_working == null ? '-' : $mentor[0]->currently_working !!}
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-start">
                                                    <div class="col-md-2 col-3 p-0">
                                                        <h6 class="m-0 card-title p-0">Expertise</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[0]->expertise == null ? '-' : $mentor[0]->expertise !!}
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-start">
                                                    <div class="col-md-2 col-3 p-0">
                                                        <h6 class="m-0 card-title p-0">Short Desc</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[0]->short_desc !!}
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
                                                        {!! $mentor[0]->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Tab Indonesia --}}
                                <div class="tab-pane fade" id="bordered-indo" role="tabpanel" aria-labelledby="indo-tab">
                                    <div class="col py-4">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <h5 class="card-title p-0">Profile Indonesia</h5>
                                            <a type="button" class="btn btn-warning" href="/admin/mentor/{{ $mentor[0]->group }}/edit">
                                                <i class="fa-solid fa-pen-to-square me-md-1 me-0"></i><span class="d-md-inline d-none"> Edit Profile Mentor</span>
                                            </a>
                                        </div>
                                        <div class="col justify-content-center mx-md-3 mx-1">
                                            <div class="col d-flex align-items-center justify-content-center py-2 px-5">
                                                <div class="col-md-3 col-8 m-0">
                                                    <div class="pic-profile p-2">
                                                        <img class="img-fluid" src="{{ asset('uploaded_files/mentor/'.$mentor[1]->mentor_picture) }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column justify-content-center gap-2 py-md-3 py-4 px-0">
                                                <div class="field-detail d-flex flex-row align-items-md-start align-items-center">
                                                    <div class="col-md-2 col-4 p-0">
                                                        <h6 class="m-0 card-title p-0">Full Name</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0">
                                                        <p class="m-0">{{ $mentor[1]->mentor_firstname.' '.$mentor[1]->mentor_lastname }}</p>
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-md-start align-items-center">
                                                    <div class="col-md-2 col-4 p-0">
                                                        <h6 class="m-0 card-title p-0">Graduation</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[1]->mentor_graduation !!}
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-md-start align-items-center">
                                                    <div class="col-md-2 col-4 p-0">
                                                        <h6 class="m-0 card-title p-0">Currently Working</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[1]->currently_working == null ? '-' : $mentor[1]->currently_working !!}
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-md-start align-items-center">
                                                    <div class="col-md-2 col-4 p-0">
                                                        <h6 class="m-0 card-title p-0">Expertise</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[1]->expertise == null ? '-' : $mentor[1]->expertise !!}
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-md-start align-items-center">
                                                    <div class="col-md-2 col-4 p-0">
                                                        <h6 class="m-0 card-title p-0">Short Desc</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[1]->short_desc !!}
                                                    </div>
                                                </div>
                                                <div class="field-detail d-flex flex-row align-items-md-start align-items-center">
                                                    <div class="col-md-2 col-4 p-0">
                                                        <h6 class="m-0 card-title p-0">Description</h6>
                                                    </div>
                                                    <div class="col-1 text-center p-0" style="max-width: 22px">
                                                        <p class="m-0">:</p>
                                                    </div>
                                                    <div class="col p-0 desc-textarea">
                                                        {!! $mentor[1]->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="video-tab" data-bs-toggle="tab" data-bs-target="#bordered-video" type="button" role="tab" aria-controls="video" aria-selected="true">Mentor Video</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="borderedTabContent">
                                {{-- Tab English --}}
                                <div class="tab-pane fade show active" id="bordered-video" role="tabpanel" aria-labelledby="video-tab">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-row align-items-center justify-content-between">
                                            <h5 class="card-title">List Mentor Video <span>| {{ now()->year }}</span></h5>
                                            <button 
                                                class="btn btn-primary"
                                                type="button"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#video"
                                                style="text-transform: capitalize;"
                                                onclick="formCreate({{ $mentor[0]->group }})"
                                                >
                                                    <i class="fa-solid fa-plus me-md-1 me-0"></i><span class="d-md-inline d-none">Add new video</span>
                                            </button>
                                        </div>
                                        <table class="table datatable display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Video Embed</th>
                                                    <th scope="col">Youtube ID</th>
                                                    {{-- <th scope="col">Description</th> --}}
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($mentor[0]->mentor_video as $mentor_video)
                                                    <tr>
                                                        <th scope="row">{{ $i++ }}</th>
                                                        <td>
                                                            <a href="{{ $mentor_video->video_embed }}" target="_blank">{{ $mentor_video->video_embed }}</a>
                                                        </td>
                                                        <td>
                                                            {{ $mentor_video->youtube_id }}
                                                        </td>
                                                        {{-- <td>{!! $mentor_video->description !!}</td> --}}
                                                        <td class="text-center">
                                                            <div class="d-flex flex-row gap-1">
                                                                <button 
                                                                class="btn btn-warning"
                                                                type="button"
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#video"
                                                                style="text-transform: capitalize;"
                                                                onclick="formUpdate({{ $mentor_video->mentor_id }}, {{ $mentor_video->id }}, '{{ $mentor_video->video_embed }}', '{!! $mentor_video->description !!}')"
                                                                >
                                                                    <i class="fa-solid fa-pen-to-square" data-bs-toggle="tooltip" data-bs-title="Edit this mentor video"></i>
                                                                </button>
                                                                <button 
                                                                type="button"
                                                                class="btn btn-danger"
                                                                data-bs-toggle="modal" 
                                                                data-bs-target="#delete"
                                                                onclick="formDelete({{ $mentor_video->mentor_id }}, {{ $mentor_video->id }})"
                                                                >
                                                                    <i class="fa-regular fa-trash-can" data-bs-toggle="tooltip" data-bs-title="Delete this mentor video"></i>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

{{-- Modal Mentor Video --}}
<div class="modal fade" id="video" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header">
                <div class="col d-flex gap-2 align-items-center">
                    <i class="fa-solid fa-circle-info"></i>
                    <h6 class="modal-title ms-2" id="title-info"></h6>
                </div>
            </div>
            <div class="modal-body py-0">
                <form action="" method="POST" id="form_video">
                    @csrf
                    <h5 class="card-title">Form Mentor Video</h5>
                    <div class="col d-flex flex-column gap-md-3 gap-2">
                            <div class="col">
                                <label for="" class="form-label">
                                    Video Embed <span style="color: var(--red)">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-link" style="font-size: 14px"></i>
                                    </span>
                                    <input type="text" class="form-control" name="video_embed" id="video_embed" value="{{ old('video_embed') }}">
                                </div>
                                <small class="alert ps-0 fs-12">Only supports <strong class="text-danger">Youtube</strong> videos. e.g. <b><i>https://youtu.be/eRb6lymJOIM</i></b></small>
                            </div>
                            {{-- <div class="col">
                                <label for="" class="form-label">
                                    Description <span style="color: var(--red)">*</span>
                                </label>
                                <textarea class="textarea" name="description_video" id="description_video">
                                    {{ old('description_video') }}
                                </textarea>
                            </div> --}}
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex align-items-center justify-content-center border-0 gap-2 py-3">
                <button type="submit" style="font-size: 13px" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <button type="submit" id="btn-status" form="form_video" style="font-size: 13px; background: var(--blue);">Submit</button>
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
                <p id="desc-info">Are you sure, you want to Delete this mentor video?</p>
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
    function formCreate(group){
        $("#title-info").text("Add new Video");
        $('#video_embed').attr('value', '');
        // tinymce.get("description_video").setContent('');
        $('#form_video').attr('action', '{{ url('/admin/mentor/video/') }}' + '/' + group);
    };
    function formUpdate(group, id, video_embed, desc){
        $("#title-info").text("Update Mentor Video");
        $('#video_embed').attr('value', video_embed);
        // tinymce.get("description_video").setContent(desc);
        $('#form_video').attr('action', '{{ url('/admin/mentor/video/') }}' + '/' + group + '/' + id);
    };
    function formDelete(group, id){
        $('#form_delete').attr('action', '{{ url('/admin/mentor/video/delete/') }}' + '/' + group + '/' + id);
    };
    // Tooltips
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>
@endsection