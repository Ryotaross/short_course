<h1 class="mb-5 text-center">登録画面</h1>
@csrf
<div class="table-responsive">
    <table class="table table-bordered ">
        <thead>
                               
            <tr>
                <th>HOLE</th>
                <th>PAR</th>
                <th>YARD</th>
            </tr>
        </thead>
        <tbody>
                                
              @for($i=1;$i<19;$i++) 
                <tr>
                    <td>{{$i}}</td> 
                    <td><input type="number" class="form-control" name="par[]" value="{{$holes[$i-1]['par'] ?? old('par') }}"/></td>
                    <td><input type="number"  class="form-control" name="yard[]" value="{{$holes[$i-1]['yard']  ?? old('yard') }}"/></td>
                    <input type="hidden"  class="form-control" name="hole_number[]" value="{{ $i }}"/> 
                </tr>
              @endfor   
        </tbody>

    </table>
</div>
<button type="submit" class="btn btn-secondary btn-rounded btn-block">Place order</button>
               

    
  
