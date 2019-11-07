@extends('backend/backend_layouts.main')
@section('title', 'DETAILS for  ' .$company->name)
@include('backend/nav')
@section('content')
    <h1>Details for {{ $company->name }}</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
        <tr class="th-sm">
            <th>ID</th>
            <td>{{ $company->id }}</td>
        </tr>
        <tr class="th-sm">
                <th>Name</th>
                <td>{{ $company->name }}</td>
        </tr>
        <tr class="th-sm">
                <th>Email</th>
                <td>{{ $company->email }}</td>
        </tr>
        <tr class="th-sm">
                <th>Website</th>
                <td>{{ $company->website }}</td>
        </tr>
        <tr class="th-sm">
                <th>Logo</th>
                <td><img src="{{ asset("storage/$company->logo") }}" style="width: 10%" alt=""></td>
        </tr>
    </table>

    
@endsection