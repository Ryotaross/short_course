@extends('app')

@section('title','{{$course->name}}')

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
                    </div>
                    <p class="card-text">{{$course->address}}</p>
                   
                    <h5 class="card-title mt-5 "><i class="fas fa-greater-than mr-3"></i>ゴル活一覧</h5>
                    <a class="mr-5 pr-5 text-decoration-none" href="{{ route('review.create',compact('course')) }}"><i class="fas fa-angle-double-right"></i>投稿</a>
                     <ul class="list-group list-group-flush">
                        @foreach($reviews as $review)
                        <li class="list-group-item">
                        <div class="col-8 my-1">
                            <div class="card-body d-flex flex-row">
                            <i class="fas fa-user-circle fa-3x mr-1"></i>
                            <div>
                                <div class="row">
                                <div class="ml-4 pt-1 font-weight-bold">
                                {{ $review->user->name }} {{--この行を変更--}}
                                </div>

                                @if( Auth::id() === $review->user_id )
                                                <div class="card-text pt-0 pb-2 pl-3 text-right">
                                                    <div class="dropdown">
                                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <button type="button" class="btn btn-link text-muted m-0 p-2">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                        </button>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $review->id }}">
                                                        <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                                                        </a>
                                                    </div>
                                                    </div>
                                                </div>
                                                <!-- dropdown -->
                                        
                                                <!-- modal -->
                                                <div id="modal-delete-{{ $review->id }}" class="modal fade" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        </div>
                                                        <form method="POST" action="{{ route('review.destroy', compact('course','review')) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-body">
                                                            このレビューを削除します。よろしいですか？
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
                        <span class="text-center">{{ $reviews->links() }}</span>
                     </ul>
                </div>
            </div>
        </div>
    </div>
@include('footer')
@endsection