<?php

namespace app\index\model;

use think\Model;

class BaseModel extends Model
{
    public function getList(int $page = 1, int $pageSize = 10, string $field = '*'): ListBean
    {
        $listBean = $this
            ->order("user_list.".$this->schemaInfo()->getPkFiledName(), 'DESC')
            ->field($field)
            ->getPageList($page, $pageSize);
        return $listBean;
    }

    public function getPageList($page, $pageSize = 20,$isCount=true)
    {
//        if ($isCount){
//            $this->withTotalCount();
//        }
        $list = $this
            ->page($page, $pageSize)
            ->all();
        $listBean = new ListBean();
        $listBean->setList($list);
        $listBean->setPage($page);
        $listBean->setPageSize($pageSize);
        if ($isCount){
            $total = $this->lastQueryResult()->getTotalCount();
            $listBean->setTotal($total);
            $listBean->setPageCount(ceil($total / $pageSize));
        }
        return $listBean;
    }
}