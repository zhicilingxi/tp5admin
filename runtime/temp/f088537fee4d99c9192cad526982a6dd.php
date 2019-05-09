<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:67:"D:\wamp\www\tp5cms\public/../application/home\view\Index\index.html";i:1557389684;s:52:"D:\wamp\www\tp5cms\application\home\view\header.html";i:1557371096;s:49:"D:\wamp\www\tp5cms\application\home\view\top.html";i:1557389782;s:52:"D:\wamp\www\tp5cms\application\home\view\footer.html";i:1557295769;}*/ ?>

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
                    <a href="/"><img src="<?php echo $web['logo']; ?>" alt="" /></a>
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
                    <a href="/articledy/3" class="contact-btn">
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
 

    <!--mobile header start-->
    




    <!--===========layout-container================-->
    <div class="layout-container">
      <div class="index-page">
        <div data-am-widget="tabs" class="am-tabs am-tabs-default">
          <div class="am-tabs-bd">
              <?php if(is_array($hdp) || $hdp instanceof \think\Collection || $hdp instanceof \think\Paginator): $k = 0; $__LIST__ = $hdp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <div data-tab-panel-<?php echo ($k-1); ?> class="am-tab-panel <?php if($k == 1): ?>am-active<?php endif; ?>">
              <div class="index-banner" style="background:url(<?php echo $vo['img']; ?>)">
                <div class="index-mask">
                  <div class="container">
                  <a href="<?php echo $vo['url']; ?>"><img src="<?php echo $vo['img']; ?>" /></a>
                    <div class="am-g">
                      <div class="am-u-md-10 am-u-sm-centered">
                        <h1 class="slide_simple--title"><?php echo $vo['name']; ?></h1>
                        <p class="slide_simple--text am-text-left">
							<?php echo $vo['desc']; ?>				  
						</p>
                        <div class="slide_simple--buttons">
  							<a href="<?php echo $vo['url']; ?>"><button type="button" class="am-btn am-btn-danger">了解更多</button></a>
						</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>

          <ul class="am-tabs-nav am-cf index-tab">
              <?php if(is_array($hdp) || $hdp instanceof \think\Collection || $hdp instanceof \think\Paginator): $k = 0; $__LIST__ = $hdp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <li class="<?php if($k == 1): ?>am-active<?php endif; ?>">
              <a href="[data-tab-panel-<?php echo ($k-1); ?>] am-g">
                <div class="am-u-md-3 am-u-sm-3 am-padding-right-0">
                  <i class="am-icon-cog"></i>
                </div>
                <div class="school-item-right am-u-md-9 am-u-sm-9 am-text-left">
                  <strong class="promo_slider_nav--item_title"><?php echo $vo['name']; ?></strong>
                  <p class="promo_slider_nav--item_description"><?php echo $vo['desc']; ?></p>
                </div>
              </a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
          </ul>
        </div>

      </div>
    </div>


    <div class="section">
      <div class="container">
        <div class="section--header">
					<h2 class="section--title">核心优势</h2>
					<p class="section--description">
						<?php echo $website['mybest']; ?>
					</p>
				</div>

        <!--index-container start-->
        <div class="index-container">
          <div class="am-g">
              <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $k = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
            <div class="am-u-md-3">
              <div class="features_item">
					<a href="/article/<?php echo $vo['id']; ?>"><img src="<?php echo $vo['img']; ?>" alt=""></a>
					<a href="/article/<?php echo $vo['id']; ?>"><h3 class="features_item--title"><?php echo $vo['title']; ?></h3></a>
					<p class="features_item--text">
						<?php echo $vo['desc']; ?>
					</p>
				</div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
          </div>

          <div class="index-more">
            <button type="button" class="am-btn am-btn-secondary">MORE&nbsp;&nbsp;>></button>
          </div>
        </div>
        <!--index-container end-->
      </div>
    </div>

  </div>



  <!--customer-logo start-->
    <div class="customer-logo">
      <div class="container">
        <div class="am-g">
              <?php if(is_array($link) || $link instanceof \think\Collection || $link instanceof \think\Paginator): $k = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
          <div class="am-u-md-2 am-u-sm-4 customer-box">
            <a href="<?php echo $vo['url']; ?>" title="<?php echo $vo['name']; ?>">
              <img class="normal-logo" src="<?php echo $vo['img']; ?>" alt="" />
              <img class="am-active"  alt=""src="<?php echo $vo['img']; ?>" alt="" />
            </a>
          </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>
    </div>
  <!--customer-logo end-->


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
