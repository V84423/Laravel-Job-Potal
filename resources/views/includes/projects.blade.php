@extends('layouts.projects')

@section('title')
    案件一覧
@endsection

@section('content')

	<link rel="stylesheet" href="assets/css/projects.css">

    <!-- End Header Area -->
    <div class="main-banner-area-with-bg-image" style="background: transparent;">

    </div>


    <div id="root-sub-header">
        @if (Session::get('role')==0)
        <a data-type="important_profile_sections_lack" href="{{route('user_info')}}">プロフィール完成度が30％以下です。自己紹介、この先やってみたいこと、職歴または学歴を入力して応募の返信率をあげよう。</a>
        @else
        <a data-type="important_profile_sections_lack" href="{{route('company_info')}}">プロフィール完成度が30％以下です。自己紹介、この先やってみたいこと、職歴または学歴を入力して応募の返信率をあげよう。</a>
        @endif
    </div>

    <div id="project-index-sub-header">
        <div id="featured-projects">
            <div class="featured-projects-wrapper">
                <div class="featured-projects-inner slick-initialized slick-slider">
                    <div class="slick-list draggable" style="padding: 0px;">

                        <div class="review-slides owl-carousel owl-theme">


                            @foreach($randomJobs as $job)

                            <div class="featured-project">
                                <a class="project-show-link" href="{{route('details',['id'=>$job->id])}}"></a>
                                <div class="project-cover">
                                    <img src="{{asset('storage').str_replace('public','',$job->company_bg)}}">
                                </div>
                                <div class="featured-project-details">
                                    <div class="title-icons">
                                        <div class="project-tags">
                                            <div class="project-tag small normal" style="color: #0e74b3; border-color: #0e74b3;">
                                                {{$job->positions}}
                                            </div>
                                            <div class="project-tag small inverted" style="background-color: #b36704;">
                                                @if($job->status == 1)
                                                        募集中
                                                @else
                                                        募集終了
                                                @endif
                                            </div>
                                            <div class="entry-count">
                                                
                                                <div class="entry-text">
                                                    募集⼈数
                                                </div>

                                                <div class="count">
                                                    {{$job->mates}}
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <h2 class="project-title">
                                        <a href="{{route('details',['id'=>$job->id])}}">{{$job->title}}</a>
                                    </h2>
                                    <p class="company-name" style="margin-bottom:0px;">
                                        <img class="rounded-circle" src="{{asset('storage').str_replace('public','',$job->user_photo)}}" style="width:50px;height: 50px;">
                                        <a href="{{route('company_details',['id'=>$job->user_id])}}" style="color: blue;font-size: 18px;margin-left: 14px;">                                            
                                            {{$job->user_company}}株式会社
                                        </a>
                                    </p>
                                    <div class="wt-ui-support-button wt-ui-support-button-small">
                                        <div class="wt-ui-button wt-ui-button-blue project-support-link">
                                            <i class="icon-bullhorn"></i>
                                        </div>
                                        <div class="count wt-support-count" data-project-id="791230">
                                            14
                                        </div>
                                    </div>
                                                              
                                    
                                </div>
                            </div>

                            @endforeach 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Employers Details Area -->

    <div class="checkout-area ptb-100">
        <div class="container">
            <form>
                <div class="row">                    
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-3 col-md-12">
                        <div class="order-details">
                            <h3 class="title">
                                <p class="projects-count">
                                    <span>検索条件</span>                                
                                </p>
                            </h3>

                            <form>
                                <div class="row align-items-center">                                
                
                                    
                                    <div class="form-group">
                                        <label><i class="icon-search"></i> 検索名（オプション）</label>
                                        <input type="text" class="form-control keyword" placeholder="キーワードで検索">
                                    </div>
                                                                      
                                    <div class="form-group">
                                        <label>職種</label>
                                        <input id="itemQuery" type="text" placeholder="Search" class="skill">
                                    </div>  
                                    
                                    <div class="form-group">
                                        <label>単金幅 <small style="color:grey">( 万円 )</small> </label>

                                        <select class="form-control estimate">
                                            <option value="0" selected="selected"></option>
                                            <option value="50">50万円 〜 60万円</option>
                                            <option value="60">60万円 〜 70万円</option>
                                            <option value="70">70万円 〜 80万円</option>
                                            <option value="80">80万円 〜 90万円</option>
                                            <option value="90">90万円 〜 100万円</option>
                                            <option value="100">100万円 〜 </option>
                                        </select>
                                        
                                    </div>  
                                      
                                </div>
                            </form>                      
                            
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title"><p class="projects-count">
                                <span class="current">{{$getJobs}}件</span>
                                <span class="per"> / </span>
                                <span class="total">{{$allJobs}}件</span>
                                </p>
                            </h3>

                            <div class="row">
                                <div class="projects-index-list">


                                    @foreach($randomJobs as $job)

                                        
                                    <article class="projects-index-single">
                                        <div class="project-index-single-outer">
                                            <div class="project-index-single-inner">
                                                <div class="project-cover-wrapper">
                                                    <div class="cover-image">
                                                        <img width="560" height="228" class="lazy" src="{{asset('storage').str_replace('public','',$job->company_bg)}}" style="">
                                                    </div>
                                                </div>
                                                <div class="project-detail">
                                                    <div class="project-tags">
                                                        <div class="project-tag small normal" style="color: #b36704; border-color: #b36704;">
                                                            {{$job->positions}}
                                                        </div>
                                                        <div class="project-tag small inverted" style="background-color: #b36704;">
                                                            @if($job->status == 1)
                                                                    募集中
                                                            @else
                                                                    募集終了
                                                            @endif
                                                        </div>
                                                        <div class="entry-count">
                                                            
                                                            <div class="entry-text">
                                                                募集⼈数
                                                            </div>

                                                            <div class="count">
                                                                {{$job->mates}}
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <h1 class="project-title">
                                                        <a href="{{route('details',['id'=>$job->id])}}">{{$job->title}}</a>
                                                    </h1>
                                                    <p class="project-excerpt">
                                                        {{$job->address}}
                                                    </p>
                                                    <p class="project-excerpt">
                                                        <span> 単⾦幅 : {{$job->estimate}} 万円</span>
                                                    </p>
                                                    <p class="project-excerpt">
                                                        <span> 開発期間 : {{$job->during}} (更新の可能性あり)</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="project-bottom">
                                                <div class="company-thumbnail">
                                                    <a href="{{route('company_details',['id'=>$job->user_id])}}">
                                                        <img  width="60" height="60" class="lazy" src="{{asset('storage').str_replace('public','',$job->user_photo)}}">
                                                    </a>
                                                </div>
                                                <div class="company-name">
                                                    <h3>
                                                        <a href="{{route('company_details',['id'=>$job->user_id])}}">{{$job->user_company}}株式会社 {{$job->user_name}}</a>
                                                    </h3>
                                                </div>
                                                <div class="actions-and-metas">
                                                    <div class="wt-ui-support-button">
                                                        <a class="project-support-link">
                                                            <i class="wt-icon wt-icon-support"></i>
                                                            <span class="wt-support-count">32</span>
                                                        </a>
                                                    </div>
                                                    <div class="bookmark-button">
                                                        <form class="button_to" method="post" action="" data-remote="true">
                                                            <button class="bookmark-submit-button" type="submit">
                                                                <i class="wt-icon wt-icon-bookmark-o-2"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>



                                    @endforeach 



                                </div>

                                <ul id="pagination-demo" class="pagination-sm"></ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12"></div>

                    
                </div>
            </form>
        </div>
    </div>
    <!-- End Employers Details Area -->














@endsection