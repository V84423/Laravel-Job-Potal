<!doctype html>
<html>
    <head>
        <!-- Required meta tags -->
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/selectize.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/metismenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/simplebar.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dropzone.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

        
        <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/top-page.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/company.css')}}">
        
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader-area">
            <div class="spinner">
                <div class="inner">
                    <div class="disc"></div>
                    <div class="disc"></div>
                    <div class="disc"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Header Area -->
        <header class="main-header-area">
            <!-- Start Topbar Area -->
            <div class="topbar-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <ul class="topbar-social-list">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/" target="_blank"><i class="flaticon-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-7 col-md-6">
                            @if (!Session::has('id'))
                            <ul class="topbar-action">
                                <li>
                                    <a href="{{route('login')}}"><i class="flaticon-user"></i> ????????????</a>
                                </li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Topbar Area -->

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="main-responsive-nav">
                    <div class="container">
                        <div class="main-responsive-menu">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/images/logo-2.png')}}" class="white-logo" alt="logo">
                                    <img src="{{asset('assets/images/logo.png')}}" class="black-logo" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-navbar">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{route('home')}}">
                                <img src="{{asset('assets/images/logo-2.png')}}" class="white-logo" alt="logo">
                                <img src="{{asset('assets/images/logo.png')}}" class="black-logo" alt="logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
                                    <!-- <li class="nav-item">
                                        <a href="{{route('home')}}" class="nav-link">
                                            ??????????????????                                          
                                        </a>                                       
                                    </li> -->

<!--                                     <li class="nav-item">
                                        <a href="{{route('company')}}" class="nav-link">
                                            ??????????????????????????? 
                                        </a>

                                    </li> -->

                                    <li class="nav-item">
                                        <a href="{{route('talent')}}" class="nav-link">
                                            ????????????
                                        </a>

                                    </li>
        
