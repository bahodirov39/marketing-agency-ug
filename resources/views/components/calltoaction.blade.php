<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Call to action
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="call-to-action-section pb-120">
    <div class="call-to-action-element" data-aos="fade-left" data-aos-duration="1200">
        <img src="assets/images/element/element-33.png" alt="element">
    </div>
    <div class="wrapper demo-text">
        <div class="marquee">
            <span>
                {{ setting("site.capital_text") }}
            </span>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center mb-10-none">
            <div class="col-xl-9">
                <div class="call-to-action-wrapper">
                    <div class="call-to-action-content">
                        <h3 class="title">@lang('main.b1', ['percent'=>setting('site.back_percent')])</h3>
                        <h3 class="inner-title">@lang('main.b2')</h3>
                    </div>
                    <div class="call-to-action-btn">
                        <a href="tel:{{ setting('site.phone') }}" class="btn--base">@lang('main.acontact')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Call to action
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
