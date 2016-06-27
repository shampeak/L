<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>我的积分</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
</head>
<body style="background:#fbfbfb;">


	<!-- 内容区 -->
	<div class="main main-myscore">
		<h2>恭喜您，您目前已获得</h2>
		<div class="score-box">
			<h3>{$fen}&nbsp;积分</h3>
			<div class="score-detail">
				<span>基础分{$jichu}分</span>
				<span>完善资料{$ziliao}分</span>
				<span>问卷调查{$diaocha}分</span>
				<span>知识问答{$zhishi}分</span>
				<span>签到{$qiandao}分</span>
				<span>收到{$receive}分</span>
				<span>送出{$send}分</span>
			</div>
		</div>
		<div class="score-list clearfix">
			<div class="list-item fl">
				<h5>我获得的积分</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
                {foreach from=$senddetail item=value name=foo}
                    <tr>
						<th>{$value|date_format:'%m-%d %H:%M'}</th>
						<td>+5分</td>
					</tr>
                {/foreach}
                    
				</table>
			</div>
			<div class="list-item fr">
				<h5>我送出的积分</h5>
				<table width="100%" border="0" cellpadding="0" cellspacing="0">
                {foreach from=$receivedetail item=value name=foo}
                    <tr>
						<th>{$value|date_format:'%m-%d %H:%M'}</th>
						<td>+5分</td>
					</tr>
                {/foreach}

				</table>
			</div>
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