@extends('backend/backend_layouts.main')
@section('title', 'Companies List')
    
@section('content')
@include('backend/nav')
<style>
    td{
        width: 100px;
    }
</style>
<hr>
    <div class="container">
        
<a  href="/companies/create" class="btn btn-success">Add New Company</a>
{{-- <a href="{{ route('vacancy.create') }}" class="btn btn-primary">Create vacancy</a> --}}
<div class="col-md-4">
    <form action="/search" method="get">
        <div class="input-group">
            <input type="search" class="form-control" name="search">
            <span class="input-group-prepend"></span>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
<h1>Companies</h1>

<table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>ID</th>
        <th class="th-sm">Company Name
        </th>
        <th class="th-sm">Company email
        </th>
        <th class="th-sm">Company logo
            </th>
        <th class="th-sm">Company website
                </th>
        <th class="th-sm">Operations
        </th>
        </tr>
    </thead>
    <tbody>
      @foreach ($company as $item)
      <a href="/companies/{{ $item->id }}">
            <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td><img src="{{ asset("storage/$item->logo") }}" alt="" style="width: 10%; height: 10%:"></td>
                    <td><a href="https://{{ $item->website }}">{{ $item->website }}</a></td>
                    <td>
                          <a href="/companies/{{ $item->id }}">
                                  <i title="show" class="glyphicon glyphicon-eye-open"></i>
                              </a>
                          <a href="/companies/{{ $item->id }}/edit">
                                  <i title="edit" class="glyphicon glyphicon-edit"></i>
                              </a>
                              <form action="{{ route('companies.destroy', ['id' => $item->id] )}}" method="post">
                                  {{ method_field('delete') }}
                              <button onclick="return confirm('Are you sure?')"><i title="delete" class="glyphicon glyphicon-remove"></i></button>
                                {{ csrf_field() }}
                            </form>
                    </td>
                  </tr>
      </a>
        @endforeach
        
  </table>

  <div class="row">
        <div class="col-md-12 text-center">
            {{ $company ->links() }}
        </div>
    </div>
  
    </div>
@endsection