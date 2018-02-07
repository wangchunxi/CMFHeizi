<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 老猫 <thinkcmf@126.com>
// +----------------------------------------------------------------------
namespace app\portal\api;
use app\lib\HomeMenu;

class NavMenuApi
{


    public function getMenu(){
        $controller =  strtolower(request()->controller());
        $homeMenu =  new HomeMenu('true',$controller);
        $menu = $homeMenu->getMenu();
        return $menu;
    }

}