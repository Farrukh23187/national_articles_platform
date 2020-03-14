<div class="row">
    <div class="col-md-12">
    <div class="form-group pb-3">
        <label for="fullname">Muallif Ism familiyasini kiriting</label>
        <input type="text" name="fullname"  class="form-control" value="{{ old('fullname') ?? $author->fullname}}">
        <div class="text-danger">{{$errors->first('fullname')}}</div>
</div>


<div class="form-group pb-2">
    <label for="email">Muallif Email kiriting</label>
    <input type="text" name="email" class="form-control"  value="{{ old('email') ?? $author->email}}">
    <div class="text-danger">{{$errors->first('email')}}</div>
</div>


<div class="form-group pb-3">
    <label for="phone">Muallif Telefonini kiriting</label>
    <input type="text" name="phone"  class="form-control" value="{{ old('phone') ?? $author->phone}}">
    <div class="text-danger">{{$errors->first('phone')}}</div>
</div>
       
        <div class="form-group pb-3">
            <label for="academic_title">Muallif Darajasini kiriting</label>
            <input type="text" name="academic_title"  class="form-control" value="{{ old('academic_title') ?? $author->academic_title}}">
            <div class="text-danger">{{$errors->first('academic_title')}}</div>
        </div>


    </div>
</div>
{{ csrf_field() }}
