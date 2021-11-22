<?php
namespace app\http\middleware;

class Auth
{
    public function who(){

    }

    public function handle($request, \Closure $next)
    {
        echo "auth!\n";

        return $next($request);
    }

}