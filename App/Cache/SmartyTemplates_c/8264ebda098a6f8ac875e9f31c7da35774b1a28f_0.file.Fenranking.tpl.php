<?php
/* Smarty version 3.1.29, created on 2016-08-05 14:43:21
  from "E:\phpleague\Grace\L\App\Views\Home\Fenranking.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a435894f9c06_27591980',
  'file_dependency' => 
  array (
    '8264ebda098a6f8ac875e9f31c7da35774b1a28f' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Fenranking.tpl',
      1 => 1470277409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../footer4.tpl' => 1,
  ),
),false)) {
function content_57a435894f9c06_27591980 ($_smarty_tpl) {
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
		<title>积分排行</title>

		<link rel="stylesheet" href="/static/css/reset.css">
		<link rel="stylesheet" href="/static/css/qa_style.css">
		<?php echo '<script'; ?>
 src="/static/js/flexible.js"><?php echo '</script'; ?>
>
		<style>
			.clearfix {
				margin-bottom: 0px;
			}
		</style>
		<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/color.css">
		<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			.color-blue {
				color: #0476CB !important;
			}
			
			.bor-t {
				border-top: none !important;
			}
			
			.bor-l {
				border-left: none !important;
			}
			
			.bor-r {
				border-right: none !important;
			}
			
			.table td {
				color: #646464 !important;
				padding: 15px 10px !important;
			}
			
			.pm-title {
				font-size: 15px;
				font-family: "微软雅黑";
			}
			
			.p-0 {
				padding: 0 !important;
			}
			
			.top {
				width: 100%;
				height: 40px;
				line-height: 40px;
				text-align: center;
				color: #fff;
				font-size: 16px;
				background-color: #0476CB;
				position: fixed;
				top: 0;
				left: 0;
				z-index: 2;
			}
			
			.back {
				position: absolute;
				top: 0;
				left: 0;
				display: block;
				color: #fff;
				padding-left: 30px;
				background: url("../img/back.png") no-repeat 10px center;
				background-size: 10px 15px;
			}
			
			.user-01 {
				display: inline-block;
				border-radius: 50%;
				width: 60px;
				border: 4px solid #68ADE0;
				height: 60px;
				overflow: hidden;
			}
			
			.user-01 .user-img {
				width: 100%;
				background-position: center center;
			}
			
			.user-02 {
				display: inline-block;
				border-radius: 50%;
				width: 80px;
				border: 4px solid #68ADE0;
				height: 80px;
				overflow: hidden;
			}
			
			.user-02 .user-img {
				width: 100%;
				background-position: center center;
			}
			
			.user-03 {
				display: inline-block;
				border-radius: 50%;
				width: 60px;
				border: 4px solid #68ADE0;
				height: 60px;
				overflow: hidden;
			}
			
			.user-03 .user-img {
				width: 100%;
				background-position: center center;
			}
			
			.table.table-user {
				position: absolute;
				top: 50%;
				margin-top: -60px;
			}
			
			.table.table-user .user-td {
				padding: 0 !important;
				vertical-align: middle;
				text-align: center;
			}
			
			.pos-r {
				position: relative !important;
			}
			
			.users {
				position: absolute;
				top: 50%;
				margin-top: -60px;
				max-width: 23%;
				left: 50%;
				margin-left: 5px;
			}
			
			.user-gj02 {
				position: absolute;
				top: 50%;
				margin-top: -76px;
				max-width: 27%;
				left: 50%;
				margin-left: 9px;
			}
			
			.user-p {
				color: #fff;
				padding-top: 5px;
				font-family: "微软雅黑";
				font-size: 13px;
			}
			
			.user-totle {
				border: none !important;
				text-align: center;
			}
			
			.user-totle p {
				color: #fff;
			}
			
			.user-warning {
				font-size: 15px;
				font-weight: bold;
			}
			
			.w-100per {
				width: 100% !important;
			}
		</style>
	</head>

	<body style="font-size: 14px;font-family: '微软雅黑';">
		<div class="top">
			积分排行
			<a href="javascript:history.go(-1);" class="back">
				返回
			</a>
		</div>
		<div class="container" style="background:#FFF;padding-top: 40px;">
			<div class="row">
				<div class="col-xs-12 p-0">
					<img src="/static/images/frabanner.jpg" class=" w-100per" />
					<table class="table table-user">
						<tr>
							<td class="user-td bor-t  pos-r">
								<span class="user-01">
									<img src="<?php echo $_smarty_tpl->tpl_vars['rc']->value[1]['headimg'];?>
" class="user-img"/>
									<img src="/static/images/top2.png" class="users"/>
								</span>
								<div class="user-p">
									<p><?php echo $_smarty_tpl->tpl_vars['rc']->value[1]['name'];?>
</p>
									<p>
										<span>当前积分:</span>
										<span><?php echo $_smarty_tpl->tpl_vars['rc']->value[1]['fen'];?>
</span>
										<span>分</span>
									</p>
								</div>
							</td>
							<td class="user-td bor-t  pos-r">
								<span class="user-02">
									<img src="<?php echo $_smarty_tpl->tpl_vars['rc']->value[0]['headimg'];?>
" class="user-img"/>
									<img src="/static/images/top1.png" class="user-gj02"/>
								</span>
								<div class="user-p">
									<p class="user-warning"><?php echo $_smarty_tpl->tpl_vars['rc']->value[0]['name'];?>
</p>
									<p>
										<span>当前积分:</span>
										<span><?php echo $_smarty_tpl->tpl_vars['rc']->value[0]['fen'];?>
</span>
										<span>分</span>
									</p>
								</div>
							</td>
							<td class="user-td bor-t  pos-r">
								<span class="user-03">
									<img src="<?php echo $_smarty_tpl->tpl_vars['rc']->value[2]['headimg'];?>
" class="user-img"/>
									<img src="/static/images/top3.png" class="users"/>
								</span>
								<div class="user-p">
									<p><?php echo $_smarty_tpl->tpl_vars['rc']->value[2]['name'];?>
</p>
									<p>
										<span>当前积分:</span>
										<span><?php echo $_smarty_tpl->tpl_vars['rc']->value[2]['fen'];?>
</span>
										<span>分</span>
									</p>
								</div>
							</td>
						</tr>
						<!--<tr>
							<td colspan="3" class="user-totle">
								<p>
									<span>当前积分：</span>
									<span>55</span>
									<span>分</span>
								</p>
							</td>
						</tr>-->
					</table>
				</div>
				<div class="col-xs-12 p-0">
					<!-- center><h1>积分排行</h1></center -->
					<center style="margin-bottom: 20px;">
						<h3 class="pm-title"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
,您目前的排名是第<span class="red"><?php echo $_smarty_tpl->tpl_vars['pm']->value;?>
</span>名，加油哦！</h3>
					</center>
					<div class="table-responsive">
						<table class="table">
							<?php
$_from = $_smarty_tpl->tpl_vars['rc']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
							<tr>
								<td class="bor-l bor-r" <?php if (($_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['headimg'] != '')) {?>style="padding-top: 15px" <?php }?>><span <?php if ($_smarty_tpl->tpl_vars['key']->value < 3) {?>class="color-blue" <?php }?>>NO.<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span></th>
									<td class="bor-l bor-r" width=50px><?php if ($_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['headimg'] != '') {?>
										<!--<img class="img-circle" height="40" width="40" alt="" src="<?php echo $_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['headimg'];?>
">--><?php }?></th>
										<td class="bor-l bor-r" <?php if (($_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['headimg'] != '') && $_smarty_tpl->tpl_vars['key']->value < 9) {?>style="padding-top: 15px" <?php }?>> <?php echo $_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['name'];?>
</th>
											<td class="bor-l bor-r" <?php if (($_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['headimg'] != '') && $_smarty_tpl->tpl_vars['key']->value < 9) {?>style="padding-top: 15px" <?php }?>><span><?php echo $_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['fen'];?>
</span>分</td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
?>

						</table>
					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

		</div>
		</div>

		<br>
		<br>
		<br>
		<br> <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../footer4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>


		<?php echo '<script'; ?>
 src="/static/js/jquery.js"><?php echo '</script'; ?>
>

	</body>

</html><?php }
}
