<?php
/* Smarty version 3.1.29, created on 2016-07-21 18:07:32
  from "E:\phpleague\Grace\L\App\Views\Home\Fenranking.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57909ee44ddb78_79314845',
  'file_dependency' => 
  array (
    '8264ebda098a6f8ac875e9f31c7da35774b1a28f' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Fenranking.tpl',
      1 => 1469086603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer4.tpl' => 1,
  ),
),false)) {
function content_57909ee44ddb78_79314845 ($_smarty_tpl) {
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
    <link rel="stylesheet" href="/static/css/style.css" media="screen" type="text/css" />

<style>
.clearfix{
	margin-bottom: 0px;
}
</style>
    <link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/color.css">
    <link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

</head>
<body  style="font-size: 14px;">




<div class="container" style="background:#FFF">


    <div class="row">
        <div class="col-xs-12">
		        <table class="table">
                    <tr>
                        <td> <img class="img-circle" height="80" width="80" alt="User Image" src="<?php echo $_smarty_tpl->tpl_vars['user']->value['headimg'];?>
"></th>
                        <td><h4><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
,您目前排名是第<span class="red"><?php echo $_smarty_tpl->tpl_vars['pm']->value;?>
</span>名!</h4>
                        <h4>要加油哦!!</h4></td>
                    </tr>
                </table>
		</div>    
        <div class="col-xs-12">
            <!-- center><h1>积分排行</h1></center -->
            <center style="margin-bottom: 20px;"><img src="/static/qw.jpg" height="40"></center -->
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>名次</th>
                        <td style="width:50%">姓名</th>
                        <td>积分</td>
                    </tr>
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
                    <tr >
                        <td><span <?php if ($_smarty_tpl->tpl_vars['key']->value < 3) {?>class="white b_red"<?php } else {
}?>>NO.<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</span></th>
                        <td><?php echo $_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['name'];?>
</th>
                        <td><span class="red"><?php echo $_smarty_tpl->tpl_vars['rc']->value[$_smarty_tpl->tpl_vars['key']->value]['fen'];?>
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
        </div><!-- /.col -->
    </div><!-- /.row -->

</div>
</div>

<br>
<br>
<br>
<br>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer4.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>



<?php echo '<script'; ?>
 src="/static/js/jquery.js"><?php echo '</script'; ?>
>


</body>
</html>

<?php }
}
