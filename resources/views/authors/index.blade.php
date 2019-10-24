
@extends('layouts.app')

@section('content')

    <style>
        td{
            width: 100px;
        }
    </style>
    <hr>
    <div class="container">

        <a  href="{{ route('authors.create') }}" class="btn btn-success">Yangi muallif qo'shish</a>
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
                <th>ID</th>
                <th class="th-sm">Muallif Ismi
                </th>
                <th class="th-sm">Muallif Familiyasi
                </th>
                <th class="th-sm">Muallif email
                </th>
                <th class="th-sm">Muallif telefoni
                </th>
                <th class="th-sm">Company tashkiloti
                </th>
                <th class="th-sm">Muallif darajasi
                </th>
                <th class="th-sm">Operations
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($author as $item)
                <a href="/authors/{{ $item->id }}">
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

        {{--<div class="row">--}}
            {{--<div class="col-md-12 text-center">--}}
                {{--{{ $author ->links() }}--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>
    @endsection