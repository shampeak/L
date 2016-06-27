<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>知识问答</title>
	<link rel="stylesheet" href="static/css/reset.css">
	<link rel="stylesheet" href="static/css/qa_style.css">
	<script src="static/js/flexible.js"></script>
</head>
<body>
	<!-- 头部 -->
	<div class="header">
		<div class="link-back"><b></b>返回</div>
		<div class="title">知识问答</div>
		<div class="link-share clearfix"><i></i><i></i><i></i></div>
	</div>
	<!-- /头部 -->
	<!-- 内容区 -->
	<div class="main main-question">
		<div class="main-title">
			<h2>说明：共10题，每答对一题可获得5分奖励。</h2>
		</div>
		<div class="question-box">
			<ul>
				<li>
					<p class="question">1、中华人民共和国科学技术普及法合适可爱是实施的？</p>
					<div class="choose-item">
						<input type="radio" name="choose" value="1">
						<label for="">2002年6月26日</label>
						<input type="radio" name="choose" value="2">
						<label for="">2002年6月26日</label>
						<input type="radio" name="choose" value="3">
						<label for="">2002年6月26日</label>
					</div>
				</li>
				<li>
					<p class="question">2、何时美国英格伯格和德沃尔制造出世界上第一台工业机器人，机器人的历史才真正开始?</p>
					<div class="choose-item">
						<input type="radio" name="choose1" value="1">
						<label for="">1946年</label>
						<input type="radio" name="choose1" value="2">
						<label for="">1950年</label>
						<input type="radio" name="choose1" value="3">
						<label for="">1959年</label>
					</div>
				</li>
				<li>
					<p class="question">3、奥运五环旗中的绿色环
					代表哪里?</p>
					<div class="choose-item">
						<input type="radio" name="choose2" value="1">
						<label for="">美洲</label>
						<input type="radio" name="choose2" value="2">
						<label for="">欧洲</label>
						<input type="radio" name="choose2" value="3">
						<label for="">澳洲</label>
						<input type="radio" name="choose2" value="3">
						<label for="">亚洲</label>
					</div>
				</li>
				<li>
					<p class="question">4、根据党的十六大及十六届三中、四中、五中全会精神，依照和</p>
					<div class="choose-item">
						<input type="radio" name="choose3" value="1">
						<label for="">中华人民共和国宪法</label>
						<input type="radio" name="choose3" value="2">
						<label for="">中华人民共和国科学技术普及法</label>
						<input type="radio" name="choose3" value="3">
						<label for="">中华人民共和国民法</label>
						<input type="radio" name="choose3" value="3">
						<label for="">中华人民共和国专利法</label>
					</div>
				</li>
				<li>
					<p class="question">5、太阳光是由三部分组成，下面哪种不是太阳光的组成之一?</p>
					<div class="choose-item">
						<input type="radio" name="choose4" value="1">
						<label for="">可见光</label>
						<input type="radio" name="choose4" value="2">
						<label for="">紫外线</label>
						<input type="radio" name="choose4" value="3">
						<label for="">不可见光</label>
						<input type="radio" name="choose4" value="3">
						<label for="">红外线</label>
					</div>
				</li>
			</ul>
			<div class="submit-box">
				<a href="#" class="btn-submit">提交</a>
				<span>得分：<strong>10分</strong></span>
			</div>
			<div class="result-box clearfix">
				<p class="fl">正确答案：</p>
				<div class="fl">
					1、<strong>B</strong>
					2、<strong>C</strong>
					3、<strong>C</strong>
					4、<strong>A</strong>
					5、<strong>B</strong>
					6、<strong>D</strong>
					7、<strong>C</strong>
					8、<strong>D</strong>
					9、<strong>B</strong>
					10、<strong>A</strong>
				</div>
			</div>
		</div>
		<div class="page-box clearfix">
			<div class="page-prev fl"><b></b>上一页</div>
			<div class="page-next fr"><b></b>下一页</div>
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