<?php
namespace app\index\controller\User;

use think\Controller;

class UserBaseController extends Controller
{
    protected $middleware  = ['\app\index\controller\User\Auth' => ['except' => ['login']]];

}