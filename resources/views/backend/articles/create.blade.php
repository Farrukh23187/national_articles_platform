@extends('backend/backend_layouts.main')
@section('title', 'maqola yaratish')
@include('backend/nav')
@section('content')
    <style>
        /* The container */
        .radioButton {
            display: block;
            position: relative;
            padding-left: 35px;
            margin-bottom: 12px;
            cursor: pointer;
            font-size: 16px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .radioButton input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 25px;
            width: 25px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .radioButton:hover input ~ .checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .radioButton input:checked ~ .checkmark {
            background-color: #2196F3;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .radioButton input:checked ~ .checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .radioButton .checkmark:after {
            top: 9px;
            left: 9px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: white;
        }
    </style>
<div class="container" style="background-color: white; padding: 20px 20px; border-radius:10px; margin: 20px auto">
    <div class="row">
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
        //console.log(e);
        var journal_id = e.target.value;
        $.get('/backend/json-categories?journal_id=' + journal_id,function(data) {
          // console.log(data['categories']);
          $('#category').empty();
          $('#category').append('<option value="0" disabled selected="true">=== Categoriyani tanlang ===</option>');

          $.each(data['categories'], function(index, categories){
            $('#category').append('<option value="'+ categories.id +'">'+ categories.name +'</option>');
          })
        });
      });

       $('#conference').on('change', function(e){
        // console.log(e);
        var conference_id = e.target.value;
        $.get('/backend/json-categories?conference_id=' + conference_id,function(data) {
          // console.log(data);
          $('#category').empty();
          $('#category').append('<option value="0" disabled selected="true">=== Categoriyani tanlang ===</option>');

          $.each(data['conf_categories'], function(index, categoryObj){
            $('#category').append('<option value="'+ categoryObj.id +'">'+ categoryObj.name +'</option>');
          })
        });
      });

      function check()
      {
          var isConference = document.getElementById('isConference');
          var isJournal = document.getElementById('isJournal');
          if (isConference.checked == true)
          {
              var divConference = document.getElementById("divConference");
              var divJournal = document.getElementById("divJournal");
              divConference.style.display = isConference.checked ? "block" : "none";
              divJournal.style.display = "none";
          } else{
              var divJournal = document.getElementById("divJournal");
              var divConference = document.getElementById("divConference");
              divJournal.style.display = isJournal.checked ? "block" : "none";
              divConference.style.display = "none";
          }
      }

    </script>
@endsection
