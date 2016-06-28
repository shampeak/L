<?php
/* Smarty version 3.1.29, created on 2016-06-28 06:32:11
  from "C:\www\Grace\L\App\Views\Admin\User_edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5771a96b975686_61804037',
  'file_dependency' => 
  array (
    '1f8c10b9067bf024ca9285203aff9b027045af29' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Admin\\User_edit.tpl',
      1 => 1467065033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5771a96b975686_61804037 ($_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">
        <form class="useredit form-horizontal" action="?z=admin/user/edit/"  method="post">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
    <div class="col-sm-10">
      <?php echo $_smarty_tpl->tpl_vars['row']->value['mobile'];?>
	<span class="red">手机号不能修改</span>
    </div>
  </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="text" name="mima" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mima'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">code</label>
                <div class="col-sm-10">
                    <input type="text" name="code" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
">
                </div>
            </div>


            <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">性别</label>
    <div class="col-sm-10">
    <input type="radio" name="gender" id="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['row']->value['gender'] == 1) {?>checked="checked"<?php }?>/> 男
    <input name="gender" type="radio" id="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['row']->value['gender'] != 1) {?>checked="checked"<?php }?>/> 女
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">公司</label>
    <div class="col-sm-10">
      <input type="text" name="company" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['company'];?>
">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">职位</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">微信号</label>
    <div class="col-sm-10">
      <input type="text" name="weixin" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['weixin'];?>
">
    </div>
  </div>
          <input type="hidden" id="tag" name='uid' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
">
          <input type="hidden" id="tag" name='act' value="update">
        </form>

    </div>
</div>

<?php echo '<script'; ?>
 type="text/dialog">
	$(document).ready(function(){
		$('.modal_ok').click(function(){
			var tag = '.useredit';
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
	})
<?php echo '</script'; ?>
><?php }
}
