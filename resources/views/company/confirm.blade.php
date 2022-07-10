@extends('layouts.company_profile')

@section('title')
     アカウント設定 | 登録確認
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-paint-brush"></i> 求職者・開発者登録確認</h2>
		</div>
		<p><b><code>＊</code></b> は、必須項目です。</p>
		<form method="POST" action="" accept-charset="UTF-8">
			<input name="_token" type="hidden" value="">

			<div class="form-group">
				<label for="anonymous" class="control-label">公開・匿名 <code>＊</code></label>
				<br>
				<div class="iradio_minimal">
					<input name="anonymous" type="radio" value="1" id="anonymous">
					公開
				</div> 
				<div class="iradio_minimal checked">
					<input checked="checked" name="anonymous" type="radio" value="2" id="anonymous">
					匿名	
				</div>

				<br>
			</div>

			<p class="text-primary">公開に設定されますと、お名前、メールアドレスが公開され、検索エンジンの検索対象になります。</p>
			<br>

			<div class="form-group">
				<label for="name" class="control-label">お名前 <code>＊</code></label>
				<input placeholder="member name" class="form-control" name="name" type="text" id="name">
			</div>


			<div class="form-group">
				<label for="relations" class="control-label">探している人 <code>＊</code></label>
				<br>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="001"> 働いてくれる人</div>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="002"> 雇ってくれる人</div>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="003"> プログラムを設計、開発してくれる人</div>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="004"> デザインを作成してくれる人</div>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="005"> 企画・営業をしてくれる人</div>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="006"> 一緒にビジネスを立ち上げてくれる人</div>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="007"> サービス・作品を利用、購入してくれる人</div>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="008"> 人脈、友人</div>
				<div class="icheckbox_minimal"><input name="relations[]" type="checkbox" value="009"> その他</div>
			</div>



			<div class="form-group">
				<label for="appeal" class="control-label">アピール <code>＊</code></label>
				<textarea placeholder="outline" class="form-control" name="appeal" cols="50" rows="10" id="appeal"></textarea>
			</div>


			<div class="form-group">
				<label for="pc" class="control-label">開発環境</label>
				<textarea placeholder="development environment" class="form-control" name="pc" cols="50" rows="10" id="pc"></textarea>
			</div>


			<div class="form-group">
				<label for="shikaku" class="control-label">資格</label>
				<textarea placeholder="qualification" class="form-control" name="shikaku" cols="50" rows="10" id="shikaku"></textarea>
			</div>


			<div class="form-group">
				<label for="keiken" class="control-label">経験年数</label>
				<input placeholder="keiken" class="form-control" name="keiken" type="text" id="keiken">
			</div>


			<div class="form-group">
				<label for="gakuflg" class="control-label">学歴</label>
				<select class="form-control" id="gakuflg" name="gakuflg"><option value="9">その他</option><option value="1">中学卒業</option><option value="2">高校卒業</option><option value="3">専門学校卒業</option><option value="4">短大卒業</option><option value="5">大学卒業</option><option value="6">大学院（修士）卒業</option><option value="7">大学院（博士）卒業</option></select>
			</div>


			<div class="form-group">
				<label for="gakureki" class="control-label">学歴</label>
				<input placeholder="educational background" class="form-control" name="gakureki" type="text" id="gakureki">
			</div>


			<div class="form-group">
				<label for="major" class="control-label">得意分野</label>
				<br>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="201"> Windows</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="202"> Mac</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="203"> Linux</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="204"> FreeBSD</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="205"> UNIX</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="206"> AIX</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="207"> Solaris</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="208"> iOS</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="209"> Android</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="001"> C</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="002"> C++</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="022"> C#</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="106"> Objective-C</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="107"> Swift</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="003"> Java</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="015"> PHP</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="011"> ASP</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="007"> Perl</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="008"> RuBY</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="104"> Python</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="108"> GO</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="004"> Pascal</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="005"> Cobol</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="006"> SQL</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="009"> Visual Basic</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="010"> VBA</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="101"> .Net</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="018"> PL/I</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="014"> PL/SQL</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="019"> Tcl/Tk</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="016"> XML</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="017"> XHTML</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="012"> HTML</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="105"> HTML5</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="021"> HDML</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="020"> CHTML</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="103"> css</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="013"> JavaScript</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="102"> AJAX</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="023"> Oracle</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="024"> SQLServer</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="025"> Access</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="026"> DB2</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="027"> PostgreSQL</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="028"> MySQL</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="029"> mSQL</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="301"> Apache</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="302"> Tomcat</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="401"> WORD</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="402"> EXCEL</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="403"> PowerPoint</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="501"> Illustrator</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="502"> Photoshop</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="503"> Flash</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="504"> ActionScript</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="505"> SilverLight</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="506"> CAD</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="507"> SAP</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="601"> 英語</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="602"> 中国語</div>
				<div class="icheckbox_minimal"><input name="major[]" type="checkbox" value="603"> 韓国語</div>
			</div>


			<div class="form-group">
				<label for="major_other" class="control-label">得意分野その他（半角カンマ(,)区切り）</label>
				<input placeholder="specialty" class="form-control" name="major_other" type="text" id="major_other">
			</div>



			<div class="form-group">
				<label for="url" class="control-label">URL</label>
				<input placeholder="URL" class="form-control" name="url" type="text" id="url">
			</div>

			<p class="text-primary">相互リンクいただきますと、トップページ「注目の求職者」「注目の開発者」に掲載させていただきます。<a href="https://www.seprogrammerjobs.com/member/sogo">詳しくはこちら。</a></p>
			<br>

			<div class="form-group">
				<label for="zip" class="control-label">郵便番号</label>
				<input placeholder="postal code" class="form-control" name="zip" type="text" id="zip">
			</div>


			<div class="form-group">
				<label for="pref" class="control-label">都道府県 <code>＊</code></label>
				<select class="form-control" id="pref" name="pref"><option value="99">場所未定</option><option value="1">北海道</option><option value="2">青森県</option><option value="3">秋田県</option><option value="4">岩手県</option><option value="5">山形県</option><option value="6">宮城県</option><option value="7">福島県</option><option value="8">茨城県</option><option value="9">栃木県</option><option value="10">群馬県</option><option value="11">埼玉県</option><option value="12">千葉県</option><option value="13">東京都</option><option value="14">神奈川県</option><option value="15">山梨県</option><option value="16">新潟県</option><option value="17">長野県</option><option value="18">富山県</option><option value="19">石川県</option><option value="20">福井県</option><option value="21">静岡県</option><option value="22">愛知県</option><option value="23">岐阜県</option><option value="24">三重県</option><option value="25">和歌山県</option><option value="26">奈良県</option><option value="27">滋賀県</option><option value="28">京都府</option><option value="29">大阪府</option><option value="30">兵庫県</option><option value="31">岡山県</option><option value="32">広島県</option><option value="33">鳥取県</option><option value="34">島根県</option><option value="35">山口県</option><option value="36">香川県</option><option value="37">高知県</option><option value="38">徳島県</option><option value="39">愛媛県</option><option value="40">福岡県</option><option value="41">長崎県</option><option value="42">佐賀県</option><option value="43">大分県</option><option value="44">熊本県</option><option value="45">宮崎県</option><option value="46">鹿児島県</option><option value="47">沖縄県</option><option value="48">海外</option></select>
			</div>


			<div class="form-group">
				<label for="city" class="control-label">市区郡</label>
				<input placeholder="county" class="form-control" name="city" type="text" id="city">
			</div>


			<div class="form-group">
				<label for="address" class="control-label">住所詳細</label>
				<input placeholder="address details" class="form-control" name="address" type="text" id="address">
			</div>


			<div class="form-group">
				<label for="line" class="control-label">路線</label>
				<select class="form-control" id="line" name="line"><option value="54">その他</option><option value="1">JR線</option><option value="2">銀座線</option><option value="3">丸の内線</option><option value="4">日比谷線</option><option value="5">東西線</option><option value="6">千代田線</option><option value="7">有楽町線</option><option value="8">半蔵門線</option><option value="9">南北線</option><option value="14">副都心線</option><option value="10">都営浅草線</option><option value="11">都営三田線</option><option value="12">都営新宿線</option><option value="13">都営大江戸線</option><option value="15">都電荒川線</option><option value="16">東京モノレール</option><option value="17">臨海副都心線</option><option value="18">ゆりかもめ</option><option value="19">小田急線</option><option value="20">東急線</option><option value="21">京王線</option><option value="22">西武線</option><option value="23">東武線</option><option value="24">京成線</option><option value="25">横浜市営地下鉄</option><option value="26">相模鉄道線</option><option value="27">御堂筋線</option><option value="28">谷町線</option><option value="29">四つ橋線</option><option value="30">中央線</option><option value="31">千日前線</option><option value="32">堺筋線</option><option value="33">神戸市営地下鉄</option><option value="34">六甲アイランド線</option><option value="35">ポートアイランド線</option><option value="36">神戸電鉄線</option><option value="37">京都烏丸線</option><option value="38">京都東西線</option><option value="39">叡山電鉄線</option><option value="40">阪急線</option><option value="41">近鉄線</option><option value="42">南海線</option><option value="43">京阪線</option><option value="44">東山線</option><option value="45">名城線</option><option value="46">鶴舞線</option><option value="47">桜通線</option><option value="49">札幌東西線</option><option value="50">札幌東豊線</option><option value="56">札幌南北線</option><option value="51">仙台市地下鉄</option><option value="52">福岡箱崎線</option><option value="53">福岡空港線</option><option value="55">無し</option></select>
			</div>


			<div class="form-group">
				<label for="station" class="control-label">最寄り駅</label>
				<input placeholder="nearest station" class="form-control" name="station" type="text" id="station">
			</div>


			<div class="form-group">
				<label for="tel" class="control-label">電話番号</label>
				<input placeholder="telephone number" class="form-control" name="tel" type="text" id="tel">
			</div>


			<div class="form-group">
				<label for="fax" class="control-label">FAX</label>
				<input placeholder="fax" class="form-control" name="fax" type="text" id="fax">
			</div>


			<div class="form-group">
				<label for="age" class="control-label">年齢 <code>＊</code></label>
				<input placeholder="age" class="form-control" name="age" type="text" id="age">
			</div>


			<div class="form-group">
				<label for="sex" class="control-label">性別 <code>＊</code></label>
				<select class="form-control" id="sex" name="sex"><option value="3">その他</option><option value="1">男性</option><option value="2">女性</option></select>
			</div>


			<div class="form-group">
				<label for="family" class="control-label">婚姻 <code>＊</code></label>
				<select class="form-control" id="family" name="family"><option value="3">その他</option><option value="1">独身</option><option value="2">既婚</option></select>
			</div>



			<div class="form-group">
				<label for="wk_cate" class="control-label">希望仕事形態 <code>＊</code></label>
				<select class="form-control" id="wk_cate" name="wk_cate"><option value="9">その他</option><option value="1">契約社員</option><option value="2">正社員</option><option value="6">業務委託</option><option value="3">SOHO（自宅勤務）</option><option value="4">アルバイト</option><option value="5">派遣社員</option></select>
			</div>


			<div class="form-group">
				<label for="kibo_city" class="control-label">希望勤務地</label>
				<input placeholder="work location" class="form-control" name="kibo_city" type="text" id="kibo_city">
			</div>


			<div class="form-group">
				<label for="price" class="control-label">希望報酬（万円/月給） <code>＊</code></label>
				<input placeholder="remuneration" class="form-control" name="price" type="text" id="price">
			</div>



			<div class="form-actions">
				<input class="btn btn-primary" id="memberedit" type="submit" value="変更">
			</div>

		</form>
	</div>
</div>

@endsection