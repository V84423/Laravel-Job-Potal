@extends('layouts.company')

@section('title')
ご契約の流れ
@endsection

@section('content')

<style type="text/css">
	
	.contract .contract-steps .step .stepCount:after {
		display: none;
	}


</style>
<!-- Start Page Banner Area -->
<div class="main-banner-area-with-bg-image" style="background: transparent;padding-bottom: 0px;padding-top: 100px;">
    <!-- <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="content">
                    <h1>
                        <div class="text_1"><span class="bold_text">想い</span>を<span class="bold_text">採用</span>の</div>
                        <div class="text_2"><span class="normal_text">武器にする</span></div>
                    </h1>

                    <div class="description_1">Professionalは、あなたの会社が掲げる｢想い｣への共感を通じて、</div>
                    <div class="description_2">条件だけでは動かない優秀な人材にアプローチ。</div>
                    <div class="description_3">条件や知名度、採用予算に左右されない採用を実現します。</div>

            </div>
        </div>
    </div> -->
</div>
<!-- End Page Banner Area -->

<!-- Start Main Banner Area -->
<main id="contract" class="contract">
	<div class="container">
		<div class="row">
			<div class="contract-title">
				<h1>ご契約の流れ</h1>
			</div>
		</div>
	</div>
	<section class="contract-steps">
		<div class="container">
			<div class="row">
				<div class="step step-one">
					<div class="stepCount">
						<div class="counter">
							<span class="text">STEP</span><br>
							<span class="count">01</span>
						</div>
					</div>
					<div class="description">
						<h3>
							<span class="icon plane"></span>
							<span>お問い合わせ</span>
						</h3>
						<p>下記「お問い合わせ・見積り依頼」のメールフォームでもお電話でも、どちらでも 構いませんので、お気軽にお問い合わせください。弊社の経験豊富なエージェントが無料でご相談を お受けします。</p>
					</div>
				</div>
				<div class="step step-two">
					<div class="stepCount">
						<div class="counter">
							<span class="text">STEP</span><br>
							<span class="count">02</span>
						</div>
					</div>
					<div class="description">
						<h3>
							<span class="icon chat"></span>
							<span>ヒアリング</span>
						</h3>
						<p>
							弊社エージェントが、貴社のプロジェクト概要・予算感・就業環境などをヒアリングいたします。即戦力エンジニア ・デザイナーを採用するための人材要件を明確にし、貴社のビジネスを加速させられるようなマッチ度の高い人材の選定をいたします。
						</p>
					</div>
				</div>
				<div class="step step-three">
					<div class="stepCount">
						<div class="counter">
							<span class="text">STEP</span><br>
							<span class="count">03</span>
						</div>
					</div>
					<div class="description">
						<h3>
							<span class="icon book"></span>
							<span>ご提案・ご契約</span>
						</h3>
						<p>
							アップスターズに登録されているプロフェッショナルの中から、最適な候補者をご提案いたします。面談にてスキルや人となりを確認いただいた後、よろしければマッチング（契約成立）となります。ご契約内容としては、基本的に業務委託契約（準委任契約）となります。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="inquiry">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact row">
						<h1>HAVE BEEN WAITING</h1>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<a href="{{route('company_register')}}" class="contact-button">問い合わせ・見積り依頼</a>
				</div>
			</div>
		</div>
</main>
<!-- End Main Banner Area -->






@endsection



@section('scripts')

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script type="text/javascript">


	$(function(){

	    var ev = new $.Event('classadded'),
	        orig = $.fn.addClass;
	    $.fn.removeClass = function() {
	        $(this).trigger(ev, arguments);
	        return orig.apply(this, arguments);
	      }


	    $(".navbar-area").addClass("is-sticky");  
	    
	    $('.navbar-area').on('classadded', function(ev, newClasses) {
	      
	        // alert();
	    });


	  });


</script>





@endsection
