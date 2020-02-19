
    <table class="table table-hover table-fixed" style="background-color: lightblue;">

        <!--Table head-->
        <thead>
        <tr>
            <th>#</th>
            <th>Maqola Nomi</th>
            <th>Maqola Kalit Sozlari</th>
            <th>Maqola Annotatsiyasi</th>
            <th>Maqola Yili</th>
            <th>Muallif</th>

        </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
        @foreach($data as $item)
            <tr style="">
                <th scope="row">{{$item->id}}</th>
                <td><a href="{{route('articleShow', ['article' => isset($item->article_id) ? $item->article_id : $item->id])}}" style="text-decoration: underline; "><b>{{$item->name}}</b></a></td>
                <td>{{$item->key_words}}</td>
                <td>{{$item->annotation}}</td>
                <td>{{$item->year}}</td>
                <td>{{$item->author_id}}</td>

            </tr>
        @endforeach

        </tbody>
        <!--Table body-->

    </table>

