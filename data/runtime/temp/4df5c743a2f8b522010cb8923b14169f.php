<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:37:"themes/simpleboot3/portal\\index.html";i:1517314092;s:89:"D:\UPUPW_AP7.0_64\vhosts\www.demo.com\thinkcmf\public\themes\simpleboot3\public\head.html";i:1517045767;s:93:"D:\UPUPW_AP7.0_64\vhosts\www.demo.com\thinkcmf\public\themes\simpleboot3\public\function.html";i:1517045767;s:88:"D:\UPUPW_AP7.0_64\vhosts\www.demo.com\thinkcmf\public\themes\simpleboot3\public\nav.html";i:1517045767;s:91:"D:\UPUPW_AP7.0_64\vhosts\www.demo.com\thinkcmf\public\themes\simpleboot3\public\footer.html";i:1517045767;s:92:"D:\UPUPW_AP7.0_64\vhosts\www.demo.com\thinkcmf\public\themes\simpleboot3\public\scripts.html";i:1517045767;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>首页 <?php echo (isset($site_info['site_name']) && ($site_info['site_name'] !== '')?$site_info['site_name']:''); ?></title>
    <meta name="keywords" content="<?php echo (isset($site_info['site_seo_keywords']) && ($site_info['site_seo_keywords'] !== '')?$site_info['site_seo_keywords']:''); ?>"/>
    <meta name="description" content="<?php echo (isset($site_info['site_seo_description']) && ($site_info['site_seo_description'] !== '')?$site_info['site_seo_description']:''); ?>">
    
<?php 
/*可以加多个方法哟！*/
function _sp_helloworld(){
	echo "hello ThinkCMF!";
}

function _sp_helloworld2(){
	echo "hello ThinkCMF2!";
}


function _sp_helloworld3(){
	echo "hello ThinkCMF3!";
}

 ?>
<meta name="author" content="ThinkCMF">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp"/>

<!-- HTML5 shim for IE8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<link rel="icon" href="/themes/simpleboot3/public/assets/images/favicon.png" type="image/png">
<link rel="shortcut icon" href="/themes/simpleboot3/public/assets/images/favicon.png" type="image/png">
<link href="/themes/simpleboot3/public/assets/simpleboot3/themes/simpleboot3/bootstrap.min.css" rel="stylesheet">
<link href="/themes/simpleboot3/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css">
<!--[if IE 7]>
<link rel="stylesheet" href="/themes/simpleboot3/public/assets/simpleboot3/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
<![endif]-->
<link href="/themes/simpleboot3/public/assets/css/style.css" rel="stylesheet">
<style>
    /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
    #backtotop {
        position: fixed;
        bottom: 50px;
        right: 20px;
        display: none;
        cursor: pointer;
        font-size: 50px;
        z-index: 9999;
    }

    #backtotop:hover {
        color: #333
    }

    #main-menu-user li.user {
        display: none
    }
</style>
<script type="text/javascript">
    //全局变量
    var GV = {
        ROOT: "/",
        WEB_ROOT: "/",
        JS_ROOT: "static/js/"
    };
</script>
<script src="/themes/simpleboot3/public/assets/js/jquery-1.10.2.min.js"></script>
<script src="/themes/simpleboot3/public/assets/js/jquery-migrate-1.2.1.js"></script>
<script src="/static/js/wind.js"></script>
	
    <link href="/themes/simpleboot3/public/assets/css/slippry/slippry.css" rel="stylesheet">
    <style>
        .caption-wraper {
            position: absolute;
            left: 50%;
            bottom: 2em;
        }

        .caption-wraper .caption {
            position: relative;
            left: -50%;
            background-color: rgba(0, 0, 0, 0.54);
            padding: 0.4em 1em;
            color: #fff;
            -webkit-border-radius: 1.2em;
            -moz-border-radius: 1.2em;
            -ms-border-radius: 1.2em;
            -o-border-radius: 1.2em;
            border-radius: 1.2em;
        }

        .tc-gridbox {
            margin: 0;
        }

        @media (max-width: 767px) {
            .caption-wraper {
                left: 0;
                bottom: 0.4em;
            }

            .caption-wraper .caption {
                left: 0;
                padding: 0.2em 0.4em;
                font-size: 0.92em;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                -ms-border-radius: 0;
                -o-border-radius: 0;
                border-radius: 0;
            }
        }

    </style>
    <?php 
    \think\Hook::listen('before_head_end',$temp5a786336ee800,null,false);
 ?>
