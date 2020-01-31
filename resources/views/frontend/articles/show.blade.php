@extends('../layouts.app')
@section('title', 'DETAILS for  ' .$article->name)
@section('content')

<div class="container" style="margin-top: 20px;">
    <h1> {{ $article->name }}</h1>

    <table id="dt-material-checkbox" class="table table-striped" cellspacing="0" width="100%">
            <tr class="th-sm">
                <th>ID</th>
                <td>{{ $article->id }}</td>
            </tr>
        <tr class="th-sm">
                    <th>Maqola nomi</th>
                    <td><b>{{ $article->name }}</b></td>
            </tr>
           
            <tr class="th-sm">
                <th>Maqola yili</th>
                <td>{{ $article->year }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Maqola Maullifi</th>
                    <td>{{ $article->author->first_name }} {{ $article->author->last_name }}</td>
            </tr>
           
            <tr class="th-sm">
                    <th>Maqola kalit sozlari</th>
                    <td>{{ $article->key_words }}</td>
            </tr>
            <tr class="th-sm">
                    <th>Maqola annotatsiyasi</th>
                    <td>{{ $article->annotation }}</td>
            </tr> 

            <tr class="th-sm">
                    <th>Jurnal nomi</th>
                    <td>{{ $article->journal->name }}</td>
            </tr>

            <tr class="th-sm">
                <th>Maqola categoriyalari</th>
                <td>
                @foreach($article_categories as $category)
                        {{ $category->category->name }} <br>
                @endforeach
                </td>
            </tr>
            <tr>
                <td>
                    <a href="../files/{{ $article->file }}" download="{{ $article->file }}">
                        <button type="button" class="btn btn-primary" style="padding:10px 18px">
                            <i class="fas fa-download"> yuklab olish</i>
                        </button>
                    </a>
                </td>
            </tr>
        </table>

    </div>
@endsection