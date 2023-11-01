@extends('layouts.myapp')

@section('title', "Bosh sahifa")

@section('header')
@include('layouts.header')
@endsection

@section('content')
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="banner-section">
    <div class="banner-text">
        <span>UNION</span>
    </div>
    <div class="banner-element-one">
        <img src="{{ asset('assets/images/element/element-3.png') }}" alt="element">
    </div>
    <div class="banner-element-two">
        <img src="{{ asset('assets/images/element/element-4.png') }}" alt="element">
    </div>
    <div class="banner-element-three">
        <img src="{{ asset('assets/images/element/element-5.png') }}" alt="element">
    </div>
    <div class="banner-element-four">
        <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
    </div>
    <div class="banner-element-five">
        <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
    </div>
    <div class="banner-group-shape">
        <div class="banner-group-element-one">
            <img src="{{ asset('assets/images/element/element-8.png') }}" alt="element">
        </div>
        <div class="banner-group-element-two">
            <img src="{{ asset('assets/images/element/element-9.png') }}" alt="element">
        </div>
        <div class="banner-group-element-three">
            <img src="{{ asset('assets/images/element/element-10.png') }}" alt="element">
        </div>
        <div class="banner-group-element-four">
            <img src="{{ asset('assets/images/element/element-6.png') }}" alt="element">
        </div>
        <div class="banner-group-element-five">
            <img src="{{ asset('assets/images/element/element-5.png') }}" alt="element">
        </div>
        <div class="banner-group-element-six">
            <img src="{{ asset('assets/images/element/element-11.png') }}" alt="element">
        </div>
        <div class="banner-group-element-seven">
            <img src="{{ asset('assets/images/element/element-12.png') }}" alt="element">
        </div>
        <div class="banner-group-element-eight">
            <img src="{{ asset('assets/images/element/element-13.png') }}" alt="element">
        </div>
        <div class="banner-group-element-nine">
            <img src="{{ asset('assets/images/element/element-14.png') }}" alt="element">
        </div>
        <div class="banner-group-element-ten">
            <img src="{{ asset('assets/images/element/element-15.png') }}" alt="element">
        </div>
        <div class="banner-group-element-eleven">
            <img src="{{ asset('assets/images/element/element-16.png') }}" alt="element">
        </div>
        <div class="banner-group-element-twelve">
            <img src="{{ asset('assets/images/element/element-17.png') }}" alt="element">
        </div>
        <div class="banner-group-element-thirteen">
            <img src="{{ asset('assets/images/element/element-18.png') }}" alt="element">
        </div>
        <div class="banner-group-element-fourteen">
            <img src="{{ asset('assets/images/element/element-19.png') }}" alt="element">
        </div>
        <div class="banner-group-element-fifteen">
            <img src="{{ asset('assets/images/element/element-20.png') }}" alt="element">
        </div>
        <div class="banner-group-element-sixteen">
            <img src="{{ asset('assets/images/element/element-21.png') }}" alt="element">
        </div>
        <div class="banner-group-element-seventeen">
            <img src="{{ asset('assets/images/element/element-22.png') }}" alt="element">
        </div>
    </div>
    <div class="container custom-container">
        <div class="row align-items-end mb-30-none">
            <div class="col-xl-7 col-lg-7 mb-30">
                <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">
                    <h1 class="title">@lang('main.title_1')</h1>
                    <span class="sub-title">@lang('main.title_2')</span>
                    <p>@lang('main.title_3')</p>
                    <div class="banner-arrow">
                        <img src="{{ asset('assets/images/element/element-1.png') }}" alt="element">
                    </div>
                    <div class="banner-widget">
                        <div class="banner-widget-wrapper">
                            <div class="banner-widget-middle">
                                <div class="banner-widget-content">
                                    <p><span>{{ setting('site.clients') }}+</span> @lang('main.clientsLowecase')</p>
                                </div>
                            </div>
                            <div class="banner-widget-right">
                                <div class="banner-widget-btn">
                                    <a href="#0" class="btn--base toForm">@lang('main.acontact3')</a>
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
    End Banner
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@include('layouts.modal')

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<a href="#" class="scrollToTop"><i class="las la-angle-double-up"></i></a>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Scroll-To-Top
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


<x-partners></x-partners>

<x-whychoose></x-whychoose>

<x-calltoaction></x-calltoaction>

<x-services></x-services>

<x-project></x-project>

{{--
<x-about></x-about>

<x-team></x-team>
--}}

<x-client></x-client>

<x-form></x-form>

<x-blog></x-blog>

@endsection

@section('scripts')
    <script>
        $( function(){
            $(".toForm").click(function() {
                $('html,body').animate({
                    scrollTop: $(".arriveForm").offset().top},
                'slow');
            });

            $("#exampleModalCenter").modal("show");
        });
    </script>
@endsection
