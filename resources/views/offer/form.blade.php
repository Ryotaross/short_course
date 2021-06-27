@csrf
                <h1 class="mb-5 text-center">修正画面</h1>
                
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="form-outline mb-4">
                    <textarea class="form-control" id="form6Example7" rows="10" name="body">{{$offer->body ?? old('body') }}</textarea>
                    <label class="form-label" for="form6Example7">修正箇所</label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">修正依頼</button>