</head>
<body class="body-white">
<nav class="navbar navbar-default navbar-fixed-top active">
    <div class="container active">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><?php echo (isset($theme_vars['company_name']) && ($theme_vars['company_name'] !== '')?$theme_vars['company_name']:'ThinkCMF'); ?></a>
        </div>

        <div class="collapse navbar-collapse active" id="bs-example-navbar-collapse-1">
            <ul id="main-menu" class="nav navbar-nav">
                <?php

function __parse_navigationf85ec5a1d88a93c3a2239a1b85a06757($menus,$level=1){
$_parse_navigation_func_name = '__parse_navigationf85ec5a1d88a93c3a2239a1b85a06757';
if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): if( count($menus)==0 ) : echo "" ;else: foreach($menus as $key=>$menu): if(empty($menu['children'])): if($level > 1): ?>
                            <li class="menu-item menu-item-level-<?php echo $level; ?> levelgt1">
                                <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                                    <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?>
                                </a>
                            </li>
                            <?php else: ?>
                            <li class="menu-item menu-item-level-<?php echo $level; ?>">
                                <a href="<?php echo (isset($menu['href']) && ($menu['href'] !== '')?$menu['href']:''); ?>" target="<?php echo (isset($menu['target']) && ($menu['target'] !== '')?$menu['target']:''); ?>">
                                    <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?>
                                </a>
                            </li>
                        <?php endif; endif; if(!empty($menu['children'])): ?>
    <li class="dropdown dropdown-custom dropdown-custom-level-<?php echo $level; ?>">
        
                        <a href="#" class="dropdown-toggle dropdown-toggle-<?php echo $level; ?>" data-toggle="dropdown">
                            <?php echo (isset($menu['name']) && ($menu['name'] !== '')?$menu['name']:''); ?><span class="caret"></span>
                        </a>
                    
        <ul class="dropdown-menu dropdown-menu-level-<?php echo $level; ?>">
            <?php 
            $mLevel=$level+1;
             ?>
            <?php echo $_parse_navigation_func_name($menu['children'],$mLevel); ?>
        </ul>
    </li>
<?php endif; endforeach; endif; else: echo "" ;endif; 
}

    $navMenuModel = new \app\admin\model\NavMenuModel();
    $menus = $navMenuModel->navMenusTreeArray('',0);
if(''==''): ?>
    <?php echo __parse_navigationf85ec5a1d88a93c3a2239a1b85a06757($menus); else: ?>
    < id="main-navigation" class="nav navbar-nav navbar-nav-custom">
        <?php echo __parse_navigationf85ec5a1d88a93c3a2239a1b85a06757($menus); ?>
    </>
<?php endif; ?>

            </ul>
            <ul class="nav navbar-nav navbar-right" id="main-menu-user">
                <!--
                <li class="login">
                    <a class="dropdown-toggle notifactions" href="/index.php/user/notification/index"> <i
                            class="fa fa-envelope"></i> <span class="count">0</span></a>
                </li>
                -->
                <li class="dropdown user login">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <?php $user=cmf_get_current_user(); if(empty($user['avatar'])): ?>
                            <img src="/themes/simpleboot3/public/assets/images/headicon.png" class="headicon">
                            <?php else: ?>
                            <img src="<?php echo cmf_get_user_avatar_url($user['avatar']); ?>" class="headicon" width="30"/>
                        <?php endif; ?>
                        <span class="user-nickname"></span><b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo cmf_url('user/Profile/center'); ?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo cmf_url('user/Index/logout'); ?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
                    </ul>
                </li>
                <li class="dropdown user offline" style="display: list-item;">
                    <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                        <img src="/themes/simpleboot3/public/assets/images/headicon.png" class="headicon">
                        登录<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?php echo cmf_url('user/Login/index'); ?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo cmf_url('user/Register/index'); ?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right" method="post" action="<?php echo cmf_url('portal/Search/index'); ?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Search"
                           value="<?php echo input('param.keyword',''); ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Go" style="margin:0"/>
            </form>
        </div>
    </div>
</nav>

<ul id="home-slider" class="list-unstyled">
    <?php 
        $top_slide_id=empty($theme_vars['top_slide'])?1:$theme_vars['top_slide'];
     
     $__SLIDE_ITEMS__ = \app\admin\service\ApiService::slides($top_slide_id);
