@extends('backend/backend_layouts.main')
@section('title', 'Jurnal yaratish')
@include('backend/nav')
@section('content')
<link rel="stylesheet" href="{{ asset('js/jquery-ui/jquery-ui.min.css') }}">
<div class="container" style="margin-left: 30%; margin-top: 5%; background-color: white; width: 600px; padding: 20px; border-radius: 10px ">
    <div class="row">
        <div class="col-md-12">

            <form action="{{route('conferences.store')}}" method="post" enctype="multipart/form-data">
                @include('backend.conferences.form')

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>    
<script type="text/javascript" src="{{asset('js/jquery-ui/external/jquery/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript">
    $("#date").datepicker({
        dateFormat: 'yy-mm-dd'
    });
</script>
@endsection
