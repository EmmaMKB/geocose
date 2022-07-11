<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Geocose</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('css/color-2.css') }}">
</head>

<body>
    <div class="boxed_wrapper">
        <header class="header">
            <div class="container">
                <div class="logo pull-left">
                    <a href="index.html">
                        {{-- <img src="{{ asset('img/theme/logo2.png') }}" alt="Logo Geocose" id="theme-logo" /> --}}
                        <h1>Geocose</h1>
                    </a>
                </div>
                <div class="header-right pull-right">
                    {{-- <div class="single-header-right">
                        <div class="icon-box">
                            <i class="flaticon-placeholder"></i>
                        </div>
                        <div class="content-box">
                            <b>20c Factory Avenue,</b>
                            <p>New York, NY 10218 USA.</p>
                        </div>
                    </div>
                    <div class="single-header-right">
                        <div class="icon-box">
                            <i class="flaticon-technology"></i>
                        </div>
                        <div class="content-box">
                            <b>+(23) 890 60 3919</b>
                            <p>Troll Free Number</p>
                        </div>
                    </div>
                    <div class="single-header-right">
                        <a href="#" data-toggle="tooltip" data-placement="top" title="Download" class="icon-btn"><i class="flaticon-cloud"></i></a>
                        <button class="thm-btn"><i class="fa fa-share"></i> get a Quote</button>
                    </div> --}}
                </div>
            </div>
        </header>
        <section class="mainmenu-wrapper stricky">
            <div class="container">
                <nav class="mainmenu-holder pull-left">
                    <div class="nav-header">
                        <ul class="navigation">
                            <li class="active">
                                <a href="{{ route('home') }}"><i class="flaticon-icon-2144"></i> Accueil</a>
                            </li>
                            <li><a href="#">Articles</a></li>
                        </ul>
                    </div>
                    <div class="nav-footer hidden-lg">
                        {{-- <ul>
                            <li>
                                <button class="menu-expander"><i class="fa fa-list-ul"></i></button>
                            </li>
                        </ul> --}}
                    </div>
                </nav>
                <div class="search-box pull-right">
                    <form action="#" class="clearfix">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </section>
        @yield('content')
        <footer class="footer">
            <div class="container">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget about-widget">
                        <a href="index.html">
                            <h1>Geocose</h1>
                            {{-- <img src="img/theme/footer-logo2.png" alt="Awesome Image" id="fLogo" /> --}}
                        </a>
                        <p>Geoscience Congo Services est un bureau d’études en Environnement et Géosciences.     Geoscience Congo Services propose: Les prestations intellectuelles d’ étude, de conseil et d’ assistance technique, d’ expertise, de recherche documentaire </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget link-widget">
                        <div class="title">
                            <h2>Liens Utiles</h2>
                        </div>
                        <ul class="links">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                        </ul>
                        <ul class="links">
                            <li><a href="{{ route('home') }}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget recent-news">
                        <div class="title">
                            <h2>Derniers articles</h2>
                        </div>
                        <ul>
                            <li>
                                <div class="img-box dtc">
                                    <img src="#" alt="Awesome Image" />
                                </div>
                                <div class="content-box dtc">
                                    <a href="#"><h4>Decouvrez Geocose</h4></a>
                                    <a class="date" href="#"><i class="fa fa-clock-o"></i> March 06, 2016</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget contact-widget">
                        <div class="title">
                            <h2>Contactez-nous</h2>
                        </div>
                        <ul>
                            <li>
                                <div class="icon-box dtc">
                                    <i class="flaticon-placeholder"></i>
                                </div>
                                <div class="content dtc">
                                    <h3>20 Lorem, <br>Lubumbashi.</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box dtc">
                                    <i class="flaticon-technology"></i>
                                </div>
                                <div class="content dtc">
                                    <h3><a href="tel:+243999999999"></a>+243 999 999 999</h3>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box dtc">
                                    <i class="flaticon-interface"></i>
                                </div>
                                <div class="content dtc">
                                    <h3><a href="mailto:contact@geocose.com">contact@geocose.com</a></h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <section class="bottom-footer">
            <div class="container">
                <div class="left-text pull-left">
                    <p>© 2022 Geocose</p>
                </div>
            </div>
        </section>
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".top-bar"><span class="icon flaticon-arrows"></span></div>
        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target=".top-bar"><span class="icon flaticon-arrows"></span></div>
        <!-- jQuery js -->
        <script src="{{ asset('assets/jquery/jquery-1.11.3.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- jQuery ui js -->
        <script src="{{ asset('assets/jquery-ui-1.11.4/jquery-ui.js') }}"></script>
        <!-- owl carousel js -->
        <script src="{{ asset('assets/owl.carousel-2/owl.carousel.min.js') }}"></script>
        <!-- jQuery validation -->
        <script src="{{ asset('assets/jquery-validation/dist/jquery.validate.min.js') }}"></script>
        <!-- gmap.js helper -->
        <script src="https://maps.googleapis.com/maps/api/js?sensor=true&v=3"></script>
        <!-- gmap.js -->
        <script src="{{ asset('assets/gmap.js') }}"></script>
        <!-- mixit up -->
        <script src="{{ asset('assets/jquery.mixitup.min.js') }}"></script>
        <script src="{{ asset('assets/jquery.fitvids.js') }}"></script>
        <!-- revolution slider js -->
        <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <!-- fancy box -->
        <script src="{{ asset('assets/fancyapps-fancyBox/source/jquery.fancybox.pack.js') }}"></script>
        <script src="{{ asset('assets/Polyglot-Language-Switcher-master/js/jquery.polyglot.language.switcher.js') }}"></script>
        <script src="{{ asset('assets/nouislider/nouislider.js') }}"></script>
        <script src="{{ asset('assets/bootstrap-touch-spin/jquery.bootstrap-touchspin.js') }}"></script>
        <script src="{{ asset('assets/jquery-appear/jquery.appear.js') }}"></script>
        <script src="{{ asset('assets/jquery.countTo.js') }}"></script>
        <!-- Style-switcher  -->
        <script type="text/javascript" src="{{ asset('assets/jQuery.style.switcher.min.js') }}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js"></script>
        <!-- theme custom js  -->
        <script id="map-script" src="{{ asset('js/default-map.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </div>
</body>

</html>
