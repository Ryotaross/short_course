@extends('app')

@section('title')
    ショートコース検索結果一覧
    -ショートコース大全
@stop

@section('content')
    @include('nav')
    <div class="heavy-rain-gradient">
        <div class="container d-flex justify-content-center align-items-center h-100">
            <div class="card text-center mt-5 col-12 " style="width: 18rem;">
                <div class="card-body">
                
                    <p class="card-text border col-12 col-md-3 text-left px-3 py-3 mr-3" id="click">
                        <span class="text-primary pr-1">地域</span>
                        <span class="text-claer">選択する</span>
                        <span class="float-right"><i class="fas fa-plus-circle ml-5" ></i></span>
                    </p>
                    
                    <form method="GET" action="{{ route('course.index') }}" >
                        <div class="clearfix align-items-center">
                            <input type="text" class="form-control rounded search float-left" placeholder="キーワード" aria-label="Search"
                            aria-describedby="search-addon" name ="word">
                        
                            <input type="submit" class="btn btn-danger btn-danger text-white float-right" value="serach">
                        </div>
                    </form> 
                
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center align-items-center h-100 ">
        
            <div class="card my-5 col-12" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    @if(count($courses) != 0)
                        @foreach($courses as $course)
                                <a class="text-dark border-bottom" href="{{ route('course.show',['course'=>$course]) }}">
                                    <li class="list-group-item my-4">
                                        <div class="row g-0">
                                            <div class="col-12 col-md-3">
                                            <img  class="img-fluid" src="{{ asset('storage/avatar/' . $course->img) }}" alt="画像" 
                                            style="width:30vh;"/>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="card-body">
                                                    <div class="row mb-3">
                                                        <div>
                                                            <h4 class="card-title d-none d-md-block">{{$course->name}}</h4>
                                                            <h6 class="card-title d-block d-md-none">{{$course->name}}</h6>
                                                            <p class="card-text ml-1">{{$course->address}}</p>
                                                        </div>
                                                        <div class="card-body pt-0 pb-2 pl-3 text-right">
                                                            <div class="card-text">
                                                            <course-like
                                                                :initial-is-liked-by='@json($course->isLikedBy(Auth::user()))'
                                                                :initial-count-likes='@json($course->count_likes)' 
                                                                :authorized='@json(Auth::check())'
                                                                endpoint="{{ route('course.like', ['course' => $course]) }}"  
                                                            >
                                                            </course-like>

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
                                                    <div class="row">
                                                        <p class="card-text mx-2"><small class="text-muted">料金：{{$course->price}}</small></p>
                                                        <p class="card-text mx-2"><small class="text-muted">定休日：{{$course->off}}</small></p>
                                                        <p class="card-text mx-2"><small class="text-muted">営業時間：{{$course->workTime}}</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                        @endforeach
                        <span class="text-center">{{ $courses->links() }}</span>
                   
                </ul>
                @else
                    <p class="mx-auto px-5 py-5" style="height:10rem">
                        ご指定の条件に該当するショートコースは見つかりませんでした。</n>
                        検索条件を変更して、再度検索してください。
                    </p>
                @endif
            </div>
        </div>
    </div>
    @include('footer')
    @include('pref')
@endsection