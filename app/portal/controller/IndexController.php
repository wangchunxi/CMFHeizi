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
namespace app\portal\controller;

use app\portal\api\NavMenuApi;
use cmf\controller\HomeBaseController;

class IndexController extends HomeBaseController
{
    public function index()
    {
        $more =  $this->getMore(':index');
        $vars =  $more['vars'];
        $oneTitleFather = '';
        $oneTitleSubset = '';
        if(!empty($vars['one_title'])){
            $oneTitle =   $vars['one_title'];
            $oneTitle = str_replace('：',':',$oneTitle);
            $oneTitleFather = substr($oneTitle,'0',strpos($oneTitle,':'));
            $oneTitleSubset = substr($oneTitle,strpos($oneTitle,':')+1);
        }
        dump($vars['one_article_type']);
        $this->assign('oneTitleFather',$oneTitleFather);
        $this->assign('oneTitleSubset',$oneTitleSubset);
        return $this->fetch(':index');
    }
}
