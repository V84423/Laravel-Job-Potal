@extends('layouts.profile')

@section('title')
送信メール
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-paper-plane"></i> <a href="{{route('details',['id'=>$job_id])}}">株式会社 {{$client_firstname[0]->firstname}}</a>さんへメール送信</h2>
		</div>

		<form method="POST" action="{{route('post-mail')}}" accept-charset="UTF-8" id="postMailForm" enctype="multipart/form-data" multiple>
			
			@csrf

			<input type="hidden" name="receive_id" value="{{$client}}">
			<input type="hidden" name="project_id" value="{{$job_id}}">


			<div class="form-group">
				<label for="mailtext" class="control-label">メール本文</label>
				<textarea placeholder="mail text" class="form-control" name="mailText" cols="50" rows="10" id="mailtext"></textarea>
				<span class="reg-error">メール本文入力してください</span>
			</div>

			<div class="form-group">
				<label for="file" class="control-label">添付ファイル</label>
				<input id="mailAttachmentFile" name="files[]" type="file" multiple>
			</div>

				
			<div class="form-group">
				<!-- <label for="info" class="control-label">連絡先情報の送信</label>
				<br>
				<div class="iradio_minimal" style="position: relative;">
					<input name="info" type="radio" value="1" id="info">連絡先情報を送信する<br>
					<input checked="checked" name="info" type="radio" value="2" id="info"> 連絡先情報を送信しない<br>
				</div>

				<p>「連絡先情報を送信する」を選択いただくと、お名前、メールアドレス、ホームページURLなど、個人情報が送信されます。</p> -->
					
				<div class="form-actions">
					<input class="btn btn-primary" id="memberlettersend" type="button" value="メール送信">
				</div>
			</div>

		</form>
	</div>
</div>

@endsection