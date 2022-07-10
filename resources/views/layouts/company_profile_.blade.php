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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
        <link rel="stylesheet" href="{{asset('assets/css/top-page.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
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
                                        <a href="{{route('talent')}}" class="nav-link">
                                            人材紹介
                                        </a>

                                    </li>


                                    <li class="nav-item">
                                        <a href="{{route('contract')}}" class="nav-link">
                                            ご契約の流れ
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{route('company_register')}}" class="nav-link">
                                            会社登録
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
                                                                <img src="{{asset('assets/images/dashboard/49ef9acc-c4d9-4b98-8a36-0856b8e0e586.png')}}" class="rounded-circle">
                                                                <span style="display: inline-grid;">株式会社マネーフォワード 12/25</span>
                                                            </a>
                                                            
                                                            <div class="sc-bBHxTw eECZSt" style="text-align: center;">
                                                                <img src="{{asset('assets/images/dashboard/mailbox.svg')}}" alt="empty-messages-icon" class="sc-iwjdpV dBJeLk">
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
                                                            <img src="{{asset('assets/images/dashboard/avatar.png')}}" class="rounded-circle" alt="image">
                                                            <span class="name">{{Session::get('firstname')}}</span>
                                                        </div>
                                                    </a>
                        
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-header d-flex flex-column">
                                                            <div class="figure mb-3">
                                                                <img src="{{asset('assets/images/dashboard/avatar.png')}}" class="rounded-circle" alt="image" style="float: left;margin-right: 50px;">
                                                                <span class="name">{{Session::get('firstname')}}</span>
                                                                <p class="mb-3 email">{{Session::get('email')}}</p>
                                                            </div>
                                                        </div>
                        
                                                        <div class="dropdown-body">
                                                            <ul class="profile-nav p-0 pt-3">
                                                                <li class="nav-item active">
                                                                    <a href="{{route('user_setting')}}" class="nav-link" style="width: 100%;text-align: center;">
                                                                        <span class="edit-profile">プロフィールを編集</span>
                                                                    </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a href="{{route('user_plan')}}" class="nav-link">
                                                                        <span>Premiumメンバーシップ</span>
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
                                                                <img src="{{asset('assets/images/dashboard/49ef9acc-c4d9-4b98-8a36-0856b8e0e586.png')}}" class="rounded-circle">
                                                                <span style="display: inline-grid;">株式会社マネーフォワード 12/25</span>
                                                            </a>
                                                            
                                                            <div class="sc-bBHxTw eECZSt" style="text-align: center;">
                                                                <img src="{{asset('assets/images/dashboard/mailbox.svg')}}" alt="empty-messages-icon" class="sc-iwjdpV dBJeLk">
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
                                                            <img src="{{asset('assets/images/dashboard/avatar.png')}}" class="rounded-circle" alt="image">
                                                            <span class="name">{{Session::get('firstname')}}</span>
                                                        </div>
                                                    </a>
                        
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-header d-flex flex-column">
                                                            <div class="figure mb-3">
                                                                <img src="{{asset('assets/images/dashboard/avatar.png')}}" class="rounded-circle" alt="image" style="float: left;margin-right: 50px;">
                                                                <span class="name">{{Session::get('firstname')}}</span>
                                                                <p class="mb-3 email">{{Session::get('email')}}</p>
                                                            </div>
                                                        </div>
                        
                                                        <div class="dropdown-body">
                                                            <ul class="profile-nav p-0 pt-3">
                                                                <li class="nav-item active">
                                                                    <a href="{{route('company_setting')}}" class="nav-link" style="width: 100%;text-align: center;">
                                                                        <span class="edit-profile">プロフィールを編集</span>
                                                                    </a>
                                                                </li>

                                                                <li class="nav-item">
                                                                    <a href="{{route('company_plan')}}" class="nav-link">
                                                                        <span>Premiumメンバーシップ</span>
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
                                    @else
                                    <div class="option-item">
                                        <a href="{{route('user_register')}}" class="default-btn"> 30秒無料登録 </a>
                                    </div>
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


        <!-- Start Page Banner Area -->
        @if(Session::has('bg_image'))
        <div class="page-banner-area item-bg-four" style="background-image: url({{asset('storage').str_replace('public','',Session::get('bg_image'))}})">
        @else
        <div class="page-banner-area item-bg-four">
        @endif
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <!-- <h2 style="font-size: 60px;">ご登録が完了しました</h2>
                            <p3 style="font-size: 40px; color: white;">案件のご紹介をスムーズにするために、スキル・ご経験のご登録もお願いします。</p3>                             -->
                            <div class="profile-pic-wrapper">
                                <div class="pic-holder">
                                    <!-- uploaded pic shown here -->
                                    <img id="profilePic" class="pic" src="{{asset('assets/images/dashboard/avatar.png')}}">

                                    <label for="newProfilePhoto" class="upload-file-block">
                                    <div class="text-center">
                                        <div class="mb-2">
                                        <i class="fa fa-camera fa-2x"></i>
                                        </div>
                                        <div class="text-uppercase">
                                            写真登録
                                        </div>
                                    </div>
                                    </label>
                                    <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="display: none;" />
                                </div>

                                </hr>
                                <p class="text-info text-center">Note: 最新の登録、あるいは編集写真が</br>会社ロゴに設定されます。</p>
                                </div>                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <div class="container" style="margin-top: 10vh;margin-bottom: 10vh;">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <ul class="nav nav-pills">
                            <li><a href="{{route('company_projects')}}"><i class="fa  fa-briefcase"></i> 案件管理</a></li>
                            <li><a href="{{route('company_receiveList')}}"><i class="fa fa-envelope"></i> 受信</a></li>
                            <li><a href="{{route('company_sentList')}}"><i class="fa fa-paper-plane"></i> 送信</a></li>
                            <li><a href="{{route('company_footprint')}}"><i class="fa fa-paw"></i> 足跡</a></li>
                            <li>
                                <a href="{{route('company_review')}}">
                                    <!-- <span class="badge badge-success pull-right">1</span> -->
                                    <i class="fa fa-paperclip"></i> 訪問
                                </a>
                            </li>
                            <li><a href="{{route('company_setting')}}"><i class="fa fa-cogs"></i> 設定</a></li>
                            <li><a href="{{route('company_plan')}}">無料プラン</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        @yield('content')

        @yield('scripts')

        </div>

        <!-- Start Footer Area -->
        <footer class="footer-area pt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="widget-logo">
                                <a href="{{route('home')}}"><img src="{{asset('assets/images/logo-2.png')}}" alt="image"></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consetet ur sadipscing elitr sed diam nonumy eirmod tempor invidunt labore.</p>

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
                            <h3>Company</h3>

                            <ul class="quick-links">
                                <li><a href="">About Eeza</a></li>
                                <li><a href="">Browse Jobs</a></li>
                                <li><a href="">Contact Us</a></li>
                                <li><a href="">Candidate Dashboard</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Resources</h3>

                            <ul class="quick-links">
                                <li><a href="">Blog</a></li>
                                <li><a href="">Post A Job</a></li>
                                <li><a href="">Candidates</a></li>
                                <li><a href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Quick Contact</h3>
                            
                            <ul class="widget-info">
                                <li>
                                    <i class="flaticon-a"></i>
                                    32, Wales Street, New York, USA
                                </li>

                                <li>
                                    <i class="flaticon-p"></i>
                                    <a href="tel:00901361246725">(009)01361246725</a>
                                </li>

                                <li>
                                    <i class="flaticon-e"></i>
                                    <a href="mailto:hello@eeza.com">hello@eeza.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <p>
                        <i class="ri-copyright-line"></i> 2021 Eeza. All Rights Reserved by 
                        <a href="https://envytheme.com/" target="_blank">EnvyTheme</a>
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
            var route_profile_image_upload = "{{route('profile_image_upload')}}";
            var token = "{{ csrf_token() }}";
            var path_storage = "{{asset('storage/')}}";
            var path_svg = "{{asset('assets/images/dashboard/mailbox.svg')}}";
            var path_setting = "{{route('user_setting')}}";
            var base_url = "{{url('')}}";

            @if(Session::has('photo'))
            var path = "{{Session::get('photo')}}".replace('public',path_storage);
            $(".menu-profile").find('img').attr('src', path);
            $(".figure").find('img').attr('src', path);
            $("#profilePic").attr('src', path);
            @endif
            
        </script>

        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/profile.js')}}"></script>
    

        <script>
            $('#pagination-demo').twbsPagination({
                totalPages: 16,
                visiblePages: 5,
                next: '次へ',
                prev: '前へ',
                first:'<<',
                last:'>>',
                onPageClick: function (event, page) {
                    //fetch content and render here
                }
            });

            $("[name='skills']").selectize({
                valueField: 'nom',
                labelField: 'nom',
                searchField: ['nom'],
                options: [{nom:"Android Java"},
                            {nom:"ASP.net"},
                            {nom:"C#"},
                            {nom:"C++"},
                            {nom:"Figma"},
                            {nom:"GO"},
                            {nom:"HTML / CSS"},
                            {nom:"JAVA"},
                            {nom:"JavaScript"},
                            {nom:"jQuery"},
                            {nom:"Kotlin"},
                            {nom:"MAYA"},
                            {nom:"Photoshop / Illustrator"},
                            {nom:"PHP"},
                            {nom:"Python"},
                            {nom:"react"},
                            {nom:"Ruby"},
                            {nom:"Python"},
                            {nom:"Ruby"},
                            {nom:"Scala"},
                            {nom:"Swift / iOS"},
                            {nom:"TypeScript"},
                            {nom:"Unity"},
                            {nom:"VB.NET"},
                            {nom:"Vue.js"},
                        ],
                create: false,
                preload:true,
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

            $("[name='positions']").selectize({
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
                preload:true,
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


            $("[name='areas']").selectize({
                valueField: 'nom',
                labelField: 'nom',
                searchField: ['nom'],
                options: [{nom:"その他"},
                            {nom:"エリア"},
                            {nom:"フルリモート"},
                            {nom:"三軒茶屋・世田谷・池尻大橋"},
                            {nom:"上野・日暮里・御徒町"},
                            {nom:"下北沢・笹塚・明大前"},
                            {nom:"五反田・大崎"},
                            {nom:"六本木・麻布・赤坂"},
                            {nom:"品川・三田・浜松町"},
                            {nom:"恵比寿・中目黒・目黒"},
                            {nom:"新宿・代々木・大久保"},
                            {nom:"東京・日本橋・大手町"},
                            {nom:"池袋・高田馬場・目白"},
                            {nom:"渋谷・原宿・代官山"},
                            {nom:"神保町・水道橋・九段下"},
                            {nom:"神楽坂・飯田橋・四谷"},
                            {nom:"秋葉原・神田・御茶ノ水"},
                            {nom:"蒲田"},
                            {nom:"銀座・京橋・有楽町"},
                            {nom:"高円寺・荻窪・中野・阿佐ヶ谷"},
                        ],
                create: false,
                preload:true,
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


        </script>

    </body>
</html>