if(is_array($__SLIDE_ITEMS__) || $__SLIDE_ITEMS__ instanceof \think\Collection || $__SLIDE_ITEMS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__SLIDE_ITEMS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

        <li>
            <div class="caption-wraper">
                <div class="caption"><?php echo (isset($vo['title']) && ($vo['title'] !== '')?$vo['title']:''); ?></div>
            </div>
            <a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>"><img src="<?php echo cmf_get_image_url($vo['image']); ?>" alt=""></a>
        </li>
    
<?php endforeach; endif; else: echo "" ;endif; 
    if(!isset($__SLIDE_ITEMS__)){
        $__SLIDE_ITEMS__ = \app\admin\service\ApiService::slides($top_slide_id);
    }
if(count($__SLIDE_ITEMS__) == 0): ?>

        <li>
            <div class="caption-wraper">
                <div class="caption">此幻灯片只是演示,您没有设置任何幻灯片,请到后台模板设置！</div>
            </div>
            <a href=""><img src="/themes/simpleboot3/public/assets/images/demo/1.jpg" alt=""></a>
        </li>
        <li>
            <div class="caption-wraper">
                <div class="caption">此幻灯片只是演示,您没有设置任何幻灯片,请到后台模板设置！</div>
            </div>
            <a href=""><img src="/themes/simpleboot3/public/assets/images/demo/2.jpg" alt=""></a>
        </li>
        <li>
            <div class="caption-wraper">
                <div class="caption">此幻灯片只是演示,您没有设置任何幻灯片,请到后台模板设置！</div>
            </div>
            <a href=""><img src="/themes/simpleboot3/public/assets/images/demo/3.jpg" alt=""></a>
        </li>
    
<?php endif; ?>
</ul>

<div class="container">
    <?php
     if(isset($theme_widgets['features']) && $theme_widgets['features']['display']){
        $widget=$theme_widgets['features'];
     
 ?>

        <div>
            <h1 class="text-center"><?php echo $widget['title']; ?></h1>
            <h3 class="text-center"><?php echo $widget['vars']['sub_title']; ?></h3>
        </div>
        <?php 
            $features_count = count($widget['vars']['features']);
            $rows = ceil($features_count/3);
         $__FOR_START_31584__=1;$__FOR_END_31584__=$rows;for($row=$__FOR_START_31584__;$row <= $__FOR_END_31584__;$row+=1){ 
                $first_row = ($row-1)*3;
                $features = array_slice($widget['vars']['features'],$first_row,3);
             ?>
            <div class="row">
                <?php if(is_array($features) || $features instanceof \think\Collection || $features instanceof \think\Paginator): if( count($features)==0 ) : echo "" ;else: foreach($features as $key=>$vo): ?>
                    <div class="col-md-4">
                        <h2 class="font-large nospace"><i class="fa fa-<?php echo $vo['icon']; ?>"></i> <?php echo $vo['title']; ?></h2>
                        <p><?php echo $vo['content']; ?></p>
                    </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        <?php } 
    }
 
     if(isset($theme_widgets['last_news']) && $theme_widgets['last_news']['display']){
        $widget=$theme_widgets['last_news'];
     
 ?>

        <div>
            <h1 class="text-center"><?php echo $widget['title']; ?></h1>
        </div>

        <div class="row">
            <?php 
                $widget["vars"]["last_news_category_id"] = empty($widget["vars"]["last_news_category_id"])?1:$widget["vars"]["last_news_category_id"];
                $last_news_limit=4;
             
$articles_data = \app\portal\service\ApiService::articles([
    'field'   => '',
    'where'   => "",
    'limit'   => $last_news_limit,
    'order'   => 'post.published_time DESC',
    'page'    => '',
    'relation'=> '',
    'category_ids'=>$widget['vars']['last_news_category_id']
]);

$__PAGE_VAR_NAME__ = isset($articles_data['page'])?$articles_data['page']:'';

 if(is_array($articles_data['articles']) || $articles_data['articles'] instanceof \think\Collection || $articles_data['articles'] instanceof \think\Paginator): $i = 0; $__LIST__ = $articles_data['articles'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                <div class="col-md-3">
                    <div class="tc-gridbox">
                        <div class="header">
                            <div class="item-image">
                                <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$vo['id'],'cid'=>$vo['category_id'])); ?>">
                                    <?php if(isset($vo['more']['thumbnail'])): if(empty($vo['more']['thumbnail']) || (($vo['more']['thumbnail'] instanceof \think\Collection || $vo['more']['thumbnail'] instanceof \think\Paginator ) && $vo['more']['thumbnail']->isEmpty())): ?>
                                            <img src="/themes/simpleboot3/public/assets/images/default-thumbnail.png"
                                                 class="img-responsive"
                                                 alt="">
                                            <?php else: ?>
                                            <img src="<?php echo cmf_get_image_url($vo['more']['thumbnail']); ?>"
                                                 class="img-responsive"
                                                 alt="">
                                        <?php endif; else: ?>
                                        <img src="/themes/simpleboot3/public/assets/images/default-thumbnail.png"
                                             class="img-responsive"
                                             alt="">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <h3>
                                <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$vo['id'],'cid'=>$vo['category_id'])); ?>"><?php echo $vo['post_title']; ?></a>
                            </h3>
                            <hr>
                        </div>
                        <div class="body">
                            <p>
                                <a href="<?php echo cmf_url('portal/Article/index',array('id'=>$vo['id'],'cid'=>$vo['category_id'])); ?>">...</a>
                            </p>
                        </div>
                    </div>
                </div>
            
