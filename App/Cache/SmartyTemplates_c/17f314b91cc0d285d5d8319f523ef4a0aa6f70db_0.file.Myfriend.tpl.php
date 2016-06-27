<?php
/* Smarty version 3.1.29, created on 2016-06-27 09:28:46
  from "E:\phpleague\Grace\L\App\Views\Home\Myfriend.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5770814eca8e39_77589967',
  'file_dependency' => 
  array (
    '17f314b91cc0d285d5d8319f523ef4a0aa6f70db' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Myfriend.tpl',
      1 => 1466990653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5770814eca8e39_77589967 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>我的好友</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
</head>
<body style="background:#fbfbfb;">

<form action="/home/myfriend/add" class="haoyou" method="post">
	<!-- 内容区 -->
	<div class="main main-friend">
		<div class="input-box clearfix">
			<input type="text" name="haoyou" placeholder="输入好友姓名">
			<button type="button" class="shamsub">提交</button>
		</div>
		<div class="myfriend-list">
			<ul class="cleafix">
				<?php
$_from = $_smarty_tpl->tpl_vars['friends']->value;
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
                <li>
					<a href="/home/myfriend/add/?fid=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['headimg'];?>
">
						<span><?php echo $_smarty_tpl->tpl_vars['value']->value['fen'];?>
分</span>
					</a>
				</li>
                <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_0_saved_local_item;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_0_saved_item;
}
?>
				
			</ul>
		</div>
	</div>
	<!-- /内容区 -->
</form>
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


		//表单提交
//		$('.btn-submit').on('touchstart',function(){
		$('.shamsub').on('click',function(){
				$('.haoyou').submit();
				
		});
		/*
$.ajax({
					type: "GET",
					url: $(tag).attr("action"),
					data: $(tag).serialize(),
					dataType:'json',
					success: function(data){
						var JS = data.js;
						eval(JS);
						},
					error : function() {
						   alert("异常！");
					  }
				});			
		*/
	});
<?php echo '</script'; ?>
>

</html><?php }
}
