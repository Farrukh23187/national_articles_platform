@extends('backend/backend_layouts.main') @section('title', 'Create employees') @section('content')
<div class="container" style="background-color: white; padding: 10px; margin-top: 20px">
    <div class="row" >
        <div class="col-md-12">
            <form action="/employees" method="post" enctype="multipart/form-data">
                @include('employees.form')

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection