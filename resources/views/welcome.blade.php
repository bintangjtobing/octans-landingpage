<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="Boxity Central Indonesia">
    <meta name="keywords"
        content="octansidn, aplikasi keuangan sederhana octansidn, aplikasi keuangan murah di medan, aplikasi keuangan terbaik di medan, octans by boxity">
    <meta name="description" content="">


    <!-- Font Imports -->
    <link rel="stylesheet" href="https://use.typekit.net/vgf0rfn.css">

    <!-- Core Style -->
    <link rel="stylesheet" href="{!! asset('webpage/style.css?' . rand(10000, 99999)) !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('webpage/css/font-icons.css?' . rand(10000, 99999)) !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('webpage/demos/saas/saas.css?' . rand(10000, 99999)) !!}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/css/custom.css?' . rand(10000, 99999)) !!}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{!! asset('webpage/demos/business/images/octans/icon_2.ico') !!}" type="image/x-icon">

    <!-- Document Title
 ============================================= -->
    <title>
        @hasSection('title')
            @yield('title')
        @endif Octans IDN by Boxity
    </title>
    <meta name="og:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="@if (View::hasSection('tag_cover')) @yield('tag_cover')@else {!! asset('assets/meta-cover.jpg') !!} @endif" />
    <meta name="og:description" property="og:description"
        content="Program aplikasi keuangan buku kas online Octans IDN sederhana untuk pribadi, keluarga, bisnis, organisasi. Software keuangan gratis mudah untuk pembukuan sehari-hari." />
    <meta name="twitter:card" content="@hasSection('title')
@yield('title')
@endif Octans by Boxity" />
    <meta name="twitter:title" property="og:title"
        content="@hasSection('title')
