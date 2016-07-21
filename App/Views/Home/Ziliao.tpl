<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>资料完善</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
</head>
<body style="background:#fbfbfb">
                


	<!-- 内容区 -->
	<div class="main main-user">
		<form action="?z=home/ziliao" class="ziliao" method="post">
			<center><h2>完善个人资料，可获得20分奖励</h2></center>
		<div class="portrait-box">
			<label for="file-img" class="img-box" {if $userinfo['headimg'] neq ''}style="display:none"{/if}><span>上传头像</span></label>
            
            <input type="file" name="file" capture="camera" id="file-img" />
			<ul id="report">
                 {if $userinfo['headimg'] neq ''}<li class="item">
                <img src="{$userinfo['headimg']}">
                </li>{/if}
			</ul>
			<center><span style="font-size: 14px;">点击头像进行修改</span></center>
		</div>
			<div class="user-form-box">
				<div class="sex">
					<h2>性别：
					<input name="gender" type="radio" id="male" value="1" {if $userinfo['gender'] eq 1}checked{/if}><label for="male">男</label>
				  <input type="radio" name="gender" id="female" value="0" {if $userinfo['gender'] eq 0}checked{/if}><label for="female">女</label></h2>
			  </div>
				<div class="form-list">
					<ul>
						<li>姓名<input type="text" name="name" class="name" value="{$userinfo['name']}"></li>
						<li>公司<input type="text" name="company" class="company" value="{$userinfo['company']}"></li>
						<li>职位<input type="text" name="title" class="career" value="{$userinfo['title']}"></li>
						<li>微信号<input type="text" name="weixin" class="wechart" value="{$userinfo['weixin']}"></li>
					</ul>
				</div>
				<p class="tips">每一项必须全部填写完整</p> 
			</div>
		</form>
		<div class="btn-box">
        <a href="javascript:void(0)" class="btn-submit shamsub">提交</a>
		</div>
	</div>
	<!-- /内容区 -->

	<br>
	<br><br>
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