@extends('layouts.site')

@section('title')
    案件詳細情報
@endsection

@section('content')        

        <style type="text/css">
            
            .page-banner-content h2 {
                font-size: 40px;    
            }

            p{
                    white-space: break-spaces;
                    font-family: ヒラギノ角ゴ Pro,Hiragino Kaku Gothic Pro,メイリオ,Meiryo,Osaka,ＭＳ\ Ｐゴシック,MS PGothic,MS Gothic,ＭＳ\ ゴシック,Helvetica Neue,Helvetica,Arial,sans-serif!important;
            }


        </style>



		<!-- Start Page Banner Area -->
        @if(str_contains($job[0]->positions, 'デザイナー'))
        <div class="page-banner-area item-bg-four" style="height: 600px;background-image: url({{asset('assets/images/blog/design.png')}})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <img src="{{asset('assets/images/job/job-1.png')}}" class="rounded-circle" alt="image">
                            <br><br><p style="color:white;font-size: 18px;"><b>{{$job[0]->positions}}</p>
        @elseif(str_contains($job[0]->positions, 'PM'))
        <div class="page-banner-area item-bg-four" style="height: 600px;background-image: url({{asset('assets/images/blog/PM.png')}})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <img src="{{asset('assets/images/job/job-2.png')}}" class="rounded-circle" alt="image">
                            <br><br><p style="color:white;font-size: 18px;"><b>{{$job[0]->positions}}</p>
        @elseif(str_contains($job[0]->positions, 'QA'))
        <div class="page-banner-area item-bg-four" style="height: 600px;background-image: url({{asset('assets/images/blog/QA.png')}})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <img src="{{asset('assets/images/job/job-3.png')}}" class="rounded-circle" alt="image">
                            <br><br><p style="color:white;font-size: 18px;"><b>{{$job[0]->positions}}</p>
        @elseif(str_contains($job[0]->positions, 'SE'))
        <div class="page-banner-area item-bg-four" style="height: 600px;background-image: url({{asset('assets/images/blog/SE.png')}})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <img src="{{asset('assets/images/job/job-4.png')}}" class="rounded-circle" alt="image">
                            <br><br><p style="color:white;font-size: 18px;"><b>{{$job[0]->positions}}</p>
        @elseif(str_contains($job[0]->positions, 'ゲーム'))
        <div class="page-banner-area item-bg-four" style="height: 600px;background-image: url({{asset('assets/images/blog/game.png')}})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <img src="{{asset('assets/images/job/job-5.png')}}" class="rounded-circle" alt="image">
                            <br><br><p style="color:white;font-size: 18px;"><b>{{$job[0]->positions}}</p>

        @elseif(str_contains($job[0]->positions, 'コーダー'))
        <div class="page-banner-area item-bg-four" style="height: 600px;background-image: url({{asset('assets/images/blog/coder.png')}})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <img src="{{asset('assets/images/job/job-6.png')}}" class="rounded-circle" alt="image">
                            <br><br><p style="color:white;font-size: 18px;"><b>{{$job[0]->positions}}</p>
        @elseif(str_contains($job[0]->positions, 'エンジニア'))
        <div class="page-banner-area item-bg-four" style="height: 600px;background-image: url({{asset('assets/images/blog/engineer.png')}})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <img src="{{asset('assets/images/job/job-5.png')}}" class="rounded-circle" alt="image">
                            <br><br><p style="color:white;font-size: 18px;"><b>{{$job[0]->positions}}</p>
        @else
        <div class="page-banner-area item-bg-four" style="height: 600px;background-image: url({{asset('assets/images/blog/other.png')}})">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <img src="{{asset('assets/images/job/job-4.png')}}" class="rounded-circle" alt="image">
                            <br><br><p style="color:white;font-size: 18px;"><b>{{$job[0]->positions}}</p>
        @endif

            
                            <h2>{{$job[0]->title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Candidates Area -->
        <section class="page-section freelance-overview">
            <div class="section-wrapper section-wrapper__1200">
                <div class="overview-left">
                    <div>契約形態 {{$job[0]->projectType}}
                        <br>単価 <span class="currency"><span class="symbol">¥</span> {{$job[0]->estimate}}万</span>
                    </div>
                </div>
                <div class="overview-right">
                    <h4 class="title">概要</h4>
                    <div class="contents">
                        <div class="location PROFESSIONAL-one-line-omitted">勤務地 : {{$job[0]->address}}</div>
                        <div class="position PROFESSIONAL-one-line-omitted">ポジション : {{$job[0]->positions}}</div>
                        <div class="working-days PROFESSIONAL-one-line-omitted">稼働日数 : {{$job[0]->wkdays}}</div>
                    </div>
                </div>
            </div>
        </section>


        <section class="page-section freelance-details">
            <div class="details-wrapper section-wrapper section-wrapper__1200">
                <aside class="details-table">
                    <table class="table">
                        <tbody><tr>
                            <td>ポジション</td>
                            <td><p>{{$job[0]->positions}}</p></td>
                        </tr>
                        <tr>
                            <td>仕事内容</td>
                            <td>
                                <p>{{$job[0]->details}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>言語／
                                <br>フレームワークなど</td>
                                <td>
                                    <p>{{$job[0]->skills}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>最寄駅</td>
                                <td><p>{{$job[0]->address}}</p>
                                </td>

                            </tr>
                            <tr>
                                <td>想定期間</td>
                                <td><p>{{$job[0]->during}}</p>
                                </td>

                            </tr>
                            <tr>
                                <td>募集人数</td>
                                <td><p>{{$job[0]->mates}}人</p>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>商流</td>
                            <td><p>{{$job[0]->schedule}}</p>
                        </td>
                    </tr>
                </tbody></table>
                </aside>
                <aside class="announcement">
                    <img src="" class="img-circle avatar" alt="" width="55">
                    <div class="contents-wrapper">
                        <div class="texts">
                            <p>{{$job[0]->details}}</p>
                        </div>
                        <a href="{{route('job_apply', ['id'=>$job[0]->id, 'client'=>$job[0]->created_by_id])}}" class="btn btn-green">この案件・求人の詳細を聞きたい</a>
                    </div>
                </aside>
            </div>
            <div class="button-under button-center">
                <a href="{{route('job_apply', ['id'=>$job[0]->id, 'client'=>$job[0]->created_by_id])}}" class="btn btn-green">この案件・求人の詳細を聞きたい</a>
            </div>
        </section>


        <section class="related-projects page-section">
            <div class="section-wrapper section-wrapper__1224">
                <div class="header-texts">
                    <div class="green">サーバーエンジニア｜Webアプリケーション開発</div>
                    <div class="black">をチェックしたフリーランスの方は以下の案件・お仕事にエントリーしています。</div>
                </div>
                <div class="project-items">
                    @foreach($randomJobs as $job)
                    <div class="job-list">
                        <a href="{{route('details',['id'=>$job->id])}}">
                            <div class="title" style="background-image: url({{asset('assets/images/blog/blog-1.png')}})">
                                <div>
                                    <div class="professions"> UIデザイナー </div>
                                    <div class="technology">Photoshop / Illustrator</div>
                                </div>
                            </div>
                            <h4 class="job-title box-orient">[リモート] {{$job->title}}</h4>
                            <div class="technologies">
                                <span class="technology-name">Photoshop / Illustrator</span>
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

                <div class="button-center button-findOthers">
                    <a href="{{route('projects')}}" class="btn btn-green">他の案件・求人を探す</a>
                </div>
            </div>
        </section>


        <section class="faq-section page-section">
            <div class="section-wrapper section-wrapper__1100">
                <h3 class="section-title">ご登録にお悩みの方へ</h3>
                <h4 class="sub">よくある質問</h4>
                <div class="items">
                    <div class="item">
                        <h4 class="title">登録料金は必要ですか？</h4>
                        <div class="texts">
                            登録料金はかかりません。フリーランス（個人事業主）の方から料金をいただくことは一切ありませんので、ご安心ください。
                        </div>
                    </div>
                    <div class="item">
                        <h4 class="title">案件に申し込み期限はありますか？</h4>
                        <div class="texts">
                            求人企業で募集人数に達した場合など、案件がクローズする可能性があります。人気案件は申し込みも多くなるため、お早めにご相談ください。
                        </div>
                    </div>
                    <div class="item">
                        <h4 class="title">週3日、週4日などの仕事も可能ですか？</h4>
                        <div class="texts">
                            はい、可能です。フリーランスの方のご希望条件に合わせて、求人企業と条件交渉の代行も可能ですので、まずは
                            <br>ご登録ください。
                        </div>
                    </div>
                    <div class="item">
                        <h4 class="title">フリーランス初心者でスキルも不安ですが、案件に申し込みできますか？</h4>
                        <div class="texts">
                            フリーランス（個人事業主）が初めての方にも、案件ご参画までの流れやご契約内容を納得いくまでご説明させて頂きますので、ご安心ください。スキルについても、他のご経験、ポテンシャル、マインド次第で案件に参画が決まるフリーエンジニアやデザイナーの方も多くいらっしゃいますのでお気軽にご相談ください。
                        </div>
                    </div>
                    <div class="item">
                        <h4 class="title">電話やビデオチャットで面談可能ですか？</h4>
                        <div class="texts">
                            はい、可能です。PROFESSIONALフリーランスのオフィスにお越し頂かなくても、お電話やSkypeビデオチャットで簡単にカウンセリングを受けて頂けます。カウンセリングの時間も30分ほどで終わりますので、お気軽にご登録ください。
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="freelance-voice page-section">
            <div class="section-wrapper section-wrapper__1100">
                <h4 class="sub">「PROFESSIONALフリーランス」</h4>
                <h3 class="section-title">ご利用者の声</h3>
                <div class="items">
                    <div class="item">
                        <div class="avatar">
                            <img alt="" width="93.3" data-src="{{asset('assets/images/avatar_freelancer_web.png')}}" class="img-circle avatar lazyloaded" src="{{asset('assets/images/avatar_freelancer_web.png')}}"><noscript>
                                <img src="{{asset('assets/images/avatar_freelancer_web.png')}}" class="img-circle avatar" alt="" width="93.3"></noscript>
                        </div>
                        <h4 class="title">ブロックチェーン技術を活用したプラットフォーム開発</h4>
                        <div class="texts">
                            ブロックチェーン技術と仮想通貨を活用したプラットフォーム開発案件にエンジニアとして参画しました。インフラの構築からサーバーサイド（Ruby on Rails）の機能実装まで、幅広く仕事を任せてもらえて、ブロックチェーン技術など興味のある最新技術を実践で学ぶことができました。
                        </div>
                    </div>
                    <div class="item">
                        <div class="avatar">
                            <img alt="" width="93.3" data-src="{{asset('assets/images/avatar_freelancer_ios.png')}}" class="img-circle avatar lazyloaded" src="{{asset('assets/images/avatar_freelancer_ios.png')}}"><noscript><img src="{{asset('assets/images/avatar_freelancer_ios.png')}}" class="img-circle avatar" alt="" width="93.3"></noscript>
                        </div>
                        <h4 class="title">AI（人工知能）を活用したニュースメディア開発</h4>
                        <div class="texts">
                            ニュースメディアWEBサービスにおける追加開発の案件にエンジニアとして参画しましたが、AI（人工知能）技術をコアとするサービスでもあるため、開発メンバーの方からも最新の技術情報を色々教わりました。また、個人的に興味のあったPythonにも触れることができたのが良かったです。
                        </div>
                    </div>
                    <div class="item">
                        <div class="avatar">
                            <img alt="" width="93.3" data-src="{{asset('assets/images/avatar_freelancer_android.png')}}" class="img-circle avatar lazyloaded" src="{{asset('assets/images/avatar_freelancer_android.png')}}"><noscript><img src="{{asset('assets/images/avatar_freelancer_android.png')}}" class="img-circle avatar" alt="" width="93.3"></noscript>
                        </div>
                        <h4 class="title">ライブ動画配信アプリのデザインリニューアル提案</h4>
                        <div class="texts">
                            これまでWEBサイトのデザイン経験しかありませんでしたが、人気のライブ動画配信アプリのデザインリニューアルのプロジェクトに参加させて頂きました。最初は、スマホアプリのUI/UXデザインの知識があまりなかったため、少し大変でしたが、プロジェクトの方も良い方ばかりで無事にデザイン提案することができました。
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="inhouse-service-desc">
            <div class="title">

                サーバーエンジニア｜Webアプリケーション開発        <span>の求人・案件情報をご覧の方へ</span>
            </div>
            <div class="summary">PROFESSIONALフリーランスは、フリーランスエンジニア・WEBデザイナー向けの案件・求人紹介サイトです。</div>
            <ul class="points">
                <li>■ メリット1：開発現場に精通したフリーランス専門エージェント
                    <br>PROFESSIONALフリーランスは、スマホアプリ・WEBサービス・ゲームの豊富な開発実績を持つ株式会社モンスター・ラボが運営するIT/WEBフリーランス専門の案件・求人紹介エージェントです。IT/WEB業界の開発現場に精通したエージェントがフリーエンジニア・WEBデザイナーの個々のご希望をヒアリングして、個々にマッチする案件・お仕事をご紹介させて頂きます。全員プロフェッショナルのメンバーですので、ご希望に沿わない案件・求人を紹介されてしまう心配もございません。また、ITフリーランス（IT個人事業主）の方にもご安心してご利用いただけます。
                </li>
                <li>■ メリット2：エンド直の案件・求人で高単価・高収入を実現
                    <br>PROFESSIONALフリーランスの案件・求人は、エンドクライアント企業からの直案件のため、フリーランスの方へお支払いする業務委託料も高単価・高報酬を実現しています。また、フリーエンジニア・フリーランスWEBデザイナーの方のご経験やスキルに合った市場相場もご提示させていただきます。他のエージェントからPROFESSIONALフリーランスへ切り替えて、月収が10万円以上UPしたITフリーランス（IT個人事業主）の方も多数いらっしゃいます。
                </li>
                <li>■ メリット3：電話やリモート面談だから、お気軽なご登録が可能
                    <br>アップスターズフリーランスでは、フリーランスエンジニア・WEBデザイナーの方のご希望をヒアリングさせていただく個別相談会を都度実施しています。個別ヒアリングは、お電話またはSkypeなどのビデオチャットで実施し、フリーランスの方のお手間を極力取らせないようにしています。また、WEBサイト上には掲載されていない非公開案件・お仕事も多数ありますので、まずはお気軽にご登録・ご相談ください。
                </li>
            </ul>
        </section>
        <!-- End Candidates Area -->



@endsection