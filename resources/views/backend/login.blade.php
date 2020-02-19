@extends('backend/backend_layouts.main')

@section('page-title')
    Tizimga kirish
@stop

@section('content')
    <div class="container" style="margin-top: 100px;  ">
    <div class="row">
    <div class="col-md-4"></div>
        <div class="col-md-4" style="background: white; width: 600px; padding: 40px ; border-radius: 10px">
        
        <form action="{{ route('backend') }}" method="post">
            
{{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input class="form-control" name="username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Kirish</button>
        </form>
        </div>
    </div>
    </div>
@stop
