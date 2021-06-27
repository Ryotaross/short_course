@csrf
                <h1 class="mb-5 text-center">登録画面</h1>

                
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example1" class="form-control" name="name" value="{{$course->name ?? old('name') }}"/>
                    <label class="form-label" for="form6Example1">施設名</label>
                  </div>


                  <div class="form-outline mb-4">
                    <select name="area" class="form-control">
                        <option value="">選択してください</option>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                    <label class="form-label" for="form6Example1">都道府県</label>
                  </div>

                  <!-- Text input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example2" class="form-control" name="address" value="{{$course->address ?? old('address') }}" />
                    <label class="form-label" for="form6Example2">住所</label>
                  </div>

                  <!-- Text input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example3" class="form-control" name="number" value="{{$course->number ?? old('number') }}"/>
                    <label class="form-label" for="form6Example3">電話番号</label>
                  </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example4" class="form-control" name="hp" value="{{$course->hp ?? old('hp') }}"/>
                    <label class="form-label" for="form6Example4">ホームページ</label>
                  </div>

                  <!-- Number input -->
                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example5" class="form-control" name="highway" value="{{$course->highway ?? old('highway') }}"/>
                    <label class="form-label" for="form6Example5">最寄り高速道路</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example6" class="form-control" name="price" value="{{$course->price ?? old('price') }}"/>
                    <label class="form-label" for="form6Example6">料金</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example7" class="form-control" name="card" value="{{$course->card ?? old('card') }}"/>
                    <label class="form-label" for="form6Example7">支払い方法</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example8" class="form-control" name="off" value="{{$course->off ?? old('off') }}"/>
                    <label class="form-label" for="form6Example8">定休日</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="form6Example9" class="form-control" name="workTime" value="{{$course->workTime ?? old('workTime') }}"/>
                    <label class="form-label" for="form6Example9">営業時間</label>
                  </div>

                 <div class="mx-auto col-5 mb-4">
                    <div class="clearfix">
                        <div class="form-check float-left">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="cart"
                                    id="flexRadioDefault1"
                                    value="1"
                                />
                                <label class="form-check-label" for="flexRadioDefault1"> カート有 </label>
                        </div>

                            <div class="form-check float-right">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="cart"
                                    id="flexRadioDefault1"
                                    value="0"
                                />
                                <label class="form-check-label" for="flexRadioDefault1"> カート無 </label>
                            </div>
                        </div>

                        <div class="clearfix">
                            <div class="form-check float-left">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="dish"
                                    id="flexRadioDefault1"
                                    value="1"
                                />
                                <label class="form-check-label" for="flexRadioDefault1"> レストラン有 </label>
                            </div>

                            <div class="form-check float-right">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="dish"
                                    id="flexRadioDefault1"
                                    value="0"
                                />
                                <label class="form-check-label" for="flexRadioDefault1"> レストラン無 </label>
                            </div>
                        </div>

                        <div class="clearfix">
                            <div class="form-check float-left">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="spa"
                                    id="flexRadioDefault1"
                                    value="1"
                                />
                                <label class="form-check-label" for="flexRadioDefault1"> シャワー有 </label>
                            </div>

                            <div class="form-check float-right">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="spa"
                                    id="flexRadioDefault1"
                                    value="0"
                                />
                                <label class="form-check-label" for="flexRadioDefault1"> シャワー無 </label>
                            </div>
                        </div>

                        <div class="clearfix">
                            <div class="form-check float-left">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="rental"
                                    id="flexRadioDefault1"
                                    value="1"
                                />
                                <label class="form-check-label" for="flexRadioDefault1"> レンタルクラブ有 </label>
                            </div>

                            <div class="form-check float-right">
                                <input
                                    class="form-check-input"
                                    type="radio"
                                    name="rental"
                                    id="flexRadioDefault1"
                                    value="0"
                                />
                                <label class="form-check-label" for="flexRadioDefault1"> レンタルクラブ無 </label>
                            </div>
                        </div>
                    </div>

                    

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-secondary btn-rounded btn-block">Place order</button>
               

    
  
