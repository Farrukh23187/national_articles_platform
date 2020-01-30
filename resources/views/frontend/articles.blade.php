@extends('../layouts.app')

@section('content')
<div class="bg-white" style=" margin: 50px 30px">
  <div class="row">

    <div class="col-md-3">
    <h1>love is</h1>

    </div>

    <div class="col-md-9">
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
          <th>Maqola Muallifi</th>
          <th>Maqola Jurnali</th>
        </tr>
      </thead>
      <!--Table head-->

      <!--Table body-->
      <tbody>
      @foreach($article as $item)
        <tr style="height: 30px:importable">
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->key_words}}</td>
          <td>{{$item->annotation}}</td>
          <td>{{$item->year}}</td>
          <td>{{$item->author->first_name}} {{$item->author->last_name}}</td>
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
</div>
@endsection