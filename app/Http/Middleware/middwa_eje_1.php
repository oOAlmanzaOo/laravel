<?php

namespace App\Http\Middleware;

use Closure;

class middwa_eje_1
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

      if($request->id == '123')
        return $next($request);

      return redirect('error');

    }
}
