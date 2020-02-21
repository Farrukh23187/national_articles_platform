@extends('backend/backend_layouts.main')
@section('title', 'Edit for ' . $author->first_name)
@include('backend/nav')
@section('content')
    <div class="container" style="background: #fefefe;">    
        <div class="row">
            <div class="col-12">
                <h3>Edit for {{ $author->first_name }}</h3>
            </div>
                <div class="col-12">
                    <form action=" {{ route('authors.update', ['id' => $author->id] ) }} " method="post" >
                        {{ method_field('put') }}
                        @include('backend.authors.form') 
                        <input type="submit" value="Update author" class="btn btn-primary">
                    </form>
                </div>
        </div>
    </div>
@endsection