@extends('layouts.register')


@section('title')
    登録
@endsection

@section('content')   
        

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
                <h3>無料登録フォーム</h3>
                <p>フリーランス案件・求人の詳細情報と紹介を受け取るには、無料登録が必要です。<br>
                    開発現場に精通したエージェントが非公開案件も含めてご提案しますので、まずはご登録ください。</p>
            </section>

            <section class="registration-form">
                <div class="registration-form-inner">
                    
                    <!-- <div class="terms-condition">
                        <a href="{{route('agreement')}}" target="_blank">利用規約</a>
                        <span class="separator-reg-terms-conditions">|</span>
                        <a href="{{route('privacy-policy')}}" target="_blank">個人情報保護方針</a>
                    </div> -->
                    <div class="form-separator-wrapper">
                        <span>新規会員登録</span>
                    </div>
                    <form class="main-registration-form form-wrapper-js" action="{{route('registration-mailer')}}" method="post" id="registrationForm" novalidate="novalidate">
                        @csrf
                        <div class="registration-form-row">
                            <div class="label">
                                <label for="">お名前 <span class="appstar-sp-only-inline-block registration-must">※必須</span></label>
                            </div>
                            <div class="fields">
                                <div class="reg-input">
                                    <input type="text" name="lastname" placeholder="例)　山田">
                                    <span class="reg-error">名字を入力してください</span>
                                </div>
                                <div class="reg-input">
                                    <input type="text" name="firstname" placeholder="例)　太郎">
                                    <span class="reg-error">名前を入力してください</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- <div class="registration-form-row">
                            <div class="label">
                                <label for="">
                                    <span class="appstars-desktop-only">お名前カナ</span>
                                    <span class="appstar-sp-only-inline-block">フリガナ</span>
                                    <span class="appstar-sp-only-inline-block registration-must">※必須</span>
                                </label>
                            </div>
                            <div class="fields">
                                <div class="reg-input">
                                    <input type="text" name="lastname_kana" placeholder="例)　ヤマダ">
                                    <span class="reg-error">カナ名字を入力してください</span>
                                </div>
                                <div class="reg-input">
                                    <input type="text" name="firstname_kana" placeholder="例)　タロウ">
                                    <span class="reg-error">カナ名前を入力してください</span>
                                </div>
                            </div>
                        </div> -->

                        <div class="registration-form-row">
                            <div class="label">
                                <label for="">メールアドレス</label>
                            </div>
                            <div class="fields full-row">
                                <div class="reg-input">
                                    <input type="text" name="email" placeholder="例)　sales@appstars.io">
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

                        <!-- recaptcha -->
                         
                        <div class="submit-reg-form">
                            <input type="button" value="登録" id="register">                             
                        </div>

                        <div class="facebook-button">
                        <a href="facebook-login">
                            <span class="facebook">
                                facebook無料登録
                            </span>
                        </a>
                    </div>

                    </form>
                    <div class="reg-form-end">
                        登録ボタンをクリックすることにより、<br>
                        <a href="{{route('agreement')}}" target="_blank">利用規約</a>
                        および
                        <a href="{{route('privacy-policy')}}" target="_blank">個人情報保護方針</a>
                        に同意するものとします。
                    </div>
                </div>
            </section>
        </div>
        <!-- End Main Banner Area -->

@endsection


