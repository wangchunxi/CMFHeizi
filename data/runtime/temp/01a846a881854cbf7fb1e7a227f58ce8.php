<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:31:"themes/heizi/portal\\index.html";i:1517919968;s:83:"D:\UPUPW_AP7.0_64\vhosts\www.demo.com\thinkcmf\public\themes\heizi\public\head.html";i:1517317556;s:86:"D:\UPUPW_AP7.0_64\vhosts\www.demo.com\thinkcmf\public\themes\heizi\public\headnav.html";i:1517911209;s:85:"D:\UPUPW_AP7.0_64\vhosts\www.demo.com\thinkcmf\public\themes\heizi\public\footer.html";i:1517317794;}*/ ?>
﻿<!DOCTYPE html>
<html lang="zh-cn">
    <!--引入头部start-->
    <head>
<meta charset="utf-8">
<meta content="telephone=no" name="format-detection" />
<meta content="email=no" name="format-detection" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="generator"content="Maker Cloud">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>黑子</title>
<meta name="description" content="网站描述">
<meta name="keywords" content="关键词">
<meta name="author" content="order by adminbuy.cn" />
<meta name="author" content="order by adminbuy.cn" />
<link rel="shortcut icon" href="/themes/heizi/public/assets/favicon.ico" />
<link rel="stylesheet" href="/themes/heizi/public/assets/css/style.css">
<link rel="stylesheet" href="/themes/heizi/public/assets/css/slick.css">
<style type="text/css">
a, .section_title_1 .setting span, a.more, .side_box .section_title_1>p, .form .section_title_1>p, .catg_hide p, .list_text a:hover p, .catg_name a:hover, .foot_extend a:hover, .gallery_box:hover span {
	color: #48b4c2;
}
.section_title_1 .setting span:after, .btn_1 a:hover, .catg_hide, a.btn_contact:hover, .form input:focus, .form textarea:focus {
	border-color: #48b4c2;
}
.home .section_title_3>p:after, .home .section_title_1>p:after, .slick-dots li.slick-active button, .alpha_bg, .btn_1 a:after, .gallery_box:hover:before, .btn_2 a, .catg_name a.on, a.btn_2:before, .page_on a, a.btn_contact:hover, .formBtn button:hover, .service_box_text p a:hover {
	background-color: #48b4c2;
}
.header {
	background-color: #222;
}
.nav li a, .header_info p, .header_info p a {
	color: #f0f0f0;
}
.on a {
	border-color: #f0f0f0;
}
</style>
<script src="/themes/heizi/public/assets/js/jquery1.9.js"></script><script src="/themes/heizi/public/assets/js/slick.min.js"></script>
<script src="/themes/heizi/public/assets/js/scrollreveal.js"></script>
<script src="/themes/heizi/public/assets/js/main.js"></script>
<!--[if IE 8]>
	<script src="/themes/heizi/public/assets/js/background-size.js"></script>	<script src="/themes/heizi/public/assets/js/selectivizr.js"></script>	<![endif]-->

</head>

    <!--引入头部end-->
    <body>
        <!-- 幻灯片开始 -->
        <div class="slider">
            <?php 
                $top_slide_id=empty($theme_vars['top_slide'])?1:$theme_vars['top_slide'];
             
     $__SLIDE_ITEMS__ = \app\admin\service\ApiService::slides($top_slide_id);
if(is_array($__SLIDE_ITEMS__) || $__SLIDE_ITEMS__ instanceof \think\Collection || $__SLIDE_ITEMS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__SLIDE_ITEMS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <div class="item" style="background-image: url(<?php echo cmf_get_image_url($vo['image']); ?>)"><a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>"></a></div>
            
<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <!-- 幻灯片结束 -->
        <!--引入菜单 start-->
        <div class="header">

    <div class="nav">
        <div class="logo"><a href=""><img src="/themes/heizi/public/assets/picture/logo.png"></a></div>
        <div class="nav_icon"></div>
        <div class="side_close"></div>
        <ul id="main-navigation" >
            <?php

function __parse_navigationc5b7261a0269d70bbaa3642f09ba79e6($menus,$level=1){
$_parse_navigation_func_name = '__parse_navigationc5b7261a0269d70bbaa3642f09ba79e6';
if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$menu): 
                    $curClass= '';
                    $controller = request()->controller();
                    $url = explode('/',$menu['href']);
                    if(strtolower($url[2]) == strtolower($controller)){
                        $curClass = 'on';
                    }

                if(empty($menu['children'])): ?>
    <li class="menu-item menu-item-level-<?php echo $level; ?> <?php echo $curClass; ?> ">
    
                    <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>"><?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?></a>
                
    </li>
<?php endif; endforeach; endif; else: echo "" ;endif; 
}

    $navMenuModel = new \app\admin\model\NavMenuModel();
    $menus = $navMenuModel->navMenusTreeArray('1',0);
