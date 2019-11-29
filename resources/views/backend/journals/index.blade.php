
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

        <a  href="{{ route('journals.create') }}" class="btn btn-success">Yangi Jurnal qo'shish</a>

        {{--<div class="col-md-4">--}}
            {{--<form action="/search" method="get">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="search" class="form-control" name="search">--}}
                    {{--<span class="input-group-prepend"></span>--}}
                    {{--<button type="submit" class="btn btn-primary">Search</button>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}

        <h1>Jurnallar</h1>

        <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th><b>ID</b></th>
                <th class="th-sm"><b>Jurnal nomi</b>
                </th>
                <th class="th-sm"><b>Jurnal tashkiloti</b>
                </th>
                <th class="th-sm"><b>Jurnal turi</b>
                </th>
               
                <th class="th-sm"><b>Operations</b>
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach ($journals as $item)
              
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->company->name }}</td>
                        <td>{{ $item->journaltype->name }}</td>
                        
                        <!-- <td>@foreach ($journal_category as $jcategory)
                        {{ $jcategory->category->name }} @endforeach
                        </td> -->
                    <td >
                    <a href="{{ route('journals.show', ['id' => $item->id]) }}" title="show" class="btn blue lighten-2 " style="padding:10px 15px">
                        <i  class="fas fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('journals.edit', ['id' => $item->id]) }}" title="edit" class="btn blue lighten-2 " style="padding:10px 15px">
                        <i  class="fas fa-edit" aria-hidden="true"></i>
                    </a>
                    <form action="{{ route('journals.destroy', ['id' => $item->id] )}}" method="post">
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
                {{--{{ $journals ->links() }}--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>
    @endsection