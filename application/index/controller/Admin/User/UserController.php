<?php
namespace app\index\controller\Admin\User;

use app\index\controller\Admin\AdminBaseController;
use app\index\model\User\UserModel;


class UserController extends AdminBaseController
{
    public function getAllUser($page,$pageSize = 10){
        $userArryModel = UserModel::create()->page($page, $pageSize)->all();
//        var_dump($userArryModel->toArray());
        foreach($userArryModel as $userModel){
//            var_dump($userModel);
            unset($userModel->password);
        }

        return json($userArryModel->toArray());
    }

    public function getOne($userId){
        $userModel = UserModel::where('userId',$userId)->find();
        if($userModel){
            return json($userModel);
        }else{
            return json('没有该用户');
        }
    }

    public function update(){

    }
    public function add(){

    }
    public function delete(){

    }
}