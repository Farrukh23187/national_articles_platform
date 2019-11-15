<div class="row">
    <div class="col-md-12">
        <div class="form-group pb-3">
            <label for="name">Kategoriyani kiriting</label>
            <input type="text" name="name"  class="form-control" value="{{ old('name') ?? $category->name}}">
            <div class="text-danger">{{$errors->first('name')}}</div>
        </div>
    </div>
</div>
    {{ csrf_field() }}
    