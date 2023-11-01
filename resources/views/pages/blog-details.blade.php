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
                        <h2 class="title">{{ $blog->title }}</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.main')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
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
        <div class="row justify-content-center mb-60-none">
            <div class="col-xl-8 col-lg-8 mb-60">
                <div class="row justify-content-center mb-60-none">
                    <div class="col-xl-12 mb-60">
                        <div class="blog-item details">
                            <div class="blog-thumb">
                                <img src="{{ asset('storage/'.$blog->main_photo) }}" alt="blog">
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user"><i class="fa fa-newspaper"></i> {{ $blog->category }}</span>
                                    <span class="date"><i class="fa fa-calendar"></i> {{ date('d.m.Y', strtotime($blog->created_at)) }}</span>
                                    <span class="ml-4"><i class="fa fa-eye"></i> {{ $blog->view }}</span>
                                </div>
                                <h3 class="title">{{ $blog->title }}</h3>

                                {!! $blog->body !!}

                                <div class="blog-related-area">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <div class="blog-slider-area">
                                                <div class="blog-slider">
                                                    <div class="swiper-wrapper">
                                                        @foreach ($blogsTwo as $item)
                                                            <div class="swiper-slide">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-comment-area">
                                    <div class="row">
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
            <div class="col-xl-4 col-lg-4 mb-60">
                <div class="sidebar">
                    @if (!empty($services))
                    <div class="widget-box mb-30 pb-5">
                        <h4 class="widget-title">@lang('main.service')</h4>
                        <div class="popular-widget-box">
                            @foreach ($services as $item)
                                <a href="{{ route('service_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}" class="custom-btn"> {{ $item->title }} <i class="icon-Group-2361 ml-2"></i></a> <br>
                            @endforeach
                        </div>
                    </div>
                    @endif
                    @if (!empty($categories))
                    <div class="widget-box mb-30">
                        <h4 class="widget-title">@lang('main.categories')</h4>
                        <div class="category-widget-box">
                            <ul class="category-list">
                                @foreach ($categories as $item)
                                    <li><a href="{{ route('blogs', ['category'=>$item->slug]) }}"><i class="fas fa-chevron-right"></i> {{ $item->category }} <span>{{ $item->blogsCount }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
@endsection
