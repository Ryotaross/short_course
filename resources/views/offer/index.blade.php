@extends('app')

@section('title','管理画面')

@section('content')
    @include('nav')
    <section class="intro">
      <div class="heavy-rain-gradient">
        <div class="mask d-flex align-items-center h-100">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12">
                <div class="table-responsive bg-white mt-5">
                  @if(count($offers) != 0)
                  <table class="table mb-0">
                    <thead>
                      <tr>
                        <th scope="col">コース名</th>
                        <th scope="col">ユーザ名</th>
                        <th scope="col">本文</th>
                        <th scope="col">詳細</th>
                        <th scope="col">削除</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($offers as $offer)
                          <tr>
                            <th scope="row" style="color: #666666;">{{$offer->course->name}}</th>
                            <td>{{$offer->user->name}}</td>
                            <td>{{$offer->body}}</td>
                            <td><a class="text-dark border-bottom" href="{{ route('offer.show',['offer'=>$offer]) }}">詳細</a></td>
                            <td>
                                <form method="POST" action="{{ route('offer.destroy', compact('offer')) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">削除する</button>
                                </form>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
                  <span class="text-center">{{ $offers->links() }}</span>
                  @else
                  <h2 class="d-block mx-auto">オファーなし</h2>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection