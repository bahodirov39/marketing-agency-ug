<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Client
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="client-section ptb-120">
    <div class="client-element-one">
        <img src="assets/images/element/element-44.png" alt="element">
    </div>
    <div class="client-element-two">
        <img src="assets/images/element/element-45.png" alt="element">
    </div>
    <div class="client-element-three">
        <img src="assets/images/element/element-46.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="section-header">
                    <h2 class="section-title">@lang('main.e1')</h2>
                    <p>@lang('main.e2')</p>
                </div>
            </div>
        </div>
        <div class="client-area">
            <div class="row justify-content-center mb-10-none">
                <div class="col-xl-12">
                    <div class="client-slider-area">
                        <div class="client-slider">
                            <div class="swiper-wrapper">
                                @foreach ($testimonals as $item)
                                    <div class="swiper-slide">
                                        <div class="client-item">
                                            <div class="client-header">
                                                <div class="client-ratings">
                                                    <span class="ratings">
                                                        @if (!empty($item->rating))
                                                            @for ($i = 0; $i < $item->rating; $i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                        @endif
                                                    </span>
                                                </div>
                                                <div class="client-quote">
                                                    <img src="{{ asset('assets/images/client/quote.png') }}" alt="quote">
                                                </div>
                                            </div>
                                            <div class="client-content">
                                                <p>{{ $item->body }}</p>
                                            </div>
                                            <div class="client-footer">
                                                <div class="client-footer-user-content">
                                                    <h6 class="title">{{ $item->name }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="client-pagination"></div>
                            <div class="slider-prev">
                                <i class="las la-long-arrow-alt-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="las la-long-arrow-alt-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Client
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
