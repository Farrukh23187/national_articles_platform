<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if (auth()->user()->can($permission)) {
            return $next($request);
        }else{

            abort(403, 'You dont have permission to do this action');
            return $next($request);
        }
//        return response()->json(['success' => false, 'message' => __('messages.missing_permission')]);
    }
}
