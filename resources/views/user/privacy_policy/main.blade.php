@extends('layout.user.main')

@section('content')
    <div class="main-container">
        <section class="py-4">
            <div class="privacy_policy">
                {!! __('pages/privacy_policy.body') !!}
            </div>
        </section>
    </div>
@endsection
