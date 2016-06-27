<?php
/* Smarty version 3.1.29, created on 2016-06-27 12:53:39
  from "E:\phpleague\Grace\L\App\Views\Home\Fenranking.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5770b153b75451_81831273',
  'file_dependency' => 
  array (
    '8264ebda098a6f8ac875e9f31c7da35774b1a28f' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Fenranking.tpl',
      1 => 1467003217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5770b153b75451_81831273 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>积分排行</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
</head>
<body style="background:#fefbed;">

	<!-- 内容区 -->
	<div class="main main-rank">
		<div class="top-box">
			<div class="top-item top1">
				<img src="<?php echo $_smarty_tpl->tpl_vars['rc']->value[0]['headimg'];?>
">
				<span><?php echo $_smarty_tpl->tpl_vars['rc']->value[0]['fen'];?>
分</span>
			</div>
			<div class="top-item top2">
				<img src="<?php echo $_smarty_tpl->tpl_vars['rc']->value[1]['headimg'];?>
">
				<span><?php echo $_smarty_tpl->tpl_vars['rc']->value[1]['fen'];?>
分</span>
			</div>
			<div class="top-item top3">
				<img src="<?php echo $_smarty_tpl->tpl_vars['rc']->value[2]['headimg'];?>
">
				<span><?php echo $_smarty_tpl->tpl_vars['rc']->value[2]['fen'];?>
分</span>
			</div>
		</div>
		<div class="my-score-info">
			<dl class="clearfix">
				<dt class="fl"><img src="/static/pic/img-user.jpg"></dt>
				<dd class="score-info fr"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
,您目前排名是<?php echo $_smarty_tpl->tpl_vars['pm']->value;?>
……</dd>
				<dd class="score-tip fr"><i>加油吧！</i></dd>
			</dl>
		</div>
	</div>
	<!-- /内容区 -->
	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

</body>
<?php echo '<script'; ?>
 src="/static/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	//返回上一页
	$(function(){
		$('.link-back').on('touchstart',function(){
			history.back();
		});
	});
<?php echo '</script'; ?>
>
</html><?php }
}
