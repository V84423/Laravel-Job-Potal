@extends('layouts.site')

@section('title')
    個人情報保護方針
@endsection

@section('content')

<!-- Start Main Banner Area -->
<div class="main-banner-area-with-bg-image" style="background: transparent;">
    
</div>
<!-- End Main Banner Area -->
<div class="agreement">
  <div class="container">
    <h3 class="top-title">個人情報保護方針</h3>
    <section class="index">
      <p style="text-align: right;">最終改定日：2019年12月16日<br>
      制定日：2009年1月27日</p>
      <br>


      <ol>
        <li>株式会社モンスター・ラボ（以下、「当社」と呼びます）は、Webサイトの戦略立案・構築・運営等を通して、「Ｗｅｂ技術で世界を変える先駆者となる」ことを企業理念として掲げ、それに相応しい企業となるために、当社が取扱う個人情報の保護について、社会的責任を十分に認識し、本人の権利利益を保護して、個人情報に関する法規制等を遵守致します。<br>
      また、以下に示す方針を具現化するために、個人情報保護マネジメントシステムを構築し、最新のＩＴ・セキュリティ技術の動向、社会的要請の変化、経営環境の変動等を常に認識しながら、その継続的な改善に、全社を挙げて取り組むことをここに宣言致します。</li>
      </ol>
    </section>
    <section class="index">
      <h4 class="section-title"></h4>
      <ol>
        <li>1. 当社は、Webサービス・アプリの戦略立案・開発・運営並びに従業員の雇用、人事管理等において取扱う個人情報について予め特定された利用目的の範囲内において、個人情報の適切な取得・利用・提供を行い、利用目的の達成に必要な範囲を超えた個人情報の取扱い(目的外利用)は行いません。また、そのための適切な措置を講じます。</li>
        <li></li>
        <li>2. 当社は個人情報の取扱いに関する法令、国が定める指針及びその他の規範を遵守致します。</li>
        <li></li>
        <li>3. 当社は個人情報への不正アクセス、個人情報の漏えい、滅失又はき損等のリスクに対しては、合理的な安全対策を講じ、事業の実情に合致した経営資源を注入し、個人情報のセキュリティ体制を継続的に向上させて行きます。また不適切な事項については是正を行うなどの内部規程を定め、個人情報を最善の状態で保護致します。</li>
        <li></li>
        <li>4. 当社は個人情報の取扱いに関する苦情及び相談対応への内部規程を定め、苦情及び相談には、迅速かつ誠実に対応致します。</li>
        <li></li>
        <li>5. 個人情報保護マネジメントシステムについて、当社を取り巻く環境の変化を踏まえ、適時・適切に見直して、その改善を継続的に推進して行きます。</li>
        <li></li>
      </ol>

      <br>
      <p style="padding-left: 5vh;">  本方針は、当社および当社子会社の全役員並びに従業者に配布して周知徹底させると共に、当社のホームページに掲載することにより、いつでも、どなた様でも入手可能な措置を講ずるものとします。</p>
      <p><!-- /wp:paragraph --><br>
      <!-- wp:paragraph {"align":"right"} --></p>
      <p style="text-align: right;">株式会社モンスターラボホールディングス　代表取締役　鮄川 宏樹</p>
      <p style="text-align: right;">株式会社モンスターラボ　　　　　　　　&nbsp; &nbsp; 代表取締役　長田 寛司</p>
      <p style="text-align: right;">以上</p>
      <p><!-- /wp:paragraph --></p>
      <p style="padding-left: 10vh;">個人情報保護苦情・相談窓口 ：　 笹本 さゆり<br>
      〒150-0012東京都渋谷区広尾1-1-39 恵比寿プライムスクエアタワー4F<br>
      TEL：03-4455-7243&nbsp; FAX：03-6303-1671<br>
      メー ル：info@monstar-lab.com<br>
      URL：http://monstar-lab.com/</p>
    </section>
    
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