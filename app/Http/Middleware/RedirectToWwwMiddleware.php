<?php namespace App\Http\Middleware;

use Closure;

class RedirectToWwwMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $_server = $request->server();
        if((strpos($_server['HTTP_HOST'], ".mixd") === false)
            && (strpos($_server['HTTP_HOST'], "localhost") === false)
            && (strpos($_server['HTTP_HOST'], "local") === false)
            && (strpos($_server['HTTP_HOST'], ".dev") === false)){
            $www = substr($_server['HTTP_HOST'], 0, 3);
            if($www !== 'www'){
                $redirectTo = "http://www.".$_server['HTTP_HOST']."".$_server['REQUEST_URI'];
                return redirect($redirectTo, 301);
            }
        }

        return $next($request);
    }

}
