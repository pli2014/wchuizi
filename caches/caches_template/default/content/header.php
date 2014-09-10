<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="edge" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="pinggu-site-verification" content="6fa9f308e9f64775488a7e4dd8beb2cd" />
<meta property="qc:admins" content="152375340763126263757" />
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<meta name="baidu-site-verification" content="iDUxx08nV0" />
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>default_blue.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
   <!--============================================= BEGIN STYLES ==-->
    <link rel="stylesheet" href="/css/config.css"/>
    <link rel="stylesheet" href="/css/themes/skin_fdf64a7f.php.css"/>

    <!--[if IE 7]>
    <link rel="stylesheet" href="/css/ie7.css"/> <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" href="/css/ie8.css"/> <![endif]-->

    <!--============================================= BEGIN SCRIPTS ==-->
    <!--JQuery Library-->
    <script type="text/javascript" src="/js/jquery.preloadify.js"></script>
    <!--Preloadify-->
    <script type="text/javascript" src="/js/scripts-top.js"></script>
    <!--General scripts header-->

    <!--[if IE]>
    <script type="text/javascript" src="/js/html5.js"></script>
    <style type="text/css">.testimonial_arrow {
        display: none !important;
    }</style>
    <![endif]-->
  

</head>
<body style="background:transparent;width:1080px;margin:auto;position:relative">

<div class="body-top">
    <div class="content">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e3bec5eab254972ef7678fb28fb15b9&action=position&posid=9&order=id&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'9','order'=>'id',)).'2e3bec5eab254972ef7678fb28fb15b9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    		<div id="announ">
                 <ul>
                 <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
                      <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
                      <?php $n++;}unset($n); ?>
                 </ul>
            </div>
     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
	 <?php echo runhook('glogal_header')?>
<script type="text/javascript">
$(function(){
	startmarquee('announ',22,1,500,3000);
})
</script> 
     <div class="login lh24 blue"><a href="<?php echo APP_PATH;?>index.php?m=content&c=rss&siteid=<?php echo get_siteid();?>" class="rss ib">rss</a></div>
    </div>
</div>

