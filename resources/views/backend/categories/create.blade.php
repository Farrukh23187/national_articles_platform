@extends('backend/backend_layouts.main') @section('title', 'Create employees')

@include('backend/nav') @section('content')
<div class="container" style="background-color: white; padding: 10px; margin-top: 20px">
    <div class="row" >
        <div class="col-md-12">
            <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
                @include('backend.categories.form')

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection