@extends('layouts.site')

@section('title')
法人検索
@endsection

@section('content')

		<link rel="stylesheet" href="{{asset('assets/css/seclarch.css')}}">
        <style>
            .main-banner-area-with-bg-image {
                height: 516px;
                background-image: url(../../assets/images/main-banner/banner-two/client.jpg);
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


        <!-- Start Main Banner Area -->
        <div class="main-banner-area-with-bg-image">
            <div class="container-fluid">
                <div class="main-banner-content-with-search" data-speed="0" data-revert="true">
                    <section class="top_hero1">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 mb-5 text-center" style="color:white;">
                                    
                                    <!-- <form action="{{route('search_company')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" placeholder="Search.." name="keyword" required="" style="
                                                    width: 70%;
                                                    height: 40px;
                                                    border-style: initial;
                                                    border-radius: 5px;
                                                    padding: 10px;
                                                    margin-bottom: 4vh;
                                                ">
                                        </div>

                                        <button type="submit" class="btn btn-free-reg btn-free-reg__red" style="
                                                font-size: 18px;
                                                width: 20%;
                                                height: 60px;
                                                padding: 0px;
                                                ">法人検索</button>


                                    </form> -->
                                    <h2 class="big-text">フリーランスで自分らしい <br>
                                        働き方・キャリアを叶えよう。</h2>
                                    <div class="input-group" style="display: -webkit-box; margin-left: 11vw;margin-bottom: 3vh;margin-top: 3vh;">
                                      <div class="form-outline" style="width:50%">
                                        <input type="search" id="keyword" class="form-control" placeholder="Search.." />
                                      </div>
                                      <button type="button" class="btn btn-primary search_btn">
                                        法人検索
                                      </button>                                      
                                    </div>
                                    <span>エンジニア・UI/UXデザイナー・WEBディレクターの求人・案件をご紹介</span>



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
                    <h3 class="section-title search-pages">検索された法人</h3>
                    <div class="search-case-items">

                        
                        
                        
                    </div>  
                </div>
              </section>
        </div>

        <!-- End Candidates Area -->


@endsection

@section('scripts')

<script type="text/javascript">
    

    var route_company = "{{route('search_company')}}";
    var keyword = '';

     function searchClient(){


        $("#overlay1").fadeIn(300);

                $.post(route_company,{
                    
                    "_token": token,
                    keyword:keyword,

                }, function(res){


                    $(".search-case-items").empty();
                    var i =0;
                    for(i in res){
                        
                        $(".search-case-items").append('<div class="job-list">'+
                            '<a href="'+base_url+'/details/company/'+res[i]['created_by_id']+'">'+
                                '<div class="title" style="background-image: url('+path_storage+res[i]['bg_image'].replace('public','')+'">'+
                                '</div>'+
                                '<h4 class="job-title box-orient"> '+
                                    res[i]['name']+
                                '</h4>'+
                                '<a href="'+res[i]['url']+'" style="font-size:11px" target="blank">会社ホームページアドレス</a>'+
                                '<div class="technologies">'+
                                    '<span class="technology-name"> 電話番号 : '+res[i]['phone']+'</span>'+
                                '</div>'+
                                '<div class="location">'+
                                    '<span class="station">場所 : </span>'+
                                    '<span class="station">'+res[i]['address']+'</span>'+
                                '</div>'+
                                '<div class="price">'+
                                    '<span class="unit-price-label">資本金</span>'+
                                    '<span class="unit-price-value">'+res[i]['capital']+'万円</span>'+
                                '</div>'+
                            '</a>'+
                        '</div>');
                        
                    }


                    $("#overlay1").fadeOut(300);

                });


     }


     $(".search_btn").click(function(){

        keyword = $("#keyword").val();
        searchClient();

     });

     searchClient();





























</script>

@endsection