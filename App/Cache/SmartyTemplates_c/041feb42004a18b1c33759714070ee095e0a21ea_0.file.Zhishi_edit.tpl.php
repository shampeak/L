<?php
/* Smarty version 3.1.29, created on 2016-06-23 16:22:01
  from "E:\phpleague\Grace\L\App\Views\Admin\Zhishi_edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576b9c29d53a45_86264454',
  'file_dependency' => 
  array (
    '041feb42004a18b1c33759714070ee095e0a21ea' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Admin\\Zhishi_edit.tpl',
      1 => 1466670118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576b9c29d53a45_86264454 ($_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">
        <form class="zhishiedit form-horizontal" action="/admin/zhishi/edit/"  method="post">

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
                <label for="inputPassword3" class="col-sm-2 control-label">答案</label>
                <div class="col-sm-10">
                    <input type="text" name="da" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['da'];?>
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
			var tag = '.zhishiedit';
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
