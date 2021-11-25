<?php
namespace app\index\utility\Cache;

use app\index\model\User\UserModel;

class UserCache
{

    public $userTable;
    /**
     * 容器对象实例
     * @var UserCache
     */
    protected static $instance;
    /**
     * 获取当前容器的实例（单例）
     * @access public
     * @return static
     */
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static;
        }

        return static::$instance;
    }

    public static function makeSession(UserModel $user)
    {
        cookie($user->userId,$user);
        $time = time();
        $token = substr(md5($time . $user->password), 8, 16);
        return "{$user->userId}-{$token}-{$time}";
    }

    function getBySession(?string $session, ?int $ttl = null): ?UserModel
    {
        if ($session) {
            $temp = explode('-', $session);
            $userId = array_shift($temp);
            $token = array_shift($temp);
            $loginTime = array_shift($temp);
            $userId = (int)$userId;
            if (empty($userId)){
                return null;
            }
//            $user = $this->get($userId);
            $user = cookie('userId');
            if ($user) {
                if (($ttl !== null) && (time() - $loginTime > $ttl)) {
                    return null;
                }
                if ($token === substr(md5($loginTime . $user->password), 8, 16)) {
                    return $user;
                }
            }
        }
        return null;
    }

    public function test(){
        echo "UserCache";
    }
}