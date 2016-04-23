<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<!-- about s -->
<div class="w1150">
  <div class="about">
      <div class="publeft">
           <dl>
                <dt>合作伙伴</dt>
                <dd class="selected"><a href="<?php echo SITE_URL; ?>network/index.php?c=category&id=2">服务网络</a></dd>
               
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
         <!--   <div class="sousuo">
			<?php $return_c1 = $this->list_tag("action=linkage code=address pid=0  return=c1"); if ($return_c1) extract($return_c1); $count_c1=count($return_c1); if (is_array($return_c1)) { foreach ($return_c1 as $key_c1=>$c1) { ?>
    我是父菜单：<?php echo $c1['name']; ?><br>
    <?php $return_c2 = $this->list_tag("action=linkage code=address pid=$c1[id]  return=c2"); if ($return_c2) extract($return_c2); $count_c2=count($return_c2); if (is_array($return_c2)) { foreach ($return_c2 as $key_c2=>$c2) { ?>
        我是<?php echo $c1['name']; ?>的子菜单：<?php echo $c2['name']; ?><br>
    <?php } }  echo $error_c2; ?>表示第二级出错时的信息
<?php } }  echo $error_c1; ?>表示第一级出错时的信息-->
            <div class="sousuo">
            <select name="" class="selected1" id="city-selected1" >
			<?php $return_t1 = $this->list_tag("action=category module=network pid=1  return=t1"); if ($return_t1) extract($return_t1); $count_t1=count($return_t1); if (is_array($return_t1)) { foreach ($return_t1 as $key_t1=>$t1) { ?>
                <option value="<?php echo $t1['name']; ?>" data-id="<?php echo $t1['id']; ?>" <?php if ($t1['id'] == $catid) { ?> selected="selected"  <?php } ?>  ><?php echo $t1['name']; ?></option>
			<?php } } ?>
            </select>
            <select name="" class="selected2" id="city-selected2" >
                <option value="全国省份下拉列表">代理商城市下拉列表</option>
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
					<?php $return_t = $this->list_tag("action=module module=network catid=$cat[id]   return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
                    <li>  
                        <div class="so-list-l">
                            
                             <a href="<?php echo $t['url']; ?>">
                                   <img src="<?php echo dr_thumb($t['thumb']); ?>" alt="">
                               </a>
                        </div> 
                      
                       <div class="jianshu">
                           <p class="tit"><a href="<?php echo $t['url']; ?>"><?php echo $t['biaoti']; ?></a></p>
                          <?php echo $t['xiangqing']; ?>
                       </div>
                    </li>
					<?php } } ?>

                </ul>
            </div>
        <!-- 搜索列表 end -->
      </div>
  </div>
</div>
<script type="text/javascript">
;(function(){
    
    
    $(function(){
        // 获取当前栏目id
        var catId = '<?php echo $catid; ?>';
        
        $('body,html').animate({scrollTop:"250px"},500);
        
        // 第一个下拉框改变值的时候触发url挑转
        
        $("#city-selected1").change(function(){
          var _t = $(this),
              _cid = _t.find("option:selected").attr("data-id"),
              host = window.location.host;
            window.location = "/network/index.php?c=category&id="+ _cid;
             
        })
        
        $("#city-selected2").change(function(){
          var _t = $(this),
              _cid = _t.find("option:selected").attr("data-id");
             
           console.log(_cid)
             getproList(_cid);             
        })
        
        
        
        
         // 一步查询当前栏目的 下级栏目
         getChildData(catId);
       
    })
    
    
    //获取子集数据
    function getChildData(id){
        var url = '/member/index.php?c=api&m=getcategory&module=network&pid='+id;
        $.getJSON(url, function(data){
           console.log(data);
           
           selectedHtml(data);
           
        });
    }
    
    // 追加更新数据
    
    function selectedHtml(data){
      
      var stc = '';
      if(data.length<1){
          return;
      }
      for(var i=0;i<data.length;i++){
          stc += '<option data-id="'+ data[i]['id'] +'"   value="'+ data[i]['name'] +'">'+ data[i]['name'] +'</option>';
      }
      
      $("#city-selected2").html(stc);
        
    };
    
    
    //接口数据获取 二级城市信息
    function getproList(id){
        //catid=$cat['id']
        
        var query = 'list action=module module=network catid='+ id +'   order=updatetime num=100';
        
        var _url = '<?php echo SITE_URL; ?>index.php?c=api&m=data2&format=jsonp&auth=<?php echo md5(SYS_KEY); ?>&param='+ query +'&catid='+ id;
        
        
        $.ajax(
            {
                type:'get',
                url : _url,
                dataType : 'jsonp',
                success  : function(data) {
                    console.log(data);
                    readerList(data);
                },
                error : function(data) {
                    console.log(data);
                }
            }
        );
        
        
        
        
    }
    
    //渲染数据到页面
    function readerList(data){
        
        var str = '';
        
        if(data){
             for(var i = 0;i<data.length;i++){
            
            
            
            str +=  ' <li>  '+
                ' <div class="so-list-l"> '+
                    '     <a href="'+ data[i].url +'"> '+
                        '        <img src="/'+ data[i].newthumb +'" alt=""> '+
                        '    </a> '+
                '  </div>  '+ 
                '  <div class="jianshu"> '+
                '    <p class="tit"><a href="'+ data[i].newthumb +'">'+ data[i].title +'</a></p> '+ data[i].xiangqing+
                '      '+
                '   </div> '+
            ' </li> ';
                
                
            }
            
            
            
            
        }else{
            str = '未查到数据';
        }
        
       
        
       
        
        $(".so-list ul").html(str);
        
    }
    
    
    
    
    
    
    
    
    function getChildData2(id){
        
        $.ajax(
            {
                type:'get',
                url : '/member/index.php?c=api&m=getcategory&module=network&pid='+id,
                dataType : 'jsonp',
                jsonp:"jsoncallback",
                success  : function(data) {
                    console.log(data);
                },
                error : function(data) {
                    alert(data);
                }
            }
        );
    };
    
})()   
</script>
<!-- about end -->
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?><script type="text/javascript" src="http://www.coffee.com/index.php?c=cron"></script>