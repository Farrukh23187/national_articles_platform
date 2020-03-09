    <div class="row">
        <div class="col-md-12">
    <div class="form-group pb-3">
            <label for="name">Konferensiya nomini kiriting</label>
            <input type="text" name="name"  class="form-control" value="{{ old('name') ?? $conference->name}}">
            <div class="text-danger">{{$errors->first('name')}}</div>
    </div>
    <div class="form-group pb-2">
            <label for="company_id">Konferensiya tashkilotini tanlang</label>
            <select name="company_id" id="" class="form-control">
                @foreach ($company as $com)
                <option value="{{ $com->id }}">{{ $com->name }}</option>
                @endforeach
            </select>
            <div class="text-danger">{{$errors->first('company_id')}}</div>
    </div>
    <div class="form-group pb-2">
        <label for="date">Konferensiya otkaziladigan vaqtni tanlang</label>
        <input type="text" name="date" id="date" class="form-control" value="{{ old('date') ?? $conference->date}}">
        <div class="text-danger">{{$errors->first('date')}}</div>
    </div>

    <div class="form-group pb-2">
            <label for="conferencetype_id">Konferensiya turini tanlang</label>
            <select name="conferencetype_id" id="" class="form-control">
                @foreach ($conferencetype as $jourtype)
                <option value="{{ $jourtype->id }}">{{ $jourtype->name }}</option>
                @endforeach
            </select>
            <div class="text-danger">{{$errors->first('conferencetype_id')}}</div>
    </div>

    <div class="form-group pb-2">
    <label for="conference_categories[]">Konferensiya categoriyasini tanlang | (Bir nechta categoriyani tanlash uchun yoki tanlanganni o'chirish uchun <b>{ctrl + sichqoncha} </b>tugmasini bosing)</label>
        <select id='testSelect1' multiple class="form-control" name="conference_categories[]" size="4">
            @foreach ($category as $categor)
            <option value='{{$categor->id}}' style="padding: 5px;border-top: 1px dashed black">{{$categor->name}}</option>
            @endforeach
        </select>
<script>
	document.multiselect('#testSelect1');
</script>
    </div>
</div>
{{ csrf_field() }}
