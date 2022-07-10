@extends('layouts.company_profile')

@section('title')
    Details
@endsection

@section('content')


<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-picture-o"></i> 写真登録</h2>
		</div>
		<p>最新の登録、あるいは編集写真がメインのプロフィール写真として設定されます。</p>
		<form method="POST" action="https://www.seprogrammerjobs.com/member/picture/upload" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="XKSZhGuOKoDUGGZa3EanDTqnirDcuNhFOlxkyqwV">
			
			<div class="form-group">
				<label for="pic" class="control-label">写真（JPEG）</label>
				<input name="pic" type="file" id="pic">
			</div>

			
			<div class="form-group">
				<label for="title" class="control-label">写真の説明</label>
				<input placeholder="title" class="form-control" name="title" type="text" value="" id="title">
			</div>

			
			
			<div class="form-actions">
				<input class="btn btn-primary" id="memberpictureupload" type="submit" value="登録">
			</div>

		</form>

		<hr>
		<h3>登録写真一覧</h3>
		<br>
		<div class="row">
		</div>
		<br>
		
	</div>
</div>

@endsection