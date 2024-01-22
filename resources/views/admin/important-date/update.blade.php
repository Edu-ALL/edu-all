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
        <h1>Important Date</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/admin/important-date">Important Date</a></li>
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
                                <h5 class="card-title mb-0">Update Important Date <span>| {{ now()->year }}</span></h5>
                                <a type="button" class="btn btn-primary" href="/admin/important-date">
                                    <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none"> Back to List</span>
                                </a>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <form action="{{ route('update-important-date', ['id' => $important_date->id]) }}" method="POST">
                                @csrf
                                <div class="col py-3">
                                    @if ($errors->any())
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Failed Update Important Date!</strong> You have to check some fields.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="col d-flex flex-row gap-3">
                                        <div class="col">
                                            <label for="" class="form-label">
                                                Title <span style="color: var(--red)">*</span>
                                            </label>
                                            <input type="text" class="form-control" id="title"
                                                name="title" value="{{ $important_date->title }}">
                                            @error('title')
                                                <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <div class="col d-flex flex-row justify-content-between">
                                                <label for="" class="form-label">
                                                    Date <span style="color: var(--red)">*</span>
                                                </label>
                                                <small
                                                    class="alert text-danger p-0 m-0 fs-12 text-decoration-underline"
                                                    onclick="clearDate()" style="cursor: pointer">Clear
                                                    Date</small>
                                            </div>
                                            <input type="date" class="form-control" id="date"
                                                name="date" value="{{ $important_date->date }}">
                                            @error('date')
                                                <small
                                                    class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary" id="submit">
                                            <i class="fa-solid fa-pen-to-square me-1"></i> Update
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