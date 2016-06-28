<?php
/* Smarty version 3.1.29, created on 2016-06-27 22:37:31
  from "C:\www\Grace\L\App\Views\Admin\Diaocha_edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57713a2b77a245_99161958',
  'file_dependency' => 
  array (
    '8d0628e266a999f7d6a0134a84a8712c638efdbd' => 
    array (
      0 => 'C:\\www\\Grace\\L\\App\\Views\\Admin\\Diaocha_edit.tpl',
      1 => 1467038225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57713a2b77a245_99161958 ($_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">
        <form class="diaochaedit form-horizontal" action="?z=admin/diaocha/edit/"  method="post">

            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">选项A</label>
                <div class="col-sm-10">
                    <input type="text" name="optionA" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['optionA'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">选项B</label>
                <div class="col-sm-10">
                    <input type="text" name="optionB" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['optionB'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">选项C</label>
                <div class="col-sm-10">
                    <input type="text" name="optionC" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['optionC'];?>
">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">选项D</label>
                <div class="col-sm-10">
                    <input type="text" name="optionD" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['optionD'];?>
">
                </div>
            </div>
            
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">排序</label>
                <div class="col-sm-10">
                    <input type="text" name="sort" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sort'];?>
">
                </div>
            </div>
            
            <input type="hidden" id="tag" name='id' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
            <input type="hidden" id="tag" name='act' value="update">
        </form>

    </div>
</div>

<?php echo '<script'; ?>
 type="text/dialog">
	$(document).ready(function(){
		$('.modal_ok').click(function(){
			var tag = '.diaochaedit';
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
