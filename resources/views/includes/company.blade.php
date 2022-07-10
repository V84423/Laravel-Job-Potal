@extends('layouts.company')

@section('title')
    人材をお探しの企業様
@endsection

@section('content')


		<!-- Start Main Banner Area -->
        <div class="main-banner-area-with-bg-image">
            <div class="container-fluid">
                <div class="main-banner-content-with-search" data-speed="0" data-revert="true">
                    <section class="top_hero">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 left-side">
                                    <div class="left-side-wrapper">
                                        <span class="big-text">フリーランスエンジニア・ <br>
                                            Webデザイナー・ディレクター人材をご紹介します</span>
                                        <span class="big-text_sp">フリーランスで自分らしい働き方・キャリアを叶えよう。</span>
                                        <h2>PROFESSIONALは経験豊富な即戦力エンジニア・Webディレクター・UI/UXデザイナー・PMに</h2>
                                        <h2>案件を依頼する人材マッチングサービスです</h2>
                                        <a href="{{route('company_register')}}" class="btn btn-free-reg btn-free-reg__red">会社登録</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <section class="services" id="services" style="overflow: hidden;">
		    <div class="container">
		        <div class="row services-inner">
		            <div class="title-box">
		                <h3>PROFESSIONALのサービス</h3>
		            </div>
		            <div class="service-wrapper">
		                <div class="single-service">
		                    <div class="single-service-inner">
		                        <div class="heading">
		                            <div class="icon-service">
		                                <img alt="" data-src="{{asset('assets')}}/images/service-icon-1.png" class=" lazyloaded" src="{{asset('assets')}}/images/service-icon-1.png">
		                                <noscript>
		                                	<img src="{{asset('assets')}}/images/service-icon-1.png" alt="">
		                                </noscript>
		                            </div>
		                            <div class="single-service-title">
		                                実績豊富な即戦力エンジニアの採用をサポート
		                            </div>
		                        </div>
		                        <p class="single-service-content">
		                            アップスターズでは、スマホアプリ、webサービス、ゲームなどの開発において、
		                            各領域のプロフェッショナルなフリーランスエンジニア・フリーランスデザイナーを
		                            ご紹介します。開発の各フェーズ毎に企業様が抱える課題解決に貢献できる
		                            人材をご提案し、ビジネスを加速するサポートをします。
		                        </p>
		                    </div>
		                </div>
		                <div class="single-service">
		                    <div class="single-service-inner">
		                        <div class="heading">
		                            <div class="icon-service">
		                                <img alt="" data-src="{{asset('assets')}}/images/service-icon-2.png" class=" lazyloaded" src="{{asset('assets')}}/images/service-icon-2.png"><noscript><img src="{{asset('assets')}}/images/service-icon-2.png" alt=""></noscript>
		                            </div>
		                            <div class="single-service-title">
		                                急なニーズに対するスピード感のある提案
		                            </div>
		                        </div>
		                        <p class="single-service-content">
		                            急な欠員補充や新規事業を迅速に進めるために採用に時間をかけられないという
		                            場合こそ、アップスターズにお任せください。ハイスキルなエンジニア・デザイナーを
		                            短期間で登録者データベースから抽出しご提案いたします。
		                        </p>
		                    </div>
		                </div>
		                <div class="single-service">
		                    <div class="single-service-inner">
		                        <div class="heading">
		                            <div class="icon-service">
		                                <img alt="" data-src="{{asset('assets')}}/images/service-icon-3.png" class=" lazyloaded" src="{{asset('assets')}}/images/service-icon-3.png"><noscript><img src="{{asset('assets')}}/images/service-icon-3.png" alt=""></noscript>
		                            </div>
		                            <div class="single-service-title">
		                                プロジェクト単位で柔軟な勤務・稼働形態で紹介可能
		                            </div>
		                        </div>
		                        <p class="single-service-content">
		                            正社員採用と異なり、フリーランスエンジニア・デザイナーについては、常駐や
		                            リモートワークを織り交ぜたり、稼働時間を個別のプロジェクト毎に検討いただけます。
		                            実績を積んでから勤務形態を変更する、など変更には柔軟に対応可能です。
		                        </p>
		                    </div>
		                </div>
		                <div class="single-service">
		                    <div class="single-service-inner">
		                        <div class="heading">
		                            <div class="icon-service">
		                                <img alt="" data-src="{{asset('assets')}}/images/service-icon-4.png" class=" lazyloaded" src="{{asset('assets')}}/images/service-icon-4.png"><noscript><img src="{{asset('assets')}}/images/service-icon-4.png" alt=""></noscript>
		                            </div>
		                            <div class="single-service-title">
		                                マッチ度の高いIT人材をスカウト
		                            </div>
		                        </div>
		                        <p class="single-service-content">
		                            アップスターズに登録されているフリーランスの方のスキルセットは幅広いため、
		                            闇雲に提案させていただくのではなく、ヒアリングで伺ったニーズにマッチすると
		                            思われる人材を厳選してスカウトします。
		                        </p>
		                    </div>
		                </div>
		            </div>

		        </div>
		    </div>
		</section>

		<section class="team">
		    <div class="box-title">
		        <h3>人材紹介</h3>
		    </div>
		    <p>APPSTARSではアプリやWebサービスにおける様々なスキル・経験を持った<br>
		        ディレクター・プロジェクトマネージャー・システムエンジニアなどがいるため、<br>
		        サービス企画から開発ディレクションまでクライアント企業様の幅広いニーズに応じて、最適なIT人材をご提案致します。
		    </p>
		    <div class="team-members">
		        <figure>
		            <a href="#">
		            	<img alt="" data-src="{{asset('assets/images/candidates/member1.png')}}" class=" lazyloaded" src="{{asset('assets/images/candidates/member1.png')}}">
		            	<noscript>
		            		<img src="{{asset('assets/images/candidates/member1.png')}}" alt="">
		                </noscript>
		            </a>
		            <figcaption>DIRECTOR/IT CONSULTANT</figcaption>
		        </figure>
		        <figure>
		            <a href="">
		            	<img alt="" data-src="{{asset('assets/images/candidates/member2.png')}}" class=" lazyloaded" src="{{asset('assets/images/candidates/member2.png')}}">
		            	<noscript>
		            		<img src="{{asset('assets/images/candidates/member2.png')}}" alt="">
		            	</noscript>
		            </a>
		            <figcaption>GROWTH HACKER</figcaption>
		        </figure>
		        <figure>
		            <a href="">
		            	<img alt="" data-src="{{asset('assets/images/candidates/member3.png')}}" class=" lazyloaded" src="{{asset('assets/images/candidates/member3.png')}}">
		            	<noscript>
		            		<img src="{{asset('assets/images/candidates/member3.png')}}" alt="">
		            	</noscript>
		            </a>
		            <figcaption>PROJECT MANAGER</figcaption>
		        </figure>
		        <figure>
		            <a href="">
		            	<img alt="" data-src="{{asset('assets/images/candidates/member4.png')}}" class=" lazyloaded" src="{{asset('assets/images/candidates/member4.png')}}">
		            	<noscript>
			            	<img src="{{asset('assets/images/candidates/member4.png')}}" alt="">
			            </noscript>
			        </a>
		            <figcaption>SYSTEM ENGINEER</figcaption>
		        </figure>
		    </div>
		    <div class="more">
		        <a href="{{route('talent')}}" class="btn btn--more">
		            MORE<span class="">&gt;</span>
		        </a>
		    </div>
		</section>


		<section class="interview">	
			<div class="container">
				<div class="row">
					<div class="interview-title">
						<h3>ご利用企業者様の声</h3>
					</div>
					<div class="interview-container">
						<div class="interview-description pr">
							<h1>CASE 01</h1>
							<h3>株式会社 様</h3>
							<p>
								紹介いただいたデザイナーの方がプロフェッショナルで非常に満足しています。
								やりたい事をお伝えしただけですが、サービス企画コンセプトをしっかり理解していただき、
								それをブレイクダウンしたUI/UXデザインをご提案いただけました。弊社は初めてのスマホアプリの
								リリースプロジェクトだったのですが、しっかりご相談にも乗ってくださって、実現可能な範囲で
								ハイクオリティなデザインをしていただけました。ASO対策の情報も大変分かりやすくまとめてご紹介していただき、
								アイデアまでご提案して頂いたのは大変助かりました。また、PMやディレクターとのコミュニケーションも
								しっかりと取っていただいたので進捗も良く分かり、安心してお任せすることができました。
							</p>
						</div>
						<figure class="interview-image">
							<img alt="" data-src="{{asset('assets/images/overview/c1.jpg')}}" class=" lazyloaded" src="{{asset('assets/images/overview/c1.jpg')}}">
							<noscript>
								<img src="{{asset('assets/images/overview/c1.jpg')}}" alt="">
							</noscript>
						</figure>	
					</div>
					<div class="interview-container">
						<figure class="interview-image hide-sm">
							<img alt="" data-src="{{asset('assets/images/overview/c2.jpg')}}" class=" lazyloaded" src="{{asset('assets/images/overview/c2.jpg')}}">
							<noscript>
								<img  alt="" data-src="{{asset('assets/images/overview/c2.jpg')}}" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
								<noscript>
									<img src="{{asset('assets/images/overview/c2.jpg')}}" alt="">
								</noscript>
						</figure>	
						<div class="interview-description pl">
							<h1>CASE 02</h1>
							<h3>株式会社 様</h3>
							<p>
								短納期でタイトなスケジュールにも関わらず難易度の高い構造設計などを担当いただきました。
								APPSTARSにご紹介いただいた方は、様々なプロジェクトで培ったノウハウを活かしてくれたおかげで、
								設計から実装までかかっていた時間も大幅に短縮されました。エンジニアとしての役割だけでなく、
								マネジメント経験も豊富で、他のメンバーも上手く巻き込んでいただいたので、スムーズに進行する
								ことが出来ました。 社内にはいなかったバランスの取れたエンジニアとして活躍いただき、大変助かりました。
							</p>
						</div>
						<figure class="interview-image show-sm">
							<img alt="" data-src="{{asset('assets/images/overview/c2.jpg')}}" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
							<noscript>
								<img  alt="" data-src="{{asset('assets/images/overview/c2.jpg')}}" class="lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
								<noscript>
									<img src="{{asset('assets/images/overview/c2.jpg')}}" alt="">
								</noscript>
						</figure>
					</div>	
				</div>
			</div>
		</section>		


		<section class="about">
		    <div class="title-box">
		        <h3>
		            &nbsp;&nbsp;&nbsp;&nbsp; 会社情報 &nbsp;&nbsp;&nbsp;&nbsp;
		        </h3>
		    </div>
		    <div class="map-wrapper">
		        
		        <div class="map-info">
		            <span class="address">
		                株式会社モンスター・ラボ <br>
		                〒150-0012<br>
		                東京都渋谷区広尾1-1-39 <br class="hide-on-pc">恵比寿プライムスクエアタワー 4階<br>
		            </span>
		            <span class="phone">
		                <i class="ri-phone-line" aria-hidden="true"></i> 03-4455-7243
		            </span>
		            <span class="business-hour">
		                営業時間：10:00 ～ 18:30
		            </span>
		        </div>
		        <!-- <div id="app-start-map" class="appstars-map"></div> -->
		        <div class="appstar-map">
		            
		        </div>
		    </div>
		</section>

@endsection