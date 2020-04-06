<?php

namespace App\Http\Middleware;

use Closure;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $roles = auth()->user()->roles;
        foreach($roles as $role)
        {
            if($role->key === 'admin')
            {
                return $next($request);
            }
        }
        return redirect('/home');
    }
}
