@extends('layouts.profile')

@section('title')
	パスワード変更
@endsection

@section('content')

	
<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-key fa-lg"></i> 求職者・開発者パスワード変更</h2>
		</div>
		<div class="col-md-6">
			<form id="changePasswordForm" method="POST" action="{{route('user_change_password')}}" accept-charset="UTF-8">
				@csrf
				
				<div class="form-group">
					<label for="password" class="control-label">パスワード</label>
					<input placeholder="password" class="form-control" name="password" type="password" value="" id="password">
					<span class="reg-error">正しいパスワードを挿入してください</span>
				</div>

				
				<div class="form-group">
					<label for="password_confirmation" class="control-label">パスワード確認</label>
					<input placeholder="password confirmation" class="form-control" name="password_confirmation" type="password" value="" id="password_confirmation">
					<span class="reg-error">正しいパスワードを挿入してください</span>
				</div>


				
				<div class="form-actions">
					<input class="btn btn-primary" id="memberpassupdate" type="button" value="変更">
				</div>

			</form>
		</div>
	</div>
</div>


@endsection