@csrf
                <h1 class="mb-5 text-center">登録画面</h1>

                <div class="form-outline mb-4">
                    <input type="text" id="form6Example1" class="form-control" name="score" value="{{$review->score ?? old('score') }}"/>
                    <label class="form-label" for="form6Example1">本日のスコア</label>
                  </div>

                
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="form-outline mb-4">
                    <textarea class="form-control" id="form6Example7" rows="10r" name="body">{{$review->body ?? old('body') }}</textarea>
                    <label class="form-label" for="form6Example7">内容</label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">投稿</button>
               

    
  
