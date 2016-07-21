<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>首页</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
	<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/color.css">
	<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

</head>
<body>

	<!-- 内容区 -->
	<div class="main bg-index">
		<div class="banner-box"><img src="/static/images/jifen.png"></div>
		<div class="nav-container">
			<ul class="clearfix">
				<!--li><a href="?z=home/qiandao" class="nav-sign"><span>整点签到</span></a></ li-->
				<li><a href="?z=home/zhuanjia" class="nav-question"><span>专家介绍</span></a></li>
                <li><a href="?z=home/huodonglist" class="nav-sign"><span>游戏互动</span></a></li>				
                <li><a href="?z=home/xianchang" class="nav-user"><span>现场指导</span></a></li>
				<li><a href="?z=home/diaocha" class="nav-survey"><span>问卷调查</span></a></li>
			</ul>
		</div>
	</div>
	<!-- /内容区 -->
	<br>
	<br>

	{include file="footer.tpl" title=foo}
    
</body>

</html>