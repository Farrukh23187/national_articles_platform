@extends('layouts.app')
@section('title', 'Create companies')

@section('content')
<div class="row">
<div class="col-md-12">

    <form action="/companies" method="post" enctype="multipart/form-data">
        @include('companies.form')

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</div>
@endsection
