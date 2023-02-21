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
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('update-upcoming-event', ['id' => $upcoming_event->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h5 class="card-title">Choose Region and Language</h5>
                                <div class="row">
                                    <div class="col">
                                        <label for="" class="form-label">
                                            Region <span style="color: var(--red)">*</span>
                                        </label>
                                        <div class="col">
                                            <select class="select2" name="region" id="region" onchange="checkInput()">
                                                <option value=""></option>
                                                @foreach ($regions as $regions)
                                                    <option value="{{ $regions->region_id }}" {{ $upcoming_event->region == $regions->region_id ? 'selected' : '' }}>
                                                        {{ $regions->region }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('region')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="" class="form-label">
                                            Language <span style="color: var(--red)">*</span>
                                        </label>
                                        <div class="col">
                                            <select class="select2" name="lang" id="lang" onchange="checkInput()">
                                                <option value=""></option>
                                                @foreach ($languages as $languages)
                                                    <option value="{{ $languages->language_id }}" {{ $upcoming_event->lang == $languages->language_id ? 'selected' : '' }}>
                                                        {{ $languages->language }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @error('lang')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered pt-4"></ul>
                                <h5 class="card-title">Form Upcoming Event</h5>
                                @if($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Failed Update Upcoming Event!</strong> You have to check some fields.
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="col d-flex flex-column gap-2">
                                    <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                        <div class="col-md-2 col">
                                            <label for="" class="form-label">Thumbnail Preview</label>
                                            <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                <img class="img-preview img-fluid" id="img_preview" src="{{ asset('uploaded_files/'.'upcoming-event/'.$upcoming_event->created_at->format('Y').'/'.$upcoming_event->created_at->format('m').'/'.$upcoming_event->event_thumbnail) }}">
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column gap-2">
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Thumbnail
                                                </label>
                                                <input type="file" class="form-control" id="thumbnail" onchange="previewImage()" name="event_thumbnail">
                                                @error('event_thumbnail')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">
                                                    Alt <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="alt" name="event_alt" value="{{ $upcoming_event->event_alt }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Title <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="title" name="event_title" value="{{ $upcoming_event->event_title }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Date <span style="color: var(--red)">*</span>
                                        </label>
                                        <input type="text" class="form-control" id="date" name="event_date" value="{{ $upcoming_event->event_date }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Short Description <span style="color: var(--red)">*</span>
                                        </label>
                                        <textarea class="textarea" name="event_short_description" id="short_description">
                                            {{ $upcoming_event->event_subtitle }}
                                        </textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            Detail <span style="color: var(--red)">*</span>
                                        </label>
                                        <textarea class="textarea" name="event_detail" id="detail">
                                            {{ $upcoming_event->event_detail }}
                                        </textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="form-label">
                                            RSVP Link
                                        </label>
                                        <input type="text" class="form-control" id="rsvp" name="event_rsvp" value="{{ $upcoming_event->event_rsvp_link }}">
                                        @error('event_rsvp')
                                            <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Publish Date <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="date" class="form-control" id="publish_date" name="publish_date" value="{{ $upcoming_event->publish_date }}">
                                            @error('publish_date')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Take Off Date <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="date" class="form-control" id="take_off_date" name="take_off_date" value="{{ $upcoming_event->take_off_date }}">
                                            @error('take_off_date')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
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
    function checkInput(){
        const region = document.getElementById('region').value;
        const lang = document.getElementById('lang').value;
        const submit = document.getElementById('submit');
        if (region != '' && lang != '') {
            submit.disabled = false;
        }
    };
    checkInput();
</script>
@endsection