<?php
/* Smarty version 3.1.29, created on 2016-06-26 09:55:36
  from "C:\www\Grace\L\App\Views\Home\Index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576f3618aae0b8_07411330',
  'file_dependency' => 
  array (
    'e86e7267da14eedc75088a1be9562e616c0e002f' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Home\\Index.tpl',
      1 => 1466906134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_576f3618aae0b8_07411330 ($_smarty_tpl) {
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
		<div class="banner-box"><img src="/static/pic/img-banner.png"></div>
		<div class="nav-container">
			<ul class="clearfix">
				<li><a href="/home/qiandao" class="nav-sign"><span>整点签到</span></a></li>
				<li><a href="/home/zhishi" class="nav-question"><span>知识问答</span></a></li>
				<li><a href="/home/diaocha" class="nav-survey"><span>问卷调查</span></a></li>
				<li><a href="/home/ziliao" class="nav-user"><span>资料完善</span></a></li>
			</ul>
		</div>
	</div>
	<!-- /内容区 -->

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

    
</body>

</html><?php }
}
