@extends('layouts.company_profile')

@section('title')
    メールアドレス変更
@endsection

@section('content')

		

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div align="center">
					<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- seprogrammers_responsive -->
					<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2777979396999517" data-ad-slot="4605319617" data-ad-format="auto" tqkl3fe="" hidden=""></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
		</div>		<div class="page-header">
			<h2><i class="fa fa-at"></i> メールアドレス変更</h2>
		</div>
		<form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="">
			<br>
			<p>現在登録されているメールアドレス</p>
			<h3>{{Session::get('email')}}
				<small>認証済み</small>
			</h3>
			<br>

			
			<div class="form-group">
				<label for="email" class="control-label">新しいメールアドレス</label>
				<input placeholder="new email" class="form-control" name="email" type="text" value="" id="email" style="width:30%">
			</div>


			
			<div class="form-actions">
				<input class="btn btn-primary" id="memberemailupdate" type="submit" value="変更">
			</div>

		</form>
	</div>
</div>


@endsection