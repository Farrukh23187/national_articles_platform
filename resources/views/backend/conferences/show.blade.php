@extends('backend/backend_layouts.main')
@section('title', 'Ma`lumotlar  ')
    @include('backend.nav')
@section('content')
<div class="container mt-5" style="background-color: white; padding:30px 20px; border-radius:10px">
    <h1> <b> {{ ($conference->name) ? $conference->name : "Konferensiya"}}</b> haqida malumotlar</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <tr class="th-sm">
                <th>ID</th>
                <td>{{ $conference->id }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Jurnal nomi</th>
                    <td>{{ $conference->name }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Jurnal tashkiloti</th>
                    <td>{{ $conference->company->name }}</td>
            </tr>
            
            <tr class="th-sm">
                    <th>Jurnal turi</th>
                    <td>{{ $conference->conferencetype->name }}</td>
            </tr>
            <tr class="th-sm">
                <th>Jurnal categoriyalari</th>
                <td>
                @foreach($conference_categories as $category)
                        {{ $category->category->name }} <br>
                @endforeach
                </td>
            </tr>
            
            
        </table>

   
    </div>
@endsection