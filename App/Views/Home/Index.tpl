<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>首页</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
</head>
<body>
	<!-- 内容区 -->
	<div class="main bg-index">
		<div class="banner-box"><img src="/static/pic/img-banner.png"></div>
		<div class="nav-container">
			<ul class="clearfix">
				<li><a href="/home/qiandao" class="nav-sign"><span>整点签到</span></a></li>
				<li><a href="/home/zhishi" class="nav-question"><span>知识问答</span></a></li>
				<li><a href="/home/diaocha" class="nav-survey"><span>问卷调查</span></a></li>
				<li><a href="/home/ziliao" class="nav-user"><span>资料完善</span></a></li>
			</ul>
		</div>
	</div>
	<!-- /内容区 -->

	{include file="footer.tpl" title=foo}
    
</body>

</html>