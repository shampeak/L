<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>积分互赠</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
	<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/color.css">
	<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:#fefbed;">
<form action="?z=home/fensend/" class="zengsong" method="post">

	<!-- 内容区 -->
	<div class="main main-interact">
		<div class="gift-img-box">
			<img src="/static/pic/img-gift.png">
		</div>
		<div class="gift-score-box">
			<h2>将积分赠送给好友，助他获得大礼</h2>
			<input type="text" name="friendname" class="friendname" placeholder="填写姓名">
			<div class="score-send">
				<div class="score-num">5分</div>
				<a href="javascript:void(0)" class="shamsub">添加</a>
			</div>
			<p class="tips">每次只能送给一个人5分，一个人最多接受或赠送10次。</p>
		</div>	
	</div>
	<!-- /内容区 -->
</form>
<br>
<br>
	{include file="footer.tpl" title=foo}

</body>
<script src="/static/js/jquery.js"></script>
<script>
	//返回上一页
	$(function(){
		$('.shamsub').on('click',function(){
				var tag = '.zengsong'
				$.ajax({
					type: "POST",
					url: $(tag).attr("action"),
					data: $(tag).serialize(),
					dataType:'json',
					success: function(data){
						var JS = data.js;
						eval(JS);
						},
					error : function() {
						   alert("异常！");
					  }
				});		
		});
	});
</script>
</html>