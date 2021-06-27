@extends('app')

@section('title','詳細')

@section('content')
    @include('nav')
    <div class="heavy-rain-gradient">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-12 col-lg-10 mt-5">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                      <div class="card">
                          <div class="card-header h2 mx-auto">依頼画面</div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">コース名：{{$offer->course->name}}</li>
                            <li class="list-group-item">ユーザー名：{{$offer->user->name}}</li>
                            <li class="list-group-item">内容：{{$offer->body}}</li>
                            <li class="list-group-item">
                                <div class="row">
                                    <form method="POST" action="{{ route('offer.destroy', compact('offer')) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger d-block mx-auto">削除する</button>
                                    </form>   
                                    <a class="nav-link d-block mx-auto" href="{{ route('offer.index') }}">戻る</a>
                                </div>
                                
                            </li>
                          </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection