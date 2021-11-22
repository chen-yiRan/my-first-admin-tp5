<?php

namespace app\index\controller\User;

class Auth
{


    public function handle($request, \Closure $next)
    {
        echo "app.index.controller.user.auth!\n";

        return $next($request);
    }

}