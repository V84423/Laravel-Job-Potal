
@extends('layouts.profile')

@section('title')
	求職者・開発者退会
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div align="center">
					<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
					<!-- seprogrammers_responsive -->
					<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2777979396999517" data-ad-slot="4605319617" data-ad-format="auto" muxp97s="" hidden=""></ins>
					<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
			</div>
		</div>		<div class="page-header">
			<h2><i class="fa fa-trash"></i> 求職者・開発者退会</h2>
		</div>
		<form method="POST" action="" accept-charset="UTF-8"><input name="_token" type="hidden" value="">


			<div class="form-group">
				<label for="opinion" class="control-label">退会理由</label>
				<textarea placeholder="opinion" class="form-control" name="opinion" cols="50" rows="10" id="opinion"></textarea>
			</div>



			<div class="form-actions">
				<input class="btn btn-danger" id="memberquit" type="submit" value="退会">
			</div>

		</form>
	</div>
</div>


@endsection