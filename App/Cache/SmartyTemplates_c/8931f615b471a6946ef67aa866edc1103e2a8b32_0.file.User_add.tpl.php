<?php
/* Smarty version 3.1.29, created on 2016-06-22 18:55:35
  from "E:\phpleague\Grace\L\App\Views\Admin\User_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576a6ea7d633d2_71802911',
  'file_dependency' => 
  array (
    '8931f615b471a6946ef67aa866edc1103e2a8b32' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Admin\\User_add.tpl',
      1 => 1466592932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576a6ea7d633d2_71802911 ($_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12">
        <form class="useradd form-horizontal" action="/admin/user/add/"  method="post">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">手机号</label>
    <div class="col-sm-10">
      <input type="text" name="mobile" class="form-control"><span class="red">必须填写</span>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">性别</label>
    <div class="col-sm-10">
      <input type="radio" name="gender" id="radio" value="1" /> 男
      <input type="radio" name="gender" id="radio" value="0" /> 女
      <label for="radio"></label>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">公司</label>
    <div class="col-sm-10">
      <input type="text" name="company" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">职位</label>
    <div class="col-sm-10">
      <input type="text" name="title" class="form-control">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">微信号</label>
    <div class="col-sm-10">
      <input type="text" name="weixin" class="form-control">
    </div>
  </div>
<input type="hidden" id="tag" name='act' value="update">
        </form>

    </div>
</div>

<?php echo '<script'; ?>
 type="text/dialog">
	$(document).ready(function(){
		$('.modal_ok').click(function(){
			var tag = '.useradd';
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
