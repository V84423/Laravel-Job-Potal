@extends('layouts.company_profile')

@section('title')
    Details
@endsection

@section('content')


<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-link"></i> 相互リンク</h2>
		</div>
		<p class="text-primary">相互リンクいただきますと、トップページ「注目の求職者」「注目の開発者」に掲載させていただきます。</p>
		<p>「相互リンク確認」ボタンをクリックいただきますと、相互リンクを確認いただけます。</p>
		<p>リンク例</p>
		<h4>
			<code>
				&lt;a href="http://www.seprogrammerjobs.com/"&gt;プログラマーズ&lt;/a&gt;
			</code>
		</h4>
		<br>
		<form method="POST" action="https://www.seprogrammerjobs.com/member/sogo" accept-charset="UTF-8"><input name="_token" type="hidden" value="XKSZhGuOKoDUGGZa3EanDTqnirDcuNhFOlxkyqwV">
			
			<div class="form-group">
				<label for="url" class="control-label">URL</label>
				<input placeholder="URL" class="form-control" name="url" type="text" id="url">
			</div>

			
			<div class="form-actions">
				<input class="btn btn-primary" id="memberedit" type="submit" value="相互リンク確認">
			</div>

		</form>
	</div>
</div>
	

@endsection