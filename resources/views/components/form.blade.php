<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Call-to-action
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="subscribe-section ptb-120 arriveForm">
    <div class="subscribe-element-one">
        <img src="{{ asset('assets/images/element/element-51.png') }}" alt="element">
    </div>
    <div class="container">
        <div class="subscribe-area">
            <div class="subscribe-element-two">
                <img src="{{ asset('assets/images/element/element-76.png') }}" alt="element">
            </div>
            <div class="subscribe-element-three">
                <img src="{{ asset('assets/images/element/element-50.png') }}" alt="element">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 offset-xl-5">
                    <div class="subscribe-content">
                        <h2 class="title">@lang('main.f1')</h2>
                        <p>@lang('main.f2')</p>
                        <form action="{{ route('toTelegram') }}" class="subscribe-form" method="POST">
                            @csrf
                            <label class="subscribe-icon"><img src="{{ asset('assets/images/icon/icon-7.png') }}" alt="icon"></label>
                            <input type="text" name="phone" class="form--control" placeholder="(99) 120-15-15">
                            <button type="submit" class="btn--base"> @lang('main.f3') <i class="fa fa-phone"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Call-to-action
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
