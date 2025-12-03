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
        <h1>Academic Score</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/academic-score">Academic Score</a></li>
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
                                <h5 class="card-title mb-0">Create New Academic Score <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/academic-score">
                                    <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('create-academic-score') }}" method="POST">
                                @csrf
                                <div class="col py-3">
                                    @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Create Academic Score!</strong> You have to check some fields.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-row gap-3">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Name <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="name"
                                                name="name" value="{{ old('name') }}">
                                            @error('name')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Subject <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="subject"
                                                name="subject" value="{{ old('subject') }}">
                                            @error('subject')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <label for="" class="form-label">
                                                Score Raw <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="score_raw"
                                                name="score_raw" value="{{ old('score_raw') }}">
                                            @error('score_raw')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-md-2">
                                            <label for="" class="form-label">
                                                Score Final <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="score_final"
                                                name="score_final" value="{{ old('score_final') }}">
                                            @error('score_final')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
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
    function clearDate() {
        $('#date').val(null).trigger('change');
    }
</script>
@endsection