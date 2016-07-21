<?php
/* Smarty version 3.1.29, created on 2016-07-21 14:28:01
  from "E:\phpleague\Grace\L\App\Views\Home\Zhishi.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57906b71799859_95380947',
  'file_dependency' => 
  array (
    'db233b10f203c76f2363bec7de8d3f97249c1adc' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Zhishi.tpl',
      1 => 1469082478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_57906b71799859_95380947 ($_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once 'E:\\phpleague\\Grace\\L\\App\\Library\\Smarty\\plugins\\function.math.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>嘉宾提问</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/color.css">
	<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- 内容区 -->
	<div class="main main-question">
		<div class="main-title">
			<h2>说明：每答对一题可获得5分奖励。</h2>
		</div>

<form class="zhishi form-horizontal" action="?z=home/zhishi"  method="post">
	<?php
$_from = $_smarty_tpl->tpl_vars['jiab']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
		<h2>嘉宾 : <?php echo $_smarty_tpl->tpl_vars['v']->value['jiab'];?>
 <small>演讲主题 :<?php echo $_smarty_tpl->tpl_vars['v']->value['jiatitle'];?>
</small></h2>
		<div class="question-box">
		<ul>



			<!--<?php echo smarty_function_math(array('equation'=>'x','x'=>0,'assign'=>'i'),$_smarty_tpl);?>
-->

		<?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_foo_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
$__foreach_foo_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
			<?php if ($_smarty_tpl->tpl_vars['v']->value['jiab'] == $_smarty_tpl->tpl_vars['value']->value['jiab']) {?>
				<!--<?php echo smarty_function_math(array('equation'=>$_smarty_tpl->tpl_vars['i']->value+1,'assign'=>'i'),$_smarty_tpl);?>
-->
				<!--<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
-->

				<li>
					<h3><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
、<?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</h3>
					<div class="choose-item">
						<?php if ($_smarty_tpl->tpl_vars['value']->value['optionA'] != '') {?>
							<input type="radio" name="choose[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="A" <?php if ($_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']] == 'A') {?>checked<?php }?>>
							<label for=""><?php echo $_smarty_tpl->tpl_vars['value']->value['optionA'];?>
</label>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['optionB'] != '') {?>
							<input type="radio" name="choose[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="B" <?php if ($_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']] == 'B') {?>checked<?php }?>>
							<label for=""><?php echo $_smarty_tpl->tpl_vars['value']->value['optionB'];?>
</label>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['optionC'] != '') {?>
							<input type="radio" name="choose[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="C" <?php if ($_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']] == 'C') {?>checked<?php }?>>
							<label for=""><?php echo $_smarty_tpl->tpl_vars['value']->value['optionC'];?>
</label>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['optionD'] != '') {?>
							<input type="radio" name="choose[<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
]" value="D" <?php if ($_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']] == 'D') {?>checked<?php }?>>
							<label for=""><?php echo $_smarty_tpl->tpl_vars['value']->value['optionC'];?>
</label>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['active']->value == 0 && $_smarty_tpl->tpl_vars['value']->value['da'] != $_smarty_tpl->tpl_vars['da']->value['da'][$_smarty_tpl->tpl_vars['value']->value['id']]) {?>
							本题答案错误
						<?php }?>
					</div>
				</li>
			<?php }?>
		<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_1_saved_local_item;
}
if ($__foreach_foo_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_1_saved;
}
if ($__foreach_foo_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_1_saved_item;
}
if ($__foreach_foo_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_foo_1_saved_key;
}
?>
		</ul>
		<hr>
		</div><?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>
</form>
<br>
            <div class="submit-box">
				<a active=<?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 href="javascript:void(0)" class="<?php if ($_smarty_tpl->tpl_vars['active']->value == 1) {?>btn-submit<?php } else { ?>btn-disable<?php }?> shamsub">提交</a>
                 <?php if ($_smarty_tpl->tpl_vars['active']->value == 0) {?>
				<span>得分：<strong><?php echo $_smarty_tpl->tpl_vars['da']->value['fen'];?>
分</strong></span>
                <?php }?>
			</div>
		<br>
            <?php if ($_smarty_tpl->tpl_vars['active']->value == 0) {?>
			<div class="result-box clearfix">
				<div class="fl">
					<p class="fl" style="width: 100px;">正确答案：</p><br>
					<?php echo smarty_function_math(array('equation'=>'x','x'=>0,'assign'=>'i'),$_smarty_tpl);?>

					<?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_foo_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo'] : false;
$__foreach_foo_2_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']++;
$__foreach_foo_2_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
						<?php echo smarty_function_math(array('equation'=>$_smarty_tpl->tpl_vars['i']->value+1,'assign'=>'i'),$_smarty_tpl);?>

						<?php if (($_smarty_tpl->tpl_vars['i']->value-1) == 5 || ($_smarty_tpl->tpl_vars['i']->value-1) == 10 || ($_smarty_tpl->tpl_vars['i']->value-1) == 15 || ($_smarty_tpl->tpl_vars['i']->value-1) == 20 || ($_smarty_tpl->tpl_vars['i']->value-1) == 25 || ($_smarty_tpl->tpl_vars['i']->value-1) == 30 || ($_smarty_tpl->tpl_vars['i']->value-1) == 35 || ($_smarty_tpl->tpl_vars['i']->value-1) == 40 || ($_smarty_tpl->tpl_vars['i']->value-1) == 45 || ($_smarty_tpl->tpl_vars['i']->value-1) == 50) {?><br><?php }?>
					<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_foo']->value['index'] : null)+1;?>
:<strong class="red"><?php echo $_smarty_tpl->tpl_vars['value']->value['da'];?>
</strong>
                 <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_2_saved_local_item;
}
if ($__foreach_foo_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_foo'] = $__foreach_foo_2_saved;
}
if ($__foreach_foo_2_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_foo_2_saved_item;
}
?>
				</div>
			</div>
            <?php }?>
            
            
		</div>

		<!--div class="page-box clearfix">
			<div class="page-prev fl"><b></b>上一页</div>
			<div class="page-next fr"><b></b>下一页</div>
		</div -->
	<!-- -->

	</div>
	<!-- /内容区 -->
	<br>
	<br>
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
//		$('.shamsub').on('touchstart',function(){
			if($('.shamsub').attr('active') == 1){
				var tag = '.zhishi';
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
	
	
	
				//alert(1);
		});
	});
<?php echo '</script'; ?>
>
</html><?php }
}
