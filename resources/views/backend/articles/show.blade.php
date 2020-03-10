@extends('backend/backend_layouts.main')
@section('title', 'DETAILS for  ' .$article->name)
@include('backend/nav')
@section('content')

<div class="container" style="background: #fefefe; margin-top: 20px;">
    <h1> {{ $article->name }}ning malumotlari</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <tr class="th-sm">
                <th>ID</th>
                <td>{{ $article->id }}</td>
            </tr>
        <tr class="th-sm">
                    <th>Maqola nomi</th>
                    <td>{{ $article->name }}</td>
            </tr>
           
            <tr class="th-sm">
                <th>Maqola yili</th>
                <td>{{ $article->year }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Maqola Muallifi</th>
                <td>
                    @foreach($article_authors as $authors)
                        {{ $authors->author->first_name }} {{ $authors->author->last_name }} <br>
                    @endforeach
                </td>
            </tr>
           
            <tr class="th-sm">
                    <th>Maqola kalit sozlari</th>
                    <td>{{ $article->key_words }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Maqola annotatsiyasi</th>
                    <td>{{ $article->annotation }}</td>
            </tr> 
        @if(isset($article->journal->name))
            <tr class="th-sm">
                    <th>Jurnal nomi</th>
                    <td>{{ $article->journal->name }}</td>
            </tr>
        @else
            <tr class="th-sm">
                <th>Konferensiya nomi</th>
                <td>{{ $article->conference->name }}</td>
            </tr>
        @endif
            <tr class="th-sm">
                <th>Maqola categoriyalari</th>
                <td>
                @foreach($article_categories as $category)
                        {{ $category->category->name }} <br>
                @endforeach
                </td>
            </tr>
        </table>

    </div>
@endsection