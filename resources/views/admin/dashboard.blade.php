@extends('layout.admin.app')
@section('css')
<style>
    .card-body {
        padding: 20px 20px 20px 20px;
    }
    .card-title {
        font-size: 17px;
    }
    .small {
        font-size: 13px;
    }
</style>
@endsection
@section('content')
@include('layout.admin.header')
@include('layout.admin.sidebar')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div>
    <section class="section dashboard">
        <div class="col d-flex flex-column gap-md-3 gap-0 px-md-0 px-2">
            <div class="row">
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/banner">
                                            Important Dates <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $important_dates->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English</i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-newspaper"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/blogs">
                                            Blogs <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $blog->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English or Indonesian</i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/mentor">
                                            Mentors <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $mentor->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English and Indonesian</i></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/tutor">
                                            Tutors <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $tutors->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English</i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-comments"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/testimonial">
                                            Testimonial <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $testimonial->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English and Indonesian</i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-book"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/guidebook">
                                            Guidebook <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $guidebook->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English and Indonesian</i></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/upcoming-event">
                                            Upcoming Events <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $upcoming_event->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English and Indonesian</i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-solid fa-book-atlas"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/success-stories">
                                            Success Stories <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $success_stories->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English and Indonesian</i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 px-md-2 px-0 mb-md-0 mb-2">
                    <div class="card info-card">
                        <div class="card-body d-flex flex-column gap-2">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fa-regular fa-folder-open"></i>
                                </div>
                                <div class="ps-md-3 ps-4 py-1 d-flex flex-column gap-1">
                                    <h5 class="card-title p-0 m-0">
                                        <a class="card-title link-card" href="/admin/project-showcase">
                                            Project Showcase <span>| {{ now()->year }}</span>
                                        </a>
                                    </h5>
                                    <h6 class="ps-1">{{ $project_showcase->count() }}</h6>
                                </div>
                            </div>
                            <small class="text-muted small"><i>Total in English</i></small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col px-md-2 px-0">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title m-0 pt-0">Top 5 Blogs <span>| Blogs</span></h5>
                            <ul class="nav nav-tabs nav-tabs-bordered"></ul>
                            <div class="news d-flex flex-column gap-3 pb-md-4 pb-3 mt-3">
                                @foreach ($top_blogs as $top_blog)
                                    <div class="row flex-md-row flex-column align-items-center justify-content-center gap-md-1 gap-3 py-1">
                                        <div class="col-md-2 col text-center">
                                            <img class="img-fluid" src="{{ Storage::url('blogs/'.$top_blog->created_at->format('Y').'/'.$top_blog->created_at->format('m').'/'.$top_blog->blog_thumbnail) }}" alt="" style="border-radius: 10px">
                                        </div>
                                        <div class="col">
                                            <h4><a href="/admin/blogs/{{ $top_blog->id }}/view">{{ $top_blog->blog_title }}</a></h4>
                                            <p>{!! Str::limit(strip_tags($top_blog->blog_description), 350, '...') !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection