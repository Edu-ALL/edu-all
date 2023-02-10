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
        <h1>Upcoming Event</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/upcoming-event">Upcoming Event</a></li>
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
                                <h5 class="card-title">Update Upcoming Event <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/upcoming-event">
                                    <i class="fa-solid fa-arrow-left me-md-1"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#bordered-english" type="button" role="tab" aria-controls="english" aria-selected="true">English</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="indo-tab" data-bs-toggle="tab" data-bs-target="#bordered-indo" type="button" role="tab" aria-controls="indo" aria-selected="false" onclick="checkInput()">Indonesia</button>
                                </li>
                            </ul>
                            <form action="{{ route('update-upcoming-event', ['group' => $upcoming_event[0]->group]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tab-content" id="borderedTabContent">
                                    {{-- Tab English --}}
                                    <div class="tab-pane fade show active" id="bordered-english" role="tabpanel" aria-labelledby="english-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form English</h5>
                                            @if($errors->any())
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Failed Update Upcoming Event!</strong> You have to check some fields in English and Indonesian.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Thumbnail Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_en" src="{{ asset('uploaded_files/upcoming-event/'.$upcoming_event[0]->event_thumbnail) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Thumbnail
                                                            </label>
                                                            <input type="file" class="form-control" id="thumbnail_en" onchange="previewImage_en()" name="event_thumbnail_en">
                                                            @error('event_thumbnail_en')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_en" name="event_alt_en" value="{{ $upcoming_event[0]->event_alt }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Title <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="title_en" name="event_title_en" value="{{ $upcoming_event[0]->event_title }}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Date <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="date_en" name="event_date_en" value="{{ $upcoming_event[0]->event_date }}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Short Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="event_subtitle_en" id="subtitle_en">
                                                        {{ $upcoming_event[0]->event_subtitle }}
                                                    </textarea>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Detail <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="event_detail_en" id="detail_en">
                                                        {{ $upcoming_event[0]->event_detail }}
                                                    </textarea>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        RSVP Link
                                                    </label>
                                                    <input type="text" class="form-control" id="rsvp_en" name="event_rsvp_en" value="{{ $upcoming_event[0]->event_rsvp_link }}">
                                                    @error('event_rsvp_en')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Tab Indonesia --}}
                                    <div class="tab-pane fade" id="bordered-indo" role="tabpanel" aria-labelledby="indo-tab">
                                        <div class="col py-2">
                                            <h5 class="card-title">Form Indonesia</h5>
                                            @if($errors->any())
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <strong>Failed Create Upcoming Event!</strong> You have to check some fields in English and Indonesian.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col-md-2 col">
                                                        <label for="" class="form-label">Thumbnail Preview</label>
                                                        <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                            <img class="img-preview img-fluid" id="img_preview_id" src="{{ asset('uploaded_files/upcoming-event/'.$upcoming_event[1]->event_thumbnail) }}">
                                                        </div>
                                                    </div>
                                                    <div class="col d-flex flex-column gap-2">
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Thumbnail
                                                            </label>
                                                            <input type="file" class="form-control" id="thumbnail_id" onchange="previewImage_id()" name="event_thumbnail_id">
                                                            @error('event_thumbnail_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="" class="form-label">
                                                                Alt <span style="color: var(--red)">*</span>
                                                            </label>
                                                            <input type="text" class="form-control" id="alt_id" name="event_alt_id" value="{{ $upcoming_event[1]->event_alt }}">
                                                            @error('event_alt_id')
                                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Title <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="title_id" name="event_title_id" value="{{ $upcoming_event[1]->event_title }}">
                                                    @error('event_title_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Date <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" id="date_id" name="event_date_id" value="{{ $upcoming_event[1]->event_date }}">
                                                    @error('event_date_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Short Description <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="event_subtitle_id" id="subtitle_id">
                                                        {{ $upcoming_event[1]->event_subtitle }}
                                                    </textarea>
                                                    @error('event_subtitle_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Detail <span style="color: var(--red)">*</span>
                                                    </label>
                                                    <textarea class="textarea" name="event_detail_id" id="detail_id">
                                                        {{ $upcoming_event[1]->event_detail }}
                                                    </textarea>
                                                    @error('event_detail_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        RSVP Link
                                                    </label>
                                                    <input type="text" class="form-control" id="rsvp_id" name="event_rsvp_id" value="{{ $upcoming_event[1]->event_rsvp_link }}">
                                                    @error('event_rsvp_id')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
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
    function previewImage_en(){
        const image = document.querySelector('#thumbnail_en')
        const imgPreview = document.querySelector('#img_preview_en')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function previewImage_id(){
        const image = document.querySelector('#thumbnail_id')
        const imgPreview = document.querySelector('#img_preview_id')
        imgPreview.style.display = 'block'
        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0])
        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result
        }
    };
    function checkInput(){
        const thumbnail_en = document.getElementById('thumbnail_en').value;
        const alt_en = document.getElementById('alt_en').value;
        const title_en = document.getElementById('title_en').value;
        const date_en = document.getElementById('date_en').value;
        const subtitle_en = tinymce.get('subtitle_en').getContent();
        const detail_en = tinymce.get('detail_en').getContent();
        const submit = document.getElementById('submit');
        if (alt_en == "" || title_en == "" || date_en == "" || subtitle_en == "" || detail_en == "") {
            submit.disabled = true;
        } else {
            submit.disabled = false;
        }
    };

</script>
@endsection