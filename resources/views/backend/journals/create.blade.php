@extends('backend/backend_layouts.main')
@section('title', 'Jurnal yaratish')
@include('backend/nav')
@section('content')
<div class="container" style="margin-left: 30%; margin-top: 5%; background-color: white; width: 600px; padding: 20px; border-radius: 10px ">
    <div class="row">
        <div class="col-md-12">

            <form action="/journals" method="post" enctype="multipart/form-data">
                @include('backend.journals.form')

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>    
@endsection
