
@extends('layouts.company_profile')

@section('title')
    Details
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="page-header">
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