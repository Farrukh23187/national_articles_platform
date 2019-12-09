<@extends('backend/backend_layouts.main')
@section('title', 'maqola yaratish')
@include('backend/nav')
@section('content')
  
<div class="container" style="background-color: white; padding: 10px; margin-top: 20px">
    <div class="row" >
        <div class="col-md-12">
            <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
                  @include('backend.articles.form')
            <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script type="text/javascript">
      $('#journal').on('change', function(e){
        console.log(e);
        var journal_id = e.target.value;
        $.get('/json-categories?journal_id=' + journal_id,function(data) {
          console.log(data);
          $('#category').empty();
          $('#category').append('<option value="0" disabled selected="true">=== Categoriyani tanlang ===</option>');

          $.each(data, function(index, categoryObj){
            $('#category').append('<option value="'+ categoryObj.id +'">'+ categoryObj.name +'</option>');
          })
        });
      });


    </script>
@endsection
