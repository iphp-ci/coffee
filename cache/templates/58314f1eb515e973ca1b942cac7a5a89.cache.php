<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!-- about s -->
<div class="w1150">
  <div class="about">
      <div class="publeft">
           <dl>
                <dt>合作伙伴</dt>
                <dd class="selected"><a href="">服务网络</a></dd>
               
            </dl>

      </div>
      <div class="pubright">
        <div class="catname">
            <span class="fl">服务网络</span>
            <span class="fr weizhi">您的位置 &gt;服务网络</span>
        </div>
        <div class="partner-con">
             <div class="map_out">
                <a class="heilongjiang"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=2">黑龙江</a>
                <a class="jilin" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=3">吉林</a>
                <a class="neimenggu" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=4">内蒙古</a>
                <a class="liaoning"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=5">辽宁</a>
                <a class="beijing"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=6">北京</a>
                <a class="shandong"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=7">山东</a>
                <a class="shanxi1"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=8">山西</a>
                <a class="ningxia" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=9">宁夏</a>
                <a class="jiangsu" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=10">江苏</a>
                <a class="henan"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=11">河南</a>
                <a class="shanxi2"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=12">陕西</a>
                <a class="shanghai"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=13">上海</a>
                <a class="anhui" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=14">安徽</a>
                <a class="zhejiang"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=15">浙江</a>
                <a class="jiangxi" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=16">江西</a>
                <a class="hubei"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=17">湖北</a>
                <a class="hunan"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=18">湖南</a>
                <a class="fujian" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=19">福建</a>
                <a class="guangdong"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=20">广东</a>
                <a class="guangxi"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=21">广西</a>
                <a class="taiwan" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=22">台湾</a>
                <a class="hainan"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=23">海南</a>
                <a class="guizhou"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=24">贵州</a>
                <a class="sichuan" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=25">四川</a>
                <a class="yunnan"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=26">云南</a>
                <a class="gansu"  href="<?php echo SITE_URL; ?>network/index.php?c=category&id=27">甘肃</a>
                <a class="qinghai" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=28">青海</a>
                <a class="xinjiang" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=29">新疆</a>
                <a class="xizang" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=30">西藏</a>
                <a class="hebei" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=31">河北</a>
                <a class="tianjin" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=32">天津</a>
                <a class="chongqing" href="<?php echo SITE_URL; ?>network/index.php?c=category&id=33">重庆</a>
            </div>

        </div>
        <!-- 搜索服务商 -->
            <div class="sousuo">
            <select name="" class="selected1">
                <option value="全国省份下拉列表">全国省份下拉列表</option>
                <option value="">北京</option>
                <option value="">上海</option>
                <option value="">河南</option>
                <option value="">河北</option>
            </select>
            <select name="" class="selected2">
                <option value="全国省份下拉列表">代理商城市下拉列表</option>
                <option value="">北京</option>
                <option value="">上海</option>
                <option value="">河南</option>
                <option value="">河北</option>
            </select>
			
				 <!-- 搜索框搜索 -->
					<input onkeypress="if(event.keyCode==13) {searchByClass();return false;}" name='keyword' value='<?php echo $keyword; ?>' id='dr_search_keyword' type="text" class="sousuo-input">
					<input onclick="searchByClass()" type="button"  value="" class="sousuo-submit">
					<script type="text/javascript">
						function searchByClass(){
							var url="<?php echo dr_search_url($params, 'keyword', 'omooocom'); ?>";
							var value=$("#dr_search_keyword").val();
							if (value) {
								location.href=url.replace('omooocom', value);
							} else {
								dr_tips("输入关键字");
							}
						}
					</script>
			<!-- 搜索框搜索 end -->
            </div>

        <!-- 搜索服务商end -->
        <!-- 搜索列表 s -->
            <div class="so-list">
                
                <ul>
                    <li>  
                        <div class="so-list-l">

                             <a href="<?php echo $t['url']; ?>">
                                   <img src="<?php echo dr_thumb($thumb); ?>" alt="">
                               </a>
                        </div> 
                      
                       <div class="jianshu">
                           <p class="tit"><a href="<?php echo $url; ?>"><?php echo $biaoti; ?></a></p>
                           <?php echo $xiangqing; ?>



                       </div>
                    </li>

                </ul>
            </div>
        <!-- 搜索列表 end -->
      </div>
  </div>
</div>
<!-- about end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://www.coffee.com/index.php?c=cron"></script>