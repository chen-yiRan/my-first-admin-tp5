<?php

namespace app\index\controller\Admin;

use app\index\model\Admin\AdminModel;

/**
 * 管理员验证器
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

    }


    protected function who(): ?AdminModel
    {
        if (!$this->who) {
            /*
             * 执行session检查
             * 获取session信息
             */
//            $session = $this->getRequestAndCookieParam(self::ADMIN_TOKEN_NAME);
            $session = cookie('adminSession');
            if (empty($session)) {
                return null;
            }

            // 通过session查找用户
            $who = AdminModel::create()->get(['adminSession' => $session]);
            $this->who = $who;
            return $who;
        }
        return $this->who;
    }


}