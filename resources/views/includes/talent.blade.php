@extends('layouts.company')

@section('title')
人材紹介
@endsection

@section('content')
<style>
	.main-banner-area-with-bg-image {
		padding-bottom: 5vh;
		background: #24282a;
		/* background-image: linear-gradient(to left, #335167, #0b6e7e); */
	}

</style>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<!-- Start Main Banner Area -->
<div class="main-banner-area-with-bg-image" style="background: transparent;padding-bottom: 0px;padding-top: 100px;">
</div>
<!-- End Main Banner Area -->
<section class="member__slider">
	<div class="slides slick-initialized slick-slider" id="memberSlider">
		<div class="slick-list draggable">
			<div class="slick-track">
				<div class="slick-slide " data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 1447px;">
					<div>
						<div class="slide person-left" style="background-image: url({{asset('assets/images/candidates/slider1.png')}}); width: 100%; display: inline-block;">
							<div class="container">
								<div class="row">
									<div class="description description--right">
										<h1>DIRECTOR / UIUX DESIGNER</h1>
										<h4>Webディレクター / UIUXデザイナー</h4>
										<h6></h6>
										<p>
										エンジニア/デザイナーのスキルセットを持ち、アプリ/Webサービスの企画立案、UI/UXデザイン、開発ディレクションの対応が可能。個人でもスマホアプリをリリースし、数万DLを達成。有名アプリ開発アワードで受賞経験を持つ。大手ネット辞書会社の辞書アプリ、大手教育会社の幼児向けゲームWebアプリ、写真撮影/加工アプリの開発経験を持つ。                            </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-slide " data-slick-index="0" aria-hidden="false" style="width: 1447px;">
					<div>
						<div class="slide person-left" style="background-image: url({{asset('assets/images/candidates/slider2.png')}}); width: 100%; display: inline-block;">
							<div class="container">
								<div class="row">
									<div class="description description--right">
										<h1>DIRECTOR / IT CONSULTANT</h1>
										<h4>Webディレクター / SE / iOSエンジニア</h4>
										<h6></h6>
										<p>
										大手有名コンサルティング会社でITコンサルタントとして、大手ゲーム会社の会計システムの運用・保守や電力・ガス業界のIT戦略やロードマップを作成していた。フリーランスのiOSエンジニア経験もあり、要件定義、基本設計、iPhone/iOSアプリ（Swift）のプログラミングまで開発プロジェクト全域に関われる。                            </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1447px;" tabindex="-1">
					<div>
						<div class="slide " style="background-image: url({{asset('assets/images/candidates/slider3.png')}}); width: 100%; display: inline-block;">
							<div class="container">
								<div class="row">
									<div class="description ">
										<h1>GROWTH HACKER</h1>
										<h4>グロースハッカー / Webディレクター</h4>
										<h6></h6>
										<p>
										早稲田大学（商学部）卒業後、大手システム開発会社のエンジニアと営業に従事。社内新人賞受賞、年間MVPノミネートという受賞履歴を持つ。教育系ビジネスのスタートアップ企業にてグロースハッカーおよびWebディレクターとして、6つのスマホアプリのKPIを約3倍まで向上させた実績あり。動画ストリーミングアプリの開発ディレクションも経験。                            </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 1447px;" tabindex="-1">
					<div>
						<div class="slide person-left" style="background-image: url({{asset('assets/images/candidates/slider4.png')}}); width: 100%; display: inline-block;">
							<div class="container">
								<div class="row">
									<div class="description description--right">
										<h1>DIRECTOR / PM</h1>
										<h4>Webディレクター / PM</h4>
										<h6></h6>
										<p>
										大手教育系企業の動画配信アプリ、大手通信キャリア企業のキュレーションメディアアプリ、健康・ダイエット食事提案アプリ（いずれもiOS・iphoneアプリ / Androidアプリ）、大手新聞社のメディアサイト、大手製菓メーカーの商品キャンペーンサイトなどを経験。要件定義、UI画面設計、仕様書作成など開発ディレクションとPMを担当。                            </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 1447px;" tabindex="-1">
					<div>
						<div class="slide " style="background-image: url({{asset('assets/images/candidates/slider5.png')}}); width: 100%; display: inline-block;">
							<div class="container">
								<div class="row">
									<div class="description ">
										<h1>PM / DIRECTOR</h1>
										<h4>PM / Webディレクター / コンサルタント</h4>
										<h6></h6>
										<p>
										大手小売企業のECアプリ（iOS/Android）、大手飲食検索サービスのWebサイト（月間150万PV）など、多くのプロジェクトのPM/Webディレクターを経験。LAMP環境やWindows環境での開発経験もあり、開発工程も考慮した企画提案（リーンキャンバスを活用）、プロジェクトマネージメント、コンサルティングができる。                            </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="directors">
	<div class="container">
		<div class="row">
			<aside class="category">
				<h4>CATEGORY</h4>
				<ul>
					<li class="active">
						<a href="#it">ITコンサルタント・エンジニア</a>
					</li>
					<li class="">
						<a href="#se">SE・リードエンジニア</a>
					</li>
					<li class="">
						<a href="#uiux">UI/UXデザイナー</a>
					</li>
					<li class="">
						<a href="#director">ディレクター</a>
					</li>
					<li class="">
						<a href="#pm">PM（プロジェクトマネージャー）</a>
					</li>
				</ul>
				<a href="{{route('company_register')}}" class="contact-button aside-contact-button">問い合わせ・見積り依頼</a>
			</aside>


			<div class="officers-list">
				<ul class="officers-list--category" id="it">
					<div class="list-title" data-attr-after="IT CONSULTANT">
						<h3>ITコンサルタント・エンジニア</h3>
					</div>
					@foreach($talents as $talent)
					@if($talent->category == 1)
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('storage').str_replace('public','',$talent->user_photo)}}">
						</figure>
						<div class="description">
							<a href="{{route('talent_details', ['id'=>$talent->user_id])}}">
								<h3>{{$talent->engineerLanguageTools}}エンジニア</h3>
								<h5>{{$talent->user_name}} さん</h5>
							</a>
							<p class="hide-sm">{{$talent->details}}</p>
						</div>
					</li>
					@endif
					@endforeach

				</ul>
				<ul class="officers-list--category" id="se">
					<div class="list-title" data-attr-after="SE / LEAD ENGINEER">
						<h3>SE・リードエンジニア</h3>
					</div>
					@foreach($talents as $talent)
					@if($talent->category == 2)
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('storage').str_replace('public','',$talent->user_photo)}}">
						</figure>
						<div class="description">
							<a href="{{route('talent_details', ['id'=>$talent->user_id])}}">
								<h3>{{$talent->pmDevelopmentProduct}}ディレクター</h3>
								<h5>{{$talent->user_name}} さん</h5>
							</a>
							<p class="hide-sm">{{$talent->details}}</p>
						</div>
					</li>
					@endif
					@endforeach
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('assets/images/candidates/candidates-1.jpg')}}">
						</figure>
						<div class="description">
								<h3>フルスタックエンジニア</h3>
								<h5>Y.M さん</h5>
							<p class="hide-sm">フロントからサーバまで対応可能なフルスタックエンジニアで、得意な言語はScala、Java、PHP、Objective-C、JavaScript（,jQuery/Angular.JS/node.JS）などがある。これまでWEBアプリ、iPhoneアプリなどをアジャイル開発してきたため、柔軟な対応が可能。</p>
						</div>
						<p class="description-sm show-sm">フロントからサーバまで対応可能なフルスタックエンジニアで、得意な言語はScala、Java、PHP、Objective-C、JavaScript（,jQuery/Angular.JS/node.JS）などがある。これまでWEBアプリ、iPhoneアプリなどをアジャイル開発してきたため、柔軟な対応が可能。                            </p>
					</li>
				</ul>
				<ul class="officers-list--category" id="uiux">
					<div class="list-title" data-attr-after="UI /UX DESIGNER">
						<h3>UI/UXデザイナー</h3>
					</div>
					@foreach($talents as $talent)
					@if($talent->category == 3)
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('storage').str_replace('public','',$talent->user_photo)}}">
						</figure>
						<div class="description">
							<a href="{{route('talent_details', ['id'=>$talent->user_id])}}">
								<h3>{{$talent->webDevelopmentPhase}}デザイナー</h3>
								<h5>{{$talent->user_name}} さん</h5>
							</a>
							<p class="hide-sm">{{$talent->details}}</p>
						</div>
					</li>
					@endif
					@endforeach
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('assets/images/candidates/candidates-1.jpg')}}">
						</figure>
						<div class="description">
								<h3>フルスタックエンジニア</h3>
								<h5>Y.M さん</h5>
							<p class="hide-sm">フロントからサーバまで対応可能なフルスタックエンジニアで、得意な言語はScala、Java、PHP、Objective-C、JavaScript（,jQuery/Angular.JS/node.JS）などがある。これまでWEBアプリ、iPhoneアプリなどをアジャイル開発してきたため、柔軟な対応が可能。</p>
						</div>
						<p class="description-sm show-sm">フロントからサーバまで対応可能なフルスタックエンジニアで、得意な言語はScala、Java、PHP、Objective-C、JavaScript（,jQuery/Angular.JS/node.JS）などがある。これまでWEBアプリ、iPhoneアプリなどをアジャイル開発してきたため、柔軟な対応が可能。                            </p>
					</li>
				</ul>
				<ul class="officers-list--category" id="director">
					<div class="list-title" data-attr-after="DIRECTOR">
						<h3>ディレクター</h3>
					</div>
					@foreach($talents as $talent)
					@if($talent->category == 4)
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('storage').str_replace('public','',$talent->user_photo)}}">
						</figure>
						<div class="description">
							<a href="{{route('talent_details', ['id'=>$talent->user_id])}}">
								<h3>{{$talent->pmDevelopmentProduct}}ディレクター </h3>
								<h5>{{$talent->user_name}} さん</h5>
							</a>
							<p class="hide-sm">{{$talent->details}}</p>
						</div>
					</li>
					@endif
					@endforeach
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('assets/images/candidates/candidates-1.jpg')}}">
						</figure>
						<div class="description">
								<h3>フルスタックエンジニア</h3>
								<h5>Y.M さん</h5>
							<p class="hide-sm">フロントからサーバまで対応可能なフルスタックエンジニアで、得意な言語はScala、Java、PHP、Objective-C、JavaScript（,jQuery/Angular.JS/node.JS）などがある。これまでWEBアプリ、iPhoneアプリなどをアジャイル開発してきたため、柔軟な対応が可能。</p>
						</div>
						<p class="description-sm show-sm">フロントからサーバまで対応可能なフルスタックエンジニアで、得意な言語はScala、Java、PHP、Objective-C、JavaScript（,jQuery/Angular.JS/node.JS）などがある。これまでWEBアプリ、iPhoneアプリなどをアジャイル開発してきたため、柔軟な対応が可能。                            </p>
					</li>

				</ul>
				<ul class="officers-list--category" id="pm">
					<div class="list-title" data-attr-after="PROJECT MANAGER">
						<h3>PM（プロジェクトマネージャー）</h3>
					</div>

					@foreach($talents as $talent)
					@if($talent->category == 5)
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('storage').str_replace('public','',$talent->user_photo)}}">
						</figure>
						<div class="description">
							<a href="{{route('talent_details', ['id'=>$talent->user_id])}}">
								<h3>{{$talent->pmDevelopmentProduct}}ディレクター</h3>
								<h5>{{$talent->user_name}} さん</h5>
							</a>
							<p class="hide-sm">{{$talent->details}}</p>
						</div>
					</li>
					@endif
					@endforeach
					<li class="media">
						<figure>
							<img width="166" height="166" src="{{asset('assets/images/candidates/candidates-1.jpg')}}">
						</figure>
						<div class="description">
							<h3>SE / Webディレクター                                </h3>
							<h5>N.T さん</h5>
							<p class="hide-sm">業務システムのエンジニア（Java、VB.Net）として経歴を重ね、プロジェクトリーダーや技術リーダーなどプロジェクトをリードするポジションで経験を積んだ。システム設計も考慮したテクニカルディレクションを得意とする。これまで介護支援システム、投資会社向け商品管理システムなど多数のプロジェクトに携わってきた。                                </p>
						</div>
						<p class="description-sm show-sm">業務システムのエンジニア（Java、VB.Net）として経歴を重ね、プロジェクトリーダーや技術リーダーなどプロジェクトをリードするポジションで経験を積んだ。システム設計も考慮したテクニカルディレクションを得意とする。これまで介護支援システム、投資会社向け商品管理システムなど多数のプロジェクトに携わってきた。                            </p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

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

	$('.slick-track').slick({
		autoplay: true,
	});

</script>





@endsection
