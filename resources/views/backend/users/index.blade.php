@extends('backend/backend_layouts.main') @section('title', 'Userlar') @include('backend.nav') @section('content')

<hr />
<div class="container" style="background-color: white; padding: 10px">
        <a  class="btn btn-success" href="{{route('users.create')}}">Yangi User kiritish</a>

    <h1>Foydalanuvchilar</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th class="th-sm">Foydalanuvchi FIO</th>
                <th class="th-sm">Foydalanuvchi Email</th>
                <th class="th-sm">Foydalanuvchi Username</th>
                <th class="th-sm">Foydalanuvchi Phone</th>
                <!-- <th class="th-sm">Foydalanuvchi Companiyasi</th> -->
                <th class="th-sm">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->phone }}</td>

                <td >
                    <a href="{{ route('users.show', ['id' => $item->id]) }}" title="show" class="btn blue lighten-2 " style="padding:10px 20px">
                        <i  class="fas fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('users.edit', ['id' => $item->id]) }}" title="edit" class="btn blue lighten-2 " style="padding:10px 20px">
                        <i  class="fas fa-edit" aria-hidden="true"></i>
                    </a>
                    <form action="{{ route('users.destroy', ['id' => $item->id] )}}" method="post">
                        {{ method_field('delete') }}
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" title="delete" class="btn blue lighten-2 " style="padding:10px 22px">
                            <i class="fas fa-trash" aria-hidden="true"> Delete</i>
                        </button>
                        {{ csrf_field() }}
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
    <div class="col-md-6"></div>
        <div class="col-md-4 center">
            {{ $users ->links() }}
        </div>
    <div class="col-md-4"></div>

    </div>
</div>
@endsection