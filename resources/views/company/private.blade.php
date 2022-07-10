@extends('layouts.company_profile')

@section('title')
    Details
@endsection

@section('content')

	
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div align="center">
					<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- seprogrammers_responsive -->
					<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2777979396999517" data-ad-slot="4605319617" data-ad-format="auto" bnfrrr5="" hidden=""></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
		</div>		<div class="page-header">
			<h2><i class="fa fa-ban"></i> 求職者・開発者プロフィールの公開・非公開設定</h2>
		</div>
		<p>
			非公開に設定されますと、全ての登録データは全て一時、非公開となります。<br>
			登録データは削除されませんが、退会と同等の状態となります。
		</p>
		<form method="POST" action="https://www.seprogrammerjobs.com/member/hideupdate" accept-charset="UTF-8"><input name="_token" type="hidden" value="XKSZhGuOKoDUGGZa3EanDTqnirDcuNhFOlxkyqwV">


			<div class="form-group">
				<label for="hide" class="control-label">公開・非公開</label>
				<br>
				<div class="iradio_minimal checked">
					<input checked="checked" name="hide" type="radio" value="1" id="hide"> 公開
				</div> 
				<div class="iradio_minimal">
					<input name="hide" type="radio" value="2" id="hide"> 非公開
				</div> 
				<br>
			</div>



			<div class="form-actions">
				<input class="btn btn-primary" id="memberedit" type="submit" value="変更">
			</div>

		</form>
	</div>
</div>

@endsection