<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>积分互赠</title>
	<link rel="stylesheet" href="static/css/reset.css">
	<link rel="stylesheet" href="static/css/qa_style.css">
	<script src="static/js/flexible.js"></script>
</head>
<body style="background:#fefbed;">
	<!-- 头部 -->
	<div class="header">
		<div class="link-back"><b></b>返回</div>
		<div class="title">积分互赠</div>
		<div class="link-share clearfix"><i></i><i></i><i></i></div>
	</div>
	<!-- /头部 -->
	<!-- 内容区 -->
	<div class="main main-interact">
		<div class="gift-img-box">
			<img src="static/pic/img-gift.png">
		</div>
		<div class="gift-score-box">
			<h2>将积分赠送给好友，助他获得大礼</h2>
			<input type="text" class="friendname" placeholder="填写姓名">
			<div class="score-send">
				<div class="score-num">5分</div>
				<a href="#">添加</a>
			</div>
			<p class="tips">每次只能送给一个人5分，一个人最多接受或赠送10次。</p>
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