@extends('layouts.profile')

@section('title')
	訪問履歴
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">		
		<div class="page-header">
			<h2><i class="fa fa-paperclip"></i> 訪問履歴</h2>
		</div>
		<br>

		@if(count($historis)==0)
		<h4><p class="text-muted">訪問履歴データはありません。</p></h4>
		@else
		<div class="row">
				@foreach($historis as $history)
				@if($history->content == 'project')
				<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
					<h4>
						<a href="{{route('details', ['id'=>$history->retriv_id])}}" style="margin-left: 20px;">		
							<i class="fa  fa-briefcase"></i>
							 {{$history->title}}
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
				@else
				<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
					<h4>
						@if($history->role == 1)
						<a href="{{route('company_details', ['id'=>$history->retriv_id])}}">
						@else
						<a href="{{route('talent_details', ['id'=>$history->retriv_id])}}">
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
				@endif
				@endforeach
		</div>
		@endif

	</div>
</div>




@endsection