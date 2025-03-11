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
                                    <h5 class="card-title">Create New Career <span>| {{ now()->year }}</span></h5>
                                    <a class="btn btn-primary" href="{{ url('/admin/career') }}">
                                        <i class="fa-solid fa-arrow-left me-md-1 me-0"></i><span class="d-md-inline d-none">
                                            Back to List</span>
                                    </a>
                                </div>
                                <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                                <form action="{{ route('create-career') }}" method="POST" id="form-create">
                                    @csrf
                                    <div class="col py-3">
                                        @if ($errors->any())
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Failed Create Career!</strong> You have to check some fields.
                                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                    aria-label="Close"></button>
                                            </div>
                                        @endif
                                        <div class="col d-flex flex-column gap-2">
                                            <div class="col-12">
                                                <label for="job_position" class="form-label">
                                                    Job Position <span style="color: var(--red)">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="job_position"
                                                    name="job_position" value="{{ old('job_position') }}">
                                                @error('job_position')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <div class="col d-flex flex-md-row flex-column gap-md-3 gap-2">
                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Department <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <div class="col">
                                                            <select class="select2" name="department" id="department">
                                                                <option value=""></option>
                                                                <option value="IT"
                                                                    {{ old('department') == 'IT' ? 'selected' : '' }}>IT
                                                                </option>
                                                                <option value="Product"
                                                                    {{ old('department') == 'Product' ? 'selected' : '' }}>
                                                                    Product</option>
                                                                <option value="Marketing"
                                                                    {{ old('department') == 'Marketing' ? 'selected' : '' }}>
                                                                    Marketing</option>
                                                                <option value="Finance"
                                                                    {{ old('department') == 'Finance' ? 'selected' : '' }}>
                                                                    Finance</option>
                                                                <option value="Human Resource"
                                                                    {{ old('department') == 'Human Resource' ? 'selected' : '' }}>
                                                                    Human Resource</option>
                                                            </select>
                                                        </div>
                                                        @error('department')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col">
                                                        <label for="work_type" class="form-label">
                                                            Work Type <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <div class="col">
                                                            <select class="select2" name="work_type" id="work_type">
                                                                <option value=""></option>
                                                                <option value="Part Time"
                                                                    {{ old('work_type') == 'Part Time' ? 'selected' : '' }}>
                                                                    Part Time</option>
                                                                <option value="Full Time"
                                                                    {{ old('work_type') == 'Full Time' ? 'selected' : '' }}>
                                                                    Full Time</option>
                                                                <option value="Freelance"
                                                                    {{ old('work_type') == 'Freelance' ? 'selected' : '' }}>
                                                                    Freelance</option>
                                                            </select>
                                                        </div>
                                                        @error('work_type')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="col">
                                                        <div class="col d-flex flex-row justify-content-between">
                                                            <label for="" class="form-label">
                                                                Application Deadline
                                                            </label>
                                                            <small
                                                                class="alert text-danger p-0 m-0 fs-12 text-decoration-underline"
                                                                onclick="clearDate()" style="cursor: pointer">Clear
                                                                Date</small>
                                                        </div>
                                                        <input type="date" class="form-control" id="application_deadline"
                                                            name="application_deadline"
                                                            value="{{ old('application_deadline') }}">
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
                                                        <label for="working_arrangement" class="form-label">
                                                            Working Arrangement <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <select class="select2" id="working_arrangement"
                                                            name="working_arrangement">
                                                            <option value=""></option>
                                                            <option value="hybrid"
                                                                {{ old('working_arrangement') == 'hybrid' ? 'selected' : '' }}>
                                                                Hybrid</option>
                                                            <option value="full on-site"
                                                                {{ old('working_arrangement') == 'full on-site' ? 'selected' : '' }}>
                                                                Full on-site</option>
                                                            <option value="remote"
                                                                {{ old('working_arrangement') == 'remote' ? 'selected' : '' }}>
                                                                Remote</option>
                                                        </select>
                                                        @error('working_arrangement')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>

                                                    <div class="col">
                                                        <label for="" class="form-label">
                                                            Status <span style="color: var(--red)">*</span>
                                                        </label>
                                                        <div class="col d-flex flex-row py-1 gap-md-4 gap-4">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="status" id="status_active" value="active"
                                                                    {{ old('status') == 'active' ? 'checked' : '' }}>
                                                                <label class="form-label card-title p-0 m-0"
                                                                    for="status_active">
                                                                    Active
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="status" id="status_inactive" value="inactive"
                                                                    {{ old('status') == 'inactive' ? 'checked' : '' }}>
                                                                <label class="form-label card-title p-0 m-0"
                                                                    for="status_inactive">
                                                                    Inactive
                                                                </label>
                                                            </div>
                                                        </div>
                                                        @error('status')
                                                            <small
                                                                class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="about_the_role" class="form-label">
                                                    About The Role <span style="color: var(--red)">*</span>
                                                </label>
                                                <textarea class="form-control" id="about_the_role" name="about_the_role" rows="4">{{ old('about_the_role') }}</textarea>
                                                @error('about_the_role')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="job_description" class="form-label">
                                                    Job Description <span style="color: var(--red)">*</span>
                                                </label>
                                                <textarea class="form-control" id="job_description" name="job_description" rows="4">{{ old('job_description') }}</textarea>
                                                @error('job_description')
                                                    <small class="alert text-danger ps-0 fs-12">{{ $message }}</small>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <label for="requirements" class="form-label">
                                                    Requirements <span style="color: var(--red)">*</span>
                                                </label>
                                                <textarea class="form-control" id="requirements" name="requirements" rows="4">{{ old('requirements') }}</textarea>
                                                @error('requirements')
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
        $(document).ready(function() {
            // Initialize CKEditor for rich text fields
            ClassicEditor
                .create(document.querySelector('#about_the_role'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#job_description'))
                .catch(error => {
                    console.error(error);
                });

            ClassicEditor
                .create(document.querySelector('#requirements'))
                .catch(error => {
                    console.error(error);
                });
        });

        function clearDate() {
            $('#application_deadline').val(null).trigger('change');
        }
    </script>
@endsection
