<?php
/* Smarty version 3.1.29, created on 2016-08-02 16:01:14
  from "E:\phpleague\Grace\L\App\Views\Home\Login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57a0534a586a09_22145049',
  'file_dependency' => 
  array (
    'af3f3b31a3f51b0c1480393c5fd1ea178e25cbc5' => 
    array (
      0 => 'E:\\phpleague\\Grace\\L\\App\\Views\\Home\\Login.tpl',
      1 => 1470124856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57a0534a586a09_22145049 ($_smarty_tpl) {
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
<?php echo '<script'; ?>
 type="text/javascript"> 
  /*
	
	*/
<?php echo '</script'; ?>
> 
  <body>

<div class="container">
    <div class="row">
    <form class="form-signin vu ulogin" method="post"  action="/?z=home/login">
		    <table width="100%">
                <tr>
                  <td colspan="2"><h2 class="form-signin-heading">请登录</h2></td>
                </tr>
                <tr>
                    <td colspan="2"><label for="inputEmail" class="sr-only">手机号</label>
                        <input name="login" type="text" id="inputEmail" class="loginmobile form-control" placeholder="请输入手机号" required autofocus></td>
                 
                </tr>

                <tr>
                  <td><label for="inputPassword" class="sr-only">密码</label>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="请输入密码" required></td>
                  <td><input  type="button" class="btn btn-primary getpassword" value="获取密码"></td>
                </tr>
                <tr>
                  <td colspan="2"><div class="checkbox" style="padding-left:40px">
                <input type="checkbox" value="remember-me">记住用户名
            </div></td>
                </tr>
                <tr>
                  <td colspan="2"><a class=" combit btn btn-lg btn-primary btn-block">登录</a></td>
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
      <p class="text-right">@sham &copy;2016</p>
      </footer>

</div> <!-- /container -->

<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8">

function validatemobile(mobile)
    {
        if(mobile.length==0)
        {
           alert('请输入手机号码！');
           //document.form1.mobile.focus();
           return false;
        }    
        if(mobile.length!=11)
        {
            alert('请输入有效的手机号码！');
            //document.form1.mobile.focus();
            return false;
        }
		return true;
    }
	var countdown=60; 
	function settime() { 
		if (countdown == 0) { 
			$('.getpassword').removeAttr("disabled");    
			$('.getpassword').val("免费获取验证码"); 
			countdown = 60;
			return false;
			//exit;
		} else { 
			$('.getpassword').attr("disabled","true");
			$('.getpassword').val("重新发送(" + countdown + ")"); 
			countdown--; 
		} 
		console.log(countdown);
		setTimeout(function() { 
								settime() 
							},1000) 
	} 

	$(document).ready(function () {
		$('.getpassword').click(function(){
			if(!validatemobile($('.loginmobile').val())){
				return false;
			};
			
			var tag = '.vu';
			$.ajax({
				type: "POST",
				url: '/?z=home/login/mima',
				data: $(tag).serialize(),
				dataType:'json',
				success: function(data){
					if(data.code > 0){
						settime();
					}else{
						if(data.code == -300){
							return false;
						}else{
							alert(data.msg);
							}
					}
					},
				error : function() {
					   alert("异常！");
				  }
			});
		});
		
		$('.combit').click(function(){
			var tag = '.ulogin';
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

        });
    <?php echo '</script'; ?>
>

  </body>
</html>
<?php }
}
