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
        <link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}">
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

        <style>



            #overlay1{ 
              position: fixed;
              top: 0;
              z-index: 100;
              width: 100%;
              height:100%;
              display: none;
              background: rgba(0,0,0,0.6);
            }
            .cv-spinner1 {
              height: 100%;
              display: flex;
              justify-content: center;
              align-items: center;  
            }
            .spinner1 {
              width: 40px;
              height: 40px;
              border: 4px #ddd solid;
              border-top: 4px #2e93e6 solid;
              border-radius: 50%;
              animation: sp-anime 0.8s infinite linear;
            }
            @keyframes sp-anime {
              100% { 
                transform: rotate(360deg); 
              }
            }
            .is-hide{
              display:none;
            }



            .owl-carousel.owl-refresh .owl-item {
                visibility: visible !important;
            }

            .main-banner-area-with-bg-image {
                padding-top: 100px;
            }

            .wrapper{
                margin: 60px auto;
                text-align: center;
            }
            h1{
              margin-bottom: 1.25em;
            }
            #pagination-demo{
                display: inline-block;
                margin-bottom: 1.75em;
            }
            #pagination-demo li{
                display: inline-block;
            }

            .page-content{
                background: #eee;
                display: inline-block;
                padding: 10px;
                width: 100%;
                max-width: 660px;
            }

            .pagination {
                border-top: 0px solid #e3e3e3 !important;
                border-bottom: 0px solid #e3e3e3 !important;
            }

            .pagination .next, .pagination .prev, .pagination .first, .pagination .last {
                position: unset !important;
            }

            .order-details .title {                
                font-size: 12px !important;
                font-weight: lighter !important;
            }

            .required {
                border: 1px solid #D7DBDF;
            }

            .item{
                color: #000000;
            }

            .selectize-control.multi .selectize-input.has-items {
                 padding: 10px; 
            }


        </style>
    </head>

    <body>


        <div id="overlay1">
          <div class="cv-spinner1">
            <span class="spinner1"></span>
          </div>
        </div>

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
                                            トップページ                                          
                                        </a>
                                       
                                    </li> -->

                                    <li class="nav-item">
                                        <a href="{{route('search')}}" class="nav-link">
                                            案件検索 
                                        </a>

                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('client')}}" class="nav-link">
                                            法人検索
                                        </a>

                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('service')}}" class="nav-link">
                                            サービス紹介
                                        </a>

                                    </li>
        
                                    <!-- <li class="nav-item">
                                        <a href="" class="nav-link">
                                            役立ち情報
                                        </a>
                                    </li> -->

                                    <li class="nav-item">
                                        <a href="{{route('company')}}" class="nav-link">
                                            人材をお探しの企業様
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
                                                            企業とのメッセージ
                                                        </div>                        
                                                        <div class="dropdown-body messageItems" style="height: 500px;overflow: auto;">
                                                            <a class="dropdown-item" href="">
                                                                <img src="assets/images/dashboard/49ef9acc-c4d9-4b98-8a36-0856b8e0e586.png" class="rounded-circle">
                                                                <span style="display: inline-grid;">株式会社マネーフォワード 12/25</span>
                                                            </a>
                                                            
                                                            <div class="sc-bBHxTw eECZSt" style="text-align: center;">
                                                                <img src="assets/images/dashboard/mailbox.svg" alt="empty-messages-icon" class="sc-iwjdpV dBJeLk">
                                                                <h5 class="Text__StyledP-sc-1o2039b-0 kyOGkR sc-cxpSdN jraVUO">
                                                                    <span class="text-wide">まだメッセ</span>
                                                                    <span class="text-narrow">ー</span>
                                                                    <span class="text-wide">ジがありません</span>
                                                                </h5><div class="sc-llYSUQ duLoNC">
                                                                    <p class="Text__StyledP-sc-1o2039b-0 kwUlhP sc-iJKOTD fxmbkz">
                                                                        <span class="text-wide">プロフィ</span>
                                                                        <span class="text-narrow">ー</span>
                                                                        <span class="text-wide">ルで意欲や活躍をアピ</span>
                                                                        <span class="text-narrow">ー</span>
                                                                        <span class="text-wide">ルして</span>
                                                                    </p>
                                                                    <p class="Text__StyledP-sc-1o2039b-0 kwUlhP sc-iJKOTD fxmbkz">
                                                                        <span class="text-wide">募集の返信やスカウトを受け取ろう</span>
                                                                    </p>
                                                                </div>
                                                                <div class="sc-giYglK idQEpc">
                                                                    <div class="useTouchArea__TouchArea-sc-101jzj6-0 dnkFOM">
                                                                        <a height="28" font-size="12" elevation="0" shape="R100" class="sc-jRQBWg kKFnnv sc-ezbkAF biCAnO Button__StyledButton-sc-627uvk-0 Button__StyledSolidButton-sc-627uvk-1 iWDVha kXSlMg" href="">
                                                                            <p class="Text__StyledP-sc-1o2039b-0 inYcTR sc-bYoBSM kkODvX">
                                                                                <span class="text-wide">プロフィ</span>
                                                                                <span class="text-narrow">ー</span>
                                                                                <span class="text-wide">ルを編集</span>
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                        
                                                        <div class="dropdown-footer">
                                                            <a class="dropdown-item" href="{{route('user_receiveList')}}">
                                                                <span style="display: inline-grid;">すべてのメッセージを表示</span>
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
                                                                        <span class="edit-profile">プロフィールを編集</span>
                                                                    </a>
                                                                </li>

                                                                <!-- <li class="nav-item">
                                                                    <a href="{{route('user_plan')}}" class="nav-link">
                                                                        <span>Premiumメンバーシップ</span>
                                                                    </a>
                                                                </li> -->

                                                                <li class="nav-item">
                                                                    <a href="{{route('user_info')}}" class="nav-link">
                                                                        <span>登録確認</span>
                                                                    </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a href="{{route('user_footprint')}}" class="nav-link">
                                                                        <span>足跡</span>
                                                                    </a>
                                                                </li>
                                                            
                                                                <li class="nav-item">
                                                                    <a href="{{route('logout')}}" class="nav-link">
                                                                        <span>ログアウト</span>
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
                                                            企業とのメッセージ
                                                        </div>                        
                                                        <div class="dropdown-body messageItems" style="height: 500px;overflow: auto;">
                                                            <a class="dropdown-item" href="">
                                                                <img src="assets/images/dashboard/49ef9acc-c4d9-4b98-8a36-0856b8e0e586.png" class="rounded-circle">
                                                                <span style="display: inline-grid;">株式会社マネーフォワード 12/25</span>
                                                            </a>
                                                            
                                                            <div class="sc-bBHxTw eECZSt" style="text-align: center;">
                                                                <img src="assets/images/dashboard/mailbox.svg" alt="empty-messages-icon" class="sc-iwjdpV dBJeLk">
                                                                <h5 class="Text__StyledP-sc-1o2039b-0 kyOGkR sc-cxpSdN jraVUO">
                                                                    <span class="text-wide">まだメッセ</span>
                                                                    <span class="text-narrow">ー</span>
                                                                    <span class="text-wide">ジがありません</span>
                                                                </h5><div class="sc-llYSUQ duLoNC">
                                                                    <p class="Text__StyledP-sc-1o2039b-0 kwUlhP sc-iJKOTD fxmbkz">
                                                                        <span class="text-wide">プロフィ</span>
                                                                        <span class="text-narrow">ー</span>
                                                                        <span class="text-wide">ルで意欲や活躍をアピ</span>
                                                                        <span class="text-narrow">ー</span>
                                                                        <span class="text-wide">ルして</span>
                                                                    </p>
                                                                    <p class="Text__StyledP-sc-1o2039b-0 kwUlhP sc-iJKOTD fxmbkz">
                                                                        <span class="text-wide">募集の返信やスカウトを受け取ろう</span>
                                                                    </p>
                                                                </div>
                                                                <div class="sc-giYglK idQEpc">
                                                                    <div class="useTouchArea__TouchArea-sc-101jzj6-0 dnkFOM">
                                                                        <a height="28" font-size="12" elevation="0" shape="R100" class="sc-jRQBWg kKFnnv sc-ezbkAF biCAnO Button__StyledButton-sc-627uvk-0 Button__StyledSolidButton-sc-627uvk-1 iWDVha kXSlMg" href="">
                                                                            <p class="Text__StyledP-sc-1o2039b-0 inYcTR sc-bYoBSM kkODvX">
                                                                                <span class="text-wide">プロフィ</span>
                                                                                <span class="text-narrow">ー</span>
                                                                                <span class="text-wide">ルを編集</span>
                                                                            </p>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                        
                                                        <div class="dropdown-footer">
                                                            <a class="dropdown-item" href="{{route('company_receiveList')}}">
                                                                <span style="display: inline-grid;">すべてのメッセージを表示</span>
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
                                                                        <span class="edit-profile">プロフィールを編集</span>
                                                                    </a>
                                                                </li>

                                                                <!-- <li class="nav-item">
                                                                    <a href="{{route('company_plan')}}" class="nav-link">
                                                                        <span>Premiumメンバーシップ</span>
                                                                    </a>
                                                                </li> -->

                                                                <li class="nav-item">
                                                                    <a href="{{route('company_info')}}" class="nav-link">
                                                                        <span>登録確認</span>
                                                                    </a>
                                                                </li>
                                                                
                                                                <li class="nav-item">
                                                                    <a href="{{route('company_footprint')}}" class="nav-link">
                                                                        <span>足跡</span>
                                                                    </a>
                                                                </li>
                                                            
                                                                <li class="nav-item">
                                                                    <a href="{{route('logout')}}" class="nav-link">
                                                                        <span>ログアウト</span>
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

        @yield('scripts')


        <!-- Start Footer Area -->
        <footer class="footer-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="widget-logo">
                                <a href="{{route('home')}}"><img src="{{asset('assets/images/logo-2.png')}}" alt="image"></a>
                            </div>
                            <p>ITフリーエンジニア・WEBデザイナーの案件仕事紹介 | PROFESSIONALフリーランス</p>

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
                                <li><a href="{{route('search')}}">案件検索</a></li>
                                <li><a href="{{route('service')}}">サービス紹介</a></li>
                                <li><a href="{{route('client')}}">法人検索</a></li>
                                <li><a href="{{route('contract')}}">ご契約の流れ</a></li>                                
                                <li><a href="{{route('company')}}">人材をお探しの企業様</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3></h3>
                            <ul class="quick-links">
                                <li><a href="">運営会社</a></li>
                                <li><a href="{{route('agreement')}}">利用規約</a></li>
                                <li><a href="{{route('privacy-policy')}}">個人情報保護方針</a></li>
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
                                    営業時間　10:00〜18:30
                                </li>

                                <li>
                                    <i class="flaticon-location"></i>
                                    〒106-0044東京都港区東麻布1-8-1
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.4.1/jquery.twbsPagination.min.js"></script>
        
        <script>
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

        <script type="text/javascript">
  
          $(function(){               

                

                $("#itemQuery").selectize({
                    valueField: 'nom',
                    labelField: 'nom',
                    searchField: ['nom'],
                    options: [{nom:"3Dデザイナー"},
                                {nom:"Goエンジニア"},
                                {nom:"PM"},
                                {nom:"QAエンジニア/テストエンジニア"},
                                {nom:"SE（システムエンジニア）"},
                                {nom:"UIデザイナー"},
                                {nom:"UXデザイナー"},
                                {nom:"WEBディレクター・PM"},
                                {nom:"WEBデザイナー"},
                                {nom:"アーキテクチャエンジニア"},
                                {nom:"インフラエンジニア"},
                                {nom:"クリエイター（ゲーム・動画）"},
                                {nom:"ゲームエンジニア"},
                                {nom:"ゲームプランナー・ディレクター"},
                                {nom:"サーバーエンジニア"},
                                {nom:"スマホアプリエンジニア"},
                                {nom:"データエンジニア"},
                                {nom:"フロントエンジニア"},
                                {nom:"ヘルプデスク・その他"},
                                {nom:"マークアップ・コーダー"},
                                {nom:"情報システム"},
                            ],
                    create: false,
                    preload:false,
                    render: {
                        option: function(item, escape) {
                        return '<div>' +
                        '<span class="title">' +
                        '<span class="name">' + escape(item.nom)+'</span>' +
                        '</span>' +
                        '</div>';
                        }
                    },
                    
                });

                var keyword='', skill='', estimate='';
                function searchProject(page){

                    $("#overlay1").fadeIn(300);
                    $.post(route_project,{
                        "_token": token,
                        keyword:keyword,
                        skill:skill,
                        estimate:estimate,
                        page:page
                    }, function(response){

                        var res = response['projects'];
                        var getJobs = response['getJobs'][0]['count(*)'];

                        $(".projects-index-list").empty();
                        var i =0;
                        for(i in res){
                            
                            var status = res[i]['status']==1?'募集中':'募集終了';

                            $(".projects-index-list").append('<article class="projects-index-single">'+
                                '<div class="project-index-single-outer">'+
                                    '<div class="project-index-single-inner">'+
                                        '<div class="project-cover-wrapper">'+
                                            '<div class="cover-image">'+
                                                '<img width="560" height="228" class="lazy" src="'+
                                                    path_storage+'/'+res[i]['company_bg'].replace('public','')+
                                                '" style="">'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="project-detail">'+
                                            '<div class="project-tags">'+
                                                '<div class="project-tag small normal" style="color: #b36704; border-color: #b36704;">'+
                                                    res[i]['positions']+
                                                '</div>'+
                                                '<div class="project-tag small inverted" style="background-color: #b36704;">'+
                                                    status+'</div>'+
                                                '<div class="entry-count">'+
                                                    
                                                    '<div class="entry-text">'+
                                                        '募集⼈数'+
                                                    '</div>'+
                                                    '<div class="count">'+
                                                        res[i]['mates']+
                                                    '</div>'+

                                                '</div>'+
                                            '</div>'+

                                            '<h1 class="project-title">'+
                                                '<a href="'+base_url+'/details/'+res[i]['id']+'">'+res[i]['title']+'</a>'+
                                            '</h1>'+
                                            '<p class="project-excerpt">'+
                                                res[i]['address']+
                                            '</p>'+
                                            '<p class="project-excerpt">'+
                                                '<span> 単⾦幅 : '+res[i]['estimate']+' 万円</span>'+
                                            '</p>'+
                                            '<p class="project-excerpt">'+
                                                '<span> 開発期間 : '+res[i]['during']+' (更新の可能性あり)</span>'+
                                            '</p>'+

                                        '</div>'+
                                    '</div>'+
                                    '<div class="project-bottom">'+
                                        '<div class="company-thumbnail">'+
                                            '<a href="'+base_url+'/details/company/'+res[i]['created_by_id']+'">'+
                                                '<img  width="40" height="40" class="lazy" src="'+
                                                path_storage+'/'+res[i]['user_photo'].replace('public','')+'">'+
                                            '</a>'+
                                        '</div>'+
                                        '<div class="company-name">'+
                                            '<h3>'+
                                                '<a href="'+base_url+'/details/company/'+res[i]['created_by_id']+'">'+res[i]['user_company']+res[i]['user_name']+'</a>'+
                                            '</h3>'+
                                        '</div>'+
                                        '<div class="actions-and-metas">'+
                                            '<div class="wt-ui-support-button">'+
                                                '<a class="project-support-link">'+
                                                    '<i class="wt-icon wt-icon-support"></i>'+
                                                    '<span class="wt-support-count">32</span>'+
                                                '</a>'+
                                            '</div>'+
                                            '<div class="bookmark-button">'+
                                                '<form class="button_to" method="post" action="" data-remote="true">'+
                                                    '<button class="bookmark-submit-button" type="submit">'+
                                                        '<i class="wt-icon wt-icon-bookmark-o-2"></i>'+
                                                    '</button>'+
                                                '</form>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</article>');
                        }

                        $(".current").text(getJobs+'件');

                        console.log(page);

                        totalPages = getJobs%5 == 0? getJobs/5 : getJobs/5 + 1;

                        if(totalPages == 0) totalPages = 1;

                        $('#pagination-demo').twbsPagination('destroy');
                        $('#pagination-demo').twbsPagination({
                            initiateStartPageClick: false,
                            totalPages: totalPages,
                            visiblePages: 5,
                            startPage:page,
                            next: '次へ',
                            prev: '前へ',
                            first:'<<',
                            last:'>>',
                            onPageClick: function (event, pg) {
                                
                                searchProject(pg);
                            }                     
                        });


                        $("#overlay1").fadeOut(300);

                    });                    
                    
                }


                $(".keyword").change(function(){

                    keyword = $(this).val();
                    searchProject(1);
                });

                $(".skill").change(function(){

                    skill = $(this).val();
                    searchProject(1);
                });

                $(".estimate").change(function(){

                    estimate = $(this).val();
                    searchProject(1);
                });

                $('#pagination-demo').on('.li a','click', function (e) {
                    alert($(this).text());
                })


                searchProject(1);             


                var ev = new $.Event('classadded'),
                orig = $.fn.addClass;
                $.fn.removeClass = function() {

                    var item = $(this).attr('class');
                    if(item != undefined){
                         console.log(item);
                         if(item.search('page-item') != -1) return;
                         if(item.search('owl') != -1) return;
                         if(item.search('review') != -1) return;
                     }

                    $(this).trigger(ev, arguments);
                    return orig.apply(this, arguments);
                  }


                $(".navbar-area").addClass("is-sticky");  
                
                $('.navbar-area').on('classadded', function(ev, newClasses) {
                  
                    // alert();
                });



          });


        </script>
        
    </body>
</html>