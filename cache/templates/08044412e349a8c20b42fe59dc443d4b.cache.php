
<!-- 底部导航 -->
<div class="clear"></div>
<div class="bottom">
    <div class="w1150">
        <div class="f-logo">
		<?php $return_t = $this->list_tag("action=navigator type=3  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
            <a href="<?php echo SITE_URL; ?>"><img src="<?php echo dr_thumb($t['thumb']); ?>" alt=""></a>
		<?php } } ?>
            <p></p>
        </div>
        <div class="f-nav">
            <dl>
			
                <dt>关于我们</dt>
				<?php $return_t = $this->list_tag("action=page module=index pid=1  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
					<dd><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></dd>
				<?php } } ?>
            </dl>
            
            <dl>
                <dt>新闻中心</dt>
				<?php $return_t = $this->list_tag("action=category module=news pid=1  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
					<dd><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></dd>
				<?php } } ?>
            </dl>

             <dl>
                <dt>合作伙伴</dt>
                <dd><a href="<?php echo SITE_URL; ?>network/index.php?c=category&id=1">服务网络</a></dd>
            </dl>
             
            <dl>
			 <dt>联系我们</dt>
                <?php $return_t = $this->list_tag("action=page module=index pid=6  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
					<dd><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></dd>
				<?php } } ?>
                 <dd><a href="<?php echo SITE_URL; ?>index.php?c=form_1_1">在线留言</a></dd>
            </dl>

        </div>
        <div class="code">
		<?php $return_t = $this->list_tag("action=navigator type=4  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
            <img src="<?php echo dr_thumb($t['thumb']); ?>" alt="">
		<?php } } ?>
            <p>扫一扫,更精彩</p>

        </div>

    </div>

</div>

<!-- footer -->
<div class="footer">
    <div class="w1150">
        <p class="add">地址：<?php echo dr_block(2); ?></p>
        <p class="tel">电话：<?php echo dr_block(3); ?><i></i> 传真：<?php echo dr_block(4); ?></p>
        <p class="p3"><?php echo dr_block(5); ?> &nbsp; <?php echo dr_block(6); ?> 技术支持 : <a href="http://www.omooo.com" target="blank">摩恩网络</a></p>

    </div>
    
</div>
</body>
</html>
