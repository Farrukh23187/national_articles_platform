

        <div class="form-group">
            <label>FIO</label>
            <input class="form-control" name="fullname" value="{{ old('fullname') ?? $user->fullname}}">
            <div class="text-danger">{{$errors->first('fullname')}}</div>
        </div>
        <div class="form-group">
            <label>Email</label>
            
            <input class="form-control" name="email" value="{{ old('email') ?? $user->email}}">
            <div class="text-danger">{{$errors->first('email')}}</div>
        </div>
        <div class="form-group">
        <div class="form-group">
            <label>username</label>
            
            <input class="form-control" name="username" value="{{ old('username') ?? $user->username}}">
            <div class="text-danger">{{$errors->first('username')}}</div>

        </div>
        <!-- <input type="hidden" value="" name="show_password"> -->
            <label>Parol</label>
            
            <input type="password" class="form-control" name="password" value="{{ old('password') ?? $user->password}}">
            <div class="text-danger">{{$errors->first('password')}}</div>
        </div>
        <div class="form-group">
            <label>Parolni tasdiqlash</label>
            
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') ?? $user->password_confirmation}}">
            <div class="text-danger">{{$errors->first('password_confirmation')}}</div>
        </div>
        <div class="form-group">
            <label>Phone</label>
            
            <input class="form-control" name="phone" value="{{ old('phone') ?? $user->phone}}">
            <div class="text-danger">{{$errors->first('phone')}}</div>

        </div>
        <hr>
        <div class="form-group pb-2">
            <label for="company">Companiyani tanlang</label>
            <select name="company_id" id="" class="form-control">
        @foreach(\App\Company::all() as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
            <div class="text-danger">{{$errors->first('company_id')}}</div>

           
        @endforeach
            </select>
        </div>
        <hr>
        {{ csrf_field() }}

        
   