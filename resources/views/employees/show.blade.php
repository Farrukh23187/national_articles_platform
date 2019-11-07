@extends('backend/backend_layouts.main')
@section('title', 'DETAILS for  ' .$employee->first_name)
    
@section('content')
    <h1>Details for {{ $employee->first_name }}</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <tr class="th-sm">
                <th>ID</th>
                <td>{{ $employee->id }}</td>
            </tr>
            <tr class="th-sm">
                    <th>First Name</th>
                    <td>{{ $employee->first_name }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Last Name</th>
                    <td>{{ $employee->last_name }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Email</th>
                    <td>{{ $employee->email }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Phone</th>
                    <td>{{ $employee->phone }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Company</th>
                    <td>{{ $employee->company->name }}</td>
            </tr>
        </table>

    {{-- <div class="form-group">
        <strong>First Name employee </strong>{{ $employee->first_name }}
    </div>
    <div class="form-group">
            <strong>Last Name employee </strong>{{ $employee->last_name }}
        </div>
    <div class="form-group">
        <strong>Email address</strong> {{ $employee->email }}
    </div>
    <div class="form-group">
        <strong>Phone</strong> {{ $employee->phone }}
    </div>
    <div class="form-group">
            <strong>Company</strong> {{ $employee->company->name }}
        </div> --}}
        
      
@endsection