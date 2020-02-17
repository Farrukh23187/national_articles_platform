@extends('../layouts.app')

@section('content')
<div class="bg-white" style=" margin: 50px 30px">
  <div class="row">

    <div class="col-md-3">
    <h1>Maqolalar</h1>

      <div style="" class="col-xs-6 ">
        <select class="form-control" id="CategoryId">
          <option value="">Kategoriyani tanlang</option>
          @foreach(App\Category::all() as $category)
            <option class="option" value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div> <br>
      <div class="col-xs-6">
        <input id="key_words" type="text" class="form-control" name="key_words" placeholder="Search by key words">
      </div>
      <button id="findBtn" class="btn btn-primary">Find</button>
      <a href="{{route('articles')}}" class="btn btn-default">RESET</a>
    <hr>

    </div>



    <div id="productData" class="col-md-9">
      <!--Table-->
      <!-- <div style="width:100%; height:80px; overflow:scroll;"> -->
      <table class="table table-hover table-fixed" style="background-color: lightblue;">

      <!--Table head-->
      <thead>
        <tr>
          <th>#</th>
          <th>Maqola Nomi</th>
          <th>Maqola Kalit So'zlari</th>
          <th>Maqola Annotatsiyasi</th>
          <th>Maqola Yili</th>
          <th>Maqola Jurnali</th>
        </tr>
      </thead>
      <!--Table head-->

      <!--Table body-->
      <tbody>
      @foreach($article as $item)
        <tr style="">
          <th scope="row">{{$item->id}}</th>
          <td><a href="{{route('articleShow', ['article' => $item->id])}}" style="text-decoration: underline; "><b>{{$item->name}}</b></a></td>
          <td>{{$item->key_words}}</td>
          <td>{{$item->annotation}}</td>
          <td>{{$item->year}}</td>
          <td>{{$item->journal->name}}</td>
        </tr>
        @endforeach

      </tbody>
      <!--Table body-->

      </table>
      <!--Table-->
    </div>
      </div>
    
    
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@include('frontend.articles.ourJsFile')
@endsection
