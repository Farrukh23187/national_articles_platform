@extends('layouts.app')
@section('title', 'Employees List')
    
@section('content')

<hr>
    <div class="container" style="background-color :white; padding: 10px" >
        
<button class="btn btn-primary"><a style="color:white; text-decoration:none" href="/employees/create">Add New Employee</a></button>
{{-- <a href="{{ route('vacancy.create') }}" class="btn btn-primary">Create vacancy</a> --}}
<div class="col-md-4">
        <form action="/search_employee" method="get">
            <div class="form-group">
               <select name="search" id="" class="form-control">
                   @foreach ($company as $com)
                       
                   <option value="{{ old('search') ?? $com->id }}">{{ $com->name }}</option>
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
        <th class="th-sm">Employee First Name
        </th>
        <th class="th-sm">Employee Last Name
        </th>
        <th class="th-sm">Employee Email
        </th>
        <th class="th-sm">Employee Phone
        </th>
        <th class="th-sm">Employee Company
        </th>
        <th class="th-sm">Operations
        </th>
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
          @foreach ($name as $chiq)
          <td>{{ $chiq->name }}</td>
              
          @endforeach
          
          <td>
                <a href="/employees/{{ $item->id }}">
                        <i title="show" class="glyphicon glyphicon-eye-open"></i>
                    </a>
                <a href="/employees/{{ $item->id }}/edit">
                        <i title="edit" class="glyphicon glyphicon-edit"></i>
                    </a>
                    <form action="{{ route('employees.destroy', ['id' => $item->id] )}}" method="post">
                        {{ method_field('delete') }}
                    <button onclick="return confirm('Are you sure?')"><i title="delete" class="glyphicon glyphicon-remove"></i></button>
                      {{ csrf_field() }}
                  </form>
          </td>
        </tr>
        @endforeach
        
      
  </table>


    </div>
@endsection