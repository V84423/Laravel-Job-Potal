@extends('layouts.site')

@section('title')
    PROFESSIONAL
@endsection

@section('content')
        
        <style type="text/css">

            .review-slides {
                margin: auto;
            }

            .review-area {
                background: white;
            }
            
            .review-single-card {                
                border: 1px solid #ededed;
                border-radius: 20px;
            }

            .review-single-card .review-info {
                position: relative;
                padding-left: 100px;
            }

            .review-single-card .review-info .content h3 {
                font-size: 12px;
            }                    

            :root .container{

                --gradient-color: linear-gradient(to top, #ffffff, #ffffff, #ffffff, #e1e1e1, #adadad);
            }

            .review-slides.owl-theme .owl-nav [class*=owl-] {
             
                line-height: 45px;
             
            }
        </style>

        <!-- Start Main Banner Area -->
        <div class="main-banner-area-with-bg-image">
            <div class="container-fluid">
                <div class="main-banner-content-with-search" data-speed="0" data-revert="true">
                    <section class="top_hero">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 left-side">
                                </div>
                                <div class="col-md-6 left-side">
                                    <div class="left-side-wrapper">
                                        <span class="big-text">フリーランスで自分らしい <br>
                                            働き方・キャリアを叶えよう。</span>
                                        <span class="big-text_sp">フリーランスで自分らしい働き方・キャリアを叶えよう。</span>
                                        <h2>エンジニア・UI/UXデザイナー・WEBディレクターの求人・案件をご紹介</h2>
                                        <a href="{{route('user_register')}}" class="btn btn-free-reg btn-free-reg__red">無料登録</a>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6 left-side right-side">
                                    <div class="form-group">
                                        <span class="top-form-heading text-center">どんな仕事があるか探す</span>
                                        <div class="select-wrapper">
                                            <select class="selectize-filter">
                                                <option value="">言語・ツール</option>
                                                    <option value="project/skills/figma/">Figma</option>
                                                    <option value="project/skills/vue-js/">Vue.js</option>
                                                    <option value="project/skills/react/">react</option>
                                                    <option value="project/skills/jquery/">jQuery</option>
                                                    <option value="project/skills/asp-net/">ASP.net</option>
                                                    <option value="project/skills/vb-net/">VB.NET</option>
                                                    <option value="project/skills/maya/">MAYA</option>
                                                    <option value="project/skills/c/">C++</option>
                                                    <option value="project/skills/typescript/">TypeScript</option>
                                                    <option value="project/skills/Ruby/">Ruby</option>
                                                    <option value="project/skills/PHP/">PHP</option>
                                                    <option value="project/skills/JAVA/">JAVA</option>
                                                    <option value="project/skills/GO/">GO</option>
                                                    <option value="project/skills/Python/">Python</option>
                                                    <option value="project/skills/Scala/">Scala</option>
                                                    <option value="project/skills/JavaScript/">JavaScript</option>
                                                    <option value="project/skills/Swift/">Swift / iOS</option>
                                                    <option value="project/skills/Android/">Android Java</option>
                                                    <option value="project/skills/Kotlin/">Kotlin</option>
                                                    <option value="project/skills/Unity/">Unity</option>
                                                    <option value="project/skills/C/">C#</option>
                                                    <option value="project/skills/HTML/">HTML / CSS</option>
                                                    <option value="project/skills/Photoshop/">Photoshop / Illustrator</option>
                                            </select>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <div class="select-wrapper">
                                            <select class="selectize-filter">
                                                <option value="">職種</option>
                                                    <option value="project/positions/データエンジニア/">データエンジニア</option>
                                                    <option value="project/positions/PM/">PM</option>
                                                    <option value="project/positions/UXデザイナー/">UXデザイナー</option>
                                                    <option value="project/positions/情報システム/">情報システム</option>
                                                    <option value="project/positions/Goエンジニア/">Goエンジニア</option>
                                                    <option value="project/positions/3Dデザイナー/">3Dデザイナー</option>
                                                    <option value="project/positions/アーキテクチャエンジニア/">アーキテクチャエンジニア</option>
                                                    <option value="project/positions/UIデザイナー/">UIデザイナー</option>
                                                    <option value="project/positions/QAエンジニア/">QAエンジニア/テストエンジニア</option>
                                                    <option value="project/positions/サーバーエンジニア/">サーバーエンジニア</option>
                                                    <option value="project/positions/フロントエンジニア/">フロントエンジニア</option>
                                                    <option value="project/positions/スマホアプリエンジニア/">スマホアプリエンジニア</option>
                                                    <option value="project/positions/WEBデザイナー/">WEBデザイナー</option>
                                                    <option value="project/positions/WEBディレクター・PM/">WEBディレクター・PM</option>
                                                    <option value="project/positions/ゲームエンジニア/">ゲームエンジニア</option>
                                                    <option value="project/positions/SE（システムエンジニア）/">SE（システムエンジニア）</option>
                                                    <option value="project/positions/ゲームプランナー・ディレクター/">ゲームプランナー・ディレクター</option>
                                                    <option value="project/positions/クリエイター（ゲーム・動画）/">クリエイター（ゲーム・動画）</option>
                                                    <option value="project/positions/マークアップ・コーダー/">マークアップ・コーダー</option>
                                                    <option value="project/positions/インフラエンジニア/">インフラエンジニア</option>
                                                    <option value="project/positions/ヘルプデスク・その他/">ヘルプデスク・その他</option>
                                                </select>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <div class="select-wrapper">
                                            <select class="selectize-filter">
                                                <option value="0">単価</option>
                                                    <option value="project/estimate/40/">〜40万円</option>
                                                    <option value="project/estimate/50/">〜50万円</option>
                                                    <option value="project/estimate/60/">〜60万円</option>
                                                    <option value="project/estimate/70/">〜70万円</option>
                                                    <option value="project/estimate/80/">〜80万円</option>
                                                    <option value="project/estimate/90/">〜90万円</option>
                                                    <option value="project/estimate/100/">〜100万円</option>
                                                    <option value="project/estimate/over100/">101万円〜</option>
                                            </select>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <div class="select-wrapper">
                                            <select class="selectize-filter">
                                                <option value="0">エリア</option>
                                                   <option value="project/areas/フルリモート/">フルリモート</option>
                                                    <option value="project/areas/蒲田/">蒲田</option>
                                                    <option value="project/areas/東京・日本橋・大手町/">東京・日本橋・大手町</option>
                                                    <option value="project/areas/渋谷・原宿・代官山/">渋谷・原宿・代官山</option>
                                                    <option value="project/areas/品川・三田・浜松町/">品川・三田・浜松町</option>
                                                    <option value="project/areas/秋葉原・神田・御茶ノ水/">秋葉原・神田・御茶ノ水</option>
                                                    <option value="project/areas/三軒茶屋・世田谷・池尻大橋/">三軒茶屋・世田谷・池尻大橋</option>
                                                    <option value="project/areas/下北沢・笹塚・明大前/">下北沢・笹塚・明大前</option>
                                                    <option value="project/areas/上野・日暮里・御徒町/">上野・日暮里・御徒町</option>
                                                    <option value="project/areas/五反田・大崎/">五反田・大崎</option>
                                                    <option value="project/areas/六本木・麻布・赤坂/">六本木・麻布・赤坂</option>
                                                    <option value="project/areas/恵比寿・中目黒・目黒/">恵比寿・中目黒・目黒</option>
                                                    <option value="project/areas/新宿・代々木・大久保/">新宿・代々木・大久保</option>
                                                    <option value="project/areas/池袋・高田馬場・目白/">池袋・高田馬場・目白</option>
                                                    <option value="project/areas/神保町・水道橋・九段下/">神保町・水道橋・九段下</option>
                                                    <option value="project/areas/神楽坂・飯田橋・四谷/">神楽坂・飯田橋・四谷</option>
                                                    <option value="project/areas/銀座・京橋・有楽町/">銀座・京橋・有楽町</option>
                                                    <option value="project/areas/高円寺・荻窪・中野・阿佐ヶ谷/">高円寺・荻窪・中野・阿佐ヶ谷</option>
                                                    <option value="project/areas/その他/">その他</option>
                                                </select>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->
        




        <!-- Start Review Area -->
        <div class="review-area ptb-100">
            <div class="container">
                <div class="review-title">
                    <h3 class="section-title">新着フリーランス求人・案件</h3>
                </div>

                <div class="review-slides owl-carousel owl-theme">
                    @foreach($newsJobs as $job)
                    <div class="review-single-card">
                        <div class="review-info">
                            <div class="image">
                                <img src="{{asset('storage').str_replace('public','',$job->photo)}}"  class="rounded-circle" style="width: 70px;">
                            </div>

                            <div class="content">
                                <a href="{{route('details',['id'=>$job->id])}}" style="height: 10vh;">
                                    <h3 style="margin-top:0px">{{$job->title}}</h3>
                                    <span class="main-comNewOffer-list-item-overview-table-inner">{{$job->positions}}</span>
                                </a>

                            </div>
                        </div>
                        <hr>
                        <div class="review-content">
                            <table class="main-comNewOffer-list-item-overview-table">
                                <tbody>
                                    <tr>
                                        <th>単価</th> 
                                        <td>
                                            <div class="main-comNewOffer-list-item-overview-table-inner">
                                                <p class="main-comNewOffer-list-item-overview-reward"><em>{{$job->estimate}}万円<em></p>
                                            </div>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>最寄駅</th> 
                                        <td>
                                            <div class="main-comNewOffer-list-item-overview-table-inner">{{$job->address}}</div>
                                        </td>
                                    </tr> 
                                    <tr>
                                        <th>スキル</th> 
                                        <td>
                                            <div class="main-comNewOffer-list-item-overview-table-inner">{{$job->skills}}</div>
                                        </td>
                                    </tr> 
                                    <!-- <tr>
                                        <th>職種</th> 
                                        <td>
                                            <div class="main-comNewOffer-list-item-overview-table-inner">
                                                <ul class="main-comNewOffer-list-item-overview-table-list clearfix">
                                                    <li><a href="/projects/?position=14" class="">Webデザイナー</a></li>
                                                    <li><a href="/projects/?position=29" class="">UIデザイナー</a></li>                                     
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>  -->
                                    <!-- <tr>
                                        <th>特徴</th> 
                                        <td>
                                            <div class="main-comNewOffer-list-item-overview-table-inner">
                                                <ul class="main-comNewOffer-list-item-overview-table-list clearfix">
                                                    <li><a href="/projects/?special=5" class="">服装自由</a></li>
                                                    <li><a href="/projects/?special=6" class="">在宅OK</a></li>
                                                    <li><a href="/projects/?special=52" class="">リモートOK</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>  -->
                                    <tr>
                                        <th>契約形態</th> 
                                        <td>
                                            <div class="main-comNewOffer-list-item-overview-table-inner">{{$job->projectType}}</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>                   
                    @endforeach 
                </div>
                <div class="main-comNewOffer-toAll">
                    <a href="{{route('projects')}}" class="">新着案件をもっと見る</a>>></div>
            </div>
        </div>
        <!-- End Review Area -->







        <!-- Start Partner Area -->
<!--         <div class="partner-area bg-F5F5F5 ptb-100">
            <div class="container">
                <div class="partner-slides owl-carousel owl-theme">
                    <div class="image-box">
                        <a href="project/skills/Ruby/"><img src="assets/images/partner/partner-1.png" alt="image"></a>
                    </div>

                    <div class="image-box">
                        <a href="project/skills/PHP/"><img src="assets/images/partner/partner-2.png" alt="image"></a>
                    </div>

                    <div class="image-box">
                        <a href="project/skills/JAVA/"><img src="assets/images/partner/partner-3.png" alt="image"></a>
                    </div>

                    <div class="image-box">
                        <a href="project/skills/JavaScript/"><img src="assets/images/partner/partner-4.png" alt="image"></a>
                    </div>

                    <div class="image-box">
                        <a href="project/skills/Swift/"><img src="assets/images/partner/partner-5.png" alt="image"></a>
                    </div>

                    <div class="image-box">
                        <a href="project/skills/Kotlin/"><img src="assets/images/partner/partner-6.png" alt="image"></a>
                    </div>

                    <div class="image-box">
                        <a href="project/skills/Unity/"><img src="assets/images/partner/partner-7.png" alt="image"></a>
                    </div>

                    <div class="image-box">
                        <a href="project/skills/HTML/"><img src="assets/images/partner/partner-8.png" alt="image"></a>
                    </div>

                    <div class="image-box">
                        <a href="project/skills/Photoshop/"><img src="assets/images/partner/partner-9.png" alt="image"></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- End Partner Area -->




        <!-- Start Job List Area -->
        <div class="job-list-area pb-100">
            <div class="container">

                <!-- <h3 class="section-title">新着案件・求人</h3>
                
                <div class="row">
                    @foreach($newsJobs as $job)
                    <div class="job-list">
                        <a href="{{route('details',['id'=>$job->id])}}">
                            @if(str_contains($job->positions, 'デザイナー'))
                            <div class="title" style="background-image: url({{asset('assets/images/blog/design.png')}})">
                            @elseif(str_contains($job->positions, 'PM'))
                            <div class="title" style="background-image: url({{asset('assets/images/blog/PM.png')}})">
                            @elseif(str_contains($job->positions, 'QA'))
                            <div class="title" style="background-image: url({{asset('assets/images/blog/QA.png')}})">
                            @elseif(str_contains($job->positions, 'SE'))
                            <div class="title" style="background-image: url({{asset('assets/images/blog/SE.png')}})">
                            @elseif(str_contains($job->positions, 'ゲーム'))
                            <div class="title" style="background-image: url({{asset('assets/images/blog/game.png')}})">
                            @elseif(str_contains($job->positions, 'コーダー'))
                            <div class="title" style="background-image: url({{asset('assets/images/blog/coder.png')}})">
                            @elseif(str_contains($job->positions, 'エンジニア'))
                            <div class="title" style="background-image: url({{asset('assets/images/blog/engineer.png')}})">
                            @else
                            <div class="title" style="background-image: url({{asset('assets/images/blog/other.png')}})">
                            @endif
                                <div>
                                    <div class="professions"> {{$job->positions}} </div>
                                    <div class="technology"> {{$job->skills}} </div>
                                </div>
                            </div>
                            <h4 class="job-title box-orient">[リモート] {{$job->title}}</h4>
                            <div class="technologies">
                                <span class="technology-name"> {{$job->skills}} </span>
                            </div>
                            <div class="location">
                                <span class="station">作業場所 : </span>
                                <span class="station">{{$job->address}}</span>
                            </div>
                            <div class="price">
                                <span class="unit-price-label">単価（税抜き）</span>
                                <span class="unit-price-value">{{$job->estimate}}万円</span>
                            </div>
                        </a>
                    </div>
                    @endforeach 
                </div>

                    
                <div class="btn_to-media-list">
                    <a href="{{route('search')}}" class="btn btn-green">案件・求人特集一覧を見る</a>
                </div> -->

                <h3 class="section-title">案件おすすめ企業</h3>

                <div class="row">
                    @foreach($retrivClients as $client)
                    <div class="job-list">
                        <a href="{{route('company_details',['id'=>$client->created_by_id])}}">
                            <div class="title" style="background-image: url({{asset('storage').str_replace('public','',$client->bg_image)}})">
                                
                            </div>
                            <h4 class="job-title box-orient"> 
                                {{$client->name}}
                            </h4>
                            <a href="{{$client->url}}" style="font-size:11px" target="blank">会社ホームページアドレス</a>
                            <div class="technologies">
                                <span class="technology-name"> 電話番号 : {{$client->phone}}</span>
                            </div>
                            <div class="location">
                                <span class="station">場所 : </span>
                                <span class="station">{{$client->address}}</span>
                            </div>
                            <div class="price">
                                <span class="unit-price-label">資本金</span>
                                <span class="unit-price-value">{{$client->capital}}万円</span>
                            </div>
                        </a>
                    </div>
                    @endforeach 
                </div>

                    
                <!-- <div class="btn_to-media-list">
                    <a href="{{route('client')}}" class="btn btn-green">法人特集一覧を見る</a>
                </div> -->









                <h3 class="section-title">会社おすすめ企業</h3>

                <div class="row">
                    @foreach($postJobsClients as $client)
                    <div class="job-list">
                        <a href="{{route('company_details',['id'=>$client->created_by_id])}}">
                            <div class="title" style="background-image: url({{asset('storage').str_replace('public','',$client->bg_image)}})">
                                
                            </div>
                            <h4 class="job-title box-orient"> 
                                {{$client->name}}
                            </h4>
                            <a href="{{$client->url}}" style="font-size:11px" target="blank">会社ホームページアドレス</a>
                            <div class="technologies">
                                <span class="technology-name"> 電話番号 : {{$client->phone}}</span>
                            </div>
                            <div class="location">
                                <span class="station">場所 : </span>
                                <span class="station">{{$client->address}}</span>
                            </div>
                            <div class="price">
                                <span class="unit-price-label">資本金</span>
                                <span class="unit-price-value">{{$client->capital}}万円</span>
                            </div>
                        </a>
                    </div>
                    @endforeach 
                </div>

                    
                <div class="btn_to-media-list">
                    <a href="{{route('client')}}" class="btn btn-green">法人特集一覧を見る</a>
                </div>




            </div>
        </div>
        <!-- End Job List Area -->


        <!-- Start Job Seeker Area -->
        <div class="job-seeker-area pt-100 pb-75">
            <section class="flow section-gap-100">
                <div class="flow-container">
                    <h3 class="section_header">無料登録から案件参画までの流れ</h3>
                    <ul class="flows">
                        <li>
                            <h4>1</h4>
                            <i class="icon flow-1"></i>
                            <div class="texts">
                                <p>30秒無料登録</p>
                            </div>
                        </li>
                        <li>
                            <h4>2</h4>
                            <i class="icon flow-2"></i>
                            <div class="texts">
                                <p>キャリアカウンセリング <br>
                                    （簡単電話 or Skype）</p>
                            </div>
                        </li>
                        <li>
                            <h4>3</h4>
                            <i class="icon flow-3"></i>
                            <div class="texts">
                                <p>案件・仕事紹介</p>
                            </div>
                        </li>
                        <li>
                            <h4>4</h4>
                            <i class="icon flow-4"></i>
                            <div class="texts">
                                <p>案件先の商談・契約</p>
                            </div>
                        </li>
                        <li class="flow_new">
                            <h4>5</h4>
                            <i class="icon flow-5"></i>
                            <div class="texts">
                                <p>プロジェクト参画</p>
                            </div>
                        </li>
                        <li>
                            <a href="" class="btn btn-green">契約までの流れ<br>詳細を見る</a>
                        </li>
                    </ul>
                    <div class="btn_flow-to-register">
                        <a href="{{route('service')}}" class="btn btn-green">契約までの流れ詳細を見る</a>
                    </div>
                </div>
            </section>
            <div class="horizontal-bar horizontal-bar__1100"></div>
            <section class="page-section top_service-info section-gap-100">
                <div class="section-wrapper section-wrapper__1100">
                    <h3 class="section_header">PROFESSIONALフリーランスとは</h3>
                    <p class="section_brief">
                        PROFESSIONAL（アップスターズ）フリーランスとは、IT・WEB系フリーランスエンジニア・デザイナー・ディレクター専門の案件・お仕事紹介エージェントです。高単価、週3日・週4日、フリーランス初心者向けなど、多数の案件・求人をご紹介します。</p>
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
        </div>
        <!-- End Job Seeker Area -->

@endsection
