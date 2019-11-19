@extends('backend/backend_layouts.main')
@section('title', 'Edit for ' . $journals->name)
@include('backend/nav')
@section('content')
    <div class="container">    
        <div class="row">
            <div class="col-12">
                <h3>Edit for {{ $journals->name }}</h3>
            </div>
                <div class="col-12">
                    <form action=" {{ route('journals.update', ['id' => $journals->id] ) }} " method="post" >
                        {{ method_field('put') }}
                        @include('backend.journals.form') 
                        <input type="submit" value="Update author" class="btn btn-primary">
                    </form>
                </div>
        </div>
    </div>
@endsection