<?php
/* Smarty version 3.1.29, created on 2016-08-05 14:32:01
  from "E:\phpleague\Grace\L\App\Views\Admin\Zhishi.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a432e1c56a94_33328673',
  'file_dependency' => 
  array (
    'dbe8c8ca1dc60373670cc2c8ca5e214809a43b60' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Admin\\Zhishi.tpl',
      1 => 1470378694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a432e1c56a94_33328673 ($_smarty_tpl) {
?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" />

    <!-- DATA TABLE CSS -->
    <link href="/ui/css/table.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">

    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/bootstrap-3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="/ui/js/admin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/app.js"><?php echo '</script'; ?>
>

    <style type="text/css">
        body {
            padding-top: 60px;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
    <![endif]-->


    <!-- DataTables Initialization -->
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#dt1').dataTable({
                "aaSorting": [[ 1, "desc" ]],
                "aLengthMenu": [[30, 50, -1], [30, 50, "All"]],
                "iDisplayLength":30,			//一页多少条
                "bAutoWidth": true,	//自动宽度
                "bStateSave": false,
                "bLengthChange": true, //改变每页显示数据数量

                "oLanguage": {
                    "sLengthMenu": "每页显示 _MENU_ 条记录",
                    "sZeroRecords": "抱歉， 没有找到",
                    "sInfo": "从 _START_ 到 _END_ /共 _TOTAL_ 条数据",
                    "sInfoEmpty": "没有数据",
                    "sInfoFiltered": "(从 _MAX_ 条数据中检索)",
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": "前一页",
                        "sNext": "后一页",
                        "sLast": "尾页"
                    },
                    "sZeroRecords": "没有检索到数据",
                    "sProcessing": "<img src='./loading.gif' />"
                },
				"fnRowCallback": function( nRow, aData, iDisplayIndex ) {
					/* Append the grade to the default row class name */
					if ( aData[6] == "A" )
					{
						$('td:eq(2)', nRow).html( '<span class="white b_red">'+aData[2]+'</span>' );
					}
					if ( aData[6] == "B" )
					{
						$('td:eq(3)', nRow).html( '<span class="white b_red">'+aData[3]+'</span>' );
					}
					if ( aData[6] == "C" )
					{
						$('td:eq(4)', nRow).html( '<span class="white b_red">'+aData[4]+'</span>' );
					}
					if ( aData[6] == "D" )
					{
						$('td:eq(5)', nRow).html( '<span class="white b_red">'+aData[5]+'</span>' );
					}
					return nRow;
				},
				"aoColumnDefs": [ {
						"sClass": "center",
						"aTargets": [ -1, -2 ]
				} ]		
				




            });
			
        });
		
    <?php echo '</script'; ?>
>


</head>
<body>

<!-- NAVIGATION MENU -->

