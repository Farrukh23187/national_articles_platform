@extends('backend/backend_layouts.main')
@section('title', 'Edit for ' . $company->name)
@include('backend/nav')
@section('content')
    
<div class="row">
    <div class="col-12">
        <h3>Edit for {{ $company->name }}</h3>
    </div>
        <div class="col-12">
                <form action=" {{ route('companies.update', ['id' => $company->id] ) }} " method="post" >
                    {{ method_field('put') }}
                    @include('companies.form') 
                    <input type="submit" value="Update company" class="btn btn-primary">

                    </form>
        </div>
    </div>
@endsection