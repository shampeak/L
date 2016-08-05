<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<meta name="keywords" content="" />
		<meta name="description" content="进行中首页" />
		<meta http-equiv="X-UA-Compatible" content="IE=8">
		<meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0 , maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="/static/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="/static/css/media.css" />
		<style type="text/css">
			html,body{
				height: 100%;
			}
			.ban{
				height: 40%;
			}
			.con{
				height: 100%;
				box-sizing: border-box;
			}
			.con ul{
				height: 60%;
			}
		</style>
	</head>

	<body>
		<div class="top">
			首页
			<a href="javascript:history.go(-1);" class="back">
				返回
			</a>
		</div>
		<div class="con">
			<img src="../static/img/banner-ing.jpg" alt="" class="ban" />
			<ul class="clearfix">
				<li class="modal-item">
					<!--/?z=home/ziliao-->
					<a href="/?z=home/introduce" class="modal-link">
						<img src="assets2/img/m1.jpg" alt="" />
						<p>演讲嘉宾</p>
					</a>
				</li>
				<li class="modal-item">
					<a href="/?z=home/game" class="modal-link active">
						<img src="assets2/img/m2.jpg" alt="" />
						<p>游戏互动</p>
					</a>
				</li>
				<li class="modal-item">
					<a href="/?z=home/flow" class="modal-link active">
						<img src="assets2/img/m3.jpg" alt="" />
						<p>会议议程</p>
					</a>
				</li>
				<li class="modal-item">
					<a href="/?z=home/diaocha" class="modal-link">
						<img src="assets2/img/m4.jpg" alt="" />
						<p>问卷调查</p>
					</a>
				</li>
			</ul>
		</div>
		{include file="../footer.tpl" title=foo}
	</body>

</html>