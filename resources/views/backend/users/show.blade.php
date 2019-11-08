@extends('backend/backend_layouts.main')
@section('title', 'Ma`lumotlar  ' .$user->fullname)
    @include('backend.nav')
@section('content')
<div class="container mt-5" style="background-color: white; padding:30px 20px; border-radius:10px">
    <h1> <b> {{ ($user->fullname) ? $user->fullname : "User"}}</b> haqida ma'lumotlar</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <tr class="th-sm">
                <th>ID</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Full Name</th>
                    <td>{{ $user->fullname }}</td>
            </tr>
            
            <tr class="th-sm">
                    <th>Email</th>
                    <td>{{ $user->email }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Phone</th>
                    <td>{{ $user->phone }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Company</th>
                    <td>{{ ($user->company_id != null) ? $user->company->name : "Companiya kiritilmagan" }}</td>
            </tr>
        </table>

    {{-- <div class="form-group">
        <strong>First Name user </strong>{{ $user->fullname }}
    </div>
    <div class="form-group">
            <strong>Last Name user </strong>{{ $user->last_name }}
        </div>
    <div class="form-group">
        <strong>Email address</strong> {{ $user->email }}
    </div>
    <div class="form-group">
        <strong>Phone</strong> {{ $user->phone }}
    </div>
    <div class="form-group">
            <strong>Company</strong> {{ $user->company->name }}
        </div> --}}
        
    </div>
@endsection