<?php
namespace app\index\model;

use think\Model;
/**
 * @property int                  $id //
 * @property int                  $loanId //借款编号
 * @property string               $account // 用户账号
 * @property string               $product // 借款产品
 * @property string               $createTime // 生成时间
 * @property double               $principal // 账单本金
 * @property double               $price // 账单金额
 * @property double               $overdue // 逾期金额
 * @property double               $due // 应还金额
 * @property int                  $dueTime // 还款时间
 * @property int                  $status // 0:未删除1:已删除
 * @property int                  $actualTime // 实际还款时间
 * @property string               $contract // 合同
 */
class BillModel extends Model
{
    protected $table = 'tp5_bill';
}