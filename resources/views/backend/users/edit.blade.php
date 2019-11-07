@extends('layouts.app')
@section('title', 'Edit for ' . $user->fullname)
    
@section('content')
    
<div class="row">
    <div class="col-12">
        <h3> {{ $user->fullname }} ni o'zgartirish</h3>
    </div>
        <div class="col-12">
                <form action=" {{ route('users.update', ['user' => $user->id] ) }} " method="post" >
                    {{ method_field('put') }}
                    @include('backend.users.form') 
                    <input type="submit" value="Yangilash" class="btn btn-primary">

                    </form>
        </div>
    </div>
@endsection