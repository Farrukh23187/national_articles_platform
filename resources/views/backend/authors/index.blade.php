
@extends('backend/backend_layouts.main')
@include('backend/nav')
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
                <th><b>ID</b></th>
                <th class="th-sm"><b>Muallif Ismi</b>
                </th>
                <th class="th-sm"><b>Muallif Familiyasi</b>
                </th>
                <th class="th-sm"><b>Muallif email</b>
                </th>
                <th class="th-sm"><b>Muallif telefoni</b>
                </th>
                <th class="th-sm"><b>Company tashkiloti</b>
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
                        <td>{{ $item->first_name }}</td>
                        <td>{{ $item->last_name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->organization }}</td>
                        <td>{{ $item->academic_title }}</td>


                       <!--  <td><img src="{{ asset("storage/$item->logo") }}" alt="" style="width: 10%; height: 10%:"></td> -->
                        <td style="position: relative;  ">
                            <!-- <a href="/companies/{{ $item->id }}" style="float: left">
                                <i title="show" style="padding: 10px 15px" class="btn btn-success">show</i>
                            </a>
                            <a href="/companies/{{ $item->id }}/edit" style="float: left">
                                <i title="edit" style="padding: 10px 20px" class="btn btn-warning">edit</i>
                            </a> -->
                            <form action="{{ route('companies.destroy', ['id' => $item->id] )}}" method="post">
                                {{ method_field('delete') }}
                                <button class="btn btn-danger" style="padding: 10px;" onclick="return confirm('Siz haqiqatdan ham ushbu muallifni olib tashalamoqchimisiz?')"><i title="delete" >delete</i></button>
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