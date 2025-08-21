@extends('layout.admin.app')
@section('css')
    <style>
        .alert-warning {
            font-size: 14px;
        }

        .fs-12 {
            font-size: 12px;
        }

        textarea {
            min-height: 120px;
        }
    </style>
@endsection
@section('content')
    @include('layout.admin.header')
    @include('layout.admin.sidebar')
    <main id="main" class="main" style="overflow: hidden !important">
        <div class="pagetitle">
            <h1>Careers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item"><a href="/admin/career">Careers</a></li>
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
                                    <h5 class="card-title">Update Career <span>| {{ now()->year }}</span></h5>
                                    <a class="btn btn-primary" href="{{ url('/admin/career') }}">
                                        <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span
                                            class="d-md-inline d-none">Back to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('update-career', $career->id) }}" method="POST" id="form-update">
                                    @csrf
                                    <div class="col py-3">
                                        @if ($errors->any())
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Failed to Update Career!</strong> Please check the form for errors.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <div class="col d-flex flex-column gap-2">
                                            <div class="col-12">
                                                <label for="job_position" class="form-label">Job Position <span
                                                        style="color: var(--red)">*</span></label>
                                                <input type="text" class="form-control" id="job_position"
                                                    name="job_position"
                                                    value="{{ old('job_position', $career->job_position) }}">
                                                @error('job_position')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="department" class="form-label">Department <span
                                                                style="color: var(--red)">*</span></label>
                                                        <select class="select2" name="department" id="department">
                                                            <option value=""></option>
                                                            @foreach (['IT', 'Product', 'Marketing', 'Finance', 'Human Resource'] as $dept)
                                                                <option value="{{ $dept }}"
                                                                    {{ old('department', $career->department) == $dept ? 'selected' : '' }}>
                                                                    {{ $dept }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('department')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col">
                                                        <label for="work_type" class="form-label">Work Type <span
                                                                style="color: var(--red)">*</span></label>
                                                        <select class="select2" name="work_type" id="work_type">
                                                            <option value=""></option>
                                                            @foreach (['Part Time', 'Full Time', 'Freelance'] as $type)
                                                                <option value="{{ $type }}"
                                                                    {{ old('work_type', $career->work_type) == $type ? 'selected' : '' }}>
                                                                    {{ $type }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('work_type')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col">
                                                        <div class="col d-flex flex-row justify-content-between">
                                                            <label for="application_deadline" class="form-label">Application
                                                                Deadline</label>
                                                            <small
                                                                class="alert text-danger p-0 m-0 fs-12 text-decoration-underline"
                                                                onclick="clearDate()" style="cursor: pointer">Clear
                                                                Date</small>
                                                        </div>
                                                        <input type="date" class="form-control" id="application_deadline"
                                                            name="application_deadline"
                                                            value="{{ old('application_deadline', date('Y-m-d', strtotime($career->application_deadline))) }}">
                                                        @error('application_deadline')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="working_arrangement" class="form-label">Working
                                                            Arrangement <span style="color: var(--red)">*</span></label>
                                                        <select class="select2" id="working_arrangement"
                                                            name="working_arrangement">
                                                            <option value=""></option>
                                                            @foreach (['hybrid', 'full on-site', 'remote'] as $arrangement)
                                                                <option value="{{ $arrangement }}"
                                                                    {{ old('working_arrangement', $career->working_arrangement) == $arrangement ? 'selected' : '' }}>
                                                                    {{ ucfirst($arrangement) }}</option>
                                                            @endforeach
                                                        </select>
                                                        @error('working_arrangement')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col">
                                                        <label for="" class="form-label">Status <span
                                                                style="color: var(--red)">*</span></label>
                                                        <div class="col d-flex flex-row py-1 gap-md-4 gap-4">
                                                            @foreach (['active', 'inactive'] as $status)
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="status" id="status_{{ $status }}"
                                                                        value="{{ $status }}"
                                                                        {{ old('status', $career->status) == $status ? 'checked' : '' }}>
                                                                    <label class="form-label card-title p-0 m-0"
                                                                        for="status_{{ $status }}">{{ ucfirst($status) }}</label>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        @error('status')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach (['about_the_role', 'job_description', 'requirements'] as $field)
                                                <div class="col-12">
                                                    <label for="{{ $field }}"
                                                        class="form-label">{{ ucwords(str_replace('_', ' ', $field)) }}
                                                        <span style="color: var(--red)">*</span></label>
                                                    <textarea class="form-control" id="{{ $field }}" name="{{ $field }}" rows="4">{{ old($field, $career->$field) }}</textarea>
                                                    @error($field)
                                                        <small
                                                            class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary" id="submit">
                                                <i class="fa-solid fa-check me-1"></i> Update
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
        $(document).ready(function() {
            ['about_the_role', 'job_description', 'requirements'].forEach(function(field) {
                ClassicEditor
                    .create(document.querySelector('#' + field))
                    .catch(error => {
                        console.error(error);
                    });
            });
        });

        function clearDate() {
            $('#application_deadline').val(null).trigger('change');
        }
    </script>
@endsection
