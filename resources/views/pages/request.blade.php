@extends('layouts.myapp')

@section('title', $seo_title)

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
                        <h2 class="title">@lang('main.request')</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.main')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('main.request')</li>
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
                                            <h2 class="title"><span class="text--base">@lang('main.request')</span></h2>
                                            <p>@lang('main.request2')</p>
                                        </div>
                                    </div>
                                    <form action="{{ route('add.testimonal') }}" method="POST" class="contact-form">
                                        @csrf
                                        <div class="row justify-content-center mb-30-none">
                                            <div class="col-xl-6 col-lg-6 form-group">
                                                <input type="text" name="name" class="form--control" placeholder="@lang('main.m1', ['name'=>''])">
                                            </div>
                                            <div class="col-xl-6 col-lg-6 form-group">
                                                <div class="contact-select">
                                                    <select class="form--control" name="rating">
                                                        <option value="5">5</option>
                                                        <option value="4">4</option>
                                                        <option value="3">3</option>
                                                        <option value="2">2</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 form-group">
                                                <textarea class="form--control" name="body" placeholder="@lang('main.m4')"></textarea>
                                            </div>
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
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection
