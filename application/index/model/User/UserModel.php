<?php
namespace app\index\model\User;

use think\Model;
/**
 * @property int                  $userId //
 * @property string               $account // 左拉号
 * @property string               $username // 昵称
 * @property string               $password // 密码
 * @property string               $phone // 手机号
 * @property string               $avatar // 头像地址
 * @property int                  $createTime // 创建的时间
 * @property int                  $isDelete // 0:未删除1:已删除
 * @property int                  $deleteTime // 删除时间
 * @property int                  $isForbid // 是否被禁,0:未被禁,1:被禁
 */
class UserModel extends Model
{
    protected $table = 'tp5_user';
}