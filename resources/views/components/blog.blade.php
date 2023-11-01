<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="blog-section pb-130">
    <div class="blog-element">
        <img src="assets/images/element/element-47.png" alt="element">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 text-center">
                <div class="section-header">
                    <h2 class="section-title">@lang('main.g1')</h2>
                    <p>@lang('main.g2')</p>
                    <a href="{{ route('blogs', ['lang'=>app()->getLocale()]) }}" class="custom-btn two">@lang('main.c3')<i class="icon-Group-2361 ml-2"></i></a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-40-none">
            @foreach ($blogs as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="blog-item">
                        <div class="blog-thumb">
                            <img src="{{ asset('storage/'.$item->thumbnail_photo) }}" alt="blog">
                        </div>
                        <div class="blog-content">
                            <div class="blog-post-meta">
                                <span class="user"><i class="fa fa-newspaper"></i> {{ $item->category_name }}</span>
                                <span class="date"><i class="fa fa-calendar"></i> {{ date('d.m.Y', strtotime($item->created_at)) }}</span>
                                <span class="ml-4"><i class="fa fa-eye"></i> {{ $item->view }}</span>
                            </div>
                            <h3 class="title"><a href="{{ route('blog_single', ['lang'=>app()->getLocale(), 'slug'=>$item->slug]) }}">{{ $item->title }}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Blog
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
