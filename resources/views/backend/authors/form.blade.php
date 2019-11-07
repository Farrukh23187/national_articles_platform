<div class="row">
    <div class="col-md-12">
    <div class="form-group pb-3">
        <label for="first_name">Muallif Ismini kiriting</label>
        <input type="text" name="first_name"  class="form-control" value="{{ old('first_name') ?? $author->first_name}}">
        <div class="text-danger">{{$errors->first('first_name')}}</div>
</div>
<div class="form-group pb-3">
    <label for="last_name">Muallif Familiyasini kiriting</label>
    <input type="text" name="last_name"  class="form-control" value="{{ old('last_name') ?? $author->last_name}}">
    <div class="text-danger">{{$errors->first('last_name')}}</div>
</div>

<div class="form-group pb-2">
    <label for="email">Muallif Email kiriting</label>
    <input type="text" name="email" class="form-control"  value="{{ old('email') ?? $author->email}}">
    <div class="text-danger">{{$errors->first('email')}}</div>
</div>
{{--
    <div class="form-group pb-3">
        <label for="name">Enter About employee</label>
        <input type="file" name="img">
        <div class="text-danger">{{$errors->first('about')}}</div>
    </div> --}}

<div class="form-group pb-3">
    <label for="phone">Muallif Telefonini kiriting</label>
    <input type="text" name="phone"  class="form-control" value="{{ old('phone') ?? $author->phone}}">
    <div class="text-danger">{{$errors->first('phone')}}</div>
</div>
        <div class="form-group pb-3">
            <label for="organization">Muallif Tashkilotini kiriting</label>
            <input type="text" name="organization"  class="form-control" value="{{ old('organization') ?? $author->organization}}">
            <div class="text-danger">{{$errors->first('organization')}}</div>
        </div>
            {{ csrf_field() }}
        <div class="form-group pb-3">
            <label for="academic_title">Muallif Darajasini kiriting</label>
            <input type="text" name="academic_title"  class="form-control" value="{{ old('academic_title') ?? $author->academic_title}}">
            <div class="text-danger">{{$errors->first('academic_title')}}</div>
        </div>


    </div>
</div>
{{ csrf_field() }}