<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    
<?php
    }
 ?>


    <br>
<!-- Footer ================================================== -->
<hr>
<div id="footer">
    <?php 
    \think\Hook::listen('footer_start',$temp5a786336ee858,null,false);
 ?>
    <div class="links">
        <?php
     $__LINKS__ = \app\admin\service\ApiService::links();
if(is_array($__LINKS__) || $__LINKS__ instanceof \think\Collection || $__LINKS__ instanceof \think\Paginator): $i = 0; $__LIST__ = $__LINKS__;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

            <a href="<?php echo (isset($vo['url']) && ($vo['url'] !== '')?$vo['url']:''); ?>" target="<?php echo (isset($vo['target']) && ($vo['target'] !== '')?$vo['target']:''); ?>"><?php echo (isset($vo['name']) && ($vo['name'] !== '')?$vo['name']:''); ?></a>&nbsp;
        
<?php endforeach; endif; else: echo "" ;endif; ?>

    </div>
    <p>
        Made by <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF</a>
        Code licensed under the
        <a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.
        <br/>
        Based on
        <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a>.
        Icons from
        <a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
        <br>
        备案号:
        <?php if(!(empty($site_info['site_icp']) || (($site_info['site_icp'] instanceof \think\Collection || $site_info['site_icp'] instanceof \think\Paginator ) && $site_info['site_icp']->isEmpty()))): ?>
            <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $site_info['site_icp']; ?></a>
            <?php else: ?>
            请在后台设置"网站信息"设置"备案信息"
        <?php endif; ?>


    </p>
</div>
<div id="backtotop">
    <i class="fa fa-arrow-circle-up"></i>
</div>

</div>
<!-- /container -->
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/themes/simpleboot3/public/assets/simpleboot3/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/js/frontend.js"></script>
	<script>
	$(function(){
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$("#main-menu a").each(function() {
			if ($(this)[0].href == String(window.location)) {
				$(this).parentsUntil("#main-menu>ul>li").addClass("active");
			}
		});
		
		$.post("<?php echo url('user/index/isLogin'); ?>",{},function(data){
		    console.log(data);
			if(data.code==1){
				if(data.data.user.avatar){
				}

				$("#main-menu-user span.user-nickname").text(data.data.user.user_nickname?data.data.user.user_nickname:data.data.user.user_login);
				$("#main-menu-user li.login").show();
                $("#main-menu-user li.offline").hide();

			}

			if(data.code==0){
                $("#main-menu-user li.login").hide();
				$("#main-menu-user li.offline").show();
			}

		});

        ;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


<script src="/themes/simpleboot3/public/assets/js/slippry.min.js"></script>
<script>
    $(function () {
        $("#home-slider").slippry({
            transition: 'fade',
            useCSS: true,
            captions: false,
            speed: 1000,
            pause: 3000,
            auto: true,
            preload: 'visible'
        });
        $("#home-slider").show();
    });
</script>
<?php 
    \think\Hook::listen('before_body_end',$temp5a786336ee894,null,false);
 ?>
</body>
</html>
