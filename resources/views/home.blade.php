@extends('layouts/main')
@push('title')
    <title>TLS Academy - Home</title>
@endpush
@section('main-section')

    <div class="modal modal-lg fade" tabindex="-1" role="dialog" id="promotion-popup">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{asset('images/promotional-popup.png')}}" alt="">
            </div>
        </div>
        </div>
    </div>

    @include('layouts/hero_banner')
    @include('layouts/about')
    @include('layouts/why-choose-us')
    @include('layouts/popular-courses')
    @include('layouts/contact-for-demo')
    @include('layouts/benefits')
    @include('layouts/student-feedback')
    @include('layouts/social-media-pages')
    @include('layouts/contact-us')
@endsection