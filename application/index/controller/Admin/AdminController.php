<?php
namespace app\index\controller\Admin;
use app\index\model\Admin\AdminModel;
use app\index\utility\Random;

class AdminController extends AdminBaseController
{


    public function test(){
//        $adminModel = AdminModel::find();
//        var_dump($adminModel->adminName);
        echo $this->request->admin;
    }

    public function login($adminAccount,$adminPassword){
        $adminModel = AdminModel::where('adminAccount',$adminAccount)->find();
        if(md5($adminPassword) === $adminModel->adminPassword){
            $session = Random::character(32);
            cookie('adminSession',$session);
            $adminModel->update([
                'lastLoginTime' => time(),
//                'lastLoginIp'   => $this->clientRealIP(),
                'lastLoginIp'   => $this->request->ip(),
                'adminSession'       => $session
            ]);
            return "success";
        }else{
            return "false";
        }
    }


}