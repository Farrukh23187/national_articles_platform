@extends('backend/backend_layouts.main')
@section('title', 'Ma`lumotlar  ' .$author->first_name)
    @include('backend.nav')
@section('content')
<div class="container mt-5" style="background-color: white; padding:30px 20px; border-radius:10px">
    <h1> <b> {{ ($author->first_name) ? $author->first_name : "author"}}</b> haqida ma'lumotlar</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <tr class="th-sm">
                <th>ID</th>
                <td>{{ $author->id }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Ism familiyasi</th>
                    <td>{{ $author->fullname }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Email adresi</th>
                    <td>{{ $author->email }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Telefon raqami</th>
                    <td>{{ $author->phone }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Akademik maqomi</th>
                    <td>{{ $author->academic_title }}</td>
            </tr>
            
        </table>

   
    </div>
@endsection