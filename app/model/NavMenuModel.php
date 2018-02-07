<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/5/005
 * Time: 18:53
 */
namespace app\model;

use think\Model;
class NavMenuModel extends Model
{
    private $Fields = '*';
    private $map = [];
    private $orderSort = '';

    public function setFields($field = '*'){
        $this->Fields = $field;
        return $this;
    }
    public function setMap($map = []){
        $this->map = $map;
        return $this;
    }
    public function setOrder($order = ''){
        $this->orderSort = $order;
        return $this;
    }
    public function selectAll(){
        if(!empty($this->map)){
            $this->where($this->map);
        }
        if(!empty($this->orderSort)){
            $this->order($this->orderSort);
        }
        return $this->field($this->Fields)->select();
    }
}