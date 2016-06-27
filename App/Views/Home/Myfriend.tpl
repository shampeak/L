<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>我的好友</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
</head>
<body style="background:#fbfbfb;">

<form action="/home/myfriend/add" class="haoyou" method="post">
	<!-- 内容区 -->
	<div class="main main-friend">
		<div class="input-box clearfix">
			<input type="text" name="haoyou" placeholder="输入好友姓名">
			<button type="button" class="shamsub">提交</button>
		</div>
		<div class="myfriend-list">
			<ul class="cleafix">
				{foreach from=$friends item=value name=foo}
                <li>
					<a href="/home/myfriend/add/?fid={$value['uid']}">
						<img src="{$value['headimg']}">
						<span>{$value['fen']}分</span>
					</a>
				</li>
                {/foreach}
				
			</ul>
		</div>
	</div>
	<!-- /内容区 -->
</form>
	{include file="footer.tpl" title=foo}


</body>
<script src="/static/js/jquery.js"></script>
<script>


	//返回上一页
	$(function(){


		//表单提交
//		$('.btn-submit').on('touchstart',function(){
		$('.shamsub').on('click',function(){
				$('.haoyou').submit();
				
		});
		/*
$.ajax({
					type: "GET",
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
		*/
	});
</script>

</html>