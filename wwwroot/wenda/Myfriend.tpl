<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>我的好友</title>
	<link rel="stylesheet" href="static/css/reset.css">
	<link rel="stylesheet" href="static/css/qa_style.css">
	<script src="static/js/flexible.js"></script>
</head>
<body style="background:#fbfbfb;">
	<!-- 头部 -->
	<div class="header">
		<div class="link-back"><b></b>返回</div>
		<div class="title">我的好友</div>
		<div class="link-share clearfix"><i></i><i></i><i></i></div>
	</div>
	<!-- /头部 -->
	<!-- 内容区 -->
	<div class="main main-friend">
		<div class="input-box clearfix">
			<input type="text" name="" id="" placeholder="输入好友姓名">
			<button type="button">提交</button>
		</div>
		<div class="myfriend-list">
			<ul class="cleafix">
				<li>
					<a href="#">
						<img src="static/pic/img-other.jpg">
						<span>30分</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="static/pic/img-other.jpg">
						<span>50分</span>
					</a>
				</li>
			</ul>
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
<script src="static/js/jquery.js"></script>
<script>
	//返回上一页
	$(function(){
		$('.link-back').on('touchstart',function(){
			history.back();
		});
	});
</script>
</html>