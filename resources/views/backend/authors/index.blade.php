
@extends('backend/backend_layouts.main')
@include('backend/nav')
@section('content')

    <style>
        td{
            width: 100px;
        }
    </style>
    <hr>
    <div class="container" style="background-color: white; padding: 10px">

        <a  href="{{ route('authors.create') }}" class="btn btn-success">Yangi muallif qoshish</a>
         {{--<a href="{{ route('vacancy.create') }}" class="btn btn-primary">Create vacancy</a>--}}

        {{--<div class="col-md-4">--}}
            {{--<form action="/search" method="get">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="search" class="form-control" name="search">--}}
                    {{--<span class="input-group-prepend"></span>--}}
                    {{--<button type="submit" class="btn btn-primary">Search</button>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}

        <h1>Mualliflar</h1>

        <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th><b>ID</b></th>
                <th class="th-sm"><b>Muallif Ism familiyasi</b>
                </th>
                <th class="th-sm"><b>Muallif email</b>
                </th>
                <th class="th-sm"><b>Muallif telefoni</b>
                </th>
                <th class="th-sm"><b>Muallif darajasi</b>
                </th>
                <th class="th-sm"><b>Operations</b>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($author as $item)
                <a href="/authors/{{ $item->id }}">
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->fullname }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->academic_title }}</td>


                        <td >
                    <a href="{{ route('authors.show', ['id' => $item->id]) }}" title="show" class="btn blue lighten-2 " style="padding:10px 15px">
                        <i  class="fas fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('authors.edit', ['id' => $item->id]) }}" title="edit" class="btn blue lighten-2 " style="padding:10px 15px">
                        <i  class="fas fa-edit" aria-hidden="true"></i>
                    </a>
                    <form action="{{ route('employees.destroy', ['id' => $item->id] )}}" method="post">
                        {{ method_field('delete') }}
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" title="delete" class="btn blue lighten-2 " style="padding:10px 15px">
                            <i class="fas fa-trash" aria-hidden="true"> Delete</i>
                        </button>
                        {{ csrf_field() }}
                    </form>
                </td>
                    </tr>
                </a>
            @endforeach

        </table>

        {{--<div class="row">--}}
            {{--<div class="col-md-12 text-center">--}}
                {{--{{ $author ->links() }}--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>
    @endsection