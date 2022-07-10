@extends('layouts.company_profile')

@section('title')
    新規登録
@endsection

@section('content')

    <style>

        .selectize-input {
            border: 0px solid #d0d0d0;
            padding: 0px 0px;
            font-size: 18px;
            height: 55px;
        }

        .selectize-control {
            position: relative;
            padding: 0px !important;
        }

        .selectize-control.multi .selectize-input>div {
            background: #1c905a;
            color: #f9f9f9;
            border-radius: 5px;
        }

        .skill-registration-form .telephone-number .skill-phone-number {
            max-width: none;
        }

        textarea { 
          font-family: ヒラギノ角ゴ Pro,Hiragino Kaku Gothic Pro,メイリオ,Meiryo,Osaka,ＭＳ\ Ｐゴシック,MS PGothic,MS Gothic,ＭＳ\ ゴシック,Helvetica Neue,Helvetica,Arial,sans-serif!important;
          font-size: 18px;
          white-space: pre;
          word-wrap: normal;
          padding: 0.1em 0.3em;
          border: solid thin;
          overflow: auto;
          width: 25em; /* fallback for browsers not supporting ch */
          width: 60ch;
        }


    </style>
    @if (Session::has('msg'))
    <div class="notification-alert alert alert-success alert-dismissible show" role="alert" align="center">
        {{ Session::get('msg') }}
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="top:10px;">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    <section class="skill-registration-form">
        <div class="skill-registration-form-inner form-wrapper-js">
            
            <form action="{{ route('registration-project')}}" method="post" class="appstar-skill-form-js" novalidate="novalidate" id="companyPostForm">

                @csrf
            	<div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">案件名 *
                    </h4>
                    <input type="text" placeholder="例 )　求人メディア運営会社でのデザイン制作" name="title" required="" class="skill-phone-number" style="max-width: 100%;">
                    <span class="reg-error">案件名は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">契約形態
                    </h4>
                    <select name="projectType" class="skill-phone-number">
                        <option value="フリーランス（業務委託契約）">フリーランス（業務委託契約）</option>
                    </select>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">ポジション
                    </h4>
                    <select name="positions" class="skill-phone-number">
                        <option value="3Dデザイナー">3Dデザイナー</option>
                        <option value="Goエンジニア">Goエンジニア</option>
                        <option value="PM">PM</option>
                        <option value="QAエンジニア/テストエンジニア">QAエンジニア/テストエンジニア</option>
                        <option value="SE（システムエンジニア）">SE（システムエンジニア）</option>
                        <option value="UIデザイナー">UIデザイナー</option>
                        <option value="UXデザイナー">UXデザイナー</option>
                        <option value="WEBディレクター・PM">WEBディレクター・PM</option>
                        <option value="WEBデザイナー">WEBデザイナー</option>
                        <option value="アーキテクチャエンジニア">アーキテクチャエンジニア</option>
                        <option value="インフラエンジニア">インフラエンジニア</option>
                        <option value="クリエイター（ゲーム・動画）">クリエイター（ゲーム・動画）</option>
                        <option value="ゲームエンジニア">ゲームエンジニア</option>
                        <option value="ゲームプランナー・ディレクター">ゲームプランナー・ディレクター</option>
                        <option value="サーバーエンジニア">サーバーエンジニア</option>
                        <option value="スマホアプリエンジニア">スマホアプリエンジニア</option>
                        <option value="データエンジニア">データエンジニア</option>
                        <option value="フロントエンジニア">フロントエンジニア</option>
                        <option value="ヘルプデスク・その他">ヘルプデスク・その他</option>
                        <option value="マークアップ・コーダー">マークアップ・コーダー</option>
                        <option value="情報システム">情報システム</option>
                    </select>
                </div>


                <div class="skill-comment-section">
                    <h4 class="appstar-section-title appstar-multi-line-heading">仕事内容 </h4>
                    <h4 class="appstar-title-hints">（案件詳細情報を入力してください）</h4>
                    <textarea name="details"></textarea>
                    <span class="reg-error">仕事内容は必須です</span>
                </div>

                <br><br>
                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">言語・ツール *
                    </h4>
                    <input type="text" name="skills" class="skill-phone-number" style="max-width: 100%;">
                    <span class="reg-error">言語・ツールは必須です</span>
                </div>

                

<!--                 <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">エリア<span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" name="areas" class="skill-phone-number" style="max-width: 100%;">
                    <span class="reg-error">エリアは必須です</span>
                </div> -->

                <!--end other options  -->


                
                <br/>
                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">単価 (スキル見合い)<span class="appstar-title-hints">(万円)</span> *
                    </h4>
                    <input type="tel" placeholder="例 )　60 〜 80" name="estimate" required="" class="skill-phone-number" aria-required="true">
                    <span class="reg-error">単価は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">募集人数 <span class="appstar-title-hints">(人)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　1 〜 3" name="mates" required="" class="skill-phone-number">
                    <span class="reg-error">募集人数は必須です</span>
                </div>


                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">最寄駅 <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" name="address" placeholder="例 ) 渋谷駅（山手線、埼京線、湘南新宿ライン、東横線、田園都市線、銀座線、半蔵門線、副都心線）" class="skill-phone-number">
                    <span class="reg-error">最寄駅は必須です</span>
                </div>


                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">開発期間 (更新の可能性あり)<span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" name="during" placeholder="例 )　2022/1/4〜2022/3/31" required="" class="skill-phone-number">
                    <span class="reg-error">開発期間は必須です</span>
                </div>


                <!-- <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">最寄駅
                    </h4>
                    <input type="text" placeholder="例 )　勝どき駅（都営大江戸線）" name="byStation" required="" class="skill-phone-number">
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">想定期間  
                    </h4>
                    <select name="workTime" required="" class="skill-phone-number">
                        <option value="即日">即日</option>
                        <option value="長期を想定">長期を想定</option>
                        <option value="即日〜（長期を想定）">即日〜（長期を想定）</option>
                    </select>
                </div> -->

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">稼働日数・清算幅   <span class="appstar-title-hints">(週*日)</span>
                    </h4>
                    <input type="text" name="wkdays" placeholder="例 )　週4日（112-144h）〜週5日（140-180h）" class="skill-phone-number">
                    <span class="reg-error">稼働日数は必須です</span>
                </div>
                

                <div class="skill-comment-section">
                    <h4 class="appstar-section-title appstar-multi-line-heading">商流ご記入をお願いします</h4>
                    <h4 class="appstar-title-hints">（ご担当したサイトURL、ポートフォリオサイトURL、職務経歴など）</h4>
                    <textarea placeholder="" name="schedule" style="font-size:22px"></textarea>
                    <span class="reg-error">商流ご記入をお願いします</span>
                </div>

                <div class="skill-submit">
                    <input type="button" value="案件情報を送る" id="sendCompanyPost">
                </div>

            </form>
        </div>
    </section>

@endsection