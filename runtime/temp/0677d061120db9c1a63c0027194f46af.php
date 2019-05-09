<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"D:\wamp\www\tp5cms\public/../application/home\view\Article\info.html";i:1557372104;s:52:"D:\wamp\www\tp5cms\application\home\view\header.html";i:1557371096;s:49:"D:\wamp\www\tp5cms\application\home\view\top.html";i:1557388757;s:52:"D:\wamp\www\tp5cms\application\home\view\footer.html";i:1557295769;}*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企业网站模板<?php echo $aa; ?></title>
  <link rel="stylesheet" href="<?php echo config('__PUBLIC__'); ?>assets/css/amazeui.css" />
  <link rel="stylesheet" href="<?php echo config('__PUBLIC__'); ?>assets/css/common.min.css" />
  <link rel="stylesheet" href="<?php echo config('__PUBLIC__'); ?>assets/css/index.min.css" />
  <link rel="stylesheet" href="<?php echo config('__PUBLIC__'); ?>assets/css/news.min.css" />
</head>
<body>
 <div class="layout">
    <!--===========layout-header================-->
    <div class="layout-header am-hide-sm-only">
      <!--topbar start-->
      <div class="topbar" style="display: none;">
        <div class="container">
          <div class="am-g">
            <div class="am-u-md-3" style="display: none;">
              <div class="topbar-left">
                <i class="am-icon-globe"></i>
                <div class="am-dropdown" data-am-dropdown>
                  <button class="am-btn am-btn-primary am-dropdown-toggle" data-am-dropdown-toggle>Language <span class="am-icon-caret-down"></span></button>
                  <ul class="am-dropdown-content">
                    <li><a href="#">English</a></li>
                    <li class="am-divider"></li>
                    <li><a href="#">Chinese</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="am-u-md-9">
              <div class="topbar-right am-text-right am-fr">
                Follow us
                <i class="am-icon-facebook"></i>
                <i class="am-icon-twitter"></i>
                <i class="am-icon-google-plus"></i>
                <i class="am-icon-pinterest"></i>
                <i class="am-icon-instagram"></i>
                <i class="am-icon-linkedin"></i>
                <i class="am-icon-youtube-play"></i>
                <i class="am-icon-rss"></i>
                <a href="html/login.html">登录</a>
                <a href="html/register.html">注册</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--topbar end-->


      <div class="header-box" data-am-sticky>
        <!--header start-->
          <div class="container">
            <div class="header">
              <div class="am-g">
                <div class="am-u-lg-2 am-u-sm-12">
                  <div class="logo">
                    <a href=""><img src="<?php echo $web['logo']; ?>" alt="" /></a>
                  </div>
                </div>
                <div class="am-u-md-10">
                  <div class="header-right am-fr">
                    <div class="header-contact">
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-phone"></i>
  												<strong><?php echo $web['phone']; ?></strong>
  												<span>周一~周五, 8:00 - 20:00</span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-envelope-o"></i>
  												<strong><?php echo $web['email']; ?></strong>
  												<span>随时欢迎您的来信！</span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-map-marker"></i>
  												<strong><?php echo $web['title']; ?></strong>
  												<span><?php echo $web['address']; ?></span>
  											</div>
  										</div>
                    </div>
                    <a href="html/contact.html" class="contact-btn">
                      <button type="button" class="am-btn am-btn-secondary am-radius">联系我们</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--header end-->


        <!--nav start-->
        <div class="nav-contain">
          <div class="nav-inner">
            <ul class="am-nav am-nav-pills am-nav-justify">
              <li class=""><a href="/">首页</a></li>
              <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <li><a href="<?php echo $vo['url']; ?>"><?php echo $vo['name']; ?></a>
                <ul class="sub-menu">
	              <?php if(is_array($vo['son']) || $vo['son'] instanceof \think\Collection || $vo['son'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <li class="menu-item"><a href="<?php echo $vo['url']; ?>"><?php echo $vo['name']; ?></a></li>
	              <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
	               </li> 
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        </div>
        <!--nav end-->
      </div>
    </div>
    <div class="m-header">
      <div class="am-g am-show-sm-only">
        <div class="am-u-sm-2">
          <div class="menu-bars">
            <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i class="am-menu-toggle-icon am-icon-bars"></i></a>
            <!-- 侧边栏内容 -->
            <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas >
            <a href="javascript: void(0)" class="am-menu-toggle"></a>

            <div class="am-offcanvas" >
              <div class="am-offcanvas-bar">
              <ul class="am-menu-nav am-avg-sm-1">
                  <li><a href="/" class="" >首页</a></li>
                  
              <?php if(is_array($menu) || $menu instanceof \think\Collection || $menu instanceof \think\Paginator): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <li <?php if(!empty($vo['son'])): ?> class="am-parent" <?php endif; ?>><a href="<?php echo $vo['url']; ?>"><?php echo $vo['name']; ?></a>
                <ul class="am-menu-sub am-collapse ">
	              <?php if(is_array($vo['son']) || $vo['son'] instanceof \think\Collection || $vo['son'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                  <li class=""><a href="<?php echo $vo['url']; ?>"><?php echo $vo['name']; ?></a></li>
	              <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
	               </li> 
              <?php endforeach; endif; else: echo "" ;endif; ?>
                  
                  <li class="am-parent" style="display:none;">
                    <a href="" class="nav-icon nav-icon-globe" >Language</a>
                      <ul class="am-menu-sub am-collapse  ">
                          <li>
                            <a href="#" >English</a>
                          </li>
                          <li class="">
                            <a href="#" >Chinese</a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-share-contain" style="display:none;">
                    <div class="nav-share-links">
                      <i class="am-icon-facebook"></i>
                      <i class="am-icon-twitter"></i>
                      <i class="am-icon-google-plus"></i>
                      <i class="am-icon-pinterest"></i>
                      <i class="am-icon-instagram"></i>
                      <i class="am-icon-linkedin"></i>
                      <i class="am-icon-youtube-play"></i>
                      <i class="am-icon-rss"></i>
                    </div>
                  </li>
                  <li class="" style="display:none;"><a href="html/login.html" class="" >登录</a></li>
                  <li class="" style="display:none;"><a href="html/register.html" class="" >注册</a></li>
              </ul>

              </div>
            </div>
          </nav>

          </div>
        </div>
        <div class="am-u-sm-5 am-u-end">
          <div class="m-logo">
            <a href=""><img src="<?php echo $web['logo']; ?>" alt=""></a>
          </div>
        </div>
      </div>
    <!--mobile header end-->
    </div>
 


    <!--===========layout-container================-->
    <div class="layout-container">
      <div class="page-header">
        <div class="am-container">
          <h1 class="page-header-title"><?php echo $classname; ?></h1>
        </div>
      </div>

      <div class="breadcrumb-box">
        <div class="am-container">
          <ol class="am-breadcrumb">
            <li><a href="/">首页</a></li>
            <li class="am-active"><a href="/article/class/<?php echo $info['class_id']; ?>"><?php echo $classname; ?></a></li>
            <li class="am-active"><?php echo $info['title']; ?></li>
          </ol>
        </div>
      </div>
    </div>

    <div class="section news-section">
      <div class="container">
        <!--news-section left start-->
        <div class="am-u-md-9">
          <div class="article">
            <header class="article--header">
              <h2 class="article--title"><?php echo $info['title']; ?></h2>
              <ul class="article--meta">
                <li class="article--meta_item"><i class="am-icon-calendar"></i><?php echo $info['add_time']; ?></li>
                <li class="article--meta_item"><i class="am-icon-user"></i><?php echo $info['author']; ?></li>
              </ul>
            </header>
            <div class="article--content">
              <?php echo $info['content']; ?>
            </div>
          </div>

          
        </div>
        <!--news-section left end-->

        <!--news-section right start-->
        <div class="am-u-md-3">
          <div class="blog_sidebar">
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-file-text-o"></i>最新资讯</h2>
              <ul>
              <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $k = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
					<li><a href="/article/<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
            </div>
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-comments-o"></i>热门动态</h2>
              <ul>
              <?php if(is_array($newshot) || $newshot instanceof \think\Collection || $newshot instanceof \think\Paginator): $k = 0; $__LIST__ = $newshot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
					<li><a href="/article/<?php echo $vo['id']; ?>"><?php echo $vo['title']; ?></a></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
            </div>
            <div class="widget">
              <h2 class="widget--title"><i class="am-icon-rss"></i>站内公告</h2>
              <ul>
								<li><?php echo $web['gonggao']; ?><span class="rss-date"></span></li>
							</ul>
            </div>
          </div>
        </div>
        <!--news-section right end-->
      </div>
    </div>
  </div>




  <!--===========layout-footer================-->
  <div class="layout-footer">
    <div class="footer">
      <div style="background-color:#383d61" class="footer--bg"></div>
      <div class="footer--inner">
        <div class="container">
          <div class="footer_main">
            <div class="am-g">
              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">关于我们</strong>
                  <div class="footer_about">
                      <p class="footer_about--text">
                       	致力于提供免费共享的官网系统，为企业搭建完善多适配的官网系统。
                      </p>
                    </div>
                </div>
              </div>

              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">产品中心</strong>
                  <ul class="footer_navigation">
              <?php if(is_array($cp1) || $cp1 instanceof \think\Collection || $cp1 instanceof \think\Paginator): $k = 0; $__LIST__ = $cp1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link"><?php echo $vo['title']; ?></a></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </div>
              </div>

              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">产品新闻</strong>
                  <ul class="footer_navigation">
              <?php if(is_array($cp2) || $cp2 instanceof \think\Collection || $cp2 instanceof \think\Paginator): $k = 0; $__LIST__ = $cp2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                    <li class="footer_navigation--item"><a href="#" class="footer_navigation--link"><?php echo $vo['title']; ?></a></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
                  </ul>
                </div>
              </div>

              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">联系详情</strong>
                  <ul class="footer_contact_info">
                    <li class="footer_contact_info--item"><i class="am-icon-phone"></i><span>服务专线：<?php echo $web['phone']; ?></span></li>
                    <li class="footer_contact_info--item"><i class="am-icon-envelope-o"></i><span><?php echo $web['email']; ?></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo config('__PUBLIC__'); ?>assets/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="<?php echo config('__PUBLIC__'); ?>assets/js/amazeui.js" charset="utf-8"></script>
  <script src="<?php echo config('__PUBLIC__'); ?>assets/js/common.js" charset="utf-8"></script>
</body>

</html>
