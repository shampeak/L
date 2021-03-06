<?php
/* Smarty version 3.1.29, created on 2016-07-19 01:25:34
  from "C:\www\Grace\L\App\Views\Home\Diaocha.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_578d110ed9f916_87220497',
  'file_dependency' => 
  array (
    'de7b6c6fa352ab519e69d3d7aee8017d8f666522' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Home\\Diaocha.tpl',
      1 => 1468862732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_578d110ed9f916_87220497 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>问卷调查</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
<style>
.clearfix{
	margin-bottom: 0px;
}
</style>    
         <link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">

    
</head>
<body>

	<!-- 内容区 -->
	<div class="main main-question">
		<div class="main-title">
			<h1>关于本次SEO排行榜大会的调查问卷</h1>
			<h2>说明：完成全部调查问卷的填写可以积10分奖励</h2>
		</div>
		<div class="question-box">
        <form class="diaocha form-horizontal" action="?z=home/diaocha"  method="post">

			<ul>

                <?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
$__foreach_foo_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
				<li>
					<h4><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)+1;?>
、<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h4>
					<div class="choose-item">
                    
<?php if ($_smarty_tpl->tpl_vars['value']->value['optionA'] != '') {?>
<input type="radio" name="choose[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="A" <?php if ($_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']] == 'A') {?>checked<?php }?>>
<label for=""><?php echo $_smarty_tpl->tpl_vars['value']->value['optionA'];?>
</label>
<?php }
if ($_smarty_tpl->tpl_vars['value']->value['optionB'] != '') {?>
<input type="radio" name="choose[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="B" <?php if ($_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']] == 'B') {?>checked<?php }?>>
<label for=""><?php echo $_smarty_tpl->tpl_vars['value']->value['optionB'];?>
</label>
<?php }
if ($_smarty_tpl->tpl_vars['value']->value['optionC'] != '') {?>
<input type="radio" name="choose[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="C" <?php if ($_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']] == 'C') {?>checked<?php }?>>
<label for=""><?php echo $_smarty_tpl->tpl_vars['value']->value['optionC'];?>
</label>
<?php }
if ($_smarty_tpl->tpl_vars['value']->value['optionD'] != '') {?>
<input type="radio" name="choose[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="D" <?php if ($_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']] == 'D') {?>checked<?php }?>>
<label for=""><?php echo $_smarty_tpl->tpl_vars['value']->value['optionC'];?>
</label>
<?php }?>
					</div>
				</li>
                <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_0_saved_local_item;
}
if ($__foreach_foo_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_0_saved;
}
if ($__foreach_foo_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_0_saved_item;
}
?>
                
                
			</ul>
			<div class="submit-box">
				<a active=<?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 href="javascript:void(0)" class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 1) {?>btn-submit<?php } else { ?>btn-disable<?php }?> shamsub">提交</a>
				<?php if ($_smarty_tpl->tpl_vars['active']->value == 0) {?>
                <span>得分：<strong>10分</strong></span>
                <?php }?>
			</div>
            </form>
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
		$('.shamsub').on('click',function(){
			if($('.shamsub').attr('active') == 1){
				var tag = '.diaocha';
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
></html><?php }
}
