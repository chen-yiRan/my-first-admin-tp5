<?php
namespace app\index\controller\Admin;

use think\Controller;

class AdminBaseController extends Controller
{
    protected $middleware = ['\app\index\controller\Admin\Auth' => ['except' => ['login']]];
}