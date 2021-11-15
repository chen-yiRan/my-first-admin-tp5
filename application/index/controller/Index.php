<?php
namespace app\index\controller;

use think\captcha\Captcha;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) 2018新年快乐</h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function verifyCode()
    {
        $captcha = new Captcha([
            "length" => 4,
            "imageW" => 150,
            "imageH" => 50,
            "fontSize" => 14
        ]);

        return $captcha->entry();
    }

    public function doLogin($username,$password,$code)
    {
        var_dump($username);
        echo "到底输出到哪里去了";
        print_r($code);
        $captcha = new Captcha();
        if($captcha->check($code)) return "success";
        else return "验证码错误";
    }

}
