<?php
/* Smarty version 3.1.29, created on 2016-06-23 19:07:15
  from "E:\phpleague\Grace\L\App\Views\Home\Login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576bc2e36baa36_90848866',
  'file_dependency' => 
  array (
    'af3f3b31a3f51b0c1480393c5fd1ea178e25cbc5' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Login.tpl',
      1 => 1466680030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576bc2e36baa36_90848866 ($_smarty_tpl) {
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
    <form class="form-signin">
		    <table width="100%">
                <tr>
                  <td><h2 class="form-signin-heading">请登录</h2></td>
                </tr>
                <tr>
                  <td><label for="inputEmail" class="sr-only">手机号</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="请输入手机号" required autofocus></td>
                </tr>
                <tr>
                  <td><label for="inputPassword" class="sr-only">密码</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="请输入密码" required></td>
                </tr>
                <tr>
                  <td><div class="checkbox" style="padding-left:40px">
                <input type="checkbox" value="remember-me">记住用户名
            </div></td>
                </tr>
                <tr>
                  <td><button class="btn btn-lg btn-primary btn-block" type="submit">登录</button></td>
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


  </body>
</html>
<?php }
}