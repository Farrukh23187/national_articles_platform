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
            <label for="article_authors[]">Maqola muallifini tanlang | (Bir nechta mualliflarni tanlash uchun yoki tanlanganni o'chirish uchun <b>{ctrl + sichqoncha} </b>tugmasini bosing)</label>
            <select id='testSelect1' multiple class="form-control" name="article_authors[]" size="4">
                @foreach ($authors as $author)
                    <option value='{{$author->id}}' style="padding: 5px;border-top: 1px dashed black">{{$author->first_name}} {{$author->last_name}}</option>
                @endforeach
            </select>
            <script>
                document.multiselect('#testSelect1');
            </script>
        </div>
        <div class="form-group pb-2">
            <label for="status">Maqola statusi </label>
            <!-- State dropdown -->
            <select class="form-control" name="status">
                <option value="1" >Bepul maqola</option>
                <option value="0" >Hozircha aktiv emas</option>
                <option value="2" >Pullik maqola</option>
            </select>
        </div>
    <div class="form-group pb-2">
        <label for="pdf">Pdf faylni kiriting</label>
        <input type="file" name="file" id="" class="form-control">
        <div class="text-danger">{{$errors->first('file')}}</div>

    </div>
    <div class="form-group pb-2">
        <label class="radioButton">Konferensiya
            <input type="radio" onclick="check()"  id="isConference" name="isConference"/>
            <span class="checkmark"></span>
        </label>
        <label class="radioButton">Jurnal
            <input type="radio" onclick="check()"  id="isJournal" name="isConference" />
            <span class="checkmark"></span>
        </label>

    </div>
    <div class="form-group pb-2" style="display: none" id="divConference">
        <label for="conference">Konferensiyani tanlang</label>
        <select id="conference" class="form-control" name="conference_id">
            <option value="" disabled selected>Konferensiyani tanlang</option>

        </select>
        <div class="text-danger">{{$errors->first('conference_id')}}</div>
    </div>

    <div class="form-group pb-2" style="display: none" id="divJournal">
        <label for="journal">Jurnalni tanlang</label>
        <select id="journal" class="form-control" name="journal_id">
            <option value="" disabled selected>Jurnalni tanlang</option>
            
            @if(count($journal) > 0){ 
                @foreach($journal as $jurnal){ 
                    <option value="{{ $jurnal->id }}">{{ $jurnal->name }}</option> 
                 @endforeach
            @else 
                    <option value="">Jurnallar kiritilmagan</option> 
            @endif
        </select>
        <div class="text-danger">{{$errors->first('journal_id')}}</div>
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
    