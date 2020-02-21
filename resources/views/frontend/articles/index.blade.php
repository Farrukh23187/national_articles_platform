@extends('../layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@include('frontend.articles.ourJsFile')
<div class="bg-white" style=" margin: 50px 30px">
  <div style="background: #d9d9d9; padding: 10px 30px; font-size: 45px;"><i class="fas fa-book left"> </i> Maqolalar</div>
<br>
  <div class="row">

    <div class="col-md-3">

      <div style="" class="col-xs-6 ">
        <select class="form-control" id="CategoryId">
          <option value="">Kategoriyani tanlang</option>
          @foreach(App\Category::all() as $category)
            <option class="option" value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div> <br>

      <div style="" class="col-xs-6 ">
        <select class="form-control" id="AuthorId">
          <option value="">Muallifni tanlang</option>
          @foreach(App\Author::all() as $author)
            <option class="option" value="{{$author->id}}">{{$author->first_name}} {{$author->last_name}}</option>
          @endforeach
        </select>
      </div>
      <br>
      <div class="col-xs-6">
        <input id="key_words" type="text" class="form-control" name="key_words" placeholder="Kalit so'zlar orqali izlash">

      </div>
      <button id="findBtn" class="btn btn-primary">Find</button>
      <a href="{{route('articles')}}" class="btn btn-default">RESET</a>
    <hr>

    </div>



    <div id="productData" class="col-md-9">
      <!--Table-->
      <!-- <div style="width:100%; height:80px; overflow:scroll;"> -->
      <table class="table table-hover table-fixed" style="background-color: #e3e3e3;">

      <!--Table head-->
      <thead>
        <tr>
          <th>#</th>
          <th>Maqola Nomi</th>
          <th>Maqola Kalit Sozlari</th>
          <th>Maqola Annotatsiyasi</th>
          <th>Maqola Yili</th>
          <th>Maqola Jurnali</th>
          <th>Maqola Statusi</th>
        </tr>
      </thead>
      <!--Table head-->

      <!--Table body-->
      <tbody>
      @foreach($article as $item)

        <tr style="">
          <th scope="row">{{$count}}</th>
          <td><a href="{{route('articleShow', ['article' => $item->id])}}" style="text-decoration: underline; "><b>{{$item->name}}</b></a></td>
          <td>{{$item->key_words}}</td>
          <td>{{$item->annotation}}</td>
          <td>{{$item->year}}</td>
          <td>{{$item->journal->name}}</td>
          <td>{{($item->status == 1) ? "Bepul" : "Pullik"}}</td>
        </tr>
        <?php $count = $count+1;?>
        @endforeach
      </tbody>
      <!--Table body-->

      </table>
      <!--Table-->
    </div>
      </div>
    
    
  </div>

@endsection
