@extends('layouts.myapp')

@section('title',  __("d1") . " - " . __("seo_title_main"))

@section('header')
@include('layouts.header_two')
@endsection

@section('content')
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section two inner">
    <div class="banner-element-four two">
        <img src="{{ asset('assets/images/element/element-5.png') }}" alt="element">
    </div>
    <div class="banner-element-five two">
        <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
    </div>
    <div class="banner-element-nineteen two">
        <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
    </div>
    <div class="banner-element-twenty-two two">
        <img src="{{ asset('assets/images/element/element-69.png') }}" alt="element">
    </div>
    <div class="banner-element-twenty-three two">
        <img src="{{ asset('assets/images/element/element-70.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center mb-30-none">
            <div class="col-xl-12 mb-30">
                <div class="banner-content two">
                   <div class="banner-content-header">
                        <h2 class="title">@lang('main.d1')</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.main')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('main.d1')</li>
                                </ol>
                            </nav>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Gallery
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="gallery-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="gallery-item details">
                    <div class="gallery-thumb">
                        <img src="{{ asset('assets/images/service.png') }}" alt="gallery">
                    </div>
                    <div class="gallery-content-area">
                        <div class="row justify-content-center mb-30-none">
                            <div class="col-xl-8 col-lg-8 mb-30">
                                <div class="gallery-content">
                                    <h3 class="title">{{ $header }}</h3>
                                    <p>{!! $body !!}</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 mb-30">
                                <div class="gallery-sidebar">
                                    <div class="gallery-sidebar-widget">
                                        <ul class="gallery-sidebar-widget-list">
                                            <li>
                                                <h5 class="title">@lang('main.sf1')</h5>
                                                <span class="sub-title">{{ $feature_who }}</span>
                                            </li>
                                            <li>
                                                <h5 class="title">@lang('main.sf2')</h5>
                                                <span class="sub-title">@lang('main.project_date')</span>
                                            </li>
                                            <li>
                                                <h5 class="title">@lang('main.sf3')</h5>
                                                <span class="sub-title">@lang('main.project_services')</span>
                                            </li>
                                            <li>
                                                <h5 class="title">@lang('main.sf4')</h5>
                                                <span class="sub-title">@lang('main.project_it_services')</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
