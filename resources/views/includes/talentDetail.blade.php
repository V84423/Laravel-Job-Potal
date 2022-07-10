@extends('layouts.site')

@section('title')
    人材情報
@endsection

@section('content')

		<style>
            .main-banner-area-with-bg-image {
                height: 720px;
                /* background-image: url(../../assets/images/main-banner/banner-two/talent.jpg); */
                background-image: linear-gradient(to left, #1B85DC, #08B0CB);
            }

        </style>

        <!-- Start Main Banner Area -->
        <div class="main-banner-area-with-bg-image">
            <div class="container-fluid">
                <div class="main-banner-content-with-search" data-speed="0" data-revert="true">
                    <section class="top_hero" style="margin-top: 20vh;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 left-side">
                                    <div class="left-side-wrapper">
                                        <span class="big-text">エンジニア・UI/UXデザイナー・WEBディレクターの求人・案件をご紹介 <br></span>                                        
                                    </div>
                                </div>
                                <div class="col-md-6 left-side right-side">
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Candidates Area -->
        
        <div class="container" style="margin-bottom:15vh">
				
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                            <h2>
                                <img src="{{asset('storage')}}/{{str_replace('public','',$user[0]->photo)}}" class="rounded-circle" alt="image" style="border: 1px solid;height: 50px;width: 50px;">
                                {{$user[0]->lastname}}{{$user[0]->firstname}} <small>{{$skill[0]->status}}</small>
                            </h2>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    
                    
                    <br>
                    <p>⽣年⽉⽇ <?php $date=date_create($skill[0]->birthday); echo date_format($date,'Y年m⽉d⽇'); ?> </p>
                    <p>性別  {{$skill[0]->gender}} </p>
                    <p>国籍  {{$skill[0]->country}} </p>
                    <br>
                    
                    
                    <p>業界経験年数 {{$skill[0]->expYear}} 
                    <br>
                    @foreach(explode(',', $skill[0]->engineerDevelopmentPhase) as $lang)                    
                        <span class="label label-primary"></i>{{$lang}}</span>                    
                    @endforeach
                    @foreach(explode(',', $skill[0]->webDevelopmentPhase) as $lang)                    
                        <span class="label label-success"></i>{{$lang}}</span>                    
                    @endforeach
                    @foreach(explode(',', $skill[0]->pmDevelopmentPhase) as $lang)                    
                        <span class="label label-info"></i>{{$lang}}</span>                    
                    @endforeach
                    </p>


                    <p> 言語・ツール : 
                    <br>
                    @foreach(explode(',', $skill[0]->engineerLanguageTools) as $lang)                    
                        <span class="label label-info"></i>{{$lang}}</span>                    
                    @endforeach
                    @foreach(explode(',', $skill[0]->webDevelopmentTools) as $lang)                    
                        <span class="label label-info"></i>{{$lang}}</span>                    
                    @endforeach
                    @foreach(explode(',', $skill[0]->pmDevelopmentProduct) as $lang)                    
                        <span class="label label-info"></i>{{$lang}}</span>                    
                    @endforeach
                    </p>
                    
                    
                    <p>{{$skill[0]->details}}</p>
                    <br>
                    <p>希望単⾦ : {{$skill[0]->wUnit}} 希望場所 :  {{$skill[0]->wArea}}</p>
                    <p>電話番号  {{$skill[0]->phone}} </p>

                    
                </div>
                <br>
            </div>
        </div>
        <!-- End Candidates Area -->


@endsection