<!--                                     <li class="nav-item">
                                        <a href="" class="nav-link">
                                            ?????????????????????
                                        </a>
                                    </li> -->

                                    <li class="nav-item">
                                        <a href="{{route('contract')}}" class="nav-link">
                                            ??????????????????
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('company_register')}}" class="nav-link">
                                            ????????????
                                        </a>
                                    </li>

                                </ul>



                                <div class="others-options d-flex align-items-center">
                                    @if (Session::has('id'))
                                        @if (Session::get('role')==0)           
                                            <div class="option-item">
                                                <div class="dropdown profile-nav-item">
                                                    <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="avatar me-3">
                                                            <!-- <img src="assets/images/dashboard/email.png" width="40" height="40" class="rounded-circle" alt="image"> -->
                                                            <i class="flaticon-email" style="font-size: xx-large;"></i>
                                                            <div class="notification" style="color:white;"></div>
                                                        </div>
                                                    </a>
                        
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-header d-flex flex-column align-items-center">
                                                            ???????????????????????????
                                                        </div>                        
                                                        <div class="dropdown-body messageItems" style="height: 500px;overflow: auto;">
                                                            <a class="dropdown-item" href="">
                                                                <img src="assets/images/dashboard/49ef9acc-c4d9-4b98-8a36-0856b8e0e586.png" class="rounded-circle">
                                                                <span style="display: inline-grid;">???????????????????????????????????? 12/25</span>
                                                            </a>
                                                            
                                                            <div class="sc-bBHxTw eECZSt" style="text-align: center;">
                                                                <img src="assets/images/dashboard/mailbox.svg" alt="empty-messages-icon" class="sc-iwjdpV dBJeLk">
                                                                <h5 class="Text__StyledP-sc-1o2039b-0 kyOGkR sc-cxpSdN jraVUO">
                                                                    <span class="text-wide">???????????????</span>
                                                                    <span class="text-narrow">???</span>
                                                                    <span class="text-wide">?????????????????????</span>
                                                                </h5><div class="sc-llYSUQ duLoNC">
                                                                    <p class="Text__StyledP-sc-1o2039b-0 kwUlhP sc-iJKOTD fxmbkz">
                                                                        <span class="text-wide">????????????</span>
                                                                        <span class="text-narrow">???</span>
                                                                        <span class="text-wide">??????????????????????????????</span>
                                                                        <span class="text-narrow">???</span>
                                                                        <span class="text-wide">?????????</span>
                                                                    </p>
                                                                    <p class="Text__StyledP-sc-1o2039b-0 kwUlhP sc-iJKOTD fxmbkz">
                                                                        <span class="text-wide">????????????????????????????????????????????????</span>
                                                                    </p>
                                                                </div>
                                                                <div class="sc-giYglK idQEpc">
                                                                    <div class="useTouchArea__TouchArea-sc-101jzj6-0 dnkFOM">
                                                                        <a height="28" font-size="12" elevation="0" shape="R100" class="sc-jRQBWg kKFnnv sc-ezbkAF biCAnO Button__StyledButton-sc-627uvk-0 Button__StyledSolidButton-sc-627uvk-1 iWDVha kXSlMg" href="">
                                                                            <p class="Text__StyledP-sc-1o2039b-0 inYcTR sc-bYoBSM kkODvX">
                                                                                <span class="text-wide">????????????</span>
                                                                                <span class="text-narrow">???</span>
                                                                                <span class="text-wide">????????????</span>
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                        
                                                        <div class="dropdown-footer">
                                                            <a class="dropdown-item" href="{{route('user_receiveList')}}">
                                                                <span style="display: inline-grid;">????????????????????????????????????</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="option-item">
                                                <div class="dropdown profile-nav-item">
                                                    <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="menu-profile">
                                                            <img src="assets/images/dashboard/avatar.png" class="rounded-circle" alt="image">
                                                            <span class="name">{{Session::get('firstname')}}</span>
                                                        </div>
                                                    </a>
                        
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-header d-flex flex-column">
                                                            <div class="figure mb-3">
                                                                <img src="assets/images/dashboard/avatar.png" class="rounded-circle" alt="image" style="float: left;margin-right: 50px;">
                                                                <span class="name">{{Session::get('firstname')}}</span>
                                                                <p class="mb-3 email">{{Session::get('email')}}</p>
                                                            </div>
                                                        </div>
                        
                                                        <div class="dropdown-body">
                                                            <ul class="profile-nav p-0 pt-3">
                                                                <li class="nav-item active">
                                                                    <a href="{{route('user_info')}}" class="nav-link" style="width: 100%;text-align: center;">
                                                                        <span class="edit-profile">???????????????????????????</span>
                                                                    </a>
                                                                </li>

                                                                <!-- <li class="nav-item">
                                                                    <a href="{{route('user_plan')}}" class="nav-link">
                                                                        <span>Premium?????????????????????</span>
                                                                    </a>
                                                                </li> -->

                                                                <li class="nav-item">
                                                                    <a href="{{route('user_info')}}" class="nav-link">
                                                                        <span>????????????</span>
                                                                    </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a href="{{route('user_footprint')}}" class="nav-link">
                                                                        <span>??????</span>
                                                                    </a>
                                                                </li>
                                                            
                                                                <li class="nav-item">
                                                                    <a href="{{route('logout')}}" class="nav-link">
                                                                        <span>???????????????</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                        
                                                        <div class="dropdown-footer">
                                                            <ul class="profile-nav">
                                                                
                                                            </ul>
                                                        </div>



                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <div class="option-item">
                                                <div class="dropdown profile-nav-item">
                                                    <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="avatar me-3">
                                                            <!-- <img src="assets/images/dashboard/email.png" width="40" height="40" class="rounded-circle" alt="image"> -->
                                                            <i class="flaticon-email" style="font-size: xx-large;"></i>
                                                            <div class="notification" style="color:white;"></div>
                                                        </div>
                                                    </a>
                        
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-header d-flex flex-column align-items-center">
                                                            ???????????????????????????
                                                        </div>                        
                                                        <div class="dropdown-body messageItems" style="height: 500px;overflow: auto;">
                                                            <a class="dropdown-item" href="">
                                                                <img src="assets/images/dashboard/49ef9acc-c4d9-4b98-8a36-0856b8e0e586.png" class="rounded-circle">
                                                                <span style="display: inline-grid;">???????????????????????????????????? 12/25</span>
                                                            </a>
                                                            
                                                            <div class="sc-bBHxTw eECZSt" style="text-align: center;">
                                                                <img src="assets/images/dashboard/mailbox.svg" alt="empty-messages-icon" class="sc-iwjdpV dBJeLk">
                                                                <h5 class="Text__StyledP-sc-1o2039b-0 kyOGkR sc-cxpSdN jraVUO">
                                                                    <span class="text-wide">???????????????</span>
                                                                    <span class="text-narrow">???</span>
                                                                    <span class="text-wide">?????????????????????</span>
                                                                </h5><div class="sc-llYSUQ duLoNC">
                                                                    <p class="Text__StyledP-sc-1o2039b-0 kwUlhP sc-iJKOTD fxmbkz">
                                                                        <span class="text-wide">????????????</span>
                                                                        <span class="text-narrow">???</span>
                                                                        <span class="text-wide">??????????????????????????????</span>
                                                                        <span class="text-narrow">???</span>
                                                                        <span class="text-wide">?????????</span>
                                                                    </p>
                                                                    <p class="Text__StyledP-sc-1o2039b-0 kwUlhP sc-iJKOTD fxmbkz">
                                                                        <span class="text-wide">????????????????????????????????????????????????</span>
                                                                    </p>
                                                                </div>
                                                                <div class="sc-giYglK idQEpc">
                                                                    <div class="useTouchArea__TouchArea-sc-101jzj6-0 dnkFOM">
                                                                        <a height="28" font-size="12" elevation="0" shape="R100" class="sc-jRQBWg kKFnnv sc-ezbkAF biCAnO Button__StyledButton-sc-627uvk-0 Button__StyledSolidButton-sc-627uvk-1 iWDVha kXSlMg" href="">
                                                                            <p class="Text__StyledP-sc-1o2039b-0 inYcTR sc-bYoBSM kkODvX">
                                                                                <span class="text-wide">????????????</span>
                                                                                <span class="text-narrow">???</span>
                                                                                <span class="text-wide">????????????</span>
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                        
                                                        <div class="dropdown-footer">
                                                            <a class="dropdown-item" href="{{route('company_receiveList')}}">
                                                                <span style="display: inline-grid;">????????????????????????????????????</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                            <div class="option-item">
                                                <div class="dropdown profile-nav-item">
                                                    <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="menu-profile">
                                                            <img src="assets/images/dashboard/avatar.png" class="rounded-circle" alt="image">
                                                            <span class="name">{{Session::get('firstname')}}</span>
                                                        </div>
                                                    </a>
                        
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-header d-flex flex-column">
                                                            <div class="figure mb-3">
                                                                <img src="assets/images/dashboard/avatar.png" class="rounded-circle" alt="image" style="float: left;margin-right: 50px;">
                                                                <span class="name">{{Session::get('firstname')}}</span>
                                                                <p class="mb-3 email">{{Session::get('email')}}</p>
                                                            </div>
                                                        </div>
                        
                                                        <div class="dropdown-body">
                                                            <ul class="profile-nav p-0 pt-3">
                                                                <li class="nav-item active">
                                                                    <a href="{{route('company_info')}}" class="nav-link" style="width: 100%;text-align: center;">
                                                                        <span class="edit-profile">???????????????????????????</span>
                                                                    </a>
                                                                </li>

                                                                <!-- <li class="nav-item">
                                                                    <a href="{{route('company_plan')}}" class="nav-link">
                                                                        <span>Premium?????????????????????</span>
                                                                    </a>
                                                                </li> -->

                                                                <li class="nav-item">
                                                                    <a href="{{route('company_info')}}" class="nav-link">
                                                                        <span>????????????</span>
                                                                    </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a href="{{route('company_footprint')}}" class="nav-link">
                                                                        <span>??????</span>
                                                                    </a>
                                                                </li>
                                                            
                                                                <li class="nav-item">
                                                                    <a href="{{route('logout')}}" class="nav-link">
                                                                        <span>???????????????</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                        
                                                        <div class="dropdown-footer">
                                                            <ul class="profile-nav">
                                                                
                                                            </ul>
                                                        </div>



                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                </div>








                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
        </header>
        <!-- End Header Area -->

        @yield('content')


        <!-- Start Footer Area -->
        <footer class="footer-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="widget-logo">
                                <a href="{{route('home')}}"><img src="{{asset('assets/images/logo-2.png')}}" alt="image"></a>
                            </div>
                            <p>IT???????????????????????????WEB???????????????????????????????????? | PROFESSIONAL??????????????????</p>

                            <ul class="widget-social-links">
                                <li><span>Follow:</span></li>

                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="flaticon-instagram"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget ps-5">                            
                            <h3></h3>
                            <ul class="quick-links">
                                <li><a href="{{route('search')}}">????????????</a></li>
                                <li><a href="{{route('service')}}">??????????????????</a></li>
                                <li><a href="{{route('client')}}">????????????</a></li>
                                <li><a href="{{route('contract')}}">??????????????????</a></li>                                
                                <li><a href="{{route('company')}}">??????????????????????????????</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3></h3>
                            <ul class="quick-links">
                                <li><a href="">????????????</a></li>
                                <li><a href="{{route('agreement')}}">????????????</a></li>
                                <li><a href="{{route('privacy-policy')}}">????????????????????????</a></li>
                            </ul>
                        </div>
                    </div>
                    <style type="text/css">
                        .single-footer-widget .widget-info li i{
                            background-color: transparent;
                        }
                    </style>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3></h3>
                            <ul class="widget-info">
                                <li>
                                    <i class="flaticon-calendar"></i>
                                    ???????????????10:00???18:30
                                </li>

                                <li>
                                    <i class="flaticon-location"></i>
                                    ???106-0044????????????????????????1-8-1
                                </li>

                                <li>
                                    <i class="flaticon-telephone"></i>
                                    03-4455-7243
                                </li>

                                <li>
                                    <i class="flaticon-email"></i>
                                    hello@eeza.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <p>
                        <i class="ri-copyright-line"></i> Copyright (C) Monstar Lab, Inc. All Rights Reserved
                    </p>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class="ri-arrow-up-line"></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Links of JS files -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script> 
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
        <script src="{{asset('assets/js/odometer.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/fancybox.min.js')}}"></script>
        <script src="{{asset('assets/js/selectize.min.js')}}"></script>
        <script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('assets/js/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/js/dropzone.min.js')}}"></script>
        <script src="{{asset('assets/js/sticky-sidebar.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
        <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script>
            var route_notification = "{{route('notification')}}";
            var path_storage = "{{asset('storage/')}}";
            var route_notification = "{{route('notification')}}";
            var route_project = "{{route('search_project')}}";
            var token = "{{ csrf_token() }}";
            var path_storage = "{{asset('storage/')}}";
            var path_svg = "{{asset('assets/images/dashboard/mailbox.svg')}}";
            var path_setting = "{{route('user_setting')}}";
            var base_url = "{{url('')}}";
            @if(Session::has('photo'))
            var path = "{{Session::get('photo')}}".replace('public',path_storage);
            $(".menu-profile").find('img').attr('src', path);
            $(".figure").find('img').attr('src', path);
            @endif
            
        </script>
        
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/company.js')}}"></script>

        @yield('scripts')
    </body>
</html>