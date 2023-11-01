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
                    <a href="{{ route('home') }}">Bosh sahifa</a>
                </li>
                <li><a href="{{ route('services') }}">Xizmatlar</a></li>
                <li class="menu_has_children">
                    <a href="#0">Services <i class="las la-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="service.html">Service One</a></li>
                        <li><a href="service-two.html">Service Two</a></li>
                        <li><a href="service-details.html">Service Details</a></li>
                        <li><a href="service-details-two.html">Service Details Two</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li class="menu_has_children">
                    <a href="#0">Pages <i class="las la-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="project.html">Project</a></li>
                        <li><a href="project-details.html">Project Details</a></li>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="product-details.html">Product Details</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="plan.html">Pricing Plan</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                    </ul>
                </li>
                <li class="menu_has_children">
                    <a href="#0">Blog <i class="las la-angle-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-classic.html">Blog Classic</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
        <div class="header-action-area">
            <div class="header-action">
                <a href="contact.html" class="btn--base">GET STARTED</a>
            </div>
        </div>
    </div>
</div>