@yield('title')
@endif Octans by Boxity" />
    <meta name="keywords"
        content="octansidn, aplikasi keuangan sederhana octansidn, aplikasi keuangan murah di medan, aplikasi keuangan terbaik di medan, octans by boxity" />
    <meta name="twitter:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="@if (View::hasSection('tag_cover')) @yield('tag_cover')@else {!! asset('assets/meta-cover.jpg') !!} @endif" />
    <meta name="twitter:description" property="og:description"
        content="Program aplikasi keuangan buku kas online Octans IDN sederhana untuk pribadi, keluarga, bisnis, organisasi. Software keuangan gratis mudah untuk pembukuan sehari-hari." />
    <link rel="canonical" href="{{ Request::url() }}/" />
    <link rel="shortcut icon"
        href="@if (View::hasSection('icon')) @yield('icon')@else {!! asset('webpage/demos/business/images/octans/icon_2.ico') !!} @endif" type="image/x-icon"
        sizes="64x64" />
    <meta name="og:email" content="info@octansidn.com" />
    <meta name="og:phone_number" content="02129021873" />
    <meta name="og:latitude" content="-6.1465558" />
    <meta name="og:longitude" content="106.7843094" />
    <meta name="og:street-address" content="Grand Silipi Tower, Jl. Jend Jl. Jelambar Barat No.22-24" />
    <meta name="og:locality" content="DKI Jakarta" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="11480" />
    <meta name="og:country-name" content="Indonesia" />
    <meta name="url" content="{{ Request::url() }}">
    <meta name="identifier-URL" content="{{ Request::url() }}">

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">

        <!-- Header
  ============================================= -->
        <header id="header" class="transparent-header dark no-sticky" data-responsive-class="not-dark">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row justify-content-lg-between">

                        <!-- Logo
      ============================================= -->
                        <div id="logo" class="col-lg-3 order-lg-3 mx-lg-auto justify-content-lg-center mt-3">
                            <a href="/">
                                <img class="logo-default"
                                    srcset="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1704264591/octansidn/octansidn-white-all_wgwnjm.png"
                                    2x
                                    src="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1704264591/octansidn/octansidn-white-all_wgwnjm.png"
                                    alt="Octans Logo">
                                <img class="logo-dark"
                                    srcset="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1702445692/octansidnByBoxity-white_bycg96.png, https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1702445692/octansidnByBoxity-white_bycg96.png 2x"
                                    src="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1702445692/octansidnByBoxity-white_bycg96.png"
                                    alt="Octans Logo">
                            </a>
                        </div><!-- #logo end -->

                        <div class="primary-menu-trigger" data-target=".primary-menu">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <div class="col-lg-5 d-lg-flex justify-content-end order-lg-last">
                            <div class="header-misc">
                                <a href="https://uat.octansidn.com/register" target="_blank"
                                    class="button text-dark bg-secondary-color h-bg-light rounded m-0"
                                    data-class="down-lg:button-small"><span>Get Started</span> <i
                                        class="bi-arrow-right ms-2 me-0 d-none d-lg-inline"></i></a>
                            </div>
                        </div>

                        <nav class="primary-menu col-lg-4 order-lg-1 on-click">

                            <ul class="menu-container">
                                <li class="menu-item"><a class="menu-link" href="/">
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="/about">
                                        <div>About</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Hero
  ============================================= -->
        <section id="slider" class="slider-element include-header dark py-lg-6 min-vh-100"
            style="background-image: linear-gradient(to bottom, var(--cnvs-themecolor) 85%, #FFF 85%);">
            <div class="position-absolute start-0 bottom-0 z-auto w-100 h-100 op-01"
                style="background: url('{!! asset('webpage/demos/saas/images/hero-bg.svg') !!}') no-repeat top left / contain;"></div>
            <div class="container text-center mw-md z-2 mt-lg-6 pt-2">
                <h4 class="fw-medium mt-5 mb-3 op-05">Ringan &middot; Powerful &middot; Responsif</h4>
                <h1 class="display-5 lh-base fw-normal text-white mb-5">Memudahkan Anda dalam mengelola
                    keuangan personal, organisasi, dan bisnis</h1>
            </div>
            <div class="position-relative mt-lg-5 clear"></div>
            <div class="container mt-5 position-relative">
                <img src="{!! asset('webpage/demos/saas/images/hero.png') !!}" alt="OctansIDN Asset" class="z-1 position-relative">
                <img src="{!! asset('webpage/demos/saas/images/hero-1.png') !!}" alt="OctansIDN Asset" class="position-absolute start-0 z-2"
                    style="width: 20%; top: 13%;" data-animate="zoomIn fast">
                <img src="{!! asset('webpage/demos/saas/images/hero-2.png') !!}" alt="OctansIDN Asset" class="position-absolute end-0 z-3"
                    style="width: 23%; bottom: 8%;" data-animate="zoomIn" data-delay="600">
                <div class="square square-xl bg-secondary-color position-absolute rounded-circle z-auto"
                    style="top: -7%; right: 4%; --cnvs-square-size: 12rem;"></div>
            </div>
        </section>

        <!-- Content
  ============================================= -->
        @yield('content')

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="bg-transparent border-0 ">
            <div class="container">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap py-3 py-lg-4">

                    <div class="row align-items-center">

                        <!-- Logo
      ============================================= -->
                        <div class="col-auto">
                            <a href="/"><img
                                    src="https://res.cloudinary.com/boxity-id/image/upload/w_1000/q_auto:best/f_auto/v1704264592/octansidn/octansidn_hzxvhu.png"
                                    alt="Octans Logo" class="mb-3" height="80"></a>
                        </div><!-- #logo end -->

                        <div class="col d-flex justify-content-end order-lg-last">
                            <a href="https://www.facebook.com/octansidn" target="_blank"
                                class="social-icon si-small bg-facebook text-light">
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://instagram.com/octansidn" target="_blank"
                                class="social-icon si-small bg-instagram text-light">
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://boxity.id/linkedin" target="_blank"
                                class="social-icon si-small bg-linkedin text-light">
                                <i class="fa-brands fa-linkedin"></i>
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </div>

                    </div>

                    <div class="line mt-3 mt-lg-0 border-width-2 border-color"></div>

                    <div class="row">

                        {{-- <div class="col-md-6">

                            <div class="widget widget_links">

                                <h4 class="mt-4 mt-md-0 fw-bold">Get to Know us</h4>

                                <ul>
                                    <li><a href="#">Documentation</a></li>
                                    <li><a href="#">Feedback</a></li>
                                </ul>

                            </div>

                        </div> --}}

                        <div class="col-md-6">

                            <div class="widget widget_links">

                                <h4 class="mt-4 mt-md-0 fw-bold">Contact</h4>

                                <ul>
                                    <li><a href="mailto:info@octansidn.com">info@octansidn.com</a></li>
                                    <li><a href="https://wa.me/6281262845980">+62 812 6284 5980</a></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div><!-- .footer-widgets-wrap end -->

            </div>
            <!-- Copyrights
   ============================================= -->
            <div id="copyrights" class="bg-white border-top op-07">

                <div class="container">

                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-6">
                            <?php $y = date('Y'); ?>
                            Copyrights &copy; {{ $y }} Octans IDN - All Rights Reserved by Boxity Central
                            Indonesia.
                        </div>

                        <div class="col-md-6 d-flex justify-content-md-end mt-4 mt-md-0">
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a
                                    href="#">Privacy Policy</a></div>
                        </div>
                    </div>

                </div>

            </div><!-- #copyrights end -->

        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{!! asset('webpage/js/plugins.min.js?' . rand(10000, 99999)) !!}"></script>
    <script src="{!! asset('webpage/js/functions.bundle.js?' . rand(10000, 99999)) !!}"></script>

</body>

</html>
