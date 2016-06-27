<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>积分排行</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
</head>
<body style="background:#fefbed;">

	<!-- 内容区 -->
	<div class="main main-rank">
		<div class="top-box">
			<div class="top-item top1">
				<img src="/static/pic/img-other.jpg">
				<span>80分</span>
			</div>
			<div class="top-item top2">
				<img src="/static/pic/img-other.jpg">
				<span>50分</span>
			</div>
			<div class="top-item top3">
				<img src="/static/pic/img-other.jpg">
				<span>30分</span>
			</div>
		</div>
		<div class="my-score-info">
			<dl class="clearfix">
				<dt class="fl"><img src="/static/pic/img-user.jpg"></dt>
				<dd class="score-info fr">刘晶晶,您目前排名在200开外……</dd>
				<dd class="score-tip fr"><i>加油吧！</i></dd>
			</dl>
		</div>
	</div>
	<!-- /内容区 -->
	{include file="footer.tpl" title=foo}
</body>
<script src="/static/js/jquery.js"></script>
<script>
	//返回上一页
	$(function(){
		$('.link-back').on('touchstart',function(){
			history.back();
		});
	});
</script>
</html>