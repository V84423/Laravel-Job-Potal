@extends('layouts.profile')

@section('title')
	足跡
@endsection

@section('content')


<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-paw"></i> 足跡</h2>
		</div>
		<br>

		@if(count($historis)==0)
		<h4><p class="text-muted">足跡データはありません。</p></h4>
		@else
		<div class="row">
				@foreach($historis as $history)
				<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
					<h4>
						@if($history->role == 1)
						<a href="{{route('company_details', ['id'=>$history->created_by_id])}}">
						@else
						<a href="{{route('talent_details', ['id'=>$history->created_by_id])}}">
						@endif
							<img src="{{asset('storage')}}/{{str_replace('public','',$history->photo)}}" class="rounded-circle" alt="image" style="border: 1px solid;height: 40px;width: 40px;margin-right: 20px;margin-left: 20px;">
							 {{$history->firstname}}
						</a>
					</h4>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
					<div class="pull-right">
						<p>{{$history->created_at}} 
							@if($history->status == 0)
							<span class="badge badge-info" style="margin-right: 50px;">New</span>
							@endif
						</p>
					</div>
				</div>

				<div class="clearfix visible-sm visible-md visible-lg"></div>
				@endforeach
		</div>
		@endif
</div>

@endsection