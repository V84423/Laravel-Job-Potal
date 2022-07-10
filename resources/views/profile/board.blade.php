@extends('layouts.profile')

@section('title')
    Details
@endsection

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-12">
			
		<div class="page-header">
			<h2><i class="fa fa-briefcase"></i> 求人一覧</h2>
			</div>
		</div>
		<div class="clearfix visible-xs visible-sm visible-md visible-lg"></div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="input-group col-xs-3 col-sm-3 col-md-6 col-lg-6">
			<form method="GET" action="https://www.seprogrammerjobs.com/job" accept-charset="UTF-8" role="search">
			<span class="input-group-btn">
			<input name="word" type="text" class="form-control" placeholder="Search" value="">
			<input class="btn btn-default" id="search" type="submit" value="検索">
			<a href="https://www.seprogrammerjobs.com/job/add" class="btn btn-primary"><i class="fa fa-pencil"></i> 新規登録</a>
			</span>
			</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<ul class="pagination pagination-sm">
				<li><span class="disabled">前へ</span></li>
		
																<li class="active"><a href="#">1</a></li>
																	<li><a href="/job/page/2">2</a></li>
																	<li><a href="/job/page/3">3</a></li>
																	<li><a href="/job/page/4">4</a></li>
																	<li><a href="/job/page/5">5</a></li>
																	<li><a href="/job/page/6">6</a></li>
																	<li><a href="/job/page/7">7</a></li>
																	<li><a href="/job/page/8">8</a></li>
																	<li><a href="/job/page/9">9</a></li>
											<li><a href="#">...</a></li>
				<li><a href="/job/page/274">274</a></li>
				<li><a href="/job/page/275">275</a></li>
				<li><a href="/job/page/2">次へ</a></li>
			</ul>
				
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3><a href="https://www.seprogrammerjobs.com/job/show/12737" class="">JAVA系SEPG急募 年齢65歳までの元気な方</a>
					<small> </small>
					</h3>
					<h4 class="language"><span class="label label-info">Java</span> <span class="label label-info">PHP</span> <span class="label label-info">Perl</span> <span class="label label-info">RuBY</span> <span class="label label-info">JAVAScript</span> <span class="label label-success">Oracle</span> <span class="label label-success">SQLServer</span> <span class="label label-success">PostgreSQL</span> <span class="label label-success">MySQL</span> <span class="label label-success">Apache</span> ... </h4>
				</div>
				<div class="clearfix visible-xs visible-sm visible-md visible-lg"></div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p>61 万円/月給
										（契約社員）
									</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p>
					東京都				関東近県
					</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p><i class="fa fa-building-o"></i> <a href="https://www.seprogrammerjobs.com/company/profile/417" class="">カルク</a></p>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3><a href="https://www.seprogrammerjobs.com/job/show/32933" class="">開発支援案件</a>
					<small><span class="badge badge-cool">Cool</span> </small>
					</h3>
					<h4 class="language"><span class="label label-info">.Net</span>  </h4>
				</div>
				<div class="clearfix visible-xs visible-sm visible-md visible-lg"></div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p>57 万円/月給
										（業務委託）
									</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p>
					東京都				神田　※基本在宅業務...
					</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p><i class="fa fa-building-o"></i> <a href="https://www.seprogrammerjobs.com/company/profile/4051" class="">株式会社イースタジオ</a></p>
				</div>
			</div>

			<br>
			
			<ul class="pagination pagination-sm">
				<li><span class="disabled">前へ</span></li>	
				<li class="active"><a href="#">1</a></li>
				<li><a href="/job/page/2">2</a></li>
				<li><a href="/job/page/3">3</a></li>
				<li><a href="/job/page/4">4</a></li>
				<li><a href="/job/page/5">5</a></li>
				<li><a href="/job/page/6">6</a></li>
				<li><a href="/job/page/7">7</a></li>
				<li><a href="/job/page/8">8</a></li>
				<li><a href="/job/page/9">9</a></li>
				<li><a href="#">...</a></li>
				<li><a href="/job/page/274">274</a></li>
				<li><a href="/job/page/275">275</a></li>
				<li><a href="/job/page/2">次へ</a></li>
			</ul>
		</div>
	</div>
	<br>
</div>



@endsection