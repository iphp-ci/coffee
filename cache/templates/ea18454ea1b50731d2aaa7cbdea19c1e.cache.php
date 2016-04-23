<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<!-- about s -->
<div class="w1150">
  <div class="about">
      <div class="publeft">
           <dl>
                <dt>产品中心</dt>
               <?php $return_t = $this->list_tag("action=category module=photo pid=1  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
					<dd <?php if ($t['id']==$catid) { ?> style="background: #005bac;" <?php } ?>><a href="<?php echo $t['url']; ?>" <?php if ($t['id']==$catid) { ?> style="color: #d6ddf0;" <?php } ?>><?php echo $t['name']; ?></a></dd>
				<?php } } ?>
            </dl>

      </div>
      <div class="pubright">
        <div class="catname">
            <span class="fl"><?php echo $cat['name']; ?></span>
            <span class="fr weizhi">您的位置 &gt;<?php echo dr_catpos($catid, '&gt;'); ?></span>
        </div>
        <div class="pro-list">
            <ul>
				<?php $return = $this->list_tag("action=module module=photo catid=$cat[id] page=1"); if ($return) extract($return); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { ?>
                <li>
                    <div class="fl">
                        <div class="img">
                            <a href="<?php echo $t['url']; ?>"><img src="<?php echo dr_thumb($t['thumb']); ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="xiangqing">
                        <div class="title"><a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a></div>
                        <div class="description">
                          <?php echo $t['gaikuo']; ?>
                        </div>
                        <div class="more"><a href="<?php echo $t['url']; ?>"><img src="<?php echo HOME_THEME_PATH; ?>images/xiangqing.png" alt=""></a></div>

                    </div>
                </li>
				<?php } } ?>
            </ul>
             
             <div class="page">
                <?php echo $pages; ?>
            </div>
        </div>
        
      </div>
  </div>
</div>
<!-- about end -->

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
<script type="text/javascript" src="http://www.coffee.com/index.php?c=cron"></script>