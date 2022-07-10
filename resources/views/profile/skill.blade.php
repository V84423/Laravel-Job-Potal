@extends('layouts.account')

@section('title')
    スキル・経験の登録
@endsection

@section('content')


	<section class="skill-registration-form">
        <div class="skill-registration-form-inner form-wrapper-js">
            <div class="upload-file">
                <h4 class="appstar-section-title">ファイルを添付</h4>
                <p class="appstar-text-green">スキルシート、職務経歴書、ポートフォリオなどをお持ちの方は、こちらに添付をお願いします。</p>
                <p class="appstar-text">ファイルを選択するかドラッグ＆ドロップでファイルをアップロードしてください。</p>
                <div class="appstar-skill-upload-container" id="registration-drop" style="position: relative;">
                    <span class="uploaded-files">
                        <span class="upload-file upload-file-button-js" style="position: relative;">
                            <a href="javascript:" class="file-input" id="fu-browse" style="position: relative; z-index: 1;">ファイルアップロード</a>
                        <div id="html5_1fn60p88tqp9q53o919232h64_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 157px; height: 28px; overflow: hidden; z-index: 0;"><input id="html5_1fn60p88tqp9q53o919232h64" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,application/pdf,.pdf,text/plain,.txt,application/vnd.ms-excel,.xls,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.xlsx,application/msword,.doc,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.docx,.jpge,application/vnd.ms-powerpoint,.ppt,application/vnd.openxmlformats-officedocument.presentationml.presentation,.pptx,text/csv,.csv,application/zip,.zip"></div></span>
                    </span>
                </div>
                <div class="file-upload-error">

                </div>
            </div>
            <form action="#" method="post" class="appstar-skill-form-js" novalidate="novalidate">
                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">電話番号の記入をお願いします <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="tel" placeholder="例 )　03-9999-9999" name="phone" required="" class="skill-phone-number" aria-required="true">
                    <span class="reg-error">電話番号は必須です</span>
                </div>
                <h4 class="appstar-section-title appstar-multi-line-heading">ご経験された職種について、<br>
                    対応実績のあるもの全てにチェックを入れてください。</h4>
                <div class="skill-main-section">
                    <h4 class="appstar-section-title-green">エンジニア</h4>
                    <div class="skill-sub-section">
                        <h5>開発フェーズ</h5>
                        <div class="skills">
                            <div class="single-skill">
                                <input id="要件定義" value="要件定義" name="engineerDevelopmentPhase[]" type="checkbox">
                                <span class="checkbox-indicate"></span>
                                <span class="checkbox-indicate"></span>
                                <label for="要件定義">要件定義</label>
                            </div>
                            <div class="single-skill">
                                <input id="基本設計" type="checkbox" value="基本設計" name="engineerDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="基本設計">基本設計</label>
                            </div>
                            <div class="single-skill">
                                <input id="詳細設計" type="checkbox" value="詳細設計" name="engineerDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="詳細設計">詳細設計</label>
                            </div>
                            <div class="single-skill">
                                <input id="実装・単体テスト" type="checkbox" value="実装・単体テスト" name="engineerDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="実装・単体テスト">実装・単体テスト</label>
                            </div>
                            <div class="single-skill">
                                <input id="結合テスト" type="checkbox" value="結合テスト" name="engineerDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="結合テスト">結合テスト</label>
                            </div>
                            <div class="single-skill">
                                <input id="保守・運用" type="checkbox" value="保守・運用" name="engineerDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="保守・運用">保守・運用</label>
                            </div>
                            <div class="single-skill">
                                <input id="開発マネジメント" type="checkbox" value="開発マネジメント" name="engineerDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="開発マネジメント">開発マネジメント</label>
                            </div>
                        </div>
                    </div>
                    <div class="skill-sub-section">
                        <h5>言語・ツール</h5>
                        <div class="skills">
                            <div class="single-skill">
                                <input id="Ruby" type="checkbox" value="Ruby" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Ruby">Ruby</label>
                            </div>
                            <div class="single-skill">
                                <input id="PHP" type="checkbox" value="PHP" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="PHP">PHP</label>
                            </div>
                            <div class="single-skill">
                                <input id="JAVA" type="checkbox" value="JAVA" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="JAVA">JAVA</label>
                            </div>
                            <div class="single-skill">
                                <input id="Scala" type="checkbox" value="Scala" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Scala">Scala</label>
                            </div>
                            <div class="single-skill">
                                <input id="Python" type="checkbox" value="Python" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Python">Python</label>
                            </div>
                            <div class="single-skill">
                                <input id="Csharp" type="checkbox" value="C#" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Csharp">C#</label>
                            </div>
                            <div class="single-skill">
                                <input id="SQL" type="checkbox" value="SQL" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="SQL">SQL</label>
                            </div>
                            <div class="single-skill">
                                <input id="ENGG-HTML45" type="checkbox" value="HTML4/5" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="ENGG-HTML45">HTML4/5</label>
                            </div>
                            <div class="single-skill">
                                <input id="ENGG-CSS" type="checkbox" value="CSS" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="ENGG-CSS">CSS</label>
                            </div>
                            <div class="single-skill">
                                <input id="JavaScript" type="checkbox" value="JavaScript" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="JavaScript">JavaScript</label>
                            </div>
                            <div class="single-skill">
                                <input id="Objective-C" type="checkbox" value="Objective-C" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Objective-C">Objective-C</label>
                            </div>
                            <div class="single-skill">
                                <input id="Kotlin" type="checkbox" value="Kotlin" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Kotlin">Kotlin</label>
                            </div>
                            <div class="single-skill">
                                <input id="AndroidJava" type="checkbox" value="Android Java" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="AndroidJava">Android Java</label>
                            </div>
                            <div class="single-skill">
                                <input id="Unity" type="checkbox" value="Unity" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Unity">Unity</label>
                            </div>
                            <div class="single-skill">
                                <input id="Github" type="checkbox" value="Github" name="engineerLanguageTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Github">Github</label>
                            </div>
                            <div class="skill-text-field">
                                <div class="text-field-label-wrapper">
                                    <label for="">その他</label>
                                </div>
                                <div class="text-field-field">
                                    <textarea type="text" name="engineerLanguageTools[]"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skill-main-section">
                    <h4 class="appstar-section-title-green">WEBデザイナー・クリエイター</h4>
                    <div class="skill-sub-section">
                        <h5>フェーズ</h5>
                        <div class="skills">
                            <div class="single-skill">
                                <input id="webDevelopmentPhase-企画提案" type="checkbox" value="企画提案" name="webDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="webDevelopmentPhase-企画提案">企画提案</label>
                            </div>
                            <div class="single-skill">
                                <input id="UIUXデザイン" type="checkbox" value="UI/UXデザイン" name="webDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="UIUXデザイン">UI/UXデザイン</label>
                            </div>
                            <div class="single-skill">
                                <input id="ビジュアルデザイン" type="checkbox" value="ビジュアルデザイン" name="webDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="ビジュアルデザイン">ビジュアルデザイン</label>
                            </div>
                            <div class="single-skill">
                                <input id="デザイン進行管理" type="checkbox" value="デザイン進行管理" name="webDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="デザイン進行管理">デザイン進行管理</label>
                            </div>
                            <div class="single-skill">
                                <input id="顧客との直接コミュニケーション" type="checkbox" value="顧客との直接コミュニケーション" name="webDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="顧客との直接コミュニケーション">顧客との直接コミュニケーション</label>
                            </div>
                        </div>
                    </div>
                    <div class="skill-sub-section">
                        <h5>言語・ツール</h5>
                        <div class="skills">
                            <div class="single-skill">
                                <input id="Photoshop" type="checkbox" value="Photoshop" name="webDevelopmentTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Photoshop">Photoshop</label>
                            </div>
                            <div class="single-skill">
                                <input id="Illustrator" type="checkbox" value="Illustrator" name="webDevelopmentTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Illustrator">Illustrator</label>
                            </div>
                            <div class="single-skill">
                                <input id="Sketch" type="checkbox" value="Sketch" name="webDevelopmentTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Sketch">Sketch</label>
                            </div>
                            <div class="single-skill">
                                <input id="Fireworks" type="checkbox" value="Fireworks" name="webDevelopmentTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Fireworks">Fireworks</label>
                            </div>
                            <div class="single-skill">
                                <input id="HTML45" type="checkbox" value="HTML4/5" name="webDevelopmentTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="HTML45">HTML4/5</label>
                            </div>
                            <div class="single-skill">
                                <input id="CSS" type="checkbox" value="CSS" name="webDevelopmentTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="CSS">CSS</label>
                            </div>
                            <div class="single-skill">
                                <input id="Javascript" type="checkbox" value="JavaScript" name="webDevelopmentTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="Javascript">JavaScript</label>
                            </div>
                            <div class="single-skill">
                                <input id="jQuery" type="checkbox" value="jQuery" name="webDevelopmentTools[]">
                                <span class="checkbox-indicate"></span>
                                <label for="jQuery">jQuery</label>
                            </div>
                            <div class="skill-text-field">
                                <div class="text-field-label-wrapper">
                                    <label for="">その他</label>
                                </div>
                                <div class="text-field-field">
                                    <textarea type="text" name="webDevelopmentTools[]"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skill-main-section">
                    <h4 class="appstar-section-title-green">ディレクター・PM・プランナー</h4>
                    <div class="skill-sub-section">
                        <h5>プロダクト</h5>
                        <div class="skills">
                            <div class="single-skill">
                                <input id="ウェブサイト" type="checkbox" value="ウェブサイト" name="pmDevelopmentProduct[]">
                                <span class="checkbox-indicate"></span>
                                <label for="ウェブサイト">ウェブサイト</label>
                            </div>
                            <div class="single-skill">
                                <input id="ウェブアプリ" type="checkbox" value="ウェブアプリ" name="pmDevelopmentProduct[]">
                                <span class="checkbox-indicate"></span>
                                <label for="ウェブアプリ">ウェブアプリ</label>
                            </div>
                            <div class="single-skill">
                                <input id="スマホ・タブレット" type="checkbox" value="スマホ・タブレット" name="pmDevelopmentProduct[]">
                                <span class="checkbox-indicate"></span>
                                <label for="スマホ・タブレット">スマホ・タブレット</label>
                            </div>
                            <div class="single-skill">
                                <input id="ゲーム" type="checkbox" value="ゲーム" name="pmDevelopmentProduct[]">
                                <span class="checkbox-indicate"></span>
                                <label for="ゲーム">ゲーム</label>
                            </div>
                            <div class="single-skill">
                                <input id="業務システム" type="checkbox" value="業務システム" name="pmDevelopmentProduct[]">
                                <span class="checkbox-indicate"></span>
                                <label for="業務システム">業務システム</label>
                            </div>
                            <div class="skill-text-field">
                                <div class="text-field-label-wrapper">
                                    <label for="">その他</label>
                                </div>
                                <div class="text-field-field">
                                    <textarea type="text" name="pmDevelopmentProduct[]"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="skill-sub-section">
                        <h5>フェーズ</h5>
                        <div class="skills">
                            <div class="single-skill">
                                <input id="企画提案" type="checkbox" value="企画提案" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="企画提案">企画提案</label>
                            </div>
                            <div class="single-skill">
                                <input id="UXデザイン" type="checkbox" value="UXデザイン" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="UXデザイン">UXデザイン</label>
                            </div>
                            <div class="single-skill">
                                <input id="UIデザイン" type="checkbox" value="UIデザイン" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="UIデザイン">UIデザイン</label>
                            </div>
                            <div class="single-skill">
                                <input id="ワイヤーフレーム作成" type="checkbox" value="ワイヤーフレーム作成" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="ワイヤーフレーム作成">ワイヤーフレーム作成</label>
                            </div>
                            <div class="single-skill">
                                <input id="画面仕様書作成" type="checkbox" value="画面仕様書作成" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="画面仕様書作成">画面仕様書作成</label>
                            </div>
                            <div class="single-skill">
                                <input id="テスト仕様書作成" type="checkbox" value="テスト仕様書作成" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="テスト仕様書作成">テスト仕様書作成</label>
                            </div>
                            <div class="single-skill">
                                <input id="インフラ設計" type="checkbox" value="インフラ設計" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="インフラ設計">インフラ設計</label>
                            </div>
                            <div class="single-skill">
                                <input id="DB設計" type="checkbox" value="DB設計" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="DB設計">DB設計</label>
                            </div>
                            <div class="single-skill">
                                <input id="API設計" type="checkbox" value="API設計" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="API設計">API設計</label>
                            </div>
                            <div class="single-skill">
                                <input id="バッチ処理設計" type="checkbox" value="バッチ処理設計" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="バッチ処理設計">バッチ処理設計</label>
                            </div>
                            <div class="single-skill">
                                <input id="pmDevelopmentPhase-開発マネジメント" type="checkbox" value="開発マネジメント" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="pmDevelopmentPhase-開発マネジメント">開発マネジメント</label>
                            </div>
                            <div class="single-skill">
                                <input id="顧客折衝" type="checkbox" value="顧客折衝" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="顧客折衝">顧客折衝</label>
                            </div>

                            <div class="single-skill">
                                <input id="グロースハック" type="checkbox" value="グロースハック" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="グロースハック">グロースハック</label>
                            </div>
                            <div class="single-skill">
                                <input id="ツールを使った数値分析" type="checkbox" value="ツールを使った数値分析" name="pmDevelopmentPhase[]">
                                <span class="checkbox-indicate"></span>
                                <label for="ツールを使った数値分析" class="appstars-text-nowrap">ツールを使った数値分析</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="skill-comment-section">
                    <h4 class="appstar-section-title appstar-multi-line-heading">その他、特記事項がありましたら、以下のフリーテキスト欄に <br>
                        ご記入をお願いします。</h4>
                    <h4 class="appstar-title-hints">（ご担当したサイトURL、ポートフォリオサイトURL、職務経歴など）</h4>
                    <textarea id="" placeholder="フリーテキスト" name="details"></textarea>
                </div>
                <div class="skill-submit">
                    <input type="submit" value="スキル情報を送る">
                </div>
            </form>
        </div>
    </section>





@endsection