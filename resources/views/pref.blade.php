

<div id="bg">
<div class="card col-10 mx-auto" >
  <div class="card-header">エリア絞り込み
  <i class="fas fa-chevron-down float-right" id="ok"></i>
  </div>
  <ul class="list-group list-group-flush">
  <form method="get" action="{{ route('course.index') }}">
    <li class="list-group-item">北海道
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="北海道" name="pref[]"/>
                <label class="form-check-label" >北海道</label>
            </div>
        </div>
    </li>
    <li class="list-group-item ">東北
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="青森県" name="pref[]"/>
                <label class="form-check-label" >青森県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="岩手県" name="pref"/>
                <label class="form-check-label" >岩手県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="宮城県" name="pref"/>
                <label class="form-check-label" >宮城県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="秋田県" name="pref"/>
                <label class="form-check-label" >秋田県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="山形県" name="pref"/>
                <label class="form-check-label" >山形県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="福島県" name="pref"/>
                <label class="form-check-label" >福島県</label>
            </div>
        </div>
    </li>
    <li class="list-group-item">関東
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="茨城県" name="pref"/>
                <label class="form-check-label" >茨城県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="栃木県" name="pref"/>
                <label class="form-check-label" >栃木県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="群馬県" name="pref"/>
                <label class="form-check-label" >群馬県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="埼玉県" name="pref"/>
                <label class="form-check-label" >埼玉県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="千葉県" name="pref"/>
                <label class="form-check-label" >千葉県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="東京都" name="pref"/>
                <label class="form-check-label" >東京都</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="神奈川県" name="pref"/>
                <label class="form-check-label" >神奈川県</label>
            </div>
        </div>
    </li>
    <li class="list-group-item">北陸・甲信越
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="新潟県" name="pref"/>
                <label class="form-check-label" >新潟県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="富山県" name="pref"/>
                <label class="form-check-label" >富山県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="石川県" name="pref"/>
                <label class="form-check-label" >石川県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="福井県" name="pref"/>
                <label class="form-check-label" >福井県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="山梨県" name="pref"/>
                <label class="form-check-label" >山梨県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="長野県" name="pref"/>
                <label class="form-check-label" >長野県</label>
            </div>
        </div>
    </li>
    <li class="list-group-item">東海
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="岐阜県" name="pref"/>
                <label class="form-check-label" >岐阜県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="静岡県" name="pref"/>
                <label class="form-check-label" >静岡県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="愛知県" name="pref"/>
                <label class="form-check-label" >愛知県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="三重県" name="pref"/>
                <label class="form-check-label" >三重県</label>
            </div>
        </div>
    </li>
    <li class="list-group-item">近畿
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="滋賀県" name="pref"/>
                <label class="form-check-label" >滋賀県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="京都府" name="pref"/>
                <label class="form-check-label" >京都府</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="大阪府" name="pref"/>
                <label class="form-check-label" >大阪府</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="兵庫県" name="pref"/>
                <label class="form-check-label" >兵庫県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="奈良県" name="pref"/>
                <label class="form-check-label" >奈良県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="和歌山県" name="pref"/>
                <label class="form-check-label" >和歌山県</label>
            </div>
        </div>
    </li>
    <li class="list-group-item">中国
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="鳥取県" name="pref"/>
                <label class="form-check-label" >鳥取県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="島根県" name="pref"/>
                <label class="form-check-label" >島根県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="岡山県" name="pref"/>
                <label class="form-check-label" >岡山県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="広島県" name="pref"/>
                <label class="form-check-label" >山口県</label>
            </div>
        </div>
    </li>
    <li class="list-group-item">四国
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="徳島県" name="pref"/>
                <label class="form-check-label" >徳島県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="香川県" name="pref"/>
                <label class="form-check-label" >香川県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="愛媛県" name="pref"/>
                <label class="form-check-label" >愛媛県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="高知県" name="pref"/>
                <label class="form-check-label" >高知県</label>
            </div>
        </div>
    </li>
    <li class="list-group-item">九州・沖縄
        <div class="form-row ml-5">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="福岡県" name="pref"/>
                <label class="form-check-label" >福岡県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="佐賀県" name="pref"/>
                <label class="form-check-label" >佐賀県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="長崎県" name="pref"/>
                <label class="form-check-label" >長崎県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="大分県" name="pref"/>
                <label class="form-check-label" >大分県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="熊本県" name="pref"/>
                <label class="form-check-label" >熊本県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="宮崎県" name="pref"/>
                <label class="form-check-label" >宮崎県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="鹿児島県" name="pref"/>
                <label class="form-check-label" >鹿児島県</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" value="沖縄県" name="pref"/>
                <label class="form-check-label" >沖縄県</label>
            </div>
        </div>
    </li>
    <li class="list-group-item">
    <button type="submit" class="btn btn-primary  text-white col-12 mx-auto">検索</button>
    </li>
    
    </form>
  </ul>
</div>
</div>
