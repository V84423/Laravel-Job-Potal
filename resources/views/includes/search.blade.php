@extends('layouts.site')

@section('title')
    案件検索
@endsection

@section('content')
        <style type="text/css">
            .feel-free-to-contact .btn-green {
                
                line-height: 3;
            }

            #overlay1{ 
              position: fixed;
              top: 0;
              z-index: 100;
              width: 100%;
              height:100%;
              display: none;
              background: rgba(0,0,0,0.6);
            }
            .cv-spinner1 {
              height: 100%;
              display: flex;
              justify-content: center;
              align-items: center;  
            }
            .spinner1 {
              width: 40px;
              height: 40px;
              border: 4px #ddd solid;
              border-top: 4px #2e93e6 solid;
              border-radius: 50%;
              animation: sp-anime 0.8s infinite linear;
            }
            @keyframes sp-anime {
              100% { 
                transform: rotate(360deg); 
              }
            }
            .is-hide{
              display:none;
            }


        </style>

        <div id="overlay1">
          <div class="cv-spinner1">
            <span class="spinner1"></span>
          </div>
        </div>





		<link rel="stylesheet" href="{{asset('assets/css/search.css')}}">

        <!-- Start Main Banner Area -->
        <div class="main-banner-area-with-bg-image">
            <div class="container-fluid">
                <div class="main-banner-content-with-search" data-speed="0" data-revert="true">
                    <section class="top_hero" style="margin-top:100px">
                        <div class="container">
                            <!-- <div class="row align-items-center">
                                <div class="col-md-12 mb-5 text-center">
                                    <h2 class="heading mb-2 display-5 font-light ">職種から探す</h2>
                                </div>
                                <ul class="col-md-12 project_quick_link">
                                    <li>
                                        <a href="3Dデザイナー" title="">
                                            3Dデザイナー
                                        </a>
                                    </li>
                                    <li>
                                        <a href="サーバーエンジニア" title="">
                                            サーバーエンジニア
                                        </a>
                                    </li>
                                    <li>
                                        <a href="UXデザイナー" title="">
                                            UIデザイナー
                                        </a>
                                    </li>
                                    <li>
                                        <a href="WEBデザイナー" title="">
                                            WEBディレクター・PM
                                        </a>
                                    </li>
                                    <li>
                                        <a href="フロントエンジニア" title="">
                                            フロントエンジニア
                                        </a>
                                    </li>
                                    <li>
                                        <a href="WEBデザイナー" title="">
                                            WEBデザイナー
                                        </a>
                                    </li>
                                    <li>
                                        <a href="ゲームエンジニア" title="">
                                            ゲームエンジニア
                                        </a>
                                    </li>
                                    <li>
                                        <a href="SE（システムエンジニア）" title="">
                                            SE（システムエンジニア）
                                        </a>
                                    </li>
                                    <li>
                                        <a href="クリエイター（ゲーム・動画）" title="">
                                            クリエイター（ゲーム・動画）
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="left-side-wrapper">
                                        
                                        <h2 style="
                                                margin-top: 20vh;
                                                margin-bottom: 5vh;
                                            ">エンジニア・UI/UXデザイナー・WEBディレクターの求人・案件をご紹介</h2>

                                        <div class="input-group" style="display: -webkit-box; margin-left: 2vh;">
                                          <div class="form-outline" style="width:50%">
                                            <input type="search" id="keyword" class="form-control" placeholder="Search.." />
                                          </div>
                                          <button type="button" class="btn btn-primary search_btn">
                                            案件検索
                                          </button>
                                        </div>

                                    </div>
                                </div>    

                                <div class="col-md-6 left-side right-side">
                                    <div class="form-group">
                                        <span class="top-form-heading text-center">どんな仕事があるか探す</span>
                                        <div class="select-wrapper">
                                            <select class="selectize-filter skill">
                                                <option value="">言語・ツール</option>
                                                    <option value="figma">Figma</option>
                                                    <option value="vue-js">Vue.js</option>
                                                    <option value="react">react</option>
                                                    <option value="jquery">jQuery</option>
                                                    <option value="asp-net">ASP.net</option>
                                                    <option value="vb-net">VB.NET</option>
                                                    <option value="maya">MAYA</option>
                                                    <option value="c">C++</option>
                                                    <option value="typescript">TypeScript</option>
                                                    <option value="Ruby">Ruby</option>
                                                    <option value="PHP">PHP</option>
                                                    <option value="JAVA">JAVA</option>
                                                    <option value="GO">GO</option>
                                                    <option value="Python">Python</option>
                                                    <option value="Scala">Scala</option>
                                                    <option value="JavaScript">JavaScript</option>
                                                    <option value="Swift">Swift / iOS</option>
                                                    <option value="Android">Android Java</option>
                                                    <option value="Kotlin">Kotlin</option>
                                                    <option value="Unity">Unity</option>
                                                    <option value="C">C#</option>
                                                    <option value="HTML">HTML / CSS</option>
                                                    <option value="Photoshop">Photoshop / Illustrator</option>
                                            </select>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <div class="select-wrapper">
                                            <select class="selectize-filter position">
                                                <option value="">職種</option>
                                                    <option value="データエンジニア">データエンジニア</option>
                                                    <option value="PM">PM</option>
                                                    <option value="UXデザイナー">UXデザイナー</option>
                                                    <option value="情報システム">情報システム</option>
                                                    <option value="Goエンジニア">Goエンジニア</option>
                                                    <option value="3Dデザイナー">3Dデザイナー</option>
                                                    <option value="アーキテクチャエンジニア">アーキテクチャエンジニア</option>
                                                    <option value="UIデザイナー">UIデザイナー</option>
                                                    <option value="QAエンジニア">QAエンジニア/テストエンジニア</option>
                                                    <option value="サーバーエンジニア">サーバーエンジニア</option>
                                                    <option value="フロントエンジニア">フロントエンジニア</option>
                                                    <option value="スマホアプリエンジニア">スマホアプリエンジニア</option>
                                                    <option value="WEBデザイナー">WEBデザイナー</option>
                                                    <option value="WEBディレクター・PM">WEBディレクター・PM</option>
                                                    <option value="ゲームエンジニア">ゲームエンジニア</option>
                                                    <option value="SE（システムエンジニア）">SE（システムエンジニア）</option>
                                                    <option value="ゲームプランナー・ディレクター">ゲームプランナー・ディレクター</option>
                                                    <option value="クリエイター（ゲーム・動画）">クリエイター（ゲーム・動画）</option>
                                                    <option value="マークアップ・コーダー">マークアップ・コーダー</option>
                                                    <option value="インフラエンジニア">インフラエンジニア</option>
                                                    <option value="ヘルプデスク・その他">ヘルプデスク・その他</option>
                                                </select>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <div class="select-wrapper">
                                            <select class="selectize-filter estimate">
                                                <option value="">単価</option>
                                                    <option value="40">〜40万円</option>
                                                    <option value="50">〜50万円</option>
                                                    <option value="60">〜60万円</option>
                                                    <option value="70">〜70万円</option>
                                                    <option value="80">〜80万円</option>
                                                    <option value="90">〜90万円</option>
                                                    <option value="100">〜100万円</option>
                                                    <option value="over100">101万円〜</option>
                                            </select>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                        <div class="select-wrapper">
                                            <select class="selectize-filter address">
                                                <option value="">エリア</option>
                                                   <option value="フルリモート">フルリモート</option>
                                                    <option value="蒲田">蒲田</option>
                                                    <option value="東京・日本橋・大手町">東京・日本橋・大手町</option>
                                                    <option value="渋谷・原宿・代官山">渋谷・原宿・代官山</option>
                                                    <option value="品川・三田・浜松町">品川・三田・浜松町</option>
                                                    <option value="秋葉原・神田・御茶ノ水">秋葉原・神田・御茶ノ水</option>
                                                    <option value="三軒茶屋・世田谷・池尻大橋">三軒茶屋・世田谷・池尻大橋</option>
                                                    <option value="下北沢・笹塚・明大前">下北沢・笹塚・明大前</option>
                                                    <option value="上野・日暮里・御徒町">上野・日暮里・御徒町</option>
                                                    <option value="五反田・大崎">五反田・大崎</option>
                                                    <option value="六本木・麻布・赤坂">六本木・麻布・赤坂</option>
                                                    <option value="恵比寿・中目黒・目黒">恵比寿・中目黒・目黒</option>
                                                    <option value="新宿・代々木・大久保">新宿・代々木・大久保</option>
                                                    <option value="池袋・高田馬場・目白">池袋・高田馬場・目白</option>
                                                    <option value="神保町・水道橋・九段下">神保町・水道橋・九段下</option>
                                                    <option value="神楽坂・飯田橋・四谷">神楽坂・飯田橋・四谷</option>
                                                    <option value="銀座・京橋・有楽町">銀座・京橋・有楽町</option>
                                                    <option value="高円寺・荻窪・中野・阿佐ヶ谷">高円寺・荻窪・中野・阿佐ヶ谷</option>
                                                    <option value="その他">その他</option>
                                                </select>
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>                                    

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Candidates Area -->
        <div class="job-list-area pb-100" style="margin-top:10em">
            <section class="page-section search_result_search-cases search-result-container-js">
                <div class="section-wrapper section-wrapper__1224">
                    <h3 class="section-title search-pages">検索された案件・求人</h3>
                    <div class="search-case-items">

                        
                        
                        
                    </div>  
                </div>
              </section>
        </div>

        <div class="feel-free-to-contact no-load-more-item-js ">
            <div class="icon"></div>
            <div class="desc">
                <span class="underline_y">好条件、</span>
                <span class="underline_g">高給与</span>
                など人気の求人の多くは非公開となっています。
                <br> お気軽にお問い合わせください。
                <br> あなたにマッチした求人を多数紹介します。
            </div>
            <a href="#" class="btn btn-green">
              相談してみる
            </a>
        </div>  
        
        <div class="job-list-area pb-100">
            <section class="inhouse-service-desc"></section>

            <section class="find-other-jobs">
                <h3 class="section-title">その他の案件・求人を探す</h3>
                <div class="buttons">
                    <span class="btn find-other-jobs_btn">Ruby</span></a>
                    <span class="btn find-other-jobs_btn">PHP</span></a>
                    <span class="btn find-other-jobs_btn">Java</span></a>
                    <span class="btn find-other-jobs_btn">JavaScript</span></a>
                    <span class="btn find-other-jobs_btn">Swift</span></a>
                    <span class="btn find-other-jobs_btn">Kotlin</span></a>
                    <span class="btn find-other-jobs_btn">Android Java</span></a>
                    <span class="btn find-other-jobs_btn">Unity</span></a>
                    <span class="btn find-other-jobs_btn">Photoshop / Illustrator</span></a>
                </div>
            </section>

        </div>
        <!-- End Candidates Area -->


