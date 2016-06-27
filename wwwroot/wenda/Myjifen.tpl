<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>我的积分</title>
	<link rel="stylesheet" href="static/css/reset.css">
	<link rel="stylesheet" href="static/css/qa_style.css">
	<script src="static/js/flexible.js"></script>
</head>
<body style="background:#fbfbfb;">
	<!-- 头部 -->
	<div class="header">
		<div class="link-back"><b></b>返回</div>
		<div class="title">我的积分</div>
		<div class="link-share clearfix"><i></i><i></i><i></i></div>
	</div>
	<!-- /头部 -->
	<!-- 内容区 -->
	<div class="main main-myscore">
		<h2>恭喜您，您目前已获得</h2>
		<div class="score-box">
			<h3>50&nbsp;积分</h3>
			<div class="score-detail">
				<span>基础分10分</span>
				<span>完善资料10分</span>
			</div>
		</div>
		<div class="score-list clearfix">
			<div class="list-item fl">
				<h5>我获得的积分</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<th>8:40</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>10:21</th>
						<td>+1分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
				</table>
			</div>
			<div class="list-item fr">
				<h5>我送出的积分</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<th>8:40</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>10:21</th>
						<td>+1分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
					<tr>
						<th>12:52</th>
						<td>+5分</td>
					</tr>
				</table>
			</div>
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