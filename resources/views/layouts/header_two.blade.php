<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section three">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container custom-container">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-xl p-0">
                        <a class="site-logo site-title" href="{{ route('home') }}">
                            <img src="{{  asset('assets/images/uniontitle.png') }}" style="width: 42px; height: 42px;" alt="site-logo">
                            <span class="ml-1" style="font-weight: bolder; color: #5B74B7!important;">UNION GROUP</span>
                        </a>
                        <button class="navbar-toggler d-block d-xl-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggle-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
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
                            <div class="header-right">
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
