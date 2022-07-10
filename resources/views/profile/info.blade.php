@extends('layouts.profile')

@section('title')
	登録確認
@endsection

@section('content')






<style>
	.birthday {
    position: relative;
    width: 350px !important; height: 6vh;
    color: white;
	font-size: 20px;
	border: 1px solid #ebebeb;
	line-height: 34px !important;
    font-size: 35px !important;
	}

	.birthday:before {
		position: absolute;
		top: 10px; left: 20px;
		content: attr(data-date);
		display: inline-block;
		color: #494949;
		

	}

	.birthday::-webkit-datetime-edit, .birthday::-webkit-inner-spin-button, .birthday::-webkit-clear-button {
		display: none;
	}

	.birthday::-webkit-calendar-picker-indicator {
		position: absolute;
		top: 3px;
		right: 0;
		color: black;
		opacity: 1;
	}
</style>







<div class="row">




	<div class="col-md-12">
		<div class="page-header">
			<!-- <h2><i class="fa fa-paint-brush"></i> 求職者・開発者登録変更</h2> -->
			<h2><i class="fa fa-search"></i> 求職者・開発者登録確認</h2>
		</div>

		<section class="skill-registration-form">
			<div class="skill-registration-form-inner form-wrapper-js">

				<div class="profile-pic-wrapper">
                    <div class="pic-holder">
                        <img id="profilePic" class="pic" src="{{asset('assets/images/dashboard/avatar.png')}}">

                        <label for="newProfilePhoto" class="upload-file-block">
                        <div class="text-center">
                            <div class="mb-2">
                            <i class="fa fa-camera fa-2x"></i>
                            </div>
                            <div class="text-uppercase">
                                写真登録
                            </div>
                        </div>
                        </label>
                        <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="display: none;" />
                    </div>

                    </hr>
                    <p class="text-info text-center">Note: 最新の登録写真がデフォルトのプロフィール写真に設定されます。<br/>変更時に別々にプロフィール写真が更新されます。</p>
                    </div>                          
                </div>

				<div class="upload-file">
					<h4 class="appstar-section-title">ファイルを添付</h4>
					<p class="appstar-text-green">スキルシート、職務経歴書、ポートフォリオなどをお持ちの方は、こちらに添付をお願いします。</p>
					<p class="appstar-text">ファイルを選択するかドラッグ＆ドロップでファイルをアップロードしてください。</p>
					<!-- <div class="appstar-skill-upload-container" id="registration-drop" style="position: relative;">
						<span class="uploaded-files">
							<span class="upload-file upload-file-button-js" style="position: relative;">
								<a href="javascript:" class="file-input" id="fu-browse" style="position: relative; z-index: 1;">ファイルアップロード</a>
							<div id="html5_1fn60p88tqp9q53o919232h64_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 157px; height: 28px; overflow: hidden; z-index: 0;"><input id="html5_1fn60p88tqp9q53o919232h64" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept="image/jpeg,.jpg,image/gif,.gif,image/png,.png,application/pdf,.pdf,text/plain,.txt,application/vnd.ms-excel,.xls,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,.xlsx,application/msword,.doc,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.docx,.jpge,application/vnd.ms-powerpoint,.ppt,application/vnd.openxmlformats-officedocument.presentationml.presentation,.pptx,text/csv,.csv,application/zip,.zip"></div></span>
						</span>
					</div> -->
					<div class="file-upload-error">
					</div>
				</div>
				<form action="{{ route('registration-skills')}}" method="post" class="appstar-skill-form-js" novalidate="novalidate" id="userSkillForm"  enctype="multipart/form-data" multiple>
					@csrf


					<div class="form-group files">
						<input type="file" class="form-control" multiple="" name="files[]">
					</div>
					
					<div class="telephone-number registration-must">
						<h4 class="appstar-section-title">
						<h4 class="appstar-section-title">⽣年⽉⽇ <span class="appstar-title-hints">の記入をお願いします </span> *						</h4>
						<!-- <input type="date" data-date="" data-date-format="YYYY年MM⽉DD⽇" class="skill-phone-number birthday" name="birthday" required="" aria-required="true"> -->
						<input type="number" style="padding: 16px 10px 16px;font-size: 22px;line-height: 20px;font-weight: 600;border: 1px solid #ebebeb;" name="YYYY" min="1950" max="2022" value="2022"><span class="appstar-title-hints">年 </span>
						<input type="number" style="padding: 16px 10px 16px;font-size: 22px;line-height: 20px;font-weight: 600;border: 1px solid #ebebeb;" name="mm" min="1" max="12" value="1"><span class="appstar-title-hints">⽉ </span>
						<input type="number" style="padding: 16px 10px 16px;font-size: 22px;line-height: 20px;font-weight: 600;border: 1px solid #ebebeb;" name="dd" min="1" max="31" value="1"><span class="appstar-title-hints">⽇ </span>
						<span class="reg-error">⽣年⽉⽇は必須です</span>
					</div>

					<div class="telephone-number registration-must">
						<h4 class="appstar-section-title">性別 <span class="appstar-title-hints">の記入をお願いします </span> *
						</h4>
						<select class="skill-phone-number" name="gender">
							<option></option>
							<option> 男性 </option>
							<option> 女性 </option>
						</select>
						<span class="reg-error">性別は必須です</span>
					</div>

					<!-- <div class="telephone-number registration-must">
						<h4 class="appstar-section-title">国籍 <span class="appstar-title-hints">の記入をお願いします</span> *
						</h4>
						<select id="country" class="skill-phone-number" name="country">
							<option value=""></option>
							<option value="Afganistan">Afghanistan</option>
							<option value="Albania">Albania</option>
							<option value="Algeria">Algeria</option>
							<option value="American Samoa">American Samoa</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Anguilla">Anguilla</option>
							<option value="Antigua & Barbuda">Antigua & Barbuda</option>
							<option value="Argentina">Argentina</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaijan">Azerbaijan</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrain">Bahrain</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Belarus">Belarus</option>
							<option value="Belgium">Belgium</option>
							<option value="Belize">Belize</option>
							<option value="Benin">Benin</option>
							<option value="Bermuda">Bermuda</option>
							<option value="Bhutan">Bhutan</option>
							<option value="Bolivia">Bolivia</option>
							<option value="Bonaire">Bonaire</option>
							<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
							<option value="Botswana">Botswana</option>
							<option value="Brazil">Brazil</option>
							<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
							<option value="Brunei">Brunei</option>
							<option value="Bulgaria">Bulgaria</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burundi">Burundi</option>
							<option value="Cambodia">Cambodia</option>
							<option value="Cameroon">Cameroon</option>
							<option value="Canada">Canada</option>
							<option value="Canary Islands">Canary Islands</option>
							<option value="Cape Verde">Cape Verde</option>
							<option value="Cayman Islands">Cayman Islands</option>
							<option value="Central African Republic">Central African Republic</option>
							<option value="Chad">Chad</option>
							<option value="Channel Islands">Channel Islands</option>
							<option value="Chile">Chile</option>
							<option value="China">China</option>
							<option value="Christmas Island">Christmas Island</option>
							<option value="Cocos Island">Cocos Island</option>
							<option value="Colombia">Colombia</option>
							<option value="Comoros">Comoros</option>
							<option value="Congo">Congo</option>
							<option value="Cook Islands">Cook Islands</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Cote DIvoire">Cote DIvoire</option>
							<option value="Croatia">Croatia</option>
							<option value="Cuba">Cuba</option>
							<option value="Curaco">Curacao</option>
							<option value="Cyprus">Cyprus</option>
							<option value="Czech Republic">Czech Republic</option>
							<option value="Denmark">Denmark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Dominican Republic">Dominican Republic</option>
							<option value="East Timor">East Timor</option>
							<option value="Ecuador">Ecuador</option>
							<option value="Egypt">Egypt</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Equatorial Guinea">Equatorial Guinea</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Estonia">Estonia</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Falkland Islands">Falkland Islands</option>
							<option value="Faroe Islands">Faroe Islands</option>
							<option value="Fiji">Fiji</option>
							<option value="Finland">Finland</option>
							<option value="France">France</option>
							<option value="French Guiana">French Guiana</option>
							<option value="French Polynesia">French Polynesia</option>
							<option value="French Southern Ter">French Southern Ter</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambia">Gambia</option>
							<option value="Georgia">Georgia</option>
							<option value="Germany">Germany</option>
							<option value="Ghana">Ghana</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Great Britain">Great Britain</option>
							<option value="Greece">Greece</option>
							<option value="Greenland">Greenland</option>
							<option value="Grenada">Grenada</option>
							<option value="Guadeloupe">Guadeloupe</option>
							<option value="Guam">Guam</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guinea">Guinea</option>
							<option value="Guyana">Guyana</option>
							<option value="Haiti">Haiti</option>
							<option value="Hawaii">Hawaii</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungary">Hungary</option>
							<option value="Iceland">Iceland</option>
							<option value="Indonesia">Indonesia</option>
							<option value="India">India</option>
							<option value="Iran">Iran</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland">Ireland</option>
							<option value="Isle of Man">Isle of Man</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japan">Japan</option>
							<option value="Jordan">Jordan</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Korea North">Korea North</option>
							<option value="Korea Sout">Korea South</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Kyrgyzstan">Kyrgyzstan</option>
							<option value="Laos">Laos</option>
							<option value="Latvia">Latvia</option>
							<option value="Lebanon">Lebanon</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libya">Libya</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Macau">Macau</option>
							<option value="Macedonia">Macedonia</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malaysia">Malaysia</option>
							<option value="Malawi">Malawi</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Martinique">Martinique</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Mexico">Mexico</option>
							<option value="Midway Islands">Midway Islands</option>
							<option value="Moldova">Moldova</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar">Myanmar</option>
							<option value="Nambia">Nambia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Netherland Antilles">Netherland Antilles</option>
							<option value="Netherlands">Netherlands (Holland, Europe)</option>
							<option value="Nevis">Nevis</option>
							<option value="New Caledonia">New Caledonia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk Island">Norfolk Island</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palau Island">Palau Island</option>
							<option value="Palestine">Palestine</option>
							<option value="Panama">Panama</option>
							<option value="Papua New Guinea">Papua New Guinea</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Peru">Peru</option>
							<option value="Phillipines">Philippines</option>
							<option value="Pitcairn Island">Pitcairn Island</option>
							<option value="Poland">Poland</option>
							<option value="Portugal">Portugal</option>
							<option value="Puerto Rico">Puerto Rico</option>
							<option value="Qatar">Qatar</option>
							<option value="Republic of Montenegro">Republic of Montenegro</option>
							<option value="Republic of Serbia">Republic of Serbia</option>
							<option value="Reunion">Reunion</option>
							<option value="Romania">Romania</option>
							<option value="Russia">Russia</option>
							<option value="Rwanda">Rwanda</option>
							<option value="St Barthelemy">St Barthelemy</option>
							<option value="St Eustatius">St Eustatius</option>
							<option value="St Helena">St Helena</option>
							<option value="St Kitts-Nevis">St Kitts-Nevis</option>
							<option value="St Lucia">St Lucia</option>
							<option value="St Maarten">St Maarten</option>
							<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
							<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
							<option value="Saipan">Saipan</option>
							<option value="Samoa">Samoa</option>
							<option value="Samoa American">Samoa American</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome & Principe">Sao Tome & Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapore">Singapore</option>
							<option value="Slovakia">Slovakia</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa">South Africa</option>
							<option value="Spain">Spain</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syria">Syria</option>
							<option value="Tahiti">Tahiti</option>
							<option value="Taiwan">Taiwan</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania">Tanzania</option>
							<option value="Thailand">Thailand</option>
							<option value="Togo">Togo</option>
							<option value="Tokelau">Tokelau</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad & Tobago">Trinidad & Tobago</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Turkey">Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Turks & Caicos Is">Turks & Caicos Is</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Uganda">Uganda</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Erimates">United Arab Emirates</option>
							<option value="United States of America">United States of America</option>
							<option value="Uraguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Vatican City State">Vatican City State</option>
							<option value="Venezuela">Venezuela</option>
							<option value="Vietnam">Vietnam</option>
							<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
							<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
							<option value="Wake Island">Wake Island</option>
							<option value="Wallis & Futana Is">Wallis & Futana Is</option>
							<option value="Yemen">Yemen</option>
							<option value="Zaire">Zaire</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
						</select>
						<span class="reg-error">国籍は必須です</span>
					</div>
 -->
					<div class="telephone-number registration-must">
						<h4 class="appstar-section-title">業界経験年数 <span class="appstar-title-hints">の記入をお願いします</span> *
						</h4>
						<select class="skill-phone-number" name="exp-year">
							<option></option>
							<option> 1年 </option>
							<option> 2年 </option>
							<option> 3年 </option>
							<option> 4年 </option>
							<option> 5年 </option>
							<option> 6年 </option>
							<option> 8年 </option>
							<option> 9年 </option>
							<option> 10年以上 </option>							
						</select>
						<span class="reg-error">業界経験年数は必須です</span>
					</div>

					<div class="telephone-number registration-must">
						<h4 class="appstar-section-title">希望単⾦ <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span>
						</h4>
						<input type="tel" placeholder="" name="wUnit" required="" class="skill-phone-number" aria-required="true">
					</div>

					<div class="telephone-number registration-must">
						<h4 class="appstar-section-title">希望場所 <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span>
						</h4>
						<input type="tel" placeholder="" name="wArea" required="" class="skill-phone-number" aria-required="true">
					</div>

					<div class="telephone-number registration-must">
						<h4 class="appstar-section-title">ステータス <span class="appstar-title-hints">の記入をお願いします</span> *
						</h4>
						<select class="skill-phone-number" name="status">
							<option></option>
							<option> 探し中 </option>	
							<option> ⾄急 </option>
							<option> 今は探してない </option>
						</select>
						<span class="reg-error">ステータスは必須です</span>
					</div>

					<div class="telephone-number registration-must">
						<h4 class="appstar-section-title">電話番号の記入をお願いします <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
						</h4>
						<input type="tel" placeholder="例 )　03-9999-9999" name="phone" required="" class="skill-phone-number" aria-required="true">
						<span class="reg-error">電話番号は必須です</span>
					</div>


					<div class="telephone-number registration-must">
						<h4 class="appstar-section-title">CATEGORY <span class="appstar-title-hints">の記入をお願いします</span> *
						</h4>
						<select class="skill-phone-number" name="category">
							<option value="0"></option>
							<option value="1"> ITコンサルタント・エンジニア </option>	
							<option value="2"> SE・リードエンジニア </option>
							<option value="3"> UI/UXデザイナー </option>
							<option value="4"> ディレクター </option>
							<option value="5"> PM（プロジェクトマネージャー） </option>
						</select>
						<span class="reg-error">CATEGORYは必須です</span>
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
								@foreach( $languages as $lang)
								@if($lang->type == 'engineer')
								<div class="single-skill">
									<input id="{{$lang->language}}" type="checkbox" value="{{$lang->language}}" name="engineerLanguageTools[]">
									<span class="checkbox-indicate"></span>
									<label for="{{$lang->language}}">{{$lang->language}}</label>
								</div>
								@endif
								@endforeach			
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
									<input id="UIUXデザイン" type="checkbox" value="UIUXデザイン" name="webDevelopmentPhase[]">
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
								@foreach( $languages as $lang)
								@if($lang->type == 'web')
								<div class="single-skill">
									<input id="{{$lang->language}}" type="checkbox" value="{{$lang->language}}" name="webDevelopmentTools[]">
									<span class="checkbox-indicate"></span>
									<label for="{{$lang->language}}">{{$lang->language}}</label>
								</div>
								@endif
								@endforeach	
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
						@foreach($user_skill as $skill)
						<textarea id="details" placeholder="フリーテキスト" name="details">{{ $skill->details }}</textarea>
						@endforeach
					</div>
					<div class="skill-submit">
						<input type="button" value="スキル情報を送る" id="sendSkills">
					</div>
				</form>
			</div>
		</section>

	</div>
