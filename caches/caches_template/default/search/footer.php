<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="sr_footer">	  
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a> |  
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接</a>

<p class="info">
<a href="http://www.cyznj.com/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=2" target="_blank">关于我们</a> |  
<a href="http://www.cyznj.com/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=3" target="_blank">联系方式</a> |  
<a href="http://www.cyznj.com/index.php?m=content&amp;c=index&amp;a=lists&amp;catid=4" target="_blank">版权声明</a> |  
<br>
 <strong> © 2014 微锤子门户网站</strong><br>
 <strong> 苏ICP备14020402号</strong>
 <a href="http://www.zx110.org/ "><img src="/statics/images/zx110.png" border="0"></a>
</p>
/div>
      </div>
    </div>
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo JS_PATH;?>nsz.js"></script>
<script type="text/javascript">
	nsz.fix('.sr_logo img');
</script>
<![endif]-->
</body>
</html>
