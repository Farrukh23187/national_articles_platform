<div class="row">
        <div class="col-md-12">
        <div class="form-group pb-3">
            <label for="name">Enter Name Company</label>
            <input type="text" name="name"  class="form-control" value="{{ old('name') ?? $company->name}}">
            <div class="text-danger">{{$errors->first('name')}}</div>
        </div>
        
        <div class="form-group pb-2">
            <label for="email">Enter email address company</label>
            <input type="text" name="email" class="form-control"  value="{{ old('email') ?? $company->email}}">
            <div class="text-danger">{{$errors->first('email')}}</div>
        </div>
        
        <div class="form-group pb-3">
            <label for="logo">Choose logo of Company </label>
            <input type="file" name="logo" value="{{ old('file') }}">
            <div class="text-danger">{{$errors->first('logo')}}</div>
        </div>
        
        <div class="form-group pb-3">
                <label for="website">Enter website company</label>
                <input type="text" name="website"  class="form-control" value="{{ old('website') ?? $company->website}}">
                <div class="text-danger">{{$errors->first('website')}}</div>
        </div>
        </div>
        </div>
        {{ csrf_field() }}
        