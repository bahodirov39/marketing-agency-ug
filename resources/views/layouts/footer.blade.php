<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<footer class="footer-section pt-120">
    <div class="footer-element-one">
        <img src="{{ asset('assets/images/element/element-48.png') }}" alt="element">
    </div>
    <div class="footer-element-two">
        <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
    </div>
    <div class="footer-element-three">
        <img src="{{ asset('assets/images/element/element-40.png') }}" alt="element">
    </div>
    <div class="footer-element-four">
        <img src="{{ asset('assets/images/element/element-7.png') }}" alt="element">
    </div>
    <div class="footer-element-five">
        <img src="{{ asset('assets/images/element/element-41.png') }}" alt="element">
    </div>
    <div class="footer-element-six">
        <img src="{{ asset('assets/images/element/element-42.png') }}" alt="element">
    </div>
    <div class="footer-element-seven">
        <img src="{{ asset('assets/images/element/element-39.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="row mb-30-none">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a class="site-logo site-title" href="{{ route('home') }}">
                            <img src="{{  asset('assets/images/uniontitle.png') }}" style="width: 42px; height: 42px;" alt="site-logo">
                            <span class="ml-1" style="font-weight: bolder; color: #5B74B7!important;">UNION GROUP</span>
                        </a>
                    </div>
                    <p>{{ setting('site.mini_text_about') }}</p>
                    <ul class="footer-social">
                        @if (!empty(setting('site.instagram')))
                            <li><a href="{{ setting('site.instagram') }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        @endif
                        @if (!empty(setting('site.facebook')))
                            <li><a href="{{ setting('site.facebook') }}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        @endif
                        @if (!empty(setting('site.telegram')))
                            <li><a href="{{ setting('site.telegram') }}" target="_blank"><i class="fab fa-telegram"></i></a></li>
                        @endif
                        {{--
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        --}}

                    </ul>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">@lang('main.footer4')</h4>
                    <ul class="footer-list">
                        <li><a href="tel:{{ setting('site.phone') }}"> <i class="fa fa-phone"></i> {{ setting('site.phone') }}</a></li>
                        <li><a href="tel:{{ setting('site.phone_two') }}"> <i class="fa fa-phone"></i> {{ setting('site.phone_two') }}</a></li>
                        <li><a href="{{ setting('site.telegram_admin') }}"> <i class="bi bi-telegram"></i> Telegram</a></li>
                        <li><a href="mailto:{{ setting('site.email') }}"> <i class="fa fa-envelope"></i> Email</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                    <h5 class="title">@lang('main.footer1')</h5>
                    <ul class="footer-list">
                        <li><a href="{{ route('home') }}">@lang('main.main')</a></li>
                        <li><a href="{{ route('services', ['lang'=>app()->getLocale()]) }}">@lang('main.service')</a></li>
                        <li><a href="{{ route('blogs', ['lang'=>app()->getLocale()]) }}">@lang('main.blog')</a></li>
                        <li><a href="{{ route('index.testimonal', ['lang'=>app()->getLocale()]) }}">@lang('main.request')</a></li>
                    </ul>
                </div>
            </div>

            {{--
            <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">@lang('main.footer3')</h4>
                    <ul class="footer-list">
                        @foreach ($servicesForFooter as $item)
                            <li><a href="{{ route('service_single', ['slug' => $item->slug]) }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 mb-30">
                <div class="footer-widget">
                    <h4 class="title">@lang('main.footer2')</h4>
                    <ul class="footer-list">
                        @foreach ($blogsForFooter as $item)
                            <li><a href="{{ route('blog_single', ['slug' => $item->slug]) }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
             --}}
        </div>
    </div>
    <div class="copyright-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area">
                        <p>Copyright © 2022 <a href="{{ route('home') }}">UNION GROUP</a>. @lang('main.copyright')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
