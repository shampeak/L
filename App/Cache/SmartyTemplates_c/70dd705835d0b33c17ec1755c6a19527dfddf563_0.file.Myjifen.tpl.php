<?php
/* Smarty version 3.1.29, created on 2016-06-27 05:32:22
  from "C:\www\Grace\L\App\Views\Home\Myjifen.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577049e6afe142_81941754',
  'file_dependency' => 
  array (
    '70dd705835d0b33c17ec1755c6a19527dfddf563' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Home\\Myjifen.tpl',
      1 => 1466976696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_577049e6afe142_81941754 ($_smarty_tpl) {
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
			<h3>50&nbsp;积分</h3>
			<div class="score-detail">
				<span>基础分10分</span>
				<span>完善资料10分</span>
				<span>基础分10分</span>
				<span>完善资料10分</span>
			</div>
		</div>
		<div class="score-list clearfix">
			<div class="list-item fl">
				<h5>我获得的积分</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<th>8:40</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>10:21</th>
						<td>+1分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
				</table>
			</div>
			<div class="list-item fr">
				<h5>我送出的积分</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<th>8:40</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>10:21</th>
						<td>+1分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
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
