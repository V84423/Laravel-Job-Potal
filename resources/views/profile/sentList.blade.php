@extends('layouts.profile')

@section('title')
送信メール
@endsection

@section('content')

@if (Session::has('msg'))
<div class="notification-alert alert alert-success alert-dismissible show" role="alert" align="center">
    {{ Session::get('msg') }}
    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="top:10px;">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif


<div class="row">
	<div class="col-md-12">
		<div class="page-header">
			<h2><i class="fa fa-paper-plane"></i> 送信メール</h2>
		</div>
		<br>
		
        @if(count($messages)==0)
            <h4><p class="text-muted">送信メールはありません。</p></h4>
        @else
        @foreach($messages as $message)
        <div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h4>
                    <a href="{{route('company_details',['id'=>$message->receive_id])}}">
                        <img src="{{asset('storage')}}/{{str_replace('public','',$message->receive_photo)}}" class="rounded-circle" alt="image" style="border: 1px solid;height: 40px;width: 40px;"> 
                        {{$message->receive_name}}
                    </a>
                </h4>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-5 col-lg-5">
                <h4><a href="{{route('user_message',['id'=>$message->id])}}">{{$message->project_title}}</a></h4>
            </div>
			<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
				<div class="pull-right">
                    <p>{{$message->created_at}} 
                
                        @if($message->status == 0)
                        <span class="badge badge-info">unread</span>
                        @endif
                        
                    </p>
                </div>
			</div>
			<div class="clearfix visible-sm visible-md visible-lg"></div>            
		</div>
        @endforeach
        @endif
	</div>
</div>






@endsection