@extends('layouts.company')

@section('title')
    企業情報
@endsection

@section('content')

    <style type="text/css">
        
        .main-banner-area-with-bg-image {
            height: 200px;
        }

    </style>


	<!-- Start Main Banner Area -->
    <div class="main-banner-area-with-bg-image" style="background: transparent;">
    </div>
    <!-- End Main Banner Area -->



    <div class="container" style="margin-bottom: 10vh;">
					

        <div class="row">
            <div class="col-md-12">
            
                <div class="page-header">
                    <h2>
                        <img src="{{asset('storage')}}/{{str_replace('public','',$user[0]->photo)}}" class="rounded-circle" alt="image" style="border: 1px solid;height: 50px;width: 50px;"> 
                        {{$user[0]->company}} 株式会社
                    </h2>
                </div>

            </div>
        </div>





        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <img src="{{asset('storage')}}/{{str_replace('public','',$company[0]->bg_image)}}" class="img-rounded img-responsive">
                <p></p>
            </div>        
        </div>

        <div class="row">
            <div class="col-md-12">
                
                
                <h4 class="language">
                    <span class="label label-warning">
                        <i class="fa fa-child fa-lg"></i> 働いてくれる人
                    </span> 
                    <span class="label label-warning">
                        <i class="fa fa-code fa-lg"></i> プログラムを設計、開発してくれる人
                    </span> 
                </h4>
                
                <p>株式会社</p>
                <!-- <p>設　立　平成2年6月<br> -->
                <p>設　立　{{$company[0]->found_at}}<br>
                資本金　{{$company[0]->capital}}万円<br>
                従業員　{{$company[0]->employee}}名<br>
                <br>
                事業内容<br>
                1.コンピュータソフトウェア設計開発及び販売<br>
                2.コンピュータソフトウェア・システムサポート<br>
                3.コンピュータハードウェア設計開発及び販売<br>
                4.その他、上記に付帯する事業<br>
                <br>
                {{$company[0]->details}}
                <p>
                    <span id="e881581694">
                        <a href="{{$company[0]->url}}">{{$company[0]->url}}</a>
                    </span>
                </p>
                <!-- <p>
                    <a href="http://www.zephyr-system.co.jp" target="_blank">http://www.zephyr-system.co.jp</a>
                </p> -->
                
                <p>{{$company[0]->address}}</p>
                <p>最寄り駅 JR線 五反田駅</p>
                <p>Tel: {{$company[0]->phone}}</p>
                <p>Fax: 03-5793-7632</p>
                
                
                
                
                <!-- <p class="text-muted">総数 12,036 今日 1 昨日 1 &nbsp;&nbsp;&nbsp; 前回利用日 2021/12/27</p>

                <p><a href="https://www.seprogrammerjobs.com/member/letter/edit/2018" class="btn btn-primary">メールを送信する</a></p> -->

            </div>
        </div>
    </div>


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