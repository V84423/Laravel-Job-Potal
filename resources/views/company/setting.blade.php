@extends('layouts.company_profile')

@section('title')
    アカウント設定
@endsection

@section('content')

    <div class="row">
    	<div class="col-md-12">
        	     
			<div class="page-header">
            	<h2><i class="fa fa-cogs"></i> アカウント設定</h2>
        	</div>

	        <ul class="nav nav-pills nav-stacked">
		        <li><a href="{{route('company_info')}}"><i class="fa fa-search fa-lg"></i> 登録確認</a></li>
		        <!-- <li><a href="{{route('company_change')}}"><i class="fa fa-paint-brush fa-lg"></i> 登録変更</a></li> -->
		        <!-- <li><a href="{{route('company_photo')}}"><i class="fa fa-picture-o fa-lg"></i> 写真登録</a></li> -->
		        <!-- <li><a href="{{route('company_social')}}"><i class="fa fa-plug fa-lg"></i> ソーシャル連携</a></li> -->
		        <!-- <li><a href="{{route('company_link')}}"><i class="fa fa-link fa-lg"></i> 相互リンク</a></li> -->
		        <li><a href="{{route('company_email')}}"><i class="fa fa-at fa-lg"></i> メールアドレス変更</a></li>
		        <li><a href="{{route('company_password')}}"><i class="fa fa-key fa-lg"></i> パスワード変更</a></li>
		        <li><a href="{{route('company_plan')}}"><i class="fa fa-tachometer fa-lg"></i> 利用プラン変更</a></li>
		        <li><a href="{{route('logout')}}"><i class="fa fa-sign-out fa-lg"></i> ログアウト</a></li>
		        <br>
		        <!-- <li><a href="{{route('company_private')}}"><i class="fa fa-ban fa-lg"></i> 非公開設定</a></li> -->
		        <li><a href="{{route('company_close')}}"><i class="fa fa-trash fa-lg"></i> 退会</a></li>
	        </ul>
    	</div>
	</div>
    <br>

@endsection