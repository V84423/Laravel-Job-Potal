@extends('layouts.company_profile')

@section('title')
    メール
@endsection

@section('content')


<div class="row">
	<div class="col-md-12">
		<div class="page-header">
        <h2><i class="fa fa-envelope"></i> メール  [<a href="{{route('details',['id'=>$job[0]->id])}}">{{$job[0]->title}}</a>]</h2>
		</div>

		<div class="messagebox" style="
			border: 1px solid #ccc;
			padding: 20px;
			border-radius: 5px;
			height: 500px;
			overflow-y: auto;
		">
        @foreach($messages as $message)
        <div class="row">
			<div class="col-md-12" style="padding-left: 25px;margin-bottom: 20px;">                    
                    <p style="font-size: 20px;color: blue;">
						
						@if($message->send_role == 0)
						<a href="{{route('talent_details',['id'=>$message->send_id])}}">
						@else
						<a href="{{route('company_details',['id'=>$message->send_id])}}">
						@endif
							<img src="{{asset('storage')}}/{{str_replace('public','',$message->send_photo)}}" class="rounded-circle" alt="image" style="border: 1px solid;height: 40px;width: 40px;"> 
							{{$message->send_name}}
						</a>

                        <small style="float:right;font-size: 12px;">
                        {{$message->created_at}}
						@if($message->status == 0)
                        <span class="badge badge-info">unread</span>
                        @endif
                        </small>
						
                    </p>
                    <p style="padding-left: 40px;">
                        {{$message->mailText}}
                    </p>
					<p style="padding-left: 40px;">
						<?php

							if($message->filenames != '' && $message->filenames != NULL){
								$filenames = explode(",", $message->filenames);
								$files = explode(",", $message->files);
								$cnt = 0;
								foreach($filenames as $filename){

									// echo '<a href="'.asset('storage').str_replace("public","",$files[$cnt]).'" target="blank">'.$filename.' <i class="fa fa-download"> </i></a><br>';
									echo '<a href="'.route('download',["filepath"=>str_replace("public/messages/","",$files[$cnt]), "filename"=>$filename]).'" target="blank">'.$filename.' <i class="fa fa-download"> </i></a><br>';
									$cnt++;
								}
							}
						?>
						
							
					</p>
			</div>
		</div>
        @endforeach
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<form method="POST" action="{{route('post-mail')}}" accept-charset="UTF-8" id="postMailForm" enctype="multipart/form-data">
			@csrf
			<input type="hidden" name="receive_id" value="{{$client}}">
			<input type="hidden" name="project_id" value="{{$job[0]->id}}">

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