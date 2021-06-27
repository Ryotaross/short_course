@extends('app')

@section('title')
    @section('title')
    {{$course->name}}
    ({{$course->area}})
    レビュー作成画面
    -ショートコース大全
@stop

@section('content')
    @include('nav')
    <div class="heavy-rain-gradient">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="card my-5" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    @include('error_card_list')
                    <div class="card-text">
                        <form method="POST" action="{{ route('review.store',compact('course')) }}" enctype="multipart/form-data">
                            @include('review.form')
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection