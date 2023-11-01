@extends('layouts.myapp')

@section('title', $seo_title)
@section('meta_description', $meta_description)

@section('header')
@include('layouts.header_two')
@endsection

@section('content')
@include('layouts.modalforservices')

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
                        <h2 class="title">{{ $service->title }}</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.main')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $service->title }}</li>
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
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-section two ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="service-item three details">
                    @if (!empty($service->main_photo))
                        <div class="service-thumb">
                            <img src="{{ asset('storage/'.$service->main_photo) }}" alt="service">
                        </div>
                    @endif
                    <div class="service-content">
                        @if (app()->getLocale() == 'uz')
                            <h2 class="title">{{ $service->title_uz }}</h2>
                        @else
                            <h2 class="title">{{ $service->title_ru }}</h2>
                        @endif
                        <div class="service-widget-item-area">
                            <div class="row justify-content-center mb-30-none">
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                    <div class="service-widget-item">
                                        <div class="service-widget-icon">
                                            <img src="{{ asset('assets/images/icon/icon-17.png') }}" alt="icon">
                                        </div>
                                        <div class="service-widget-content">
                                            <h5 class="title">@lang('main.h1')</h5>
                                            @if (empty($service->feature_time))
                                                <span class="sub-title">@lang('main.empty')</span>
                                            @else
                                                <span class="sub-title">{{ $service->feature_time }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                    <div class="service-widget-item">
                                        <div class="service-widget-icon">
                                            <img src="{{ asset('assets/images/icon/icon-18.png') }}" alt="icon">
                                        </div>
                                        <div class="service-widget-content">
                                            <h5 class="title">@lang('main.h2')</h5>
                                            @if (empty($service->feature_result))
                                                <span class="sub-title">@lang('main.empty')</span>
                                            @else
                                                <span class="sub-title">{{ $service->feature_result }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                    <div class="service-widget-item">
                                        <div class="service-widget-icon">
                                            <img src="{{ asset('assets/images/icon/icon-19.png') }}" alt="icon">
                                        </div>
                                        <div class="service-widget-content">
                                            <h5 class="title">@lang('main.h3')</h5>
                                            @if (empty($service->feature_bonus))
                                                <span class="sub-title">@lang('main.empty')</span>
                                            @else
                                                <span class="sub-title">{{ $service->feature_bonus }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                    <div class="service-widget-item">
                                        <div class="service-widget-icon">
                                            <img src="{{ asset('assets/images/icon/icon-20.png') }}" alt="icon">
                                        </div>
                                        <div class="service-widget-content">
                                            <h5 class="title">@lang('main.h4')</h5>
                                            @if (empty($service->feature_workers))
                                                <span class="sub-title">@lang('main.empty')</span>
                                            @else
                                                <span class="sub-title">{{ $service->feature_workers }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-bottom-content">
                            @if (app()->getLocale() == 'uz')
                                {!! $service->body_uz !!}
                            @else
                                {!! $service->body_ru !!}
                            @endif

                            <blockquote class="two">
                                <div class="quote-area d-flex flex-wrap">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets/images/client/quote-2.png') }}" alt="quote">
                                    </div>
                                    <div class="quote-shape">
                                        <img src="{{ asset('assets/images/element/element-66.png') }}" alt="element">
                                    </div>
                                    <div class="quote-content-area">
                                        <p class="quote-content">@lang('main.marketing_quote')</p>
                                    </div>
                                </div>
                            </blockquote>

                            <div class="contact-section two">
                                <div class="contact-area">
                                    <div class="contact-element-five">
                                        <img src="{{ asset('assets/images/element/element-60.png') }}" alt="element">
                                    </div>
                                    <div class="contact-element-six">
                                        <img src="{{ asset('assets/images/element/element-60.png') }}" alt="element">
                                    </div>
                                    <div class="row mb-30-none">
                                        <div class="col-xl-12 col-lg-12 mb-30">
                                            <div class="contact-form-area">
                                                <div class="contact-form-header">
                                                    <div class="left">
                                                        <h2 class="title">@lang('main.sendRequest')</h2>
                                                        <p>@lang('main.sendRequestInfo')</p>
                                                    </div>
                                                </div>
                                                <form action="{{ route('sendMessage') }}" class="contact-form" method="POST">
                                                    @csrf
                                                    <div class="row justify-content-center mb-30-none">
                                                        <div class="col-xl-6 col-lg-6 form-group">
                                                            <input type="text" name="name" class="form--control" placeholder="@lang('main.m1', ['name'=>'(необязательно)'])">
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 form-group">
                                                            <input type="text" name="phone" id="phone" class="form--control" placeholder="@lang('main.m2')"/>
                                                        </div>
                                                        <div class="col-xl-12 form-group">
                                                            <textarea class="form--control" name="message" placeholder="@lang('main.m3')"></textarea>
                                                        </div>
                                                        <input type="hidden" name="service" value="{{ $service->title }}">
                                                        <div class="col-xl-12 form-group custom-form-group mt-20">
                                                            <button type="submit" class="btn--base">@lang('main.send')</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-30">
                                    <div class="col-md-12">
                                        <a href="tel:{{ setting('site.phone') }}" class="btn--base w-100">@lang('main.call')</a>
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
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection

@section('scripts')
    <script>
        $( function(){
            $("#exampleModalCenter").modal("show");
        });
    </script>
@endsection