if(''==''): ?>
    <?php echo __parse_navigationc5b7261a0269d70bbaa3642f09ba79e6($menus); else: ?>
    < id="" class="nav navbar-nav">
        <?php echo __parse_navigationc5b7261a0269d70bbaa3642f09ba79e6($menus); ?>
    </>
<?php endif; ?>

        </ul>
        <!--<ul>-->
            <!--&lt;!&ndash;<li   class='on' ><a href="<?php echo Url('index/index'); ?>" target="_self">首页/HOME</a></li>&ndash;&gt;-->

            <!--&lt;!&ndash;<li ><a href="<?php echo Url('news/index'); ?>" target="_self">资讯/NEWS</a></li>&ndash;&gt;-->

            <!--&lt;!&ndash;<li  rel='dropmenu2'><a href="<?php echo Url('sample/index'); ?>" target="_self">样品/SAMPLE</a></li>&ndash;&gt;-->

            <!--&lt;!&ndash;<li  rel='dropmenu3'><a href="<?php echo Url('aboutus/index'); ?>" target="_self">关于/ABOUT</a></li>&ndash;&gt;-->

            <!--<slides id="$menu">-->

            <!--</slides >-->

        <!--</ul>-->
        <div class="header_info">
            <p><img  src='/themes/heizi/public/assets/picture/code.jpg'/></p>
        </div>
    </div>
