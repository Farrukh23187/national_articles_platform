@extends('backend/backend_layouts.main')
@section('title', 'Ma`lumotlar  ' .$journal->first_name)
    @include('backend.nav')
@section('content')
<div class="container mt-5" style="background-color: white; padding:30px 20px; border-radius:10px">
    <h1> <b> {{ ($journal->name) ? $journal->name : "Jurnal"}}</b> haqida ma'lumotlar</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <tr class="th-sm">
                <th>ID</th>
                <td>{{ $journal->id }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Jurnal nomi</th>
                    <td>{{ $journal->name }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Jurnal tashkiloti</th>
                    <td>{{ $journal->company->name }}</td>
            </tr>
            
            <tr class="th-sm">
                    <th>Jurnal turi</th>
                    <td>{{ $journal->journaltype->name }}</td>
            </tr>
            <tr class="th-sm">
                <th>Jurnal categoriyalari</th>
                <td>
                @foreach($journal_categories as $category)
                        {{ $category->category->name }} <br>
                @endforeach
                </td>
            </tr>
            
            
        </table>

   
    </div>
@endsection