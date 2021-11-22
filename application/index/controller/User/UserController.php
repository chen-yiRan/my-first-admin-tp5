<?php
namespace app\index\controller\User;

use app\index\model\User\UserModel;
use app\index\utility\Cache\UserCache;
use think\Controller;


class UserController extends UserBaseController
{

    public function register($username,$password){
        $userModel = new UserModel();
        $userModel->username = $username;
        $userModel->password = md5($password);
        $userModel->save();
        return json([
            'code' => '3',
            'result' => null,
            'msg' => 'success'
        ]);
    }

    public function login($username,$password){
        $userModel = UserModel::where('username',$username)->find();
        if(md5($password) === $userModel->password){
            $session = UserCache::makeSession($userModel);

            return "success";
        }else{
            return "false";
        }
    }


}