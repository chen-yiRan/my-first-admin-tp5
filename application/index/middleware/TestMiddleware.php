<?php

namespace app\index\middleware;

class TestMiddleware
{
    public function handle($request, \Closure $next)
    {
//        if ($request->param('name') == 'think') {
//            return redirect('index/think');
//        }

//        $response = $next($request);
        echo "TestMiddleware!\n";

        return $next($request);
    }
}