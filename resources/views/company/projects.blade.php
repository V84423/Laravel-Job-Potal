@extends('layouts.company_profile')

@section('title')
    案件管理
@endsection

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			
		<div class="page-header">
			<h2><i class="fa fa-briefcase"></i> 案件一覧</h2>
			</div>
		</div>
		<div class="clearfix visible-xs visible-sm visible-md visible-lg"></div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            
            <span class="input-group-btn">
                <!-- <input name="word" type="text" class="form-control" placeholder="Search" value="">
                <input class="btn btn-default" id="search" type="submit" value="検索"> -->
                <a href="{{route('company_post')}}" class="btn btn-primary" style="float:right">
                    <i class="fa fa-pencil"></i> 新規登録
                </a>
            </span>

		</div>
	</div>
	<div class="row">
		<div class="col-md-12">				
			@foreach($projects as $project)
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3><a href="{{route('details',['id'=>$project->id])}}">{{$project->title}}</a>
					@if($project->status == 1)
					<small>募集中 </small>
					@else
					<small>募集終了 </small>
					@endif
					</h3>
					<h4 class="language">
						@foreach(explode(',', $project->skills) as $skill)
						<span class="label label-info">{{$skill}}</span> 
						@endforeach
                    </h4>
				</div>
				<div class="clearfix visible-xs visible-sm visible-md visible-lg"></div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p>{{$project->estimate}} 万円</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p>{{$project->address}}</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p>
                        <!-- <i class="fa fa-edit"></i> <a href="">編集</a> -->
                        <i class="fa fa-trash"></i> <span onclick="delProject({{$project->id}});" style="cursor:pointer">消去</span>
                    </p>
				</div>
			</div>
			<br>
			@endforeach
		</div>
	</div>
	<br>
</div>











@endsection