@endsection


@section('scripts')
<script type="text/javascript">

            var token = "{{ csrf_token() }}";
            var route_project = "{{route('project_search')}}";
            var keyword='', skill='',position='', estimate=''; address = '';

            function searchProject(){

                $("#overlay1").fadeIn(300);

                $.post(route_project,{
                    
                    "_token": token,
                    keyword:keyword,
                    skill:skill,
                    position:position,
                    estimate:estimate,
                    address:address,

                }, function(res){


                    $(".search-case-items").empty();
                    var i =0;
                    for(i in res){
                        
                        var status = res[i]['status']==1?'募集中':'募集終了';
                        var bg_url = '';
                        if(res[i]['positions'].search('デザイナー') != -1) bg_url = "{{asset('assets/images/blog/design.png')}}";
                        else if(res[i]['positions'].search('PM') != -1) bg_url = "{{asset('assets/images/blog/PM.png')}}";
                        else if(res[i]['positions'].search('QA') != -1) bg_url = "{{asset('assets/images/blog/QA.png')}}";
                        else if(res[i]['positions'].search('SE') != -1) bg_url = "{{asset('assets/images/blog/SE.png')}}";
                        else if(res[i]['positions'].search('ゲーム') != -1) bg_url = "{{asset('assets/images/blog/game.png')}}";
                        else if(res[i]['positions'].search('コーダー') != -1) bg_url = "{{asset('assets/images/blog/coder.png')}}";
                        else if(res[i]['positions'].search('エンジニア') != -1) bg_url = "{{asset('assets/images/blog/engineer.png')}}";                        
                        else bg_url = "{{asset('assets/images/blog/other.png')}}";

                        $(".search-case-items").append('<div class="job-list">'+
                            '<a href="'+base_url+'/details/'+res[i]['id']+'">'+
                                '<div class="title" style="background-image: url('+bg_url+')">'+
                                    '<div>'+
                                        '<div class="professions"> '+res[i]['positions']+' </div>'+
                                        '<div class="technology"> '+res[i]['skills']+' </div>'+
                                    '</div>'+
                                '</div>'+
                                '<h4 class="job-title box-orient">'+res[i]['title']+'</h4>'+
                                '<div class="technologies">'+
                                    '<span class="technology-name"> '+res[i]['skills']+' </span>'+
                                '</div>'+
                                '<div class="location">'+
                                    '<span class="station">最寄駅 : </span>'+
                                    '<span class="station">'+res[i]['address']+'</span>'+
                                '</div>'+
                                '<div class="price">'+
                                    '<span class="unit-price-label">単価（税抜き）</span>'+
                                    '<span class="unit-price-value">'+res[i]['estimate']+'万円</span>'+
                                '</div>'+
                            '</a>'+
                        '</div>');

                        
                    }


                    $("#overlay1").fadeOut(300);

                });                    
                
            }



            $(".selectize-filter").change(function(){
                

                skill = $(".skill").val();
                position = $(".position").val();
                estimate = $(".estimate").val();
                address = $(".address").val();

                searchProject();

            });


            $(".search_btn").click(function(){

                keyword = $("#keyword").val();
                searchProject();

            });

            $(".find-other-jobs_btn").click(function(){

                keyword='', skill='',position='', estimate=''; address = '';
                skill = $(this).text();
                searchProject();
                keyword='', skill='',position='', estimate=''; address = '';

            });


            searchProject();



























</script>
@endsection