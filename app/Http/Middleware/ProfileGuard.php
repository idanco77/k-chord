<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class ProfileGuard {

    public function handle($request, Closure $next) {
        if (Session::has('user_id')) {
            return $next($request);
        } else {
            Session::flash('sm', 'Please login');
            return redirect('user/login');
        }
    }

}
