<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <a class="site-logo site-title" href="{{ route('home') }}">
                            <img src="{{  asset('assets/images/unionlogo.png') }}" style="width: 42px; height: 42px;" alt="site-logo">
                            <span class="text-white ml-1" style="font-weight: bolder;">UNION GROUP</span>
                        </a>
                        <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <div class="header-right">
                                {{--
                                <div class="search-bar">
                                    <form class="header-search-form">
                                        <input type="search" name="keyword" id="header_search" placeholder="Izlash...">
                                        <button class="header-search-btn"><i class="las la-search"></i></button>
                                    </form>
                                </div>
                                 --}}
                                <div class="header-links-area">
                                    <ul class="header-links">
                                        <li>
                                            <a href="mailto:{{ setting('site.email') }}">
                                                <div class="links-thumb">
                                                    <img src="assets/images/icon/icon-1.png" alt="icon">
                                                </div>
                                                <span>{{ setting('site.email') }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:{{ setting('site.phone') }}">
                                                <div class="links-thumb">
                                                    <img src="assets/images/icon/icon-2.png" alt="icon">
                                                </div>
                                                <span>{{ setting('site.phone') }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <button class="menu-toggler ml-auto">
                                    <span class="toggle-bar"></span>
                                </button>
                                <div class="menu-toggler-wrapper">
                                    <ul class="navbar-nav main-menu">
                                        <li class="menu_has_children">
                                            <a href="{{ route('home') }}">@lang('main.main')</a>
                                        </li>
                                        <li><a href="{{ route('services', ['lang'=>app()->getLocale()]) }}">@lang('main.service')</a></li>
                                        <li><a href="{{ route('blogs', ['lang'=>app()->getLocale()]) }}">@lang('main.blog')</a></li>
                                        <li><a href="{{ route('index.testimonal', ['lang'=>app()->getLocale()]) }}">@lang('main.request')</a></li>
                                        <li class="menu_has_children">
                                            <a href="#0"><i class="bi bi-globe mr-1"></i>
                                                @if (app()->getLocale() == 'uz')
                                                    @lang('main.uz')
                                                @else
                                                    @lang('main.ru')
                                                @endif
                                                <i class="las la-angle-down"></i></a>
                                            <ul class="sub-menu">
                                                @if (app()->getLocale() == 'uz')
                                                    <li><a href="{{ route('lang', ['lang'=>'ru']) }}">@lang('main.ru')</a></li>
                                                @else
                                                    <li><a href="{{ route('lang', ['lang'=>'uz']) }}">@lang('main.uz')</a></li>
                                                @endif
                                                {{-- <li><a href="{{ route('lang', ['lang'=>'en']) }}">@lang('main.en')</a></li> --}}
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-action-area">
                                    <div class="header-action">
                                        <a href="tel:{{ setting('site.phone') }}" class="btn--base">@lang('main.call')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
