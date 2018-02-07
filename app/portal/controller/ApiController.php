<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/5/005
 * Time: 19:56
 */

namespace app\portal\controller;


use app\portal\api\NavMenuApi;
use cmf\controller\HomeBaseController;

class ApiController extends HomeBaseController
{
    public function getMenu(){
        $api =  new NavMenuApi();
        return $api->getMenu();
    }
}