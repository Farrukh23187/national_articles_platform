@extends('backend/backend_layouts.main')
@section('title', 'Edit for ' . $employee->first_name)
    
@section('content')
    
<div class="row">
    <div class="col-12">
        <h3>Edit for {{ $employee->first_name }}</h3>
    </div>
        <div class="col-12">
                <form action=" {{ route('employees.update', ['id' => $employee->id] ) }} " method="post" >
                    {{ method_field('put') }}
                    @include('employees.form') 
                    <input type="submit" value="Update company" class="btn btn-primary">

                    </form>
        </div>
    </div>
@endsection