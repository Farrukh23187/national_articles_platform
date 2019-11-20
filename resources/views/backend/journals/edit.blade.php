@extends('backend/backend_layouts.main')
@section('title', 'Edit for ' . $journal->name)
@include('backend/nav')
@section('content')
    <div class="container">    
        <div class="row">
            <div class="col-12">
                <h3>Edit for {{ $journal->name }}</h3>
            </div>
                <div class="col-12">
                    <form action=" {{ route('journals.update', ['id' => $journal->id] ) }} " method="post" >
                        {{ method_field('put') }}
                            <div class="row">
        <div class="col-md-12">
    <div class="form-group pb-3">
            <label for="name">Jurnal nomini kiriting</label>
            <input type="text" name="name"  class="form-control" value="{{ old('name') ?? $journal->name}}">
            <div class="text-danger">{{$errors->first('name')}}</div>
    </div>
    <div class="form-group pb-2">
            <label for="company_id">Jurnal tashkilotini tanlang</label>
            <select name="company_id" id="" class="form-control">
                @foreach ($company as $com)
                <option value="{{ $com->id }}">{{ $com->name }}</option>
                @endforeach
            </select>
            <div class="text-danger">{{$errors->first('company_id')}}</div>
    </div>
    <div class="form-group pb-2">
            <label for="journaltype_id">Jurnal turini tanlang</label>
            <select name="journaltype_id" id="" class="form-control">
                @foreach ($journaltype as $jourtype)
                <option value="{{ $jourtype->id }}">{{ $jourtype->name }}</option>
                @endforeach
            </select>
            <div class="text-danger">{{$errors->first('journaltype_id')}}</div>
    </div>

    <div class="form-group pb-2">
    <label for="journaltype_id">Jurnal categoriyasini tanlang | (Bir nechta categoriyani tanlash uchun yoki tanlanganni o'chirish uchun  <b>{ctrl + sichqoncha} </b>tugmasini bosing)</label>
        <select id='testSelect1' multiple class="form-control" name="journal_categories[]" size="4">
            
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

                        <input type="submit" value="Update journal" class="btn btn-primary">
                    </form>
                </div>
        </div>
    </div>
@endsection