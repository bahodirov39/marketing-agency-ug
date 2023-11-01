<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Brand
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="brand-section oh ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="brand-slider-area">
                    <div class="brand-slider">
                        <div class="swiper-wrapper">
                            @foreach ($partners as $item)
                                <div class="swiper-slide">
                                    <div class="brand-item">
                                        <img src="{{ asset('storage/'.$item->logo) }}" alt="brand">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Brand
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
