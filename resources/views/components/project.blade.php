<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Project
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<section class="project-section pb-120 mt-5">
    <div class="project-element-one">
        <img src="assets/images/element/element-23.png" alt="element">
    </div>
    <div class="project-element-two">
        <img src="assets/images/element/element-24.png" alt="element">
    </div>
    <div class="project-element-three">
        <img src="assets/images/element/element-25.png" alt="element">
    </div>
    <div class="project-element-four">
        <img src="assets/images/element/element-26.png" alt="element">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-header-wrapper">
                    <div class="section-header">
                        <h2 class="section-title">@lang("main.d1")</h2>
                        <p>@lang("main.d2")</p>
                    </div>
                    {{--
                    <div class="section-header-btn">
                        <a href="project.html" class="custom-btn">View All Projects <i class="icon-Group-2361 ml-2"></i></a>
                    </div>
                    --}}
                </div>
            </div>
        </div>
        <div class="project-item-wrapper">
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
                    <div class="project-item">
                        <div class="project-thumb">
                            <img src="assets/images/project/project-1.png" alt="project">
                        </div>
                        <div class="project-overlay">
                            <div class="overlay-content">
                                <h4 class="title"><a href="{{ route('project', ['name'=>'starter']) }}">@lang("main.d3")</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mb-30">
                    <div class="project-item">
                        <div class="project-thumb">
                            <img src="assets/images/project/project-2.png" alt="project">
                        </div>
                        <div class="project-overlay">
                            <div class="overlay-content" style="opacity: 100%!important; visibility: visible!important;">
                                <h4 class="title"><a href="{{ route('project', ['name'=>'businessman']) }}">@lang("main.d4")</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Project
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
