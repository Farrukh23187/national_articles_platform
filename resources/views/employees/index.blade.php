@extends('backend/backend_layouts.main') @section('title', 'Employees List') @section('content')

<hr />
<div class="container" style="background-color: white; padding: 10px">
        <a  class="btn btn-success" href="/employees/create">Yangi maqola kiritish</a>
    
{{--     
        <a href="{{ route('vacancy.create') }}" class="btn btn-primary">Create vacancy</a>
        --}}
    <div class="col-md-4">
        <form action="/search_employee" method="get">
            <div class="form-group">
                <select name="search" id="" class="form-control">
                    @foreach ($company as $com)

                    <option value="{{ $com->id }}">{{ $com->name }}</option>
                    @endforeach
                </select>
                <span class="form-group-prepend"></span>
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>

    <h1>Employees</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th class="th-sm">Employee First Name</th>
                <th class="th-sm">Employee Last Name</th>
                <th class="th-sm">Employee Email</th>
                <th class="th-sm">Employee Phone</th>
                <th class="th-sm">Employee Company</th>
                <th class="th-sm">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employee as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->company->name }}</td>

                <td >
                    <a href="/employees/{{ $item->id }}" title="show" class="btn blue lighten-2" style="">
                        <i  class="fas fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="/employees/{{ $item->id }}/edit" title="edit" class="btn blue lighten-2" style="">
                        <i  class="fas fa-edit" aria-hidden="true"></i>
                    </a>
                    <form action="{{ route('employees.destroy', ['id' => $item->id] )}}" method="post">
                        {{ method_field('delete') }}
                        <button onclick="return confirm('Are you sure?')" title="delete" class="btn blue lighten-2" style="">
                            <i class="fas fa-trash" aria-hidden="true"></i>
                        </button>
                        {{ csrf_field() }}
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection