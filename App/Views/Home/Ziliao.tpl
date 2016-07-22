<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>资料完善</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
	<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/color.css">
	<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

</head>
<body>
                


	<!-- 内容区 -->
	<div class="main main-user" style="background:#ffffff">
		<form action="?z=home/ziliao" class="ziliao" method="post">
		
		<div class="portrait-box">
        <center><h2>完善个人资料，可获得20分奖励</h2></center>
			<label for="file-img" class="img-box" {if $userinfo['headimg'] neq ''}style="display:none"{/if}><span>上传头像</span></label>
            
            <input type="file" name="file" capture="camera" id="file-img" />
			<ul id="report">
                 {if $userinfo['headimg'] neq ''}<li class="item">
                <img src="{$userinfo['headimg']}">
                </li>{/if}
			</ul>
            <center>点击头像进行修改</center><br>
		</div>

			<table class="table">
				<tr>
					<td width="80">姓　名：</td>
					<td>
						<input type="text" name="name" class="form-control" value="{$userinfo['name']}">
					</td>
				</tr>
				<tr>
					<td height="46">姓　别：</td>
					<td>
							<input style="float:left" class="form-control" name="gender" type="radio" id="male" value="1" {if $userinfo['gender'] eq 1}checked{/if}><span style="float: left;">&nbsp; &nbsp; 男&nbsp; &nbsp; &nbsp; </span>
							<input style="float:left" class="form-control" type="radio" name="gender" id="female" value="0" {if $userinfo['gender'] neq 1}checked{/if}><span style="float: left;" for="female">&nbsp; &nbsp; 女</span>
					</td>
				</tr>
				<tr>
					<td>公　司：</td>
					<td><input class="form-control" type="text" name="company" value="{$userinfo['company']}"></td>
				</tr>
				<tr>
					<td>职　位：</td>
					<td><input class="form-control" type="text" name="title" value="{$userinfo['title']}"></td>
				</tr>
				<tr>
					<td>微信号：</td>
					<td><input class="form-control" type="text" name="weixin"  value="{$userinfo['weixin']}"></td>
				</tr>


			</table>



			<div class="user-form-box" style="background: white;">
				<p class="tips">每一项必须全部填写完整</p>
			</div>
		</form>
		<div class="btn-box">
        <a href="javascript:void(0)" class="btn-submit shamsub">提交</a>
		</div>
<br><br><br><br><br>
	</div>
	<!-- /内容区 -->
<br><br><br><br>

	
	{include file="footer3.tpl" title=foo}


</body>
<script src="/static/js/libs/mobileFix.mini.js"></script>
<script src="/static/js/libs/exif.js"></script>
<script src="/static/js/libs/lrz.js"></script>
<script src="/static/js/libs/index.js"></script>
<script src="/static/js/jquery.js"></script>
<script>
	//返回上一页
	$(function(){


		//表单验证函数
		function checkForm(){
			var _male =$('#male').prop('checked');
			var _female = $('#female').prop('checked');
			var _name = $('.name').val();
			var _company = $('.company').val();
			var _career = $('.career').val();
			var _wechart = $('.wechart').val();


			if(_male == false && _female == false){
				alert('请选择您的性别');
				return false;
			}
			if(_name ==''){
				$('.name').focus();
				alert('请填写您的姓名');
				return false;
			}
			if(_company ==''){
				$('.company').focus();
				alert('请填写您的公司');
				return false;
			}
			if(_career ==''){
				$('.career').focus();
				alert('请填写您的职位');
				return false;
			}
			if(_wechart ==''){
				$('.wechart').focus();
				alert('请填写您的微信号');
				return false;
			}
			return true;

		}


		//表单提交
//		$('.btn-submit').on('touchstart',function(){
		$('.btn-submit').on('click',function(){
			var flag = checkForm();
			if(flag){


				var tag = '.ziliao';
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
			}
		});
	});
</script>
</html>