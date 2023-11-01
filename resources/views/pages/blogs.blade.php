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
                        <h2 class="title">@lang('main.blog')</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.main')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('main.blog')</li>
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
    Start Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="blog-section ptb-120" style="margin-top: 0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="section-header">
                    <h2 class="section-title">@lang('main.g1')</h2>
                    <p>@lang('main.g2')</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-40-none">
            @foreach ($blogs as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{ asset('storage/'.$item->thumbnail_photo) }}" alt="blog">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user"><i class="fa fa-newspaper"></i> {{ $item->category_name }}</span>
                                <span class="date"><i class="fa fa-calendar"></i> {{ date('d.m.Y', strtotime($item->created_at)) }}</span>
                                <span class="ml-4"><i class="fa fa-eye"></i> {{ $item->view }}</span>
                            </div>
                            <h3 class="title"><a href="{{ route('blog_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}">{{ $item->title }}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection
