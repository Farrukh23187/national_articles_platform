@extends('backend/backend_layouts.main') @section('title', 'Maqolalar') @include('backend/nav') @section('content')

<hr />
<div class="container" style="background-color: white; padding: 10px">
        <a  class="btn btn-success" href="{{ route('articles.create') }}">Yangi maqola kiritish</a>
    
 

    <h1>Maqolalar</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th class="th-sm">Maqola Nomi</th>
                <th class="th-sm">Maqola Muallifi</th>
              
                <th class="th-sm">Maqola kalit sozlari</th>
                <th class="th-sm">Maqola annotatsiyasi</th>
                <th class="th-sm">Maqola Yili</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($article as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->author->first_name }} {{ $item->author->last_name }}</td>
                
                <td>{{ $item->key_words }}</td>
                <td>{{ $item->annotation }}</td>
                <td>{{ $item->year }}</td>

                <td >
                    <a href="{{ route('articles.show', ['id' => $item->id]) }}" title="show" class="btn blue lighten-2 " style="padding:10px 20px">
                        <i  class="fas fa-eye" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('articles.edit', ['id' => $item->id]) }}" title="edit" class="btn blue lighten-2 " style="padding:10px 20px">
                        <i  class="fas fa-edit" aria-hidden="true"></i>
                    </a>
                    <form action="{{ route('articles.destroy', ['id' => $item->id] )}}" method="post">
                        {{ method_field('delete') }}
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')" title="delete" class="btn blue lighten-2 " style="padding:10px 18px">
                            <i class="fas fa-trash" aria-hidden="true"> Delete</i>
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