<div class="navbar-nav navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)">
                <img alt="Brand" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAUCAYAAABiS3YzAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAACRUlEQVR42ozUSWjWVxQF8F+SzwETq0RRCVVxFimFgtPCgIKLGogUaQzdOGAQSl0pboq0UCgUQQiCA4q4MLoSWxXcqcVGi4IWSgsOdUCjEmfj0MjXJm7OBx8x0Vz48+e9d98dzjn3VWw/0mgAa8AqHMVhFLP/OdbgOA72d7GASvT0c3YKtViA0fgL0/EZfsOJgaopoAkdONvnrBttCb4DO9GOr5MApqAXt7Keh9qqZc2zmtCC4biCIahKwnUJ8iLVPUcjxuImlgSWDqzFZnQXsA3/YCnmYBxe4g7q8R/+xFVMwngsx6dJPgErMBMH8EshVbThGDZgPYbhEvbiOmZhcaprxcf4BvNzf0/WHSVMS9aFn/AKX+ExvsC9JGjHGHyJiemgHfuigmI5UeXWk1Zn4xo+wVxMLmN/Iv7A3+GhvTygyKmvTcW0nJ3G/jDckv8hnAzuM/K9I6mhAbsLz4JRZVodgU5cQDXOxWdSCP0//kJqERcrE6ARP4aAp3gQ54pcrgrGNZFTMT6dGInV2JJkxUJEfjJS+T5Oo/AGT6KE2lTdE+Kqg3d9oDqDraUBKhF1Gd9hITZFr8NxI63fRx1e52xeOnyBn7H7feyfx5H8X2VK6oLlmyhhAn4NYQ1RyXvZr4tGi9iFlZHSRjTjdlTwbYbi0UAPSt9H5PfSZOShaA3Oc7J/PWfFPIn/fijokwDem3UF7uIHLAokH+FhJqqrv0r7tt8b7fWUrYXtmkzbQx+wSoOzsRndmsE4Dzboszx9rwfj/HYAl92e7KDhDE4AAAAASUVORK5CYII=">
            </a>
            <a class="navbar-brand" href="javascript:void(0)"> 后台管理 </a>

        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="?z=admin/user"><i class="icon-home icon-white"></i>用户管理</a></li>
                <li><a href="?z=admin/diaocha/"><i class="icon-th icon-white"></i>调查问卷</a></li>
                <!-- li class="active"><a href="?z=admin/zhishi"><i class="icon-lock icon-white"></i>知识问答</a></li -->
                <li  class="active"><a href="?z=admin/zhishi"><i class="icon-lock icon-white"></i>嘉宾提问</a></li>
                <li><a href="?z=admin/choujiang"><i class="icon-lock icon-white"></i>抽奖</a></li>
                <li><a href="?z=admin/yc/"><i class="icon-th icon-white"></i>远程数据</a></li>
                <li><a href="?z=admin/message/"><i class="icon-th icon-white"></i>消息</a></li>
                <li><a href="?z=admin/time/"><i class="icon-th icon-white"></i>时间</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container-fluid">

    <!-- CONTENT -->
    <div class="row">
        <div class="col-sm-12 col-lg-12">


            <h4><strong>知识问答</strong></h4>

            <a class="shambox" rel="?z=admin/zhishi/add">添加</a>


            <table class="display" id="dt1">
                <thead>
                <tr>
                    <th width="90">排序</th>
                    <th>嘉宾姓名</th>
                    <th>演讲题目</th>
                    <th>问题</th>
                    <th>选项A</th>
                    <th>选项B</th>
                    <th>选项C</th>
                    <th>选项D</th>
                    <th>答案</th>
                    <th width="120">操作</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sort'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['jiab'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['jiatitle'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['optionA'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['optionB'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['optionC'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['optionD'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['value']->value['da'];?>
</td>
                        <td>
                            <a class="shambox" rel="?z=admin/zhishi/edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">信息</a>
                            <!-- a class="shamboxl" rel="/admin/userzhishi?uid=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
">知识</a>
<a class="shamboxl" rel="/admin/userzhishi?uid=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
">调查</a>
<a class="shamboxl" rel="/admin/userjifen?uid=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
">积分</a -->
                            <a class="formact" relid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" tag="?z=admin/zhishi/delete" act="delete" confirm="确定?">删除</a>

                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
                </tbody>
            </table><!--/END SECOND TABLE -->

        </div><!--/span12 -->
    </div><!-- /row -->




</div> <!-- /container -->
<br>

<!-- Modal - ->
<a class="btnnew" data-toggle="modal" role="button" href="#myModal">Example Modal Window</a>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Modal title</h4>
    </div>
    <div class="modal-body">
      ...
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary">Save changes</button>
    </div>
  </div>
</div>
</div>

<!-- /.modal -->






<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <!-- FOOTER -->
            <div id="footerwrap">
                <footer class="clearfix"></footer>
                <hr>
                <p>@Sham Copyright &copy;2016</p>
                </footer>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /footerwrap -->




</body></html><?php }
}
