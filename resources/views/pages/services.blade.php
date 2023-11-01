@extends('layouts.myapp')


@section('title', "Xizmatlar")

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
                        <h2 class="title">@lang('main.service')</h2>
                        <div class="breadcrumb-area">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('main.main')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('main.service')</li>
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
<section class="service-section two three ptb-120">
    <div class="service-element-one">
        <img src="{{ asset('assets/images/element/element-34.png') }}" alt="element">
    </div>
    <div class="service-element-two">
        <img src="{{ asset('assets/images/element/element-35.png') }}" alt="element">
    </div>
    <div class="service-element-three">
        <img src="{{ asset('assets/images/element/element-36.png') }}" alt="element">
    </div>
    <div class="service-element-four">
        <img src="{{ asset('assets/images/element/element-36.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center mb-30-none">
            @foreach ($services as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="service-item three">
                        <div class="service-icon">
                            <img src="{{ asset('storage/'.$item->icon) }}" alt="icon">
                        </div>
                        <div class="service-content">
                            <h3 class="title"><a href="{{ route('service_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}">{{ $item->title }}</a></h3>
                            <p>{{ App\Models\Blog::sliceText($item->body) }}</p>
                            <div class="service-btn">
                                <a href="{{ route('service_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}" class="custom-btn">@lang('main.c4') <i class="icon-Group-2361 ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


{{--
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="about-section two ptb-120">
    <div class="about-element-one two">
        <img src="assets/images/element/element-39.png" alt="element">
    </div>
    <div class="container">
        <div class="about-area">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="box-wrapper two">
                        <div class="box3"></div>
                        <div class="box1">
                            <div class="box-element-one">
                                <img src="assets/images/element/element-59.png" alt="element">
                            </div>
                            <div class="box-element-two">
                                <img src="assets/images/element/element-7.png" alt="element">
                            </div>
                        </div>
                        <div class="box2">
                            <div class="box-element-five">
                                <img src="assets/images/element/element-16.png" alt="element">
                            </div>
                            <div class="box-element-six">
                                <img src="assets/images/element/element-7.png" alt="element">
                            </div>
                        </div>
                    </div>
                    <div class="about-thumb">
                        <img src="assets/images/element/element-58.png" alt="element">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content">
                        <h2 class="title">Have a project in mind? <span class="text--base">Let's connect</span></h2>
                        <p class="para">We rank among the best in the US, Argentina, and Ukraine. Our apps get featured as best in class, & our clients love our work.</p>
                        <p>Welcome To Softim, a software development company, helps to digitize businesses by focusing on client’s business challenges, needs, pain points and providing business-goals-oriented software solutions.</p>
                        <div class="about-btn">
                            <a href="contact.html" class="btn--base">Send Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End About
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Plan
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="plan-section three ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="section-header">
                    <h2 class="section-title mb-0">Our Digital Pricing Plan</h2>
                </div>
            </div>
        </div>
        <div class="plan-tab">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="monthly-tab" data-toggle="tab" data-target="#monthly" type="button" role="tab" aria-controls="monthly" aria-selected="true">Monthly</button>
                    <button class="nav-link" id="yearly-tab" data-toggle="tab" data-target="#yearly" type="button" role="tab" aria-controls="yearly" aria-selected="false">Yearly</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                            <div class="plan-item">
                                <div class="plan-header">
                                    <h3 class="title">Standard Plan</h3>
                                </div>
                                <div class="plan-body">
                                    <div class="plan-price-area">
                                        <h2 class="price-title">$39<sub>Monthly</sub></h2>
                                    </div>
                                    <ul class="plan-list">
                                        <li>Up to 100 keyphrases optimized</li>
                                        <li>Custom dashboards: 4</li>
                                        <li>Content, and link monitoring</li>
                                        <li>Digital marketing expert</li>
                                        <li>Content marketing assets</li>
                                    </ul>
                                </div>
                                <div class="plan-footer">
                                    <div class="plan-btn">
                                        <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                            <div class="plan-item">
                                <div class="plan-header">
                                    <h3 class="title">Ultra Plan</h3>
                                    <div class="plan-badge-area">
                                        <span class="plan-badge">Most Popular</span>
                                    </div>
                                </div>
                                <div class="plan-body">
                                    <div class="plan-price-area">
                                        <h2 class="price-title">$69<sub>Monthly</sub></h2>
                                    </div>
                                    <ul class="plan-list">
                                        <li>Up to 100 keyphrases optimized</li>
                                        <li>Custom dashboards: 4</li>
                                        <li>Content, and link monitoring</li>
                                        <li>Digital marketing expert</li>
                                        <li>Content marketing assets</li>
                                    </ul>
                                </div>
                                <div class="plan-footer">
                                    <div class="plan-btn">
                                        <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                            <div class="plan-item">
                                <div class="plan-header">
                                    <h3 class="title">Premium Plan</h3>
                                </div>
                                <div class="plan-body">
                                    <div class="plan-price-area">
                                        <h2 class="price-title">$49<sub>Monthly</sub></h2>
                                    </div>
                                    <ul class="plan-list">
                                        <li>Up to 100 keyphrases optimized</li>
                                        <li>Custom dashboards: 4</li>
                                        <li>Content, and link monitoring</li>
                                        <li>Digital marketing expert</li>
                                        <li>Content marketing assets</li>
                                    </ul>
                                </div>
                                <div class="plan-footer">
                                    <div class="plan-btn">
                                        <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                            <div class="plan-item">
                                <div class="plan-header">
                                    <h3 class="title">Standard Plan</h3>
                                </div>
                                <div class="plan-body">
                                    <div class="plan-price-area">
                                        <h2 class="price-title">$79<sub>Yearly</sub></h2>
                                    </div>
                                    <ul class="plan-list">
                                        <li>Up to 100 keyphrases optimized</li>
                                        <li>Custom dashboards: 4</li>
                                        <li>Content, and link monitoring</li>
                                        <li>Digital marketing expert</li>
                                        <li>Content marketing assets</li>
                                    </ul>
                                </div>
                                <div class="plan-footer">
                                    <div class="plan-btn">
                                        <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                            <div class="plan-item">
                                <div class="plan-header">
                                    <h3 class="title">Ultra Plan</h3>
                                    <div class="plan-badge-area">
                                        <span class="plan-badge">Most Popular</span>
                                    </div>
                                </div>
                                <div class="plan-body">
                                    <div class="plan-price-area">
                                        <h2 class="price-title">$99<sub>Yearly</sub></h2>
                                    </div>
                                    <ul class="plan-list">
                                        <li>Up to 100 keyphrases optimized</li>
                                        <li>Custom dashboards: 4</li>
                                        <li>Content, and link monitoring</li>
                                        <li>Digital marketing expert</li>
                                        <li>Content marketing assets</li>
                                    </ul>
                                </div>
                                <div class="plan-footer">
                                    <div class="plan-btn">
                                        <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-10 mb-30">
                            <div class="plan-item">
                                <div class="plan-header">
                                    <h3 class="title">Premium Plan</h3>
                                </div>
                                <div class="plan-body">
                                    <div class="plan-price-area">
                                        <h2 class="price-title">$59<sub>Yearly</sub></h2>
                                    </div>
                                    <ul class="plan-list">
                                        <li>Up to 100 keyphrases optimized</li>
                                        <li>Custom dashboards: 4</li>
                                        <li>Content, and link monitoring</li>
                                        <li>Digital marketing expert</li>
                                        <li>Content marketing assets</li>
                                    </ul>
                                </div>
                                <div class="plan-footer">
                                    <div class="plan-btn">
                                        <a href="plan.html" class="btn--base active w-100">Choose Plan</a>
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
    End Plan
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
 --}}
@endsection
