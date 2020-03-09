<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\Auth\LoginRequest;


class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (Auth::guard('web')->attempt($request->validated(), true)) {
            if (Auth::guard('web')->user()->can('users-crud')) {
                return redirect()->route('index');
            } else {
                return redirect()->route('authors.index');
            }
        }
// dd($request);
        return back();
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('backend');
    }
}
