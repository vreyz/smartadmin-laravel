@extends('admin::index', ['header' => strip_tags($header)])

@section('content')
    <div class="subheader">

        <h1 class="subheader-title">
                <i class='subheader-icon fal fa-chart-area'></i> {!! $header ?: trans('admin.title') !!} <span class='fw-300'>{!! $description ?: trans('admin.description') !!}</span>
        </h1>

          {{--  <div class="subheader-block d-lg-flex align-items-center">
                <div class="d-inline-flex flex-column justify-content-center mr-3">
                                    <span class="fw-300 fs-xs d-block opacity-50">
                                        <small>EXPENSES</small>
                                    </span>
                    <span class="fw-500 fs-xl d-block color-primary-500">
                                        $47,000
                                    </span>
                </div>
                <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#886ab5" sparkHeight="32px" sparkBarWidth="5px" values="3,4,3,6,7,3,3,6,2,6,4"></span>
            </div>
            <div class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                <div class="d-inline-flex flex-column justify-content-center mr-3">
                                    <span class="fw-300 fs-xs d-block opacity-50">
                                        <small>MY PROFITS</small>
                                    </span>
                    <span class="fw-500 fs-xl d-block color-danger-500">
                                        $38,500
                                    </span>
                </div>
                <span class="sparklines hidden-lg-down" sparkType="bar" sparkBarColor="#fe6bb0" sparkHeight="32px" sparkBarWidth="5px" values="1,4,3,6,5,3,9,6,5,9,7"></span>
            </div>--}}
    </div>

        @include('admin::partials.alerts')
        @include('admin::partials.exception')
        @include('admin::partials.toastr')

        @if($_view_)
            @include($_view_['view'], $_view_['data'])
        @else
            {!! $_content_ !!}
        @endif

@endsection
