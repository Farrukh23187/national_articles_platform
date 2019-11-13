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
        <th class="th-sm">Company nomi
        </th>
        <th class="th-sm">Company email addresi
        </th>
        <th class="th-sm">Company manzili
        </th>
        <th class="th-sm">Company telefon raqami
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
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->phone }}</td>
                   
                    <!-- <td><img src="{{ asset("storage/$item->logo") }}" alt="" style="width: 10%; height: 10%:"></td> -->
                    <td><a href="https://{{ $item->website }}">{{ $item->website }}</a></td>
                    <td>
                        <a href="{{ route('companies.show', ['id' => $item->id]) }}" title="show" class="btn blue lighten-2 " style="padding:10px 20px">
                            <i  class="fas fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('companies.edit', ['id' => $item->id]) }}" title="edit" class="btn blue lighten-2 " style="padding:10px 20px">
                            <i  class="fas fa-edit" aria-hidden="true"></i>
                        </a>
                          
                    <form action="{{ route('companies.destroy', ['id' => $item->id] )}}" method="post">
                            {{ method_field('delete') }}
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" style="padding:10px 22px"><i title="delete" class="fas fa-trash"> </i> delete</button>
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