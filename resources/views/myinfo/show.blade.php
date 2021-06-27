@extends('app')

@section('title')
    {{$user->name}}さんのマイページ
    -ショートコース大全
@stop

@section('content')
    @include('nav')
    <div class="heavy-rain-gradient">
        <div class="container d-flex justify-content-center align-items-center h-100 ">
            <div class="card col-12 my-5">
                <div class="card-body my-5 mx-3">
                    
                    <h1 class="card-title">{{$user->name}}</h1>
                    
                    <h5 class="card-title mt-5 mb-4"><i class="fas fa-greater-than mr-3"></i>基本情報</h5>
                    @if(count($myinfos) == 0)
                        <a class="mr-5 pr-5 text-decoration-none" href="{{route("myinfo.create",compact('user')) }}"><i class="fas fa-angle-double-right"></i>マイデータを登録</a>
                    @endif
                    
                    @foreach($myinfos as $myinfo)
                     <a class="mr-5 pr-5 text-decoration-none" href="{{route("myinfo.edit",compact('user','myinfo')) }}"><i class="fas fa-angle-double-right"></i>マイデータを更新</a>
                        <ul class="list-group list-group-flush col-10 mx-auto ">
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">ベストスコア &emsp; &emsp;</div>
                                    <div class="float-right">{{$myinfo->best_score}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">始めた日 &emsp; &emsp;</div>
                                    <div class="float-right">{{$myinfo->start}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">クラブメーカー &emsp; &emsp;</div>
                                    <div class="float-right">{{$myinfo->favorite}}</div>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                    
                    
                    <h5 class="card-title mt-5 "><i class="fas fa-greater-than mr-3"></i>ゴル活</h5>
                     <ul class="list-group list-group-flush">
                        @foreach($reviews as $review)
                        <li class="list-group-item">
                        <div class="col-8 my-1">
                            <div class="card-body d-flex flex-row">
                            <i class="fas fa-user-circle fa-3x mr-1"></i>
                            <div>
                               
                                <div class="ml-4 pt-1 font-weight-bold">
                                {{ $review->user->name }} 
                                </div>

                                <div class="font-weight-lighter">
                                {{ $review->created_at->format('Y/m/d') }} 
                                <span class="ml-3">本日のスコア：{{ $review->score }} </span>
                                </div>
                            </div>
                            </div>
                            <div class="card-body pt-0 pb-2 ml-5">
                            <div class="card-text">
                                {!! nl2br(e( $review->body )) !!} 
                            </div>
                            </div>
                        </div>
                        </li>
                        @endforeach
                        @if(count($reviews) == 0)
                            <p class="mx-auto px-5 py-5" style="height:10rem">
                                投稿されたレビューはございません。
                        </p>
                        @endif
                     </ul>
                </div>
            </div>
        </div>
    </div>
    
@include('footer')
@endsection