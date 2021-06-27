@extends('app')

@section('title','ゴルフ')

@section('content')

  @include('nav')
  <!-- Navbar -->

<main>

  <!--Section: Design Block-->
  <section>
    <div id="intro" class="bg-image" style="
        background-image: url('{{ asset('/assets/img/golf1.jpg') }}');
        height: 100vh;
      ">
      <div class="mask d-flex justify-content-center align-items-center h-100" style="background-color: rgba(27,222,27,0.5);">
        <div class="container d-flex justify-content-center align-items-center h-100">
          <div class="row align-items-center">
            <div class="col-12 col-md-12 col-sm-6">
              <p class="mb-0 text-white text-center">ショートコース特化型ゴルフコース検索サイト</p>
              <h1 class="mb-0 text-white display-3 py-2">ショートコース大全</h1>
              <div class="btn-group btn-group-lg d-flex align-items-center" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-white text-success">キーワード</button>
                <button type="button" class="btn btn-white text-success " id="click">都道府県</button>
                <!--<button type="button" class="btn btn-white text-success">特徴</button>-->
            　</div>
              <div class="">
                <form method="GET" action="{{ route('course.index') }}" >
                  <div class="align-items-center">
                    <input type="text" class="form-control rounded search float-left mb-3" placeholder="キーワード" aria-label="Search"
                      aria-describedby="search-addon" name ="word">
                  
                    <button type="submit" class="btn btn-danger btn-danger d-block mx-auto " >Search</button>
                  </div> 
                </form> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Section: Design Block-->

  @include('footer')
  @include('pref')
   <!--<div class="container my-5 py-5"></div>-->
</main>

@endsection