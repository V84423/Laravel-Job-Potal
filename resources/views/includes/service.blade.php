@extends('layouts.site')

@section('title')
    サービス紹介
@endsection

@section('content')
    
        <link rel="stylesheet" href="{{asset('assets/css/service.css')}}">

        <!-- Start Main Banner Area -->
        <div class="main-banner-area-with-bg-image" style="background: transparent;padding-bottom: 0px;padding-top: 100px;">
            <!-- <div class="hero-contents">
                <h2 class="header">サービス紹介</h2>
                <div class="texts">
                  <h3 class="sub-header">PROFESSIONALフリーランス
                    <br>のメリット</h3>
                  <p class="desc">PROFESSIONALフリーランスとは、IT・WEB系フリーランスエンジニア・デザイナー・ディレクター専門の案件・お仕事紹介エージェントです。高単価、週3日・週4日、フリーランス初心者向けなど、多数の案件・求人をご紹介します。</p>
                </div>
              </div> -->
        </div>
        <!-- End Main Banner Area -->
        


        <section class="page-section service-intro_info">
          <div class="section-wrapper section-wrapper__1200">
            <div class="services-row">
                  <div class="service">
                    <div class="icon info_mail"></div>
                    <h4>フリーランスのための高報酬案件・お仕事多数</h4>
                    <p>
                      PROFESSIONALフリーランスの案件・求人は、エンドクライアント企業からの直案件のため、フリーランスの方へお支払いする業務委託料も高単価・高報酬を実現しています。また、フリーエンジニア・フリーランスWEBデザイナーの方のご経験やスキルに合った市場相場もご提示させていただきます。他のエージェントからPROFESSIONALフリーランスへ切り替えて、月収が10万円以上UPしたITフリーランス（IT個人事業主）の方も多数いらっしゃいます。</p>
                  </div>
                  <div class="service">
                    <div class="icon info_keyboard"></div>
                    <h4>ITエンジニア・WEBデザイナーの開発現場に精通したエージェントがしっかりサポート</h4>
                    <p>
                      PROFESSIONALフリーランスは、スマホアプリ・WEBサービス・ゲームの豊富な開発実績を持つ株式会社モンスター・ラボが運営するIT/WEBフリーランス専門の案件・求人紹介エージェントです。IT/WEB業界の開発現場に精通したエージェントがフリーエンジニア・WEBデザイナーの個々のご希望をヒアリングして、個々にマッチする案件・お仕事をご紹介させて頂きます。全員プロフェッショナルのメンバーですので、ご希望に沿わない案件・求人を紹介されてしまう心配もございません。また、ITフリーランス（IT個人事業主）の方にもご安心してご利用いただけます。</p>
                  </div>
                  <div class="service">
                    <div class="icon info_docs"></div>
                    <h4>週3日・週4日の求人でフリーランスらしい働き方実現</h4>
                    <p>
                      週5日の常駐案件だけではなく、週3日・週4日から働けるIT・WEBフリーランス案件・お仕事も多数あり、IT起業家の独立も支援します。また、リモートワーク（在宅業務）の案件・お仕事もご紹介可能です。WEB上の案件・求人条件には記載がない場合でも、フリーランスの方のご希望条件で求人企業へ条件交渉も代行させて頂いたり、非公開案件をご紹介させて頂きますので、まずはお気軽にご登録ください。</p>
                  </div>
                  <div class="service">
                    <div class="icon info_support-experts"></div>
                    <h4>WEBサイトに掲載されない非公開案件・求人の情報も多数</h4>
                    <p>
                      アップスターズフリーランスは、長年築き上げた業界のネットワークにより、様々なフリーランス（業務委託）案件・求人が日々更新されています。求人企業も大手企業からベンチャー企業・スタートアップまで幅広くあり、ITフリーエンジニアやWEBデザイナーの一人一人のご要望に沿った案件・求人を非公開のものも含めて、ご提案します。フリーエンジニア案件の使用開発言語・ツールもRuby, PHP, Java, JavaScript, Swift, Kotlin, Unity/C#, Python, Go言語など、様々なプログラミング言語やツールをカバーしていたり、フリーランスWEBデザイナー案件では、ビジュアルデザインだけでなく、UIデザインやUXデザインのお仕事もあります。</p>
                  </div>
                  <div class="service last intro-page">
                    <div class="icon info_individual-meeting"></div>
                    <div class="desc">
                      <h4>簡単登録や電話・リモート面談でフリーランスの負担を軽減</h4>
                      <p>
                        アップスターズフリーランスでは、フリーランスエンジニア・WEBデザイナーの方のご希望をヒアリングさせていただく個別相談会を都度実施しています。個別ヒアリングは、お電話またはSkypeなどのビデオチャットで実施し、フリーランスの方のお手間を極力取らせないようにしています。</p>
                    </div>
                  </div>
            </div>  
          </div>
        </section>

        <div class="horizontal-bar horizontal-bar__1239"><i class="fa fa-angle-down" aria-hidden="true"></i></div>


        <section class="flow-of-use service-intro section-gap-100">
          <div class="texts">
            <h3 class="header">PROFESSIONALフリーランスの
              <br>ご利用の流れ
            </h3>
            <p class="desc">WEBサイトでご登録後、担当エージェントよりご連絡致します。
              <br>ご希望条件やご経験のヒアリングは、電話またはビデオチャット
              <br>（Skype）で行うため、フリーランスの方のお時間を無駄に
              <br>致しません。ご登録から即日（最速３日以内）で案件参画する
              <br>ケースもございます。
            </p>
          </div>
          <aside class="flow flow__service-intro">
            <div class="flow-container">
              <ul class="flows">
                <li>
                  <h4>1</h4>
                  <i class="icon flow-1"></i>
                  <div class="texts">
                    <p>30秒無料登録</p>
                    <p class="desc">登録フォームより、基本情報、スキル、職務経歴書やポートフォリオをご登録下さい。ご登録後、即日中にエージェントよりご連絡します。</p>
                  </div>
                </li>
                <li>
                  <h4>2</h4>
                  <i class="icon flow-2"></i>
                  <div class="texts">
                    <p>キャリアカウンセリング
                      <br>（簡単電話 or Skype）</p>
                    <p class="desc">エージェントが、あなたのスキル、ご経験、働き方、業務内容のご希望をお電話またはビデオチャット（Skype）で伺います。その場でご紹介することも。</p>
                  </div>
                </li>
                <li>
                  <h4>3</h4>
                  <i class="icon flow-3"></i>
                  <div class="texts">
                    <p>案件・仕事紹介</p>
                    <p class="desc">エージェントがマッチする案件・仕事をご紹介します。また、業務内容や条件など詳細情報もご説明します。</p>
                  </div>
                </li>
                <li>
                  <h4>4</h4>
                  <i class="icon flow-4"></i>
                  <div class="texts">
                    <p>案件先の商談・契約</p>
                    <p class="desc">エージェントが営業同行し、クライアント企業とご面談いただきます。条件交渉や契約もしっかりサポートします。</p>
                  </div>
                </li>
                <li class="service_li_new">
                  <h4>5</h4>
                  <i class="icon flow-5"></i>
                  <div class="texts">
                    <p>プロジェクト参画</p>
                    <p class="desc">プロジェクトメンバーとして業務が始まります。業務開始後も、ご不明点やご質問などありましたら、ご相談ください。フリーランスの方の独立を引き続き支援します。</p>
                  </div>
                </li>
                <li>
                  <a href="https://www.PROFESSIONAL.io/service" class="btn btn-green">契約までの流れ<br>詳細を見る</a>
                </li>
              </ul>
            </div>
          </aside>
        </section>



        <section class="page-section service-user-voice">
          <div class="section-wrapper">
            <h3 class="section-title">PROFESSIONALフリーランスのご利用者の声</h3>
            <div class="items">
              <div class="item">
                <div class="avatar">
                  <img alt="" width="144" height="auto" data-src="{{asset('assets')}}/images/avatar_freelancer_web.png" class="img-circle avatar lazyloaded" src="{{asset('assets')}}/images/avatar_freelancer_web.png"><noscript><img src="{{asset('assets')}}/images/avatar_freelancer_web.png" class="img-circle avatar" alt="" width="144" height="auto"></noscript>
                </div>
                <h4 class="title service-intro">バックエンドエンジニア
                  <span class="sub">(Ruby on Rails / PHP）</span>
                </h4>
                <div class="texts">
                  PROFESSIONALフリーランスは海外のグローバル開発拠点と一緒に開発する案件もあるので、海外のシステム開発のレベル、国の文化、言葉の違いによる開発の課題等、国内の開発では知れない部分が多く、日々新たな発見が出来る所が魅力です。あと色々な国の人が働いているので、「英語勉強しなくちゃ!」という気持ちになります。
                </div>
              </div>
              <div class="item">
                <div class="avatar">
                  <img alt="" width="144" height="auto" data-src="{{asset('assets')}}/images/avatar_freelancer_ios.png" class="img-circle avatar lazyloaded" src="{{asset('assets')}}/images/avatar_freelancer_ios.png"><noscript><img src="{{asset('assets')}}/images/avatar_freelancer_ios.png" class="img-circle avatar" alt="" width="144" height="auto"></noscript>
                </div>
                <h4 class="title service-intro">iOSエンジニア
                  <span class="sub">(Swift / Objective-C）</span>
                </h4>
                <div class="texts">
                  PROFESSIONALフリーランスの魅力はスキルにマッチした案件が多い所です。前職でITコンサルティング会社に勤めた後、独学でiOSアプリ開発を学びました。フリーランスになってからはiOSアプリ開発の仕事も受けています。アップスターズだと、私のコンサル・アプリ開発のスキル両面が活かせる案件が多かったのは、個人的には非常に魅力的でした。
                </div>
              </div>
              <div class="item">
                <div class="avatar">
                  <img alt="" width="144" height="auto" data-src="{{asset('assets')}}/images/avatar_freelancer_android.png" class="img-circle avatar lazyloaded" src="{{asset('assets')}}/images/avatar_freelancer_android.png"><noscript><img src="{{asset('assets')}}/images/avatar_freelancer_android.png" class="img-circle avatar" alt="" width="144" height="auto"></noscript>
                </div>
                <h4 class="title service-intro">フロント/Androidエンジニア
                  <span class="sub">(React.js / Kotlin）</span>
                </h4>
                <div class="texts">
                  アップスターズフリーランスの魅力は、最新技術に触れられる案件やエンド直案件が豊富にあるところですね。現場の雰囲気もフランクで自由な感じで、役割分担もきちんとされているので、とても働きやすいです。案件内容も面白いものが多く、最新技術に触れたい方、スキルアップしたい方にとってはとても魅力的だと思います。
                </div>
              </div>
            </div>
          </div>
        </section>





@endsection


@section('scripts')
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
