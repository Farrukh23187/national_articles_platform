

@extends('layouts.app')
@section('title', 'Muallif yaratish')

@section('content')
    <div class="row">
        <div class="col-md-12">

            <form action="/authors" method="post" enctype="multipart/form-data">
                @include('authors.form')

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
@endsection
