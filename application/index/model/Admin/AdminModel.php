<?php
namespace app\index\model\Admin;
/**
 * AdminUserModel
 * Class AdminUserModel
 * Create With ClassGeneration
 * @property int    $adminId // id
 * @property string $adminName // 昵称
 * @property string $adminAccount // 账号
 * @property string $adminPassword // 密码
 * @property int    $addTime // 创建时间
 * @property int    $lastLoginTime // 上次登陆的时间
 * @property string $lastLoginIp // 上次登陆的Ip
 * @property string $adminSession //
 */
class AdminModel extends \think\Model
{
    protected $tableName = 'tp5_admin';

//    // 定义时间戳字段名
//    protected $createTime = 'lastLoginTime';
//    protected $autoWriteTimestamp = true;

}