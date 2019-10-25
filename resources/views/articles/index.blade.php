@extends('layouts.app') @section('title', 'Maqolalar') @section('content')

<hr />
<div class="container" style="background-color: white; padding: 10px">
        <a  class="btn btn-success" href="/employees/create">Yangi maqola kiritish</a>
    
 

    <h1>Maqolalar</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th class="th-sm">Maqola Nomi</th>
                <th class="th-sm">Maqola Muallifi</th>
                <th class="th-sm">Maqola Categoriyasi</th>
                <th class="th-sm">Maqola Turi</th>
                <th class="th-sm">Maqola Yili</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($article as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection