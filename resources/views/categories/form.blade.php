<div class="row">
    <div class="col-md-12">
    <div class="form-group pb-3">
        <label for="first_name">Enter first_name Employeer</label>
        <input type="text" name="first_name"  class="form-control" value="{{ old('first_name') ?? $employee->first_name}}">
        <div class="text-danger">{{$errors->first('first_name')}}</div>
    </div>
    <div class="form-group pb-3">
            <label for="last_name">Enter last_name Employeer</label>
            <input type="text" name="last_name"  class="form-control" value="{{ old('last_name') ?? $employee->last_name}}">
            <div class="text-danger">{{$errors->first('last_name')}}</div>
        </div>
    
    <div class="form-group pb-2">
        <label for="email">Enter email address employee</label>
        <input type="text" name="email" class="form-control"  value="{{ old('email') ?? $employee->email}}">
        <div class="text-danger">{{$errors->first('email')}}</div>
    </div>
{{--         
    <div class="form-group pb-3">
        <label for="name">Enter About employee</label>
        <input type="file" name="img">
        <div class="text-danger">{{$errors->first('about')}}</div>
    </div> --}}
    
    <div class="form-group pb-3">
            <label for="phone">Enter phone employee</label>
            <input type="text" name="phone"  class="form-control" value="{{ old('phone') ?? $employee->phone}}">
            <div class="text-danger">{{$errors->first('phone')}}</div>
    </div>

    <div class="form-group pb-2">
            <label for="company_id">Select Employeer</label>
            <select name="company_id" id="" class="form-control">
                @foreach ($company as $com)
                <option value="{{ $com->id }}">{{ $com->name }}</option>
                @endforeach
            </select>
            <div class="text-danger">{{$errors->first('company_id')}}</div>
        </div>
    </div>
    </div>
    {{ csrf_field() }}
    