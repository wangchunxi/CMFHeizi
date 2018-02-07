<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/6/006
 * Time: 19:01
 */

namespace app\admin\api;


use app\model\PortalCategoryModel;

class ArticleTypeApi
{
    public function getArticleType(){
        $where = ['delete_time' => 0];
        $portalCategoryModel = new PortalCategoryModel();
        $categoryTree        = $portalCategoryModel
            ->order("list_order ASC")
            ->where($where)->select();
        return $categoryTree;
    }
}