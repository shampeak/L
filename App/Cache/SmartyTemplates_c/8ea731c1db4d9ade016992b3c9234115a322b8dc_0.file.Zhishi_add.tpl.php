<?php
/* Smarty version 3.1.29, created on 2016-06-23 16:18:35
  from "E:\phpleague\Grace\L\App\Views\Admin\Zhishi_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576b9b5b892680_19944138',
  'file_dependency' => 
  array (
    '8ea731c1db4d9ade016992b3c9234115a322b8dc' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Admin\\Zhishi_add.tpl',
      1 => 1466669910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576b9b5b892680_19944138 ($_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">
        <form class="zhishiadd form-horizontal" action="/admin/zhishi/add/"  method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">title</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">选项A</label>
    <div class="col-sm-10">
      <input type="text" name="optionA" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">选项B</label>
    <div class="col-sm-10">
      <input type="text" name="optionB" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">选项C</label>
    <div class="col-sm-10">
      <input type="text" name="optionC" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">选项D</label>
    <div class="col-sm-10">
      <input type="text" name="optionD" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">答案</label>
    <div class="col-sm-10">
      <input type="text" name="da" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">排序</label>
    <div class="col-sm-10">
      <input type="text" name="sort" class="form-control">
    </div>
  </div>
  
	<input type="hidden" id="tag" name='act' value="addnew">
</form>

    </div>
</div>

<?php echo '<script'; ?>
 type="text/dialog">
	$(document).ready(function(){
		$('.modal_ok').click(function(){
			var tag = '.zhishiadd';
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
