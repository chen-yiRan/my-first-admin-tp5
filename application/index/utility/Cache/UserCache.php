<?php
namespace app\index\utility\Cache;

use app\index\model\User\UserModel;

class UserCache
{
    public static function makeSession(UserModel $user)
    {
        $time = time();
        $token = substr(md5($time . $user->password), 8, 16);
        return "{$user->userId}-{$token}-{$time}";
    }
}