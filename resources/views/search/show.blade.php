@extends('app')

@section('title')
    {{$course->name}}
    ({{$course->area}})
    -ショートコース大全
@stop

@section('content')
    @include('nav')
    <div class="heavy-rain-gradient">
        <div class="container d-flex justify-content-center align-items-center h-100 ">
            <div class="card col-12 my-5">
                <div class="card-body my-5 mx-3">
                    <div class="row">
                    <h1 class="card-title">{{$course->name}}</h1>
                    <div class="card-body pt-0 pb-2 pl-3 text-right">
                        <div class="card-text">
                            <course-like
                                :initial-is-liked-by='@json($course->isLikedBy(Auth::user()))'
                                :initial-count-likes='@json($course->count_likes)'  
                                :authorized='@json(Auth::check())'
                                endpoint="{{ route('course.like', ['course' => $course]) }}"  
                            >
                            </course-like>
                        </div>
                        <div class="card-text">
                            <course-went
                                :initial-is-Went-by='@json($course->isWentBy(Auth::user()))'
                                :initial-count-Wents='@json($course->count_wents)' 
                                :authorized='@json(Auth::check())'
                                endpoint="{{ route('course.went', ['course' => $course]) }}" 
                            >
                            </course-went>
                        </div>
                    </div>
                    @if( Auth::id() === 1 )
                        <div class="ml-auto card-text">
                            <div class="dropdown">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <button type="button" class="btn btn-link text-muted m-0 p-2">
                                <i class="fas fa-ellipsis-v"></i>
                                </button>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route("course.edit", compact('course')) }}">
                                <i class="fas fa-pen mr-1"></i>記事を更新する
                                </a>
                                @if(count($holes) != 0)
                                <a class="dropdown-item" href="{{ route("hole.edit", compact('course')) }}">
                                <i class="fas fa-pen mr-1"></i>ホール情報を更新する
                                </a>
                                @else
                                    <a class="dropdown-item" href="{{ route("hole.create", compact('course')) }}">
                                <i class="fas fa-pen mr-1"></i>ホール情報を追加する
                                </a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $course->id }}">
                                <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                                </a>
                            </div>
                            </div>
                        </div>
                        <!-- dropdown -->
                
                        <!-- modal -->
                        <div id="modal-delete-{{ $course->id }}" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form method="POST" action="{{ route('course.destroy', compact('course')) }}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    {{ $course->name }}を削除します。よろしいですか？
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                    <button type="submit" class="btn btn-danger">削除する</button>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    @endif
                    </div>
                    <p class="card-text">{{$course->address}}</p>

                    <h5 class="card-title mt-5 mb-4 "><i class="fas fa-greater-than mr-3"></i>コース情報</h5>
                    @if(count($holes) == 0)
                        <h3 class="card-title text-center">コース情報未登録</h3>
                        <!-- <a href="{{route('hole.create',compact('course'))}}">ここ</a> -->
                    @elseif(count($holes) < 10)
                    <div class="table-responsive">
                        <table class="table table-bordered ">
                            <thead>
                               
                                <tr>
                                    <th>HOLE</th>
                                    @for($i = 1;$i<10; $i++)
                                        <th scope="col">{{$i}}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">PAR</th>
                                    @foreach($holes as $hole)
                                        <td>{{$hole->par}}</td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <th scope="row">YARD</th>
                                    @foreach($holes as $hole)
                                        <td>{{$hole->yard}}</td>
                                    @endforeach
                                    
                                </tr>
                            </tbody>

                        </table>
                    </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-bordered ">
                                <thead>
                                
                                    <tr>
                                        <th>HOLE</th>
                                        @for($i = 1;$i<19; $i++)
                                        <th scope="col">{{$i}}</th>
                                    @endfor
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">PAR</th>
                                        @foreach($holes as $hole)
                                            <td>{{$hole->par}}</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <th scope="row">YARD</th>
                                        @foreach($holes as $hole)
                                            <td>{{$hole->yard}}</td>
                                        @endforeach
                                        
                                    </tr>
                                </tbody>

                            </table>
                        </div>

                    @endif
                    

                    <h5 class="card-title mt-5 mb-4"><i class="fas fa-greater-than mr-3"></i>基本情報</h5>
                    <div class="clearfix">
                        <div class="col-6 float-left">
                            <img  class="img-fluid" src="{{ asset('storage/avatar/' . $course->img) }}" alt="画像" 
                            style="width:80vh;"/>
                        </div>
                        <ul class="list-group list-group-flush col-6 float-right">
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">施設名 &emsp; &emsp;</div>
                                    <div class="float-right">{{$course->name}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">住所 &emsp; &emsp;</div>
                                    <div class="float-right">{{$course->address}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">電話番号 &emsp; &emsp;</div>
                                    <div class="float-right">{{$course->number}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">HP &emsp; &emsp;</div>
                                    <a href="{{$course->hp}}"><div class="float-right">HPはこちら</div></a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">最寄り高速 &emsp; &emsp;</div>
                                    <div class="float-right">{{$course->highway}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">料金 &emsp; &emsp;</div>
                                    <div class="float-right">{{$course->price}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">支払い方法 &emsp; &emsp;</div>
                                    <div class="float-right">{{$course->card}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">定休日 &emsp; &emsp;</div>
                                    <div class="float-right">{{$course->off}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">営業時間 &emsp; &emsp;</div>
                                    <div class="float-right">{{$course->workTime}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="clearfix col-12">
                                    <div class="bold float-left">その他</div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm ">
                                            <thead>
                                            <tr class="text-center">
                                                <th scope="col" style="width:25%">カート</th>
                                                <th scope="col" style="width:25%">レストラン</th>
                                                <th scope="col" style="width:25%">シャワー</th>
                                                <th scope="col" style="width:25%;font-size:0.7rem">レンタルクラブ</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="text-center">
                                                @if($course->cart == 0)
                                                    <td>☓</td>
                                                @else
                                                    <td>○</td>
                                                @endif
                                                @if($course->dish == 0)
                                                    <td>☓</td>
                                                @else
                                                    <td>○</td>
                                                @endif
                                                @if($course->spa == 0)
                                                    <td>☓</td>
                                                @else
                                                    <td>○</td>
                                                @endif
                                                @if($course->rental == 0)
                                                    <td>☓</td>
                                                @else
                                                    <td>○</td>
                                                @endif
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                     </div>
                    <h5 class="card-title mt-5 "><i class="fas fa-greater-than mr-3"></i>ゴル活</h5>
                    <a class="mr-5 pr-5 mb-4 text-decoration-none" href="{{ route('review.create',compact('course')) }}"><i class="fas fa-angle-double-right"></i>投稿</a>
                     <ul class="list-group list-group-flush">
                        @foreach($reviews as $review)
                        <li class="list-group-item">
                        <div class="col-8 my-1">
                            <div class="card-body d-flex flex-row">
                            <i class="fas fa-user-circle fa-3x mr-1"></i>
                            <div>
                                <div class="row">
                                <div class="ml-4 pt-1 font-weight-bold">
                                {{ $review->user->name }} 
                                </div>


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
                        @if(count($reviews) != 0)
                            <a class="mr-5 pr-5 mt-4 text-decoration-none" href="{{ route('review.index',compact('course')) }}"><i class="fas fa-angle-double-right"></i>もっと見る</a>
                        @endif
                     </ul>
                </div>
                <a class="my-5 text-decoration-none d-block mx-auto" href="{{ route('offer.create',compact('course')) }}"><i class="fas fa-angle-double-right"></i>情報を修正</a>
            </div>
        </div>
    </div>
@include('footer')
@endsection