</div>
        <!--引入菜单 end-->
        <div class="h_100"></div>
        <div class="content">
            <div class="section home">
                <div class="section_title_1" data-scroll-reveal>
                    <p><?php echo $oneTitleFather; ?></p>
                    <div class="setting"><p><?php echo $oneTitleSubset; ?></p></div>
                </div>
                <div class="service_box" data-scroll-reveal> <img src="/themes/heizi/public/assets/picture/1-16092g522390-l.jpg">
                    <div class="service_box_text">
                        <h4>专业的数码转换</h4>
                        <p>It’s a place full of beauty and experiences, experiences that become memories. Come and enjoy the beauty of the sea, the sky, the earth, the people and spend... <a href="/themes/heizi/public/assets/a/guanyu/xiangmu/6.html">了解更多</a></p>
                    </div>
                </div>
                <div class="service_box" data-scroll-reveal> <img src="/themes/heizi/public/assets/picture/1-16092g523100-l.jpg">
                    <div class="service_box_text">
                        <h4>走向更美好的人生路径</h4>
                        <p>Kassandra Bay Resort & Spa is a unique Resort Complex nestled within a timeless landscape by the sea and surrounded by nature in the beautiful island of Skiathos.... <a href="/themes/heizi/public/assets/a/guanyu/xiangmu/7.html">了解更多</a></p>
                    </div>
                </div>
                <div class="service_box" data-scroll-reveal> <img src="/themes/heizi/public/assets/picture/1-16092g524370-l.jpg">
                    <div class="service_box_text">
                        <h4>百度云服务</h4>
                        <p>Kassandra Bay Resort & Spa is perfectly located along the blue waters of Vasilias beach and surrounded by olive groves and lush gardens. The hotel is located 3km... <a href="/themes/heizi/public/assets/a/guanyu/xiangmu/8.html">了解更多</a></p>
                    </div>
                </div>
            </div>
            <!-- section结束 -->
            <!-- 关于 -->
            <div class="section_2 home home_about">
                <div class="bg_blur" style="background-image:url('/themes/heizi/public/assets/images/about.jpg')" data-parallax-background-inertia="0.3"></div>
                <div class="section_2_cell">
                    <div class="section_2_left">
                        <div class="section_title_2" data-scroll-reveal><p>关于/ABOUT</p>
                            <div class="setting"><img src='/themes/heizi/public/assets/picture/title1.png'/></div>
                        </div>
                        <div class="section_2_brief" data-scroll-reveal>
                            <p>Photography摄影是不断成长并充满活力的摄影工作室， 从事创意婚纱、个性写真及商业广告拍摄等高端专业摄影业务。 时光荏苒，宽地从一间60平米的小店，发展到1500平米的大棚， 并成为无数名人及时尚杂志官方指定摄影工作室。</p>
                        </div>
                        <div class="btn_1"> <a href="/themes/heizi/public/assets/a/guanyu/">了解详细</a></div>
                    </div>
                </div>
            </div>
        <!-- section2结束 -->
         <!-- 画廊 -->

            <div class="section home">
                <div class="section_title_1" data-scroll-reveal="" data-scroll-reveal-id="7" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                    <p><img src="/themes/heizi/public/assets/picture/title2.png"></p>
                    <div class="setting">作品/GALLERY</div> </div>
                <div class="gallery_list" data-scroll-reveal="" data-scroll-reveal-id="8" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true"> <div class="gallery_box"> <img src="/themes/heizi/public/assets/picture/1-16092p041460-l.jpg"> <span>建筑摄影</span> <a href="/themes/heizi/public/assets/a/zuopin/jzsy/17.html"></a> </div>
                    <div class="gallery_box"> <img src="/themes/heizi/public/assets/picture/1-16092h11t30-l.jpg"> <span>平面模特</span> <a href="/themes/heizi/public/assets/a/zuopin/pmmt/16.html"></a> </div>
                    <div class="gallery_box"> <img src="/themes/heizi/public/assets/picture/1-16092h11j90-l.jpg"> <span>平面模特</span> <a href="/themes/heizi/public/assets/a/zuopin/pmmt/15.html"></a> </div>
                    <div class="gallery_box"> <img src="/themes/heizi/public/assets/picture/1-16092h11a20-l.jpg"> <span>平面模特</span> <a href="/themes/heizi/public/assets/a/zuopin/pmmt/14.html"></a> </div>
                    <div class="gallery_box"> <img src="/themes/heizi/public/assets/picture/1-16092h116000-l.jpg"> <span>平面模特</span> <a href="/themes/heizi/public/assets/a/zuopin/pmmt/13.html"></a> </div>
                    <div class="gallery_box"> <img src="/themes/heizi/public/assets/picture/1-16092g615110-l.jpg"> <span>平面模特</span> <a href="/themes/heizi/public/assets/a/zuopin/pmmt/11.html"></a> </div>
                </div>
                <div class="btn_2"><a href="/themes/heizi/public/assets/a/zuopin/">查看更多</a></div>
            </div>

            <div class="section_2 bg_light home">
                <div class="alpha_bg" style="background-image:url(/themes/heizi/public/assets/images/1.jpg)" data-parallax-background-inertia="0.2"></div>
                <div class="section_2_cell">
                    <div class="section_title_3" data-scroll-reveal>
                        <p><img src='/themes/heizi/public/assets/picture/title1.png'/></p>
                        <div class="setting">资讯/NEWS</div> </div>
                    <div id="news_slider" class="owl-carousel" data-scroll-reveal> <div class="list_item">
                        <div class="list_text">
                            <p class="time_1">2016-09-27</p>
                            <a href="/themes/heizi/public/assets/a/zixun/2016/0927/12.html">
                                <p class="list_title">简约舒适的春日实穿方案</p>
                            </a>
                            <div class="list_brief">
                                <p>褪去厚重的棉服和夹克，春天的到来你只需要一件浅色打底Tee，以及，一件简约的字母印花套头卫衣。Chino的随意舒适的属性也给整体搭配看起来清爽不少，Sneaker当然是标配，不然舒适...
                            </div>
                            <div class="more_2"><a href="/themes/heizi/public/assets/a/zixun/2016/0927/12.html">了解详细</a></div>
                        </div>
                        <div class="list_img"><a href="/themes/heizi/public/assets/a/zixun/2016/0927/12.html"><img src="/themes/heizi/public/assets/picture/1-16092h113560-l.jpg"></a></div>
                    </div>
                        <!-- item-end -->
                        <div class="list_item">
                            <div class="list_text">
                                <p class="time_1">2016-09-27</p>
                                <a href="/themes/heizi/public/assets/a/zixun/2016/0927/10.html">
                                    <p class="list_title">Street Snap灰色初春的气息</p>
                                </a>
                                <div class="list_brief">
                                    <p>如果说初春是万物复苏，太鲜艳太春天的颜色巴打驾驭不了，那么刚刚好的灰色给即将来临的暖春做了一道铺垫，一样不冷也不热的颜色穿上身上也会觉得十分舒适。 除了黑白两色，就...
                                </div>
                                <div class="more_2"><a href="/themes/heizi/public/assets/a/zixun/2016/0927/10.html">了解详细</a></div>
                            </div>
                            <div class="list_img"><a href="/themes/heizi/public/assets/a/zixun/2016/0927/10.html"><img src="/themes/heizi/public/assets/picture/1-16092g553050-l.jpg"></a></div>
                        </div>
                        <!-- item-end -->
                        <div class="list_item">
                            <div class="list_text">
                                <p class="time_1">2016-09-27</p>
                                <a href="/themes/heizi/public/assets/a/zixun/2016/0927/9.html">
                                    <p class="list_title">春季联名款全面呈现</p>
                                </a>
                                <div class="list_brief">
                                    <p>Vans Liberty 2015 年春季联名款已全面呈现，此次Liberty 和Vans 的春季联名更加迎合季节特点，此次系列依然用了Vans的经典鞋型Era、Authentic和Slip-On 作为蓝本打造，搭配出四双鞋款，其中两双...
                                </div>
                                <div class="more_2"><a href="/themes/heizi/public/assets/a/zixun/2016/0927/9.html">了解详细</a></div>
                            </div>
                            <div class="list_img"><a href="/themes/heizi/public/assets/a/zixun/2016/0927/9.html"><img src="/themes/heizi/public/assets/picture/1-16092g54z20-l.jpg"></a></div>
                        </div>
                        <!-- item-end -->
                    </div>
                    <div class="btn_2"><a href="/themes/heizi/public/assets/a/zixun/">查看更多</a></div>
                </div>
                <!-- section2结束 -->
            </div>
        </div>
    <!--引入尾部start-->
        <div class="footer">
    <div class="footer_cell">
        <div class="foot_extend cf">
            <div class="foot_img"><!--下面img标签里填写底部图片地址-->
                <img src='/themes/heizi/public/assets/picture/dd.jpg'/> </div>

            <!--修改下方每个条目href的#可跳转链接地址   如果只有3列，修改for4为for3-->
            <div class="foot_box for4" id="link">
                <p>FRIENDSHIP LINK</p>
                <a href='http:/www.adminbuy.cn/' target='_blank'>织梦源码</a>     <a href='http:/www.adminbuy.cn/' target='_blank'>织梦模板</a>     <a href='http:/www.adminbuy.cn/' target='_blank'>响应式网站模板</a>     <a href='http:/www.adminbuy.cn/' target='_blank'>模板王</a>     <a href='http:/www.adminbuy.cn/' target='_blank'>网站源码</a>     <a href='http:/www.adminbuy.cn/' target='_blank'>网站模板</a>     <a href='http:/www.adminbuy.cn/' target='_blank'>discuz模板</a>     <a href='http:/www.adminbuy.cn/' target='_blank'>手机网站模板</a>     <a href='http:/fang.adminbuy.cn/' target='_blank'>仿站网</a>     <a href='http:/sc.adminbuy.cn/' target='_blank'>图标下载</a>    </div>
            <div class="foot_box for4">
                <p>SHOWCASE</p>
                <a href="/themes/heizi/public/assets/a/zuopin/jzsy/17.html">Diy图片/摄影/产品标题</a>
                <a href="/themes/heizi/public/assets/a/zuopin/pmmt/16.html">Diy图片/摄影/产品标题</a>
                <a href="/themes/heizi/public/assets/a/zuopin/pmmt/15.html">Diy图片/摄影/产品标题</a>
            </div>
            <div class="foot_box for4">
                <p>NEWS</p>
                <a href="/themes/heizi/public/assets/a/zixun/2016/0927/12.html">简约舒适的春日实穿方案</a>
                <a href="/themes/heizi/public/assets/a/zixun/2016/0927/10.html">Street Snap灰色初春的气息</a>
                <a href="/themes/heizi/public/assets/a/zixun/2016/0927/9.html">春季联名款全面呈现</a>
            </div>
            <div class="foot_box for4">
                <p>SERVICE</p>
                <a href="/themes/heizi/public/assets/a/guanyu/xiangmu/6.html">专业的数码转换</a>
                <a href="/themes/heizi/public/assets/a/guanyu/xiangmu/7.html">走向更美好的人生路径</a>
                <a href="/themes/heizi/public/assets/a/guanyu/xiangmu/8.html">百度云服务</a>
            </div>
        </div>
        <div class="follow">
            <a href="/themes/heizi/public/assets/http:/wpa.qq.com/msgrd?v=3&uin=9490489&site=qq&menu=yes" target="_blank"><span class="s-qq" title="与我QQ在线聊天"></span></a>
            <a href="/themes/heizi/public/assets/http:/weibo.com/gooxao" target="_blank"><span class="s-weibo" title="访问我的新浪微博"></span></a> </div>
        <p class="copy">
        <p>© 2009-2016 Www.AdminBuy.Cn AB模板网</p>
        </p>
        <p class="" style="font-size: 11px;"> 苏ICP12345678 </p>
    </div>
</div>
<script type='text/javascript' src='/themes/heizi/public/assets/js/smoothscroll.js'></script>
    <!--引入尾部end-->
    </body>
</html>