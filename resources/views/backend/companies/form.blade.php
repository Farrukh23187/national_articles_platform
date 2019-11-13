<div class="row">
        <div class="col-md-12">
        <div class="form-group pb-3">
            <label for="name">Companiya nomini kiriting</label>
            <input type="text" name="name"  class="form-control" value="{{ old('name') ?? $company->name}}">
            <div class="text-danger">{{$errors->first('name')}}</div>
        </div>
        
        <div class="form-group pb-2">
            <label for="email">Companiya emailini kiriting</label>
            <input type="text" name="email" class="form-control"  value="{{ old('email') ?? $company->email}}">
            <div class="text-danger">{{$errors->first('email')}}</div>
        </div>

        <div class="form-group pb-2">
            <label for="address">Companiya manzilini kiriting</label>
            <input type="text" name="address" class="form-control"  value="{{ old('address') ?? $company->address}}">
            <div class="text-danger">{{$errors->first('address')}}</div>
        </div>

        <div class="form-group pb-2">
            <label for="phone">Companiya telefon raqamini kiriting</label>
            <input type="text" name="phone" class="form-control"  value="{{ old('phone') ?? $company->phone}}">
            <div class="text-danger">{{$errors->first('phone')}}</div>
        </div>
        
        <div class="form-group pb-3">
                <label for="website">Companiya web saytini kiriting</label>
                <input type="text" name="website"  class="form-control" value="{{ old('website') ?? $company->website}}">
                <div class="text-danger">{{$errors->first('website')}}</div>
        </div>
        </div>
        </div>
        {{ csrf_field() }}
        