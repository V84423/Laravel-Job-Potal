@extends('layouts.company_profile')

@section('title')
	利用プラン
@endsection

@section('content')

	
<!-- <div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-tachometer"></i> 求職者・開発者利用プラン変更</h2>
		</div>
		<p></p><h3>現在、無料プラン をご利用中です。</h3><p></p>
		<br>
		<p></p><h4>本日分のご利用状況</h4><p></p>
		<p>掲示板の登録・編集 &nbsp;&nbsp;&nbsp; <b>0</b> / 5 件</p>
		<p>メール送信 &nbsp;&nbsp;&nbsp; <b>0</b> / 2 通</p>
		<br>
		<p>有料プラン、お支払い方法の説明は、<a href="">こちら</a>。</p>
		<p><a href="" class="btn btn-info">有料プラン、料金について</a></p>
		<p><a href="" class="btn btn-info">お支払い方法</a></p>
		<br>
		<p><a href="" class="btn btn-primary">お問い合せ</a></p>
	</div>
</div> -->


<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-jpy"></i> 料金について</h2>
		</div>
		<h3>無料で、ほとんど全ての機能がご利用いただけます。</h3>
		<p>データ登録数やメール送信数の多い、ヘビーユーザーの方々のみ、有料とさせていただきました。</p>
		<h4 class="text-danger">利用制限を超えますと、制限がかかり、この支払い画面が表示されます。</h4>
		<h4 class="text-danger">料金は全て前払い制です。後日、請求されるということはありません。</h4>
		<p>無料のまま利用したい方は、24時間お待ちいただいて、利用制限が解除されてから、再びご利用下さい。</p>
		<p>ホームページURLなど、連絡先を明記しておくと、直接連絡がとれますので、利用制限にかからず、賢くご利用いただけると思います。</p>
		<br>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="panel panel-success">
			<div class="panel-heading"><h3 class="text-center"><i class="fa fa-leaf"></i> 無料プラン</h3></div>
			<div class="panel-body text-center">
			<h1>無料&nbsp;&nbsp;&nbsp;¥0円</h1>
			</div>
			<ul class="list-group list-group-flush">
			<li class="list-group-item"><i class="icon-ok text-danger"></i> 求人+掲示板の登録・編集<span class="pull-right"><strong>5件 / 日</strong></span><br><span class="text-muted">（求人は企業ユーザーのみ）</span></li>
			<li class="list-group-item"><i class="icon-ok text-danger"></i> メール送信<span class="pull-right"><strong>2通 / 日</strong></span></li>
			<li class="list-group-item"><i class="icon-ok text-danger"></i> サポートはありません。</li>
			</ul>
			<div class="panel-footer">
				&nbsp;&nbsp;&nbsp;
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="panel panel-info">
			<div class="panel-heading"><h3 class="text-center"><i class="fa fa-plane"></i> プロプラン</h3></div>
			<div class="panel-body text-center">
			<h1>¥10,800円 / 月</h1>
			</div>
			<ul class="list-group list-group-flush">
			<li class="list-group-item"><i class="icon-ok text-danger"></i> 求人+掲示板の登録・編集<span class="pull-right"><strong>50件 / 日</strong></span><br><span class="text-muted">（求人は企業ユーザーのみ）</span></li>
			<li class="list-group-item"><i class="icon-ok text-danger"></i> メール送信<span class="pull-right"><strong>20通 / 日</strong></span></li>
			<li class="list-group-item"><i class="icon-ok text-danger"></i> メールでのサポートあり。</li>
			</ul>
			<div class="panel-footer">
			<p class="text-danger">毎月の継続課金です。</p>
	<form action="" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="BVZ4MSW4VJDVN">
	<input type="hidden" name="on0" value="userid">
			<input type="hidden" name="os0" maxlength="200" value="kjn6674">
		<p><input class="btn btn-lg btn-block btn-primary" id="contact" type="submit" value="PayPalでお支払い"></p>
	</form>
			<a href="#payment">※お支払い方法について</a>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
		<div class="panel panel-danger">
			<div class="panel-heading"><h3 class="text-center"><i class="fa fa-rocket"></i> プレミアムプラン</h3></div>
			<div class="panel-body text-center">
			<h1>¥21,600円 / 月</h1>
			</div>
			<ul class="list-group list-group-flush">
			<li class="list-group-item"><i class="icon-ok text-danger"></i> 求人+掲示板の登録・編集<span class="pull-right"><strong>200件 / 日</strong></span><br><span class="text-muted">（求人は企業ユーザーのみ）</span></li>
			<li class="list-group-item"><i class="icon-ok text-danger"></i> メール送信<span class="pull-right"><strong>100件 / 日</strong></span></li>
			<li class="list-group-item"><i class="icon-ok text-danger"></i> メール、電話でのサポートあり。</li>
			</ul>
			<div class="panel-footer">
			<p class="text-danger">毎月の継続課金です。</p>
	<form action="" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="2CC4RZRP52VQN">
	<input type="hidden" name="on0" value="userid">
			<input type="hidden" name="os0" maxlength="200" value="kjn6674">
		<p><input class="btn btn-lg btn-block btn-primary" id="contact" type="submit" value="PayPalでお支払い"></p>
	</form>
			<a href="#payment">※お支払い方法について</a>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<br>
		<p>各プランの違いは、使用量のみで、法人、個人、企業、求職者、開発者などの区別はありません。</p>
		<p>また、登録データ表示の優位性なども、プランによる違いは、ほとんどありません。</p>
		<p class="text-danger">具体的には、プレミアムプランやプロプラン利用者のデータが上位表示されるということはありません。</p>
		<br>
		<p>上記説明にない項目、ログイン、プロフィールの編集、データの閲覧、写真の登録などには、制限はありません。</p>
		<p>求人の登録・編集は、企業ユーザーの方のみがご利用いただける機能です。</p>
		<p>メールの送信数は、当サイトを介してのやりとりのみが対象になります。連絡先が明記されているユーザーさんには、直接ご連絡下さい。</p>
		<br>

	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><a name="payment" id="payment"></a><i class="fa fa-credit-card"></i> お支払い方法</h2>
		</div>
		<p>お支払い方法は、<strong><a href="" target="_blank"><i class="fa fa-paypal fa-lg"></i> PayPal</a> によるクレジット決済のみ</strong>です。</p>
		<p>銀行振込をご希望の方は、下記より御相談下さい。</p>

		<br>
		<p>1週間の無料お試し期間がございます。</p>
		<h4 class="text-danger">お申込みいただきますと、<b>毎月、継続課金</b>されます。</h4>
		<h4 class="text-danger">お支払いを停止したい場合は、PayPalの管理画面より、お支払いのキャンセル手続きをお願い致します。</h4>
		<br>
		<h3><i class="fa fa-chain-broken fa-lg"></i> PayPal継続課金解約の手続き</h3>
		<p><a href="" target="_blank">PayPal</a>の解約の手続きは、PayPalログイン後に、下記のURLにアクセスしてください。</p>
		<p><a href="" target="_blank">「事前承認支払い」</a>という画面が表示されますので、こちらで解約手続きをお願い致します。</p>
		<p><a href="" target="_blank">https://www.paypal.com/cgi-bin/customerprofileweb?cmd=_manage-paylist</a></p>
		<p><a href="" target="_blank" class="btn btn-primary" role="button">PayPalの継続課金をキャンセルするには</a></p>
		<br>
		<p>お支払い、お振り込みいただきました料金は、返金出来ません。予め、ご了承下さい。</p>
		<h4 class="text-danger">また、システムはPayPalとは連動しておりません。</h4>
		<h4 class="text-danger">申し訳ありませんが、プラン変更処理に時間がかかる場合があります。</h4>
		<p>お急ぎの場合は、お手数ですが下記よりご連絡下さい。早急に入金確認をさせていただきます。</p>
		<br>
		<p><a href="" class="btn btn-lg btn-primary">お問い合わせ</a></p>
		<p>その他、ご不明な点、ご質問等ございましたら、<a href="">お気軽にどうぞ</a>。</p>
	</div>
</div>
<br>



@endsection