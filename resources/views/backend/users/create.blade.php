@extends('backend/backend_layouts.main') @section('title', 'Create Users') @include('backend.nav') @section('content')
<div class="container" style="background-color: white; padding:30px 20px; border-radius:10px; margin-top: 20px">
    <div class="row" >
        <div class="col-md-12">
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @include('backend.users.form')

                <button type="submit" class="btn btn-primary btn-sm">&check; Saqlash</button>
            </form>
        </div>
    </div>
</div>
@endsection