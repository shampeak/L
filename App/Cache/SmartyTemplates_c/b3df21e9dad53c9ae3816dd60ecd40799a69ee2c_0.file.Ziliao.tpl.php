<?php
/* Smarty version 3.1.29, created on 2016-07-19 01:17:05
  from "C:\www\Grace\L\App\Views\Home\Ziliao.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578d0f115008b2_43715539',
  'file_dependency' => 
  array (
    'b3df21e9dad53c9ae3816dd60ecd40799a69ee2c' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Home\\Ziliao.tpl',
      1 => 1468862222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_578d0f115008b2_43715539 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>资料完善</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
</head>
<body style="background:#fbfbfb">
                


	<!-- 内容区 -->
	<div class="main main-user">
		<form action="?z=home/ziliao" class="ziliao" method="post">
		
		<div class="portrait-box">
        <h2>完善个人资料，可获得10分奖励</h2>
			<label for="file-img" class="img-box" <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['headimg'] != '') {?>style="display:none"<?php }?>><span>上传头像</span></label>
            
            <input type="file" name="file" capture="camera" id="file-img" />
			<ul id="report">
                 <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['headimg'] != '') {?><li class="item">
                <img src="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['headimg'];?>
">
                </li><?php }?>
			</ul>
		</div>
			<div class="user-form-box">
            
				<div class="sex">
					性别：
					<input name="gender" type="radio" id="male" value="1" <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['gender'] == 1) {?>checked<?php }?>><label for="male">男</label>
				  <input type="radio" name="gender" id="female" value="0" <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['gender'] == 0) {?>checked<?php }?>><label for="female">女</label>
			  </div>
				<div class="form-list">
					<ul>
						<li>姓名<input type="text" name="name" class="name" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['name'];?>
"></li>
						<li>公司<input type="text" name="company" class="company" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['company'];?>
"></li>
						<li>职位<input type="text" name="title" class="career" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['title'];?>
"></li>
						<li>微信号<input type="text" name="weixin" class="wechart" value="<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['weixin'];?>
"></li>
					</ul>
				</div>
				<p class="tips">每一项必须全部填写完整</p> 
			</div>
		</form>
		<div class="btn-box">
        <a href="javascript:void(0)" class="btn-submit shamsub">提交</a>
		</div>
	</div>
	<!-- /内容区 -->


	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>



</body>
<?php echo '<script'; ?>
 src="/static/js/libs/mobileFix.mini.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/libs/exif.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/libs/lrz.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/libs/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	//返回上一页
	$(function(){


		//表单验证函数
		function checkForm(){
			var _male =$('#male').prop('checked');
			var _female = $('#female').prop('checked');
			var _name = $('.name').val();
			var _company = $('.company').val();
			var _career = $('.career').val();
			var _wechart = $('.wechart').val();


			if(_male == false && _female == false){
				alert('请选择您的性别');
				return false;
			}
			if(_name ==''){
				$('.name').focus();
				alert('请填写您的姓名');
				return false;
			}
			if(_company ==''){
				$('.company').focus();
				alert('请填写您的公司');
				return false;
			}
			if(_career ==''){
				$('.career').focus();
				alert('请填写您的职位');
				return false;
			}
			if(_wechart ==''){
				$('.wechart').focus();
				alert('请填写您的微信号');
				return false;
			}
			return true;

		}


		//表单提交
//		$('.btn-submit').on('touchstart',function(){
		$('.btn-submit').on('click',function(){
			var flag = checkForm();
			if(flag){


				var tag = '.ziliao';
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
			}
		});
	});
<?php echo '</script'; ?>
>
</html><?php }
}
