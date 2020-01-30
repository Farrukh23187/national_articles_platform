@extends('backend/backend_layouts.main')
@section('title', 'Create companies')
@include('backend/nav')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <form action="{{route('companies.store')}}" method="post" enctype="multipart/form-data">
                @include('backend.companies.form')

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection
