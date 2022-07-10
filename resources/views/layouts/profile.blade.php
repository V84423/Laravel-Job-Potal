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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">

        <style>
            .main-dashboard-content .main-navbar {
                height: 95px;
                box-shadow: 0px 0px 0px rgb(0 0 0 / 0%);
            }

            .main-dashboard-content{
                background: white;
            }

            .main-dashboard-content .navbar-area {
                box-shadow: 0 0 3px 0 rgb(0 0 0 / 12%);

            }

            .dropdown-bs-toggle::before {
                content: "" !important;
            }


        </style>
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

        <div>
        <!-- Start Sidemenu Area -->
        <div class="sidemenu-area">
            <div class="sidemenu-header">
                <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
                    <img src="{{asset('assets/images/logo.png')}}" alt="image">
                </a>

                <div class="responsive-burger-menu d-block d-lg-none">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>
            </div>

            <div class="sidemenu-body">
                <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>

                    <li class="nav-item">
                        <a href="{{route('user_info')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-search fa-lg"></i></span>
                            <span class="menu-title">登録確認</span>
                        </a>
                    </li>
              
                    <li class="nav-item">
                        <a href="{{route('user_email')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-at fa-lg"></i></span>
                            <span class="menu-title">メールアドレス変更</span>
                        </a>
                    </li>    

                    <li class="nav-item">
                        <a href="{{route('user_password')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-key fa-lg"></i></span>
                            <span class="menu-title">パスワード変更</span>
                        </a>
                    </li>

                    

                    <li class="nav-item">
                        <a href="{{route('user_receiveList')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-envelope"></i></span>
                            <span class="menu-title"> 受信</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('user_sentList')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-paper-plane"></i></span>
                            <span class="menu-title"> 送信</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('user_footprint')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-paw"></i></span>
                            <span class="menu-title"> 足跡</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('user_review')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-paperclip"></i></span>
                            <span class="menu-title"> 訪問</span>
                        </a>
                    </li>









                    <!-- <li class="nav-item">
                        <a href="{{route('user_plan')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-tachometer fa-lg"></i></span>
                            <span class="menu-title">利用プラン変更</span>
                        </a>
                    </li> -->

                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-sign-out fa-lg"></i></span>
                            <span class="menu-title">ログアウト</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('user_close')}}" class="nav-link">
                            <span class="icon"><i class="fa fa-trash fa-lg"></i></span>
                            <span class="menu-title">退会</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <!-- End Sidemenu Area -->        



        <!-- Start Main Dashboard Content Wrapper Area -->
        <div class="main-dashboard-content d-flex flex-column">

            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="main-responsive-nav">
                    <div class="main-responsive-menu">
                        <div class="responsive-burger-menu d-lg-none d-block">
                            <span class="top-bar"></span>
                            <span class="middle-bar"></span>
                            <span class="bottom-bar"></span>
                        </div>
                    </div>
                </div>

                <div class="main-navbar">
                    <nav class="navbar navbar-expand-md navbar-light">
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

                            <div class="others-options d-flex align-items-center pc-show">
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
            <!-- End Navbar Area -->

            @yield('content')
            


        </div>
        <!-- End Main Dashboard Content Wrapper Area -->
        
        </div>


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
        @yield('scripts')
        <script>
            var route_notification = "{{route('notification')}}";
            var route_profile_image_upload = "{{route('profile_image_upload')}}";
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="{{asset('assets/js/profile.js')}}"></script>
    </body>
</html>