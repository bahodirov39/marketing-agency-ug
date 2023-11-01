<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="service-section ptb-120">
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
    <div class="service-element-five">
        <img src="{{ asset('assets/images/element/element-37.png') }}" alt="element">
    </div>
    <div class="service-shape shape-1"></div>
    <div class="service-shape shape-2"></div>
    <div class="service-shape shape-3"></div>
    <div class="service-shape shape-4"></div>
    <div class="service-shape shape-5"></div>
    <div class="service-shape shape-6"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-header-wrapper">
                    <div class="section-header white">
                        <h2 class="section-title">@lang('main.c1')</h2>
                        <p>@lang('main.c2')</p>
                    </div>
                    <div class="section-header-btn">
                        <a href="{{ route('services', ['lang'=>app()->getLocale()]) }}" class="custom-btn two">@lang('main.c3')<i class="icon-Group-2361 ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-30-none">
            @foreach ($services as $item)
                <a href="{{ route('service_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{ asset('storage/'.$item->icon) }}" alt="icon">
                            </div>
                            <div class="service-content">
                                <h3 class="title"><a href="{{ route('service_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}">{{ $item->title }}</a></h3>
                                <a href="{{ route('service_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}"><p>{{ App\Models\Blog::sliceText($item->body) }}</p></a>
                                <div class="service-btn">
                                    <a href="{{ route('service_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}" class="custom-btn">@lang('main.c4') <i class="icon-Group-2361 ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Service
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
