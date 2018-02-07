<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/6/006
 * Time: 20:01
 */

namespace app\lib;


class IndexOneArticle
{
    protected $articleTypeId;
    protected $item;
    protected $cacheName  = 'IndexArticle';
    protected $cache ;
    protected $map;
    protected $limit;
    public function __construct($id = 0,$cache = true)
    {
        if(empty($id) || $id == 0){
            $id = 1;
        }
        $this->articleTypeId =  $id;

    }

    public function setItem($item){
        $this->item = $item;
        return $this ;
    }

    public function setMap($map){
        $this->map  = $map;
        return $this;
    }
    public function setLimit($limit){
        $this->map = $limit;
        return $this;
    }
    public function getList(){
        $map = $this->map;
        $map['delete_time']  = 0;
        $map['post_status']  = 1;
        $map['is_top'] = 1;
    }




}