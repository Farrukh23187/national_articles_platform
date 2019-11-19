<div class="row">
    <div class="col-md-12">
    <div class="form-group pb-3">
        <label for="name">Maqola nomini kiriting</label>
        <input type="text" name="name"  class="form-control" value="{{ old('name') ?? $article->name}}">
        <div class="text-danger">{{$errors->first('name')}}</div>
    </div>
    <div class="form-group pb-3">
            <label for="year">Maqola yilini kiriting</label>
            <input type="text" name="year"  class="form-control" value="{{ old('year') ?? $article->year}}">
            <div class="text-danger">{{$errors->first('year')}}</div>
        </div>
    
    <div class="form-group pb-2">
        <label for="email">Maqola kalit sozlarini kiriting</label>
        <textarea name="key_words" id="" class="form-control" value="" cols="30" rows="10">{{ old('key_words') ?? $article->key_words}}</textarea>
        <div class="text-danger">{{$errors->first('key_words')}}</div>
    </div>

    <div class="form-group pb-3">
            <label for="annotation">Maqola annotatsiyasini kiriting</label>
            <textarea name="annotation" id="" class="form-control" value="" cols="30" rows="10">{{ old('annotation') ?? $article->annotation}}</textarea>
            <div class="text-danger">{{$errors->first('annotation')}}</div>
    </div>

    <div class="form-group pb-2">
            <label for="author_id">Muallifni tanlang</label>
            <select name="author_id" id="" class="form-control">
                @foreach ($author as $com)
                <option value="{{ $com->id }}">{{ $com->first_name }} {{ $com->last_name }}</option>
                @endforeach
            </select>
            <div class="text-danger">{{$errors->first('author_id')}}</div>
    </div>

    <div class="form-group pb-2">
        <label for="category_id">Kategoriyani tanlang</label>
        <select name="category_id" id="" class="form-control">
            @foreach ($category as $cat)
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
        <div class="text-danger">{{$errors->first('category_id')}}</div>
    </div>

</div>
</div>
    {{ csrf_field() }}
    