<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<!--banner start-->
<div class="banner">
    <div class="bd">
        <ul>
		<?php $return_t = $this->list_tag("action=navigator type=1  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
            <li style="background:url(<?php echo dr_thumb($t['thumb']); ?>) no-repeat center"></li>
        <?php } } ?>
        </ul>
          <a class="prev" href="javascript:void(0)"></a>
          <a class="next" href="javascript:void(0)"></a>
    </div>
</div>

<script type="text/javascript">jQuery(".banner").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"click" });</script>

<!--banner end-->
	
	<!--广告位置-->
	<div class="guanggao" id="ad">
	<img src="<?php echo HOME_THEME_PATH; ?>images/close.png"  onclick="closed();" class="close">
	<?php $return_t = $this->list_tag("action=navigator type=5  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
		<a href="<?php echo $t['url']; ?>"><img src="<?php echo dr_thumb($t['thumb']); ?>" class="z-img"></a>
	<?php } } ?>
	</div>
<script>
function closed()
{
 var aaa=document.getElementById("ad");
 aaa.style.display="none";
}
</script>
	<!--广告位置 end-->
	
<!-- main -->
<div class="main">
    <div class="im01">
        <div class="title">
            <a href="<?php echo SITE_URL; ?>news/index.php?c=category&id=1">NEWS | 新闻中心</a>
        </div>
        <div class="con">
		<?php $return_t = $this->list_tag("action=module module=news flag=1 num=1  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
             <div class="fl">
                <div class="img">
                    <a href="<?php echo $t['url']; ?>"><img src="<?php echo dr_thumb($t['thumb']); ?>" alt=""></a>
                </div>
            </div>
            <div class="txt">
                <div class="timu"><a href="<?php echo $t['url']; ?>"><?php echo dr_strcut($t['title'],25); ?></a></div>
                <div class="textarea">
                   <?php echo $t['zhaiyao']; ?>
                </div>
            </div>
			<?php } } ?>
        </div>
    </div>
    
    <div class="im01" style="display:block;float:right;">
        <div class="title">
            <a href="<?php echo SITE_URL; ?>photo/index.php?c=category&id=1">PRODUCTS  | 产品推荐</a>
        </div>
        <div class="con">
		<?php $return_t = $this->list_tag("action=module module=photo flag=1 num=1  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
            <div class="fl">
                <div class="img">
                    <a href="<?php echo $t['url']; ?>"><img src="<?php echo dr_thumb($t['thumb']); ?>" alt=""></a>
                </div>
            </div>
            <div class="txt">
                 <div class="timu"><a href="<?php echo $t['url']; ?>"><?php echo dr_strcut($t['title'],25); ?></a></div>
                <div class="textarea">
                    <?php echo $t['zhaiyao']; ?>
                </div>

            </div>

		<?php } } ?>
        </div>
    </div>

	


    <!-- 地点链接 -->
<div class="im02">
 <div class="friend">
    <div class="hd">
        <a class="next"></a>
        <a class="prev"></a>
    </div>
    <div class="bd">
        <ul class="picList">
			<?php $return_t = $this->list_tag("action=module module=network catid=$cat[id] flag=1  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
				 <li>   
					   <a href="<?php echo $t['url']; ?>">
						   <img src="<?php echo dr_thumb($t['thumb']); ?>" alt="">
					   </a>
				 </li>
          <?php } } ?>
           
             
        </ul>
    </div>
</div>
</div>
<script type="text/javascript">
	jQuery(".friend").slide({mainCell:".bd ul",autoPlay:true,effect:"leftMarquee",vis:7,interTime:30,trigger:"click"});
</script>
</div>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
<script type="text/javascript" src="http://www.coffee.com/index.php?c=cron"></script>