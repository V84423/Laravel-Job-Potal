@extends('layouts.login')


@section('title')
    ログイン
@endsection

@section('content')   
        
        <style type="text/css">
            input[type="checkbox"]{
                height: 17px;
                width: 17px;
                margin: 0px !important;
            }
        </style>
        @if (Session::has('msg'))
        <div class="notification-alert alert alert-success alert-dismissible show" role="alert" align="center">
            {{ Session::get('msg') }}
            <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="top:10px;">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endif
        <!-- Start Main Banner Area -->
        <div class="profile-authentication-area ptb-100">
            
            <section class="text-center reg-intro">
                <h3>ログイン</h3>                
            </section>

            <section class="registration-form">
                <div class="registration-form-inner">
                    <div class="facebook-button1">
                        <a href="#/facebook-login/">
                            <span class="facebook-button-top">
                                利用規約と個人情報保護方針に同意して
                            </span>
                            <span class="facebook">
                                facebookログイン
                            </span>
                        </a>
                    </div>
                    <div class="terms-condition">
                        <a href="{{route('agreement')}}" target="_blank">利用規約</a>
                        <span class="separator-reg-terms-conditions">|</span>
                        <a href="{{route('privacy-policy')}}" target="_blank">個人情報保護方針</a>
                    </div>
                    <div class="form-separator-wrapper">
                        <span>または</span>
                    </div>
                    <form class="main-registration-form form-wrapper-js" action="{{route('login-mailer')}}" method="post" id="loginForm" novalidate="novalidate">
                        @csrf
                        
                        <div class="registration-form-row">
                            <div class="label">
                                <label for="">メールアドレス</label>
                            </div>
                            <div class="fields full-row">
                                <div class="reg-input">
                                    <input type="text" name="email" placeholder="例)　sales@professional.io">
                                    <span class="reg-error">正しいメールアドレスを入力してください</span>
                                </div>
                            </div>
                        </div>

                        <div class="registration-form-row">
                            <div class="label">
                                <label for="">パスワード</label>
                            </div>
                            <div class="fields full-row">
                                <div class="reg-input">
                                    <input type="password" name="password" placeholder="例)　********">
                                    <span class="reg-error">8文字以上入力してください。</span>
                                </div>
                            </div>
                        </div>

                        <div class="registration-form-row">
                        	<div class="label">
                                <label for=""></label>
                            </div>
                            <div class="fields full-row">
                                <input type="checkbox" name="remember">  &nbsp;&nbsp;ログイン状態を保存する（30日間）
                            </div>

                        </div>
                        <div class="registration-form-row">
                        	<div class="label">
                                <label for=""></label>
                            </div>
                            <div class="fields full-row">
                                <a href="#/forgot">パスワードをお忘れですか？</a>
                            </div>
                        </div>

                        <!-- recaptcha -->
                         
                        <div class="submit-reg-form">
                            <input type="button" value="ログイン" id="login">                       
                        </div>

                    </form>
                    <div class="reg-form-end">
                        <a href="{{route('user_register')}}" style="color: black;">新しくアカウントを作成する</a>
                    </div>
                </div>
            </section>
        </div>
        <!-- End Main Banner Area -->

@endsection


