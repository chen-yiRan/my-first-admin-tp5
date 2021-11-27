<?php

namespace app\index\controller\User;

use app\index\model\User\UserModel;
use app\index\utility\Cache\UserCache;
use think\facade\Request;

/**
 * 用户验证器
 */
class Auth
{
    public $who ;

    public function handle($request, \Closure $next)
    {
//        echo "app.index.controller.user.auth!\n";
        $request->who = $this->who();
        if($request->who){
            return $next($request);
        }else{
            return json(["请登录"]);
        }
//        return $next($request);
    }


    protected function who(): ?UserModel
    {
        if ($this->who) {
            return $this->who;
        }

//        $token = $this->request()->getCookieParams(static::USER_TOKEN_NAME);
        $token = cookie('user_token');
//        var_dump($token);
        if (empty($token)) {
//            $token = $this->request()->getRequestParam(static::USER_TOKEN_NAME);
            $token = Request::param('user_token');
        }
        $this->who = UserCache::getInstance()->getBySession($token);
//        var_dump($this->who);
        return $this->who;
    }

}