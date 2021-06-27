@extends('app')

@section('title')
    {{$course->name}}
    ({{$course->area}})ホール情報修正
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
                                <form method="POST" action="{{ route('hole.update',compact('course')) }}" enctype="multipart/form-data">
                                    @include('hole.form')
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