<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>整点签到</title>
	<link rel="stylesheet" href="static/css/reset.css">
	<link rel="stylesheet" href="static/css/qa_style.css">
	<script src="static/js/flexible.js"></script>
</head>
<body>
	<!-- 头部 -->
	<div class="header">
		<div class="link-back"><b></b>返回</div>
		<div class="title">整点签到</div>
		<div class="link-share clearfix"><i></i><i></i><i></i></div>
	</div>
	<!-- /头部 -->
	<div class="main bg-sign">
		<div class="clock-box">
			<img src="static/images/img-clock.png">
		</div>
		<div class="btn-sign-box">
			<a href="#" class="btn-sign">签到</a>
			<div class="sign-score">+5</div>
		</div>
		<div class="sign-tips">
			<p>签到说明：10点、11点、13点、16点</p>
			<p>签到环节，每成功签到一次可获得5分奖励</p>
		</div>
	</div>
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

		//签到
		$('.btn-sign').on('touchstart',function(){
			if($(this).hasClass('has')){

			}else{
				$('.sign-score').addClass('shownow');
				// $('.sign-score').css({
				// 	'transform':'translateY(-30%)',
				// 	'opacity':'1'
				// })
			}
		});
	});
</script>
</html>