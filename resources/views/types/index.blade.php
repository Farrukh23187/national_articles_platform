@extends('layouts.app') @section('title', 'Categoriyalar') @section('content')

<hr />
<div class="container" style="background-color: white; padding: 10px">
        <a  class="btn btn-success" href="/employees/create">Yangi Tip kiritish</a>

    <h1>Tiplar</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th class="th-sm">Tip Nomi</th>
                <th class="th-sm">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($type as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>

                <td >
                    <!-- <a href="/employees/{{ $item->id }}" title="show" class="btn blue lighten-2" style="">
                        <i  class="fas fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="/employees/{{ $item->id }}/edit" title="edit" class="btn blue lighten-2" style="">
                        <i  class="fas fa-edit" aria-hidden="true"></i>
                    </a> -->
                    <form action="{{ route('employees.destroy', ['id' => $item->id] )}}" method="post">
                        {{ method_field('delete') }}
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" title="delete" class="btn blue lighten-2" style="">
                            <i class="fas fa-trash" aria-hidden="true">Delete</i>
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