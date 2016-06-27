<?php
/* Smarty version 3.1.29, created on 2016-06-27 11:42:53
  from "E:\phpleague\Grace\L\App\Views\Home\Myjifen.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5770a0bd843fe9_40777758',
  'file_dependency' => 
  array (
    '8494475102103e1012d0c664f34d035f5452716e' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Myjifen.tpl',
      1 => 1466998970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5770a0bd843fe9_40777758 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\phpleague\\Grace\\L\\App\\Library\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>我的积分</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
</head>
<body style="background:#fbfbfb;">


	<!-- 内容区 -->
	<div class="main main-myscore">
		<h2>恭喜您，您目前已获得</h2>
		<div class="score-box">
			<h3><?php echo $_smarty_tpl->tpl_vars['fen']->value;?>
&nbsp;积分</h3>
			<div class="score-detail">
				<span>基础分<?php echo $_smarty_tpl->tpl_vars['jichu']->value;?>
分</span>
				<span>完善资料<?php echo $_smarty_tpl->tpl_vars['ziliao']->value;?>
分</span>
				<span>问卷调查<?php echo $_smarty_tpl->tpl_vars['diaocha']->value;?>
分</span>
				<span>知识问答<?php echo $_smarty_tpl->tpl_vars['zhishi']->value;?>
分</span>
				<span>签到<?php echo $_smarty_tpl->tpl_vars['qiandao']->value;?>
分</span>
				<span>收到<?php echo $_smarty_tpl->tpl_vars['receive']->value;?>
分</span>
				<span>送出<?php echo $_smarty_tpl->tpl_vars['send']->value;?>
分</span>
			</div>
		</div>
		<div class="score-list clearfix">
			<div class="list-item fl">
				<h5>我获得的积分</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
                <?php
$_from = $_smarty_tpl->tpl_vars['senddetail']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                    <tr>
						<th><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value,'%m-%d %H:%M');?>
</th>
						<td>+5分</td>
					</tr>
                <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_0_saved_local_item;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_0_saved_item;
}
?>
                    
				</table>
			</div>
			<div class="list-item fr">
				<h5>我送出的积分</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
                <?php
$_from = $_smarty_tpl->tpl_vars['receivedetail']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_foo_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                    <tr>
						<th><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value,'%m-%d %H:%M');?>
</th>
						<td>+5分</td>
					</tr>
                <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_1_saved_local_item;
}
if ($__foreach_foo_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_1_saved_item;
}
?>

				</table>
			</div>
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
