<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta content="telephone=no,email=no" name="format-detection">
		<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0 , maximum-scale=1">
		<title>资料完善</title>

		<link rel="stylesheet" href="/static/css/qa_style.css">
		<script src="/static/js/flexible.js"></script>
		<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/static/css/reset.css">
		<link rel="stylesheet" href="/assets/css/color.css">
		<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			input[type=radio] {
				width: 16px;
				height: 12px;
			}
			
			input[type=checkbox],
			input[type=radio] {
				margin: 11px 0 0;
			}
			
			input.form-control {
				padding: 6px 3px;
				border-radius: 3px !important;
				font-family: "微软雅黑";
			}
			
			a.btn-submit {
				width: 100%;
				height: 35px;
				line-height: 35px;
				margin-left: 0;
				font-family: "微软雅黑";
				font-size: 15px;
			}
			
			table td,
			th {
				vertical-align: middle !important;
				font-family: "微软雅黑";
			}
			
			center {
				font-family: "微软雅黑";
			}
			
			.main-user h2 {
				font-family: "微软雅黑";
			}
			
			.p-0 {
				padding: 0 !important;
			}
			
			.ziliao {
				position: absolute;
				top: 50%;
				left: 0;
				right: 0;
				margin-top: -164px;
				padding: 0 42px;
			}
			
			.pos-r {
				position: relative !important;
			}
			
			.main-user .ziliao-bg {
				width: 100%;
			}
			
			.item {
				width: 100px;
				height: 100px;
				border-radius: 50%;
				/*border: 1px solid #fff;*/
				position: relative;
				overflow: hidden;
			}
			
			.item img {
				width: 100%;
				background-position: center center;
			}
			.form-table .form-item{
				background: #fff;
			}
			.form-item{
				margin-bottom: 10px;
				border-radius: 3px;
				height: 35px;
				line-height: 35px;
			}
			.form-item .w-form{
				width: 160px !important;
				display: inline-block !important;
				vertical-align: top;
			}
			.form-item input{
				border: none !important;
			}
			.item-span{
				padding: 0 5px;
				font-size: 13px;
				color: #777;
				font-family: "微软雅黑";
			}
			.btn-box{
				margin: 30px auto 0 !important;
			}
		</style>
	</head>

	<body>

		<!-- 内容区 -->
		<div class="main-user p-0 pos-r">
			<img src="/static/images/ziliao-bg.jpg" class="ziliao-bg" />
			<form action="?z=home/ziliao" class="ziliao" method="post">
				<div class="portrait-box">
					<center>
						<label for="file-img" class="img-box" {if $userinfo[ 'headimg'] neq ''}style="display:none" {/if}><span>上传头像</span></label>

						<input type="file" name="file" capture="camera" id="file-img" />
						<ul id="report">
							{if $userinfo['headimg'] neq ''}
							<li class="item">
								<img src="{$userinfo['headimg']}">
							</li>{/if}
						</ul>
						<center>点击头像进行修改</center><br>
				</div>
				<div class="form-table">
					<div class="form-item">
						<span class="item-span">姓　名：</span>
						<input type="text" name="name" class="form-control w-form" value="{$userinfo['name']}">
					</div>
					<div class="form-item clearfix">
						<span style="float:left" class="item-span">姓　别：</span>
						<input style="float:left" class="form-control" name="gender" type="radio" id="male" value="1" {if $userinfo[ 'gender'] eq 1}checked{/if}><span style="float: left;">&nbsp; &nbsp; 男&nbsp; &nbsp; &nbsp; </span>
					    <input style="float:left" class="form-control" type="radio" name="gender" id="female" value="0" {if $userinfo[ 'gender'] neq 1}checked{/if}><span style="float: left;" for="female">&nbsp; &nbsp; 女</span>
					</div>
					<div class="form-item">
						<span class="item-span">公　司：</span>
						<input class="form-control w-form" type="text" name="company" value="{$userinfo['company']}">
					</div>
					<div class="form-item">
						<span class="item-span">职　位：</span>
						<input class="form-control w-form" type="text" name="title" value="{$userinfo['title']}">
					</div>
					<div class="form-item">
						<span class="item-span">微信号：</span>
						<input class="form-control w-form" type="text" name="weixin" value="{$userinfo['weixin']}">
					</div>
				</div>
				<div class="btn-box">
					<a href="javascript:void(0)" class="btn-submit shamsub">提交</a>
				</div>
			</form>

		</div>
		<!-- /内容区 -->
		<br><br><br><br> {include file="../footer3.tpl" title=foo}

	</body>
	<script src="/static/js/libs/mobileFix.mini.js"></script>
	<script src="/static/js/libs/exif.js"></script>
	<script src="/static/js/libs/lrz.js"></script>
	<script src="/static/js/libs/index.js"></script>
	<script src="/static/js/jquery.js"></script>
	<script>
		//返回上一页
		$(function() {

			//表单验证函数
			function checkForm() {
				var _male = $('#male').prop('checked');
				var _female = $('#female').prop('checked');
				var _name = $('.name').val();
				var _company = $('.company').val();
				var _career = $('.career').val();
				var _wechart = $('.wechart').val();

				if(_male == false && _female == false) {
					alert('请选择您的性别');
					return false;
				}
				if(_name == '') {
					$('.name').focus();
					alert('请填写您的姓名');
					return false;
				}
				if(_company == '') {
					$('.company').focus();
					alert('请填写您的公司');
					return false;
				}
				if(_career == '') {
					$('.career').focus();
					alert('请填写您的职位');
					return false;
				}
				if(_wechart == '') {
					$('.wechart').focus();
					alert('请填写您的微信号');
					return false;
				}
				return true;

			}

			//表单提交
			//		$('.btn-submit').on('touchstart',function(){
			$('.btn-submit').on('click', function() {
				var flag = checkForm();
				if(flag) {

					var tag = '.ziliao';
					$.ajax({
						type: "POST",
						url: $(tag).attr("action"),
						data: $(tag).serialize(),
						dataType: 'json',
						success: function(data) {
							var JS = data.js;
							eval(JS);
						},
						error: function() {
							alert("异常！");
						}
					});
				}
			});
		});
	</script>

</html>