<div class="header">
       <div class="banner">
                  <section id="smk_container_full">
            <section class="smk_container">
                <section class="wrap">
                    <section class="top_head_separator">
                        <!--============================================================= BEGIN top blocks -->
                        <section class="container_12">
                            <div class="grid_4 logo">
                                <a href="index.html"><img src="/images/logo.png" alt="Logo"/></a>
                            </div>
                            <div class="grid_8 top_mod_right">

                                <!--================== BEGIN main menu -->
                                <nav id="horizontal">
                                    <ul id="nav" class="nav_simple">
                                        <li><a href="/index.html">首页</a>
                                        </li>
                                        <li><a href="#">新闻视角</a></li>
                                        <li><a href="#">方案展示</a></li>
                                        <li><a href="#">科技视频</a></li>
                                        <li><a href="#">桐城专区</a></li>
                                        <li><a href="#">关于我们</a></li>


                                    </ul>
                                    <!-- End of #nav-->
                                </nav>
                                <!-- End of menu nav#horizontal -->
                                <div class="clear"></div>
                                <!--/================= END main menu -->
                            </div>
                            <div class="clear"></div>
                        </section>
                        <div class="clear"></div>
                    </section>
                    <!-- End of .top_head_separator -->
                    <div class="clear"></div>
                    <!--/============================================================= END top blocks -->
                    <!-- =============== HEADER [end] ================ -->

                    <!--============================================================== BEGIN content [ .smk_content ] -->
                    <div class="clear"></div>
                    <div class="header">

                        <div id="onebyone_slider">

                            <div class="oneByOne_item">
                                <span class="ob1_title">敏捷、迅速、专业</span>
						<span class="ob1_description">软件的定制愿景：为中小企业打造更多的增值空间！帮助管理者管理企业！
                帮助营销员销售产品！最终找到双赢的平衡点。!</span>
                                <span class="ob1_button"><a href="#" class="default_button">了解更多</a></span>
                                <img src="/images/assets/2.png" class="ob1_img_device1" alt=""/>
                            </div>

                            <div class="oneByOne_item">
                                <span class="ob1_title">拿起手中的锤子，做回真正的你！</span>
                                <span class="ob1_description">拿起手中的锤子，做回真正的你！</span>
                                <span class="ob1_button"><a href="#" class="default_button">了解更多</a></span>
                                <img src="/images/assets/3.png" class="ob1_img_device1" alt=""/>
                            </div>

                            <div class="oneByOne_item">
                                <span class="ob1_title">微动力，新生活</span>
                                <span class="ob1_description">微云端为中小企业打造移动定制服务！</span>
                                <span class="ob1_button"><a href="#" class="default_button">了解更多</a></span>
                                <img src="/images/assets/1.png" class="ob1_img_device1" alt=""/>
                            </div>

                            <div class="oneByOne_item">
                                <span class="ob1_title">扬帆起航</span>
						<span class="ob1_description"> "When the only tool you have is a hammer, every problem begins to resemble a nail."</br>
                            当你仅有的工具是锤子时，所有的问题就渐渐会像是钉子。（狭隘的经验主义）</span>
                                <span class="ob1_button"><a href="#" class="default_button">了解我们</a></span>
                                <img src="/images/assets/4.png" class="ob1_img_device1" alt=""/>
                            </div>

                        </div>
                        <!-- END OF: #onebyone_slider -->

                    </div>
                    <div class="clear"></div>

                    <section id="smk_content" class="smk_content">
                        <div class="container_12">

                            <!-- ===================================================== MAIN CONTENT[begin] -->

                            <!-- ============= HOME NOTICE[begin] -->
                            <div class="home_notice">
                                <h2>嗨! 您想拥有专属于您的定制软件么? 您需要最专业、最贴心、最高端的服务么?<br/>我们为您提供, 您的所需, 就是我们的目标...., </h2>
                            </div>
                            <!-- ============= HOME NOTICE[end] -->

                            <!-- ============= SERVICES -->
                            <div class="home_service clearfix">
                                <div class="s_title s_color_1">
                                    <div class="st_in"><h2>专业的服务</h2></div>
                                </div>
                                <div class="service_text s_magic">
                                    <p>独特方案</br>设计独特和巧妙快速响应用户需求</p>
                                </div>
                                <div class="clear"></div>
                                <div class="service_text s_heart">
                                    <p>贴心服务</br> 我们为您提供一天24小时的在线服务</p>
                                </div>
                            </div>
                            <!-- End service -->

                            <div class="home_service clearfix">
                                <div class="s_title s_color_2">
                                    <div class="st_in"><h2>超私人订制</h2></div>
                                </div>
                                <div class="service_text s_monitor">
                                    <p>软件定制</br>根据客户需求定制品种软件.</p>
                                </div>
                                <div class="clear"></div>
                                <div class="service_text s_mobile">
                                    <p>微信定制</br>支持微信营销服务.</p>
                                </div>
                            </div>
                            <!-- End service -->

                            <div class="home_service clearfix">
                                <div class="s_title s_color_3">
                                    <div class="st_in"><h2>精英团队</h2></div>
                                </div>
                                <div class="service_text s_brush">
                                    <p>合作模式</br>自由灵活的合作模式</p>
                                </div>
                                <div class="clear"></div>
                                <div class="service_text s_users">
                                    <p>高技能人才</br>我们拥有一支高技能团队</p>
                                </div>
                            </div>
                            <!-- End service -->
                            <div class="clear"></div>
                            <!-- ============= / SERVICES[end] -->
                        </div>
                    </section>
                </section>
            </section>
        </section>
       </div>

	<div class="logo" style="margin-top:50px"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/chuizi.png" style="width:120px;height:70px"/></a></div>

    <div class="search" style="margin-top:50px">
    	<div class="tab" id="search">
			<?php $j=0?>
			<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
			<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
			<?php $j++;?>
				<a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?><span> | </span><?php } ?>
			<?php $n++;}unset($n); ?>
			<?php unset($j);?>
		</div>

        <div class="bd" style="position:relative">
            <form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
				<input type="hidden" name="m" value="search"/>
				<input type="hidden" name="c" value="index"/>
				<input type="hidden" name="a" value="init"/>
				<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
				<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
                <input type="text" class="text" name="q" id="q"/><input type="submit" value="搜 索" class="button" />
               <img style="margin-top:50x;width:100%;height:35px" src="<?php echo IMG_PATH;?>/v9/zuohuiziji.jpg"/>

            </form>
        </div>
    </div>
		
    <div class="banner">
	<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=12"></script>
	<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=13"></script>
        <?php echo show_ad(1, 16);?>
    </div>
    <div class="nav-bar"> 
    	<map>
    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
        	<ul class="nav-site">
			<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="line">|</li>
			<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
			<?php $n++;}unset($n); ?>
            </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		<?php echo runhook('glogal_menu')?>
        </map>
    </div>
	<?php if($top_parentid) { ?>
    <div class="subnav">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a><span> | </span>
			<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    	<?php if($modelid) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=search&catid=<?php echo $catid;?>">搜索</a><?php } ?>
    </div>
	<?php } ?>
</div>

    <script type="text/javascript" src="/js/iview.js"></script>
    <script type="text/javascript" src="/js/raphael-min.js"></script>
    <script type="text/javascript" src="/js/jquery.plugins-min.js"></script>
    <script type="text/javascript" src="/js/scripts-bottom-min.js"></script>

