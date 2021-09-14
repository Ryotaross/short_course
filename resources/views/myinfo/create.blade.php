@extends('app')

@section('title')
    {{$user->name}}さんのマイページ登録
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
                        <form method="POST" action="{{route("myinfo.store",compact('user')) }}" enctype="multipart/form-data">
                            @include('myinfo.form')
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