<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<style type="text/css">
    .header, .main, .footer {
        width: 1080px;
        margin: 0 auto;
        padding: 5px;
    }

    .box.cat-area {
        width: 1080px;
        overflow: hidden;
        background-color: lightgray;
    } 

    .box h5, .box h6 {
        background: no-repeat rgb(17, 176, 255);
        color: white;
    }

    .box .title-2 span, .box .title-2 a, .box .title-1 span, .box .title-1 a, .box h5 a, .box h5.title-2 span.tab span {
        color: white;
    }

    .item-size-normal {
        width: 340px;
        height: 300px;
        margin: 5px 5px;
    }

    .w-good-item {
        position: relative;
        float: left;
        color: #666;
        font-family: "Microsoft Yahei", "宋体";
        border: 1px solid transparent;
        _border-color: tomato;
        _filter: chroma(color=#ff6347);
    }

    .cat-area .good-content {
        display: block;
        height: 110px;
        padding: 2px 19px 0;
        border-left: 1px solid #eee;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #d9d9d9;
        background-color: #fff;
    }

    .cat-area .good-title {
        display: inline-block;
        width: 100%;
        height: 21px;
        line-height: 21px;
        color: #2b2b2b;
        font-size: 18px;
        margin-left: -0.5em;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }

    .cat-area .good-desc {
        display: inline-block;
        width: 100%;
        margin: 8px 0 14px;
        height: 40px;
        overflow: hidden;
        line-height: 19px;
        font-size: 14px;
        _margin-bottom: 20px;
        color: #666;
        font-family: SimSun;
    }

</style>
<!--main-->
<div class="main" style="margin-right: auto; margin-left: auto;">
    <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
    <?php $num++?>
    <div class="box cat-area">
        <h5 class="title-1"><?php echo $r['catname'];?><a href="<?php echo $r['url'];?>" class="more">更多>></a></h5>

        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=74bdf818ea4551d1a5cd43b9679e20b4&action=lists&catid=%24r%5Bcatid%5D&order=id+DESC&thumb=1&num=6&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','thumb'=>'1','limit'=>'6',));}?>
        <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
        <a class="w-good-item item-size-normal" href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>">
            <img src="<?php echo thumb($v[thumb],340,194);?>" width="340" height="194"/>
                <span class="good-content">
                    <span class="good-title"><?php echo str_cut($v['title'],50);?></span>
                    <span class="good-desc"><?php echo str_cut($v['description'],150);?></span>
                </span>

        </a>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <?php $n++;}unset($n); ?>
    <div class="box cat-area">
        <h5><a href="<?php echo APP_PATH;?>index.php?m=link&siteid=<?php echo $siteid;?>" hidefocus="true" class="rt">更多>></a><a
                href="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" class="red">申请链接</a></h5>

        <div class="bk10"></div>
        <ul class="colli imgul">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=2b78bc9a5b48df4dd1705ec842e69fd9&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
            <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
            <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88"
                                                                                height="31"/></a></li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=3244aa3eeaa54b0456df16d44fbd5356&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
        <div class="bk10"></div>
        <div class="linka">
            <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
            <?php if($type==0) { ?>
            <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> |
            <?php } else { ?>
            <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31"
                                                     style="border: 1px solid #FFBE7A;"></a>
            <?php } ?>
            <?php $n++;}unset($n); ?>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>

<div style="clear:both"/>
<script type="text/javascript">
    $(function () {
        new slide("#main-slide", "cur", 310, 260, 1);//焦点图
        new SwapTab(".SwapTab", "span", ".tab-content", "ul", "fb");//排行TAB
    })
</script>
<?php include template("content","footer"); ?>
