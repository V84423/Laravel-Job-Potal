@extends('layouts.company')

@section('title')
問い合わせ・見積り依頼
@endsection

@section('content')

<style type="text/css">
		
		.page-banner-area.item-bg-four {
			/*background-image: url(../../assets/images/main-banner/banner-two/4846485.jpg);*/
			/*background-image: url(../../assets/images/main-banner/banner-two/banner-bg01.jpg);*/
			background-image: url(../../assets/images/main-banner/banner-two/dfasf.jpg);

		}


</style>
<!-- Start Page Banner Area -->
<div class="page-banner-area item-bg-four">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="content">
                    <h1 style="text-align: left;">
                        <div class="text_1"><span class="bold_text">想い</span>を<span class="bold_text">採用</span>の</div>
                        <div class="text_2"><span class="normal_text">武器にする</span></div>
                    </h1>

                    <div class="description_1">Professionalは、あなたの会社が掲げる｢想い｣への共感を通じて、</div>
                    <div class="description_2">条件だけでは動かない優秀な人材にアプローチ。</div>
                    <div class="description_3">条件や知名度、採用予算に左右されない採用を実現します。</div>

            </div>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

@if (Session::has('msg'))
<div class="notification-alert alert alert-success alert-dismissible show" role="alert" align="center">
    {{ Session::get('msg') }}
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="top:10px;">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif

<section id="page-heading" class="contact-page-heading">
    <div class="container">
        <div class="row">
            <div class="title-contact">
                <h1>会社情報登録</h1>
            </div>
        </div>
    </div>
</section>


<section class="inquiry-form inquiry-js">
	<div class="container">
		<div class="row">
			<div class="form-inner">
				<form action="{{route('registration-company')}}" class="" id="companyRegistrationForm" method="post" novalidate="novalidate">
					@csrf
					<div class="inquiry-form-group">
						<label for="name">会社名 <span>(必須)</span></label>
						<input type="text" name="company" id="company" placeholder="例) 株式会社モンスター・ラボ">
						<label class="reg-error">ご記入ください</label>
					</div>

					<div class="inquiry-form-group">
						<label>担当者名 <span>(必須)</span></label>
						<div class="contact-name">
							<div class="name-sei">
								<input type="text" name="lastname" id="contact-name-sei" placeholder="例) 山田">
								<label class="reg-error">ご記入ください</label>
							</div>
							<div class="name-mei">
								<input type="text" name="firstname" id="contact-name-mei" placeholder="例) 太郎">
								<label class="reg-error">ご記入ください</label>
							</div>
						</div>
					</div>

					<div class="inquiry-form-group">
						<label for="phone">電話番号 <span>(必須)</span></label>
						<input type="tel" name="phone" id="phone" placeholder="例) 03-1234-5678">
						<label class="reg-error">電話番号は必須です</label>
					</div>
					<div class="inquiry-form-group">
						<label for="email">メールアドレス <span>(必須)</span></label>
						<input type="email" name="email" id="email" placeholder="例) example@example.com">
						<label class="reg-error">正しいメールアドレスを入力してください</label>
					</div>

					<div class="inquiry-form-group">
						<label for="email">PASSWORD <span>(必須)</span></label>
						<input type="password" name="password" id="password" placeholder="例) ***********">
						<label class="reg-error">8文字以上入力してください。</label>
					</div>

					<div class="request-details">
						<p class="hints">
							ご依頼・ご相談内容 (任意)
						</p>
						<div class="inquiry-form-group">
							<textarea name="requestdetails" id="requestdetails" rows="4"></textarea>
						</div>
					</div>					

					<div class="tem-condition-hints">
						<a href="https://www.appstars.io/client/agreement/" class="brand-text" target="_blank">利用規約</a>
						および <a href="https://monstar-lab.com/privacy_policy" target="_blank" class="brand-text">
						個人情報保護方針</a>
						の内容をご確認いただき、
						ご同意の上、送信ボタンを押してください。
					</div>

					<div class="inquiry-submit">
						<input type="button" value="送信" id="company_register">
					</div>

				</form>
			</div>
		</div>
	</div>
</section>

@endsection