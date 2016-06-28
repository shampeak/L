<?php
/* Smarty version 3.1.29, created on 2016-06-28 06:21:22
  from "C:\www\Grace\L\App\Views\Home\Fensend.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5771a6e29f27a7_09915611',
  'file_dependency' => 
  array (
    '15c2c9cc67c963237fa5933a5215f57bcb2075f5' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Home\\Fensend.tpl',
      1 => 1467064220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5771a6e29f27a7_09915611 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>积分互赠</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
</head>
<body style="background:#fefbed;">
<form action="?z=home/fensend/" class="zengsong" method="post">

	<!-- 内容区 -->
	<div class="main main-interact">
		<div class="gift-img-box">
			<img src="/static/pic/img-gift.png">
		</div>
		<div class="gift-score-box">
			<h2>将积分赠送给好友，助他获得大礼</h2>
			<input type="text" name="friendname" class="friendname" placeholder="填写姓名">
			<div class="score-send">
				<div class="score-num">5分</div>
				<a href="javascript:void(0)" class="shamsub">添加</a>
			</div>
			<p class="tips">每次只能送给一个人5分，一个人最多接受或赠送10次。</p>
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
		$('.shamsub').on('click',function(){
				var tag = '.zengsong'
				$.ajax({
					type: "POST",
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
		});
	});
<?php echo '</script'; ?>
>
</html><?php }
}
