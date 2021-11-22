<?php
namespace app\index\controller\User;

use think\Controller;

class UserBaseController extends Controller
{
    protected $middleware = ['app\index\controller\User\Auth'];

    public $who;

    public function onRequest(){

    }

    protected function who(){
//        if($this->who){
//
//        }else{
//            $token = cookie('user_token');
//            $this->who =
//        }
    }


}