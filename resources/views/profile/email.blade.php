@extends('layouts.profile')

@section('title')
	メールアドレス変更
@endsection

@section('content')

		

<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-at"></i> 求職者・開発者メールアドレス変更</h2>
		</div>
		<form method="POST" action="" accept-charset="UTF-8">
			@csrf
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