@extends('layouts.company_profile')

@section('title')
    会社情報登録
@endsection

@section('content')

    <style>
        .skill-registration-form .skill-registration-form-inner {
            max-width: none;
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

	<section class="skill-registration-form">
        <div class="skill-registration-form-inner form-wrapper-js">

            <!-- Start Page Banner Area -->
            @if(Session::has('bg_image'))
            <div class="page-banner-area item-bg-four" style="height: 500px; background-image: url({{asset('storage').str_replace('public','',Session::get('bg_image'))}})">
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

            <div class="upload-file">
                <h4 class="appstar-section-title">会社名 : 「 {{ Session::get('company')}} 」</h4>
                <p class="appstar-text-green">会社ロゴと会社背景画像バナーこちらに添付をお願いします。</p>
                <p class="appstar-text">ファイルを選択するかドラッグ＆ドロップでファイルをアップロードしてください。</p>
                <!-- <div class="appstar-skill-upload-container" id="registration-drop" style="position: relative;">
                    <span class="uploaded-files">
                        <span class="upload-file upload-file-button-js" style="position: relative;">
                            <a href="javascript:" class="file-input" id="fu-browse" style="position: relative; z-index: 1;">ファイルアップロード</a>
                        <div id="html5_1fn60p88tqp9q53o919232h64_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 157px; height: 28px; overflow: hidden; z-index: 0;"><input id="html5_1fn60p88tqp9q53o919232h64" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,application/pdf,.pdf,text/plain,.txt,application/vnd.ms-excel,.xls,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.xlsx,application/msword,.doc,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.docx,.jpge,application/vnd.ms-powerpoint,.ppt,application/vnd.openxmlformats-officedocument.presentationml.presentation,.pptx,text/csv,.csv,application/zip,.zip"></div></span>
                    </span>
                </div> -->
                <div class="file-upload-error">

                </div>
            </div>
            <form action="{{ route('registration-info')}}" method="post" class="appstar-skill-form-js" novalidate="novalidate" id="companyInfoForm" enctype="multipart/form-data">

                @csrf
                <div class="form-group files">
                    <input type="file" class="form-control" name="file">
                </div>
            	
                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">会社ホームページアドレス<span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　https://www.appstars.io/" name="url" required="" class="skill-phone-number">
                    <span class="reg-error">電話番号は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">電話番号の記入をお願いします <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="tel" placeholder="例 )　03-9999-9999" name="phone" required="" class="skill-phone-number" aria-required="true">
                    <span class="reg-error">電話番号は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">会社設立日 <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　2021-12-18" name="found_at" required="" class="skill-phone-number">
                    <span class="reg-error">会社設立日は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">資本金 <span class="appstar-title-hints">(万円)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　250,000,000" name="capital" required="" class="skill-phone-number">
                    <span class="reg-error">資本金は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">代表氏名 <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　松尾" name="ceo" required="" class="skill-phone-number">
                    <span class="reg-error">代表氏名は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">従業員数 <span class="appstar-title-hints">(人)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　26" name="employee" required="" class="skill-phone-number">
                    <span class="reg-error">従業員数は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">住所 <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　〒106-0044東京都港区東麻布1-8-1 東麻布ISビル4F" name="address" required="" class="skill-phone-number">
                    <span class="reg-error">住所は必須です</span>
                </div>

                <div class="skill-comment-section">
                    <h4 class="appstar-section-title appstar-multi-line-heading">会社概要ご記入をお願いします。</h4>
                    <h4 class="appstar-title-hints">（ご担当したサイトURL、ポートフォリオサイトURL、職務経歴など）</h4>
                    <textarea placeholder="フリーテキスト" name="details"></textarea>
                </div>

                <div class="skill-submit">
                    <input type="button" value="会社情報を送る" id="sendCompanyInfo" >
                </div>
            </form>
        </div>
    </section>










@endsection