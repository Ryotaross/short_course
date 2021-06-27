@csrf
                <h1 class="mb-5 text-center">登録画面</h1>

                <div class="form-outline mb-4">
                    <input type="text" id="form6Example1" class="form-control" name="best_score" value="{{$myinfo->best_score ?? old('best_score') }}"/>
                    <label class="form-label" for="form6Example1">ベストスコア</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example1" class="form-control" name="favorite" value="{{$myinfo->favorite ?? old('favorite') }}"/>
                    <label class="form-label" for="form6Example1">クラブメーカー</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="date" id="form6Example1" class="form-control" name="start" value="{{$myinfo->start ?? old('start') }}"/>
                    <label class="form-label" for="form6Example1">始めた日</label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">投稿</button>
               

    
  
