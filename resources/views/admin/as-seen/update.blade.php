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
        <h1>As Seen</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/as-seen">As Seen</a></li>
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
                                <h5 class="card-title mb-0">Update New As Seen <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/as-seen">
                                    <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('update-as-seen', ['id' => $as_seen->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col py-3">
                                    @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Update As Seen!</strong> You have to check some fields.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-column gap-2">
                                        <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                            <div class="col-md-2 col">
                                                <label for="" class="form-label">Thumbnail Preview</label>
                                                <div class="col d-flex align-items-center justify-content-center border rounded" style="min-height: 110px">
                                                    <img class="img-preview img-fluid" id="img_preview" src="{{ asset('uploaded_files/'.'as-seen/'.$as_seen->created_at->format('Y').'/'.$as_seen->created_at->format('m').'/'.$as_seen->thumbnail) }}">
                                                </div>
                                            </div>
                                            <div class="col d-flex flex-column gap-2">
                                                <div class="col-12">
                                                    <label for="" class="form-label">
                                                        Thumbnail <span style="color: var(--red)">*</span>
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
                                                    <input type="text" class="form-control" id="alt" name="alt" value="{{ $as_seen->alt }}" required>
                                                    @error('alt')
                                                        <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
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
</script>
@endsection