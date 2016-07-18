<?php
/* Smarty version 3.1.29, created on 2016-07-19 00:31:14
  from "C:\www\Grace\L\App\Views\Home\Index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578d0452ae05e0_32305567',
  'file_dependency' => 
  array (
    'e86e7267da14eedc75088a1be9562e616c0e002f' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Home\\Index.tpl',
      1 => 1468804358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_578d0452ae05e0_32305567 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>首页</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
</head>
<body>
	<!-- 内容区 -->
	<div class="main bg-index">
		<div class="banner-box"><img src="/static/images/jifen.png"></div>
		<div class="nav-container">
			<ul class="clearfix">
				<!--li><a href="?z=home/qiandao" class="nav-sign"><span>整点签到</span></a></ li-->
                
				<li><a href="?z=home/zhuanjia" class="nav-question"><span>专家介绍</span></a></li>
                <li><a href="?z=home/qiandao" class="nav-sign"><span>游戏互动</span></a></li>
				<li><a href="?z=home/xianchang" class="nav-user"><span>现场指导</span></a></li>
				<li><a href="?z=home/diaocha" class="nav-survey"><span>问卷调查</span></a></li>
			</ul>
		</div>
	</div>
	<!-- /内容区 -->

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

    
</body>

</html><?php }
}
