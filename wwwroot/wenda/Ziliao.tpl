<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>资料完善</title>
	<link rel="stylesheet" href="static/css/reset.css">
	<link rel="stylesheet" href="static/css/qa_style.css">
	<script src="static/js/flexible.js"></script>
</head>
<body style="background:#fbfbfb">
	<!-- 头部 -->
	<div class="header">
		<div class="link-back"><b></b>返回</div>
		<div class="title">资料完善</div>
		<div class="link-share clearfix"><i></i><i></i><i></i></div>
	</div>
	<!-- /头部 -->
	<!-- 内容区 -->
	<div class="main main-user">
		<h2>完善个人资料，可获得10分奖励</h2>
		<div class="portrait-box">
			<input type="file" capture="camera" id="file-img" />
			<label for="file-img" class="img-box"><span>上传头像</span></label>
			<ul id="report"></ul>
		</div>
		<form action="" id="userforom">
			<div class="user-form-box">
				<div class="sex">
					性别：
					<input type="radio" name="sex" id="male"><label for="male">男</label>
					<input type="radio" name="sex" id="female"><label for="female">女</label>
				</div>
				<div class="form-list">
					<ul>
						<li>姓名<input type="text" class="name"></li>
						<li>公司<input type="text" class="company"></li>
						<li>职位<input type="text" class="career"></li>
						<li>微信号<input type="text" class="wechart"></li>
					</ul>
				</div>
				<p class="tips">每一项必须全部填写完整</p>
			</div>
		</form>
		<div class="btn-box">
			<a href="#" class="btn-submit">提交</a>
		</div>
	</div>
	<!-- /内容区 -->
	<!-- 底部 -->
	<div class="footer">
		<ul class="clearfix">
			<li><a href="myscore.html"><span>我的积分</span></a></li>
			<li><a href="myfriend.html"><span>我的好友</span></a></li>
			<li><a href="interact.html"><span>积分互赠</span></a></li>
			<li><a href="score_rank.html"><span>积分排行</span></a></li>
		</ul>
	</div>
	<!-- /底部 -->
</body>
<script src="static/js/libs/mobileFix.mini.js"></script>
<script src="static/js/libs/exif.js"></script>
<script src="static/js/libs/lrz.js"></script>
<script src="static/js/libs/index.js"></script>
<script src="static/js/jquery.js"></script>
<script>
	//返回上一页
	$(function(){
		$('.link-back').on('click',function(){
			history.back();
		});

		//表单验证函数
		function checkForm(){
			var _male =$('#male').prop('checked');
			var _female = $('#female').prop('checked');
			var _name = $('.name').val();
			var _company = $('.company').val();
			var _career = $('.career').val();
			var _wechart = $('.wechart').val();

			if($('input[type=file]').val() == ''){
				alert('请上传您的头像');
				return false;
			}

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
		$('.btn-submit').on('touchstart',function(){
			var flag = checkForm();
			if(flag){
				var _data = $('#userforom').serialize();
				$.ajax({
					type:'post',
					data:_data,
					url:'',
					dataType:'json',
					success:function(result){

					}
				});
			}
		});
	});
</script>
</html>