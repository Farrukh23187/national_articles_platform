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
        <label for="key_words">Maqola kalit sozlarini kiriting</label>
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
            <option value="">Muallifni tanlang</option>
                @foreach ($author as $com)
                <option value="{{ $com->id }}">{{ $com->first_name }} {{ $com->last_name }}</option>
                @endforeach
            </select>
            <div class="text-danger">{{$errors->first('author_id')}}</div>
    </div>

    <div class="form-group pb-2">
        <label for="journal">Jurnalni tanlang</label>
        <select id="journal" class="form-control" name="journal_id">
            <option value="" disabled selected>Jurnalni tanlang</option>
            
            @if(count($journal) > 0){ 
                @foreach($journal as $jurnal){ 
                    <option value="{{ $jurnal->id }}">{{ $jurnal->name }}</option> 
                 @endforeach
            @else 
                    <option value="">jurnallar kiritilmagan</option> 
            @endif
        </select>
        <div class="text-danger">{{$errors->first('journal')}}</div>
    </div>

    <div class="form-group pb-2">
        <label for="article_categories">Maqola categoriyasini tanlang | (Bir nechta categoriyani tanlash uchun yoki tanlanganni o'chirish uchun <b>{ctrl + sichqoncha} </b>tugmasini bosing)</label>
        <!-- State dropdown -->
        <select id="category"  multiple class="form-control" name="article_categories[]">
            <option value="" disabled >Avval jurnalni tanlang</option>
        </select>
    </div>

</div>
</div>
    {{ csrf_field() }}
    