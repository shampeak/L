<?php
/* Smarty version 3.1.29, created on 2016-07-22 17:55:58
  from "E:\phpleague\Grace\L\App\Views\Home\Index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5791edaec4df39_82515261',
  'file_dependency' => 
  array (
    '8eca8fd479596c6e1a10a61c3a6404564f24d3dd' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Index.tpl',
      1 => 1469181320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5791edaec4df39_82515261 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>首页</title>
    
    
    

    <link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
    <link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/assets/css/color.css">
    <link rel="stylesheet" href="/static/css/reset.css">
    <link rel="stylesheet" href="/static/css/qa_style.css">
    <?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
    
    
    <style>
.yuan{
	border-radius: 20px; /* 所有角都使用半径为5px的圆角，此属性为CSS3标准属性 */
	-moz-border-radius: 20px; /* Mozilla浏览器的私有属性 */
	-webkit-border-radius: 20px; /* Webkit浏览器的私有属性 */
	border-radius: 20px 20px 20px 20px; /* 四个半径值分别是左上角、右上角、右下角和左下角 */ 
	width:150px;
	padding:3px;
}
	</style>
</head>
<body>

	<!-- 内容区 -->
	<div class="main bg-index">
		<div class="banner-box"><img src="/static/images/jifen.png"></div>
		<div class="nav-container">
			<ul class="clearfix">


				<!--li><a href="?z=home/qiandao" class="nav-sign"><span>整点签到</span></a></ li-->
				<li><a href="?z=home/zhuanjia" class="nav-question"><span>专家介绍</span></a></li>
                <li><a href="?z=home/huodonglist" class="nav-sign"><span>游戏互动</span></a></li>				
                <li><a href="?z=home/xianchang" class="nav-user"><span><?php if ($_smarty_tpl->tpl_vars['count']->value != 0) {?><small class="b_red white yuan"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</small><?php }?>现场指导</span></a></li>
				<li><a href="?z=home/diaocha" class="nav-survey"><span>问卷调查</span></a></li>


			</ul>
		</div>
	</div>
	<!-- /内容区 -->
	<br>
	<br>
	<br>
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

    
</body>

</html><?php }
}