</div>


@endsection



@section('scripts')


<script type="text/javascript">
	
	@foreach($user_skill as $skill)

		var birthday = "{{ $skill->birthday }}";
		var dt = birthday.split("-");
		$("[name='YYYY']").val(dt[0]);
		$("[name='mm']").val(dt[1]);
		$("[name='dd']").val(dt[2]);

		var gender = "{{ $skill->gender }}";
		$("[name='gender']").val(gender);

		var expYear = "{{ $skill->expYear }}";
		var ey = expYear.split('年');
		$("[name='exp-year']").val(expYear);

		// var country = "{{ $skill->country }}";
		// $("[name='gender']").val(gender);

		var wUnit = "{{ $skill->wUnit }}";
		if(wUnit != "NULL") $("[name='wUnit']").val(wUnit);

		var wArea = "{{ $skill->wArea }}";
		if(wArea != "NULL") $("[name='wArea']").val(wArea);

		var status = "{{ $skill->status }}";
		$("[name='status']").val(status);

		var category = "{{ $skill->category }}";
		$("[name='category']").val(category);

		var phone = "{{ $skill->phone }}";
		$("[name='phone']").val(phone);

		var engineerDevelopmentPhase = "{{ $skill->engineerDevelopmentPhase }}";
		var chk_arr = engineerDevelopmentPhase.split(",");
		for( i in chk_arr){
			if(chk_arr[i].trim()=='') continue;
			$("#"+chk_arr[i]).prop('checked', true);
		}

		var engineerLanguageTools = "{{ $skill->engineerLanguageTools }}";
		var chk_arr = engineerLanguageTools.split(",");
		for( i in chk_arr){
			if(chk_arr[i].trim()=='') continue;
			$("#"+chk_arr[i]).prop('checked', true);
		}

		var webDevelopmentPhase = "{{ $skill->webDevelopmentPhase }}";
		var chk_arr = webDevelopmentPhase.split(",");
		for( i in chk_arr){
			if(chk_arr[i].trim()=='') continue;
			$("#"+chk_arr[i]).prop('checked', true);
		}

		var webDevelopmentTools = "{{ $skill->webDevelopmentTools }}";
		var chk_arr = webDevelopmentTools.split(",");
		for( i in chk_arr){
			if(chk_arr[i].trim()=='') continue;
			$("#"+chk_arr[i]).prop('checked', true);
		}

		var pmDevelopmentProduct = "{{ $skill->pmDevelopmentProduct }}";
		var chk_arr = pmDevelopmentProduct.split(",");
		for( i in chk_arr){
			if(chk_arr[i].trim()=='') continue;
			$("#"+chk_arr[i]).prop('checked', true);
		}

		var pmDevelopmentPhase = "{{ $skill->pmDevelopmentPhase }}";		
		var chk_arr = pmDevelopmentPhase.split(",");
		for( i in chk_arr){
			if(chk_arr[i].trim()=='') continue;
			$("#"+chk_arr[i]).prop('checked', true);
		}	


	@endforeach



</script>

@endsection