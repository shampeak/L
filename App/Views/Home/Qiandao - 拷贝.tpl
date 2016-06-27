<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>整点签到</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
</head>
<body>


	<div class="main bg-sign">
		<div class="clock-box">
			<img src="/static/images/img-clock.png">
		</div>
		<div class="btn-sign-box">
			<a href="javascript:void(0)" class="{if $avtive eq 1}btn-sign{else}btn-signdisable{/if}">签到</a>
			<div class="sign-score">+5</div>
		</div>
		<div class="sign-tips">
			<p>签到说明：10点、11点、13点、16点</p>
			<p>签到环节，每成功签到一次可获得5分奖励</p>
		</div>
	</div>

	{include file="footer.tpl" title=foo}



</body>
<script src="/static/js/jquery.js"></script>
<script>
    var fff =
   // $('.sign-score').fadeOut('slow');

    //返回上一页
	$(function(){
		$('.link-back').on('touchstart',function(){
			history.back();
		});

		//签到
		$('.btn-sign').on('touchstart',function(){
            if($('.sign-score').hasClass('shownow')){
                $('.sign-score').fadeIn('slow').delay(1000).fadeOut('slow');
            }else{
                $('.sign-score').addClass('shownow').delay(1000).fadeOut('slow');
            }
		});
	});
</script>
</html>