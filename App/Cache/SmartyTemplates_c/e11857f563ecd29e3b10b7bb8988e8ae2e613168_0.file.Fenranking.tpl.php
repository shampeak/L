<?php
/* Smarty version 3.1.29, created on 2016-06-26 10:03:42
  from "C:\www\Grace\L\App\Views\Home\Fenranking.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576f37fea03941_11405966',
  'file_dependency' => 
  array (
    'e11857f563ecd29e3b10b7bb8988e8ae2e613168' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Home\\Fenranking.tpl',
      1 => 1466906568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_576f37fea03941_11405966 ($_smarty_tpl) {
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
				<img src="/static/pic/img-other.jpg">
				<span>80分</span>
			</div>
			<div class="top-item top2">
				<img src="/static/pic/img-other.jpg">
				<span>50分</span>
			</div>
			<div class="top-item top3">
				<img src="/static/pic/img-other.jpg">
				<span>30分</span>
			</div>
		</div>
		<div class="my-score-info">
			<dl class="clearfix">
				<dt class="fl"><img src="/static/pic/img-user.jpg"></dt>
				<dd class="score-info fr">刘晶晶,您目前排名在200开外……</dd>
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
