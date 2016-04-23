<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $meta_title; ?></title>
<meta name="keywords" content="<?php echo $meta_keywords; ?>">
<meta name="description" content="<?php echo $meta_description; ?>">
<link rel="stylesheet" type="text/css" href="<?php echo HOME_THEME_PATH; ?>css/index.css">
<script src="<?php echo HOME_THEME_PATH; ?>js/jquery-1.11.3.min.js"></script>
<script src="<?php echo HOME_THEME_PATH; ?>js/jquery.SuperSlide.2.1.js"></script>
</head>
<body>
<!--top s -->
<div class="top">
    <div class="w1150">
        <div class="welcome"><?php echo dr_block(1); ?></div>
		<form method="get" target="_blank" action="<?php echo SITE_URL; ?>index.php">
        <div class="search">
			<input name="c" type="hidden"  value="so" >
			<input type="hidden" name="module" value="photo"/>
            <input type="text" class="input" placeholder="请输入关键字" id="keyword" name="keyword">
            <button  class="btn" type="submit" value=""></button>
        </div>
		</form>
    </div>

</div>
<!-- top end -->

<!-- header s -->
<div class="header">
    <div class="w1150"> 
        <div class="logo">
		<?php $return_t = $this->list_tag("action=navigator type=2  return=t"); if ($return_t) extract($return_t); $count_t=count($return_t); if (is_array($return_t)) { foreach ($return_t as $key_t=>$t) { ?>
            <a href="<?php echo SITE_URL; ?>"><img src="<?php echo dr_thumb($t['thumb']); ?>" alt=""></a>
		<?php } } ?>
        </div>
        <div class="header-r">
            <div class="lang-tab">
                <a href="">简体中文</a> |
                <a href="">ENGLIST</a>
            </div>
            <div class="nav">
                <ul>
                    <li class="on"><a href="" class="li-a">首页</a></li>
                    <!-- 产品分类 -->
					<?php $return_t1 = $this->list_tag("action=category module=photo pid=1  return=t1"); if ($return_t1) extract($return_t1); $count_t1=count($return_t1); if (is_array($return_t1)) { foreach ($return_t1 as $key_t1=>$t1) { ?>
                    <li><a href="<?php echo $t1['url']; ?>" class="li-a"><?php echo $t1['name']; ?></a>
                        <div class="sub">
                             <dl>
								<?php $return_t2 = $this->list_tag("action=module module=photo catid=$t1[id] flag=2  return=t2"); if ($return_t2) extract($return_t2); $count_t2=count($return_t2); if (is_array($return_t2)) { foreach ($return_t2 as $key_t2=>$t2) { ?>
                                 <dd><a href="<?php echo $t2['url']; ?>"><?php echo dr_strcut($t2['title'],15,''); ?></a></dd>
								<?php } } ?>
                             </dl>
                         </div>
                    </li>
					<?php } } ?>
                </ul>
            </div>

        </div>

    </div>

</div>
<!-- header end -->
