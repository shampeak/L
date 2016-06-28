<?php
/* Smarty version 3.1.29, created on 2016-06-28 10:48:58
  from "E:\phpleague\Grace\L\App\Views\Login\Admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5771e59a4e34e6_76974724',
  'file_dependency' => 
  array (
    'd3a0b25dd3ce167a80d13c70a0410bb1ffbd98db' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Login\\Admin.tpl',
      1 => 1467082122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5771e59a4e34e6_76974724 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>登录</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>


<style>
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
  </head>

  <body>

<div class="container">
    <div class="row">
    <form class="form-signin ulogin"  action="?z=login/admin" method="post">
		    <table width="100%">
                <tr>
                  <td><h2 class="form-signin-heading">请登录</h2></td>
                </tr>
                
                <tr>
                  <td><label for="inputPassword" class="sr-only">密码</label>
            <input name='password' type="password" id="inputPassword" class="form-control" placeholder="请输入密码" required></td>
                </tr>
              
                <tr>
                  <td><a class=" combit btn btn-lg btn-primary btn-block">登录</a>
                  
                  </td>
                </tr>
            </table>
            
            
            
            
            
            
    
    </form>
    </div>
    
    <div class="row">
    <br>
    <br>
    <br>
    
    </div>


      <footer>
      <p class="text-right">@sham &copy;2016 注册 | 忘记密码</p>
      </footer>

</div> <!-- /container -->

 <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">
        $(document).ready(function () {
     

		$('.combit').click(function(){
			var tag = '.ulogin';
$(tag).submit();			
					});

        });
    <?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
