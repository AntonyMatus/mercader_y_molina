<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Mercader & Molina | @yield('title')</title>
    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{asset('assets/images/icon/favicon.png')}}">
    <!--== Bootstrap v5.2.2 min css ==-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--== Font Awesome 6.2.0 min css ==-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--== owl-carousel v2.3.4 min css ==-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--== owl-theme-default v2.3.4 min css ==-->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!--== aos animate on scroll library v3.0.0-beta.6 css ==-->
    <link rel="stylesheet" href="assets/css/aos.css">
    <!--== magnific popup v1.1.0 css ==-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!--== others css link add area here ==-->
    <!--== ................ ==-->

    <!--== typography css ==-->
    <link rel="stylesheet" href="assets/css/typography.css">
    <!--== custom css ==-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--== responsive css ==-->
    <link rel="stylesheet" href="assets/css/responsive.css">
    @yield('styles')
</head>
<body>
    <!--== preloader area here ==-->
    <div class="preloder">
        <div class="pre-loading"></div>
    </div>
    <!--== preloader area ends here ==-->


    <!--== header area here ==-->
    <header class="header">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="header_wrapper">
                <!-- logo container  -->
                <div class="logo_container">
                <a href="{{ route('home') }}">
                    <img src="assets/images/logo/mercader_logo_nav.png" alt="Mercader">
                </a>
                </div>
                <!-- header container  -->
                <div class="header_container">
                <!-- closing bar  -->
                <div class="closing_container">
                    <div class="content">
                    <span><i class="fa-solid fa-xmark"></i></span>
                    </div>
                </div>
                <!-- nav content -->
                <div class="header_nav">
                    <ul class="navigation">
                    <li><a href="#about">Introducción</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#faqs">Preguntas Frecuentas</a></li>
                    <li><a href=" {{ route('blog')}} ">Blog</a></li>
                    <li><a href="#contact">Contacto</a>
                    </li>
                    </ul>
                </div>
                <!-- button content -->
                <ul class="header_button">
                    <li>
                    <button type="button" class="clientButton buttonH1">Contacto</button>
                    </li>
                    
                </ul>
                </div>
                <!-- Mobile menu bar container  -->
                <div class="bar_container">
                <div class="content">
                    <span><i class="fa-solid fa-bars"></i></span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>

    @yield('content')

    <!--== footer area here ==-->
    <footer class="footer">
        <div class="footer_wrapper">
        <div class="container">
            <div class="row">
            <div class="col-12">
                <div class="footer_container">
                <div class="footer_items">
                    <div class="footer_item w-50">
                    <div class="footer_widget d-grid justify-items-end">
                        <img src="assets/images/logo/logo_footer.png" alt="Logo" width="240px">
                        </div>
                    </div>
                    
                    
                    <div class="footer_item">
                    <div class="footer_widget">
                        <h5 class="fw_title text-uppercase">INFORMACIÓN DE CONTACTO</h5>
                        <ul class="fw_lists">
                        <li class="fw_list mb-1"><i class="fa fa-location-dot text-client" aria-hidden="true"></i> 
                            Calle 13 #43 x 12. Colonia Felipe Carrillo Puerto  <br>
                            Mérida, Yucatán, México
                        </li>
                        <li class="fw_list mb-1"><i class="fa fa-envelope text-client" aria-hidden="true"></i> 
                            informacion@mercadermolina.com</li>
                        <li class="fw_list"><i class="fa fa-phone text-client" aria-hidden="true"></i> +52 999 437 6666</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
                <div class="copyright_container">
                <div class="copyright_link">
                    <ul class="social">
                    <li><a href="#!"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#!"><i class="fa-brands fa-github"></i></a></li>
                    </ul>
                    <ul class="copyright_menu">
                    <li><a href="#!">Aviso de Privacidad.</a></li>
                    <li><a href="#!">Términos y condiciones</a></li>
                    </ul>
                </div>
                <div class="copyright_text">
                    <p>© Copyright 2023, Desarrollado por  <a href="https://www.buho-solutions.com/">Búho Solutions</a> </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </footer>
    <!--== footer area ends here ==-->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('assets/js/jQuery-v3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/utils.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('scripts')
</body>
</html>
