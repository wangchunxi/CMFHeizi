<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/1/001
 * Time: 20:10
 */
namespace app\lib;
use app\model\NavMenuModel;
use think\Url;

class HomeMenu
{
    private $cache ;
    private $cacheStatus;
    private $navId = 1;
    private $Controller;
    public function __construct($cache = true,$Controller = '')
    {
        $this->cache = md5('HomeMenu');
        $this->cacheStatus = $cache;
        if(empty($Controller)){
           exception('缺少参数Controller');
        }
        $this->Controller =  $Controller;
    }

    public function setNavId($navId = 0){
        $this->navId = $navId;
        return $this;
    }

    public function getMenu(){
        $menu = '';
//        if($this->cacheStatus){
//            $menu = cache($this->cache);
//        }
        if(empty($menu)){
            $menu = $this->getMenuFind();
        }
        if(!empty($menu)){
            $menu =  $this->curMenu($menu,$this->Controller);
        }
        return $menu;
    }

    public function clearCache(){
        cache($this->cache,null);
        return true;
    }

    private function getMenuFind(){
        $map['nav_id'] = $this->navId;
        $map['parent_id'] = 0 ;
        $map['status'] = 1;
        $model =  new NavMenuModel();
        $result =$model->where($map)->field('name,href,target,icon')
            ->order('list_order asc')->select()->toArray();
        if(!$result){
            return false;
        }
        return $result;
    }

    private function curMenu($menu,$controller){

        foreach ($menu as &$v){
            $v['class'] = '';
            $url = explode('/',$v['href']);
            if(strtolower($url[2]) == $controller){
                $v['class'] = 'on';
            }
            $v['href'] = Url($v['href']);
        }
        return  $menu;
    }

}