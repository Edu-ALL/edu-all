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
            <h1>Competition Result</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/competition-result">Competition Result</a></li>
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
                                    <h5 class="card-title mb-0">Update Competition Result <span>|
                                            {{ now()->year }}</span></h5>
                                    <a type="button" class="btn btn-primary" href="/admin/competition-result">
                                        <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Back to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('update-competition-result', ['id' => $academic_score->id]) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col py-3">
                                        @if ($errors->any())
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Failed Update Competition Result!</strong> You have to check some
                                                fields.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <div class="col d-flex flex-row gap-3">
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    Competition <span style="color: var(--red)"></span>
                                                </label>
                                                <input type="file" class="form-control" id="image" name="image"
                                                    value="{{ $academic_score->image }}">

                                                File:
                                                <a href="{{ Storage::url('competition/' . $academic_score->image) }}"
                                                    target="_blank">
                                                    {{ $academic_score->image }}
                                                </a>

                                                @error('image')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    Name <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ $academic_score->name }}">
                                                @error('name')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-2">
                                                <label for="" class="form-label">
                                                    Medal <span style="color: var(--red)">*</span>
                                                </label>
                                                <select class="select2" name="medal" id="medal">
                                                    <option value=""></option>
                                                    <option value="Gold"
                                                        {{ $academic_score->medal == 'Gold' ? 'selected' : '' }}>Gold
                                                    </option>
                                                    <option value="Silver"
                                                        {{ $academic_score->medal == 'Silver' ? 'selected' : '' }}>Silver
                                                    </option>
                                                    <option value="Bronze"
                                                        {{ $academic_score->medal == 'Bronze' ? 'selected' : '' }}>Bronze
                                                    </option>
                                                </select>
                                                @error('medal')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-md-1">
                                                <label for="" class="form-label">
                                                    Grade <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="grade" name="grade"
                                                    value="{{ $academic_score->grade }}">
                                                @error('grade')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col">
                                                <label for="" class="form-label">
                                                    School <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="school" name="school"
                                                    value="{{ $academic_score->school }}">
                                                @error('school')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
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
