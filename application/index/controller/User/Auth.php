<?php

namespace app\index\controller\Admin;

class Auth
{


    public function handle($request, \Closure $next)
    {
        echo "app.index.controller.admin.auth!\n";

        return $next($request);
    }

}