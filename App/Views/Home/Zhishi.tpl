<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>知识问答</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
</head>
<body>


	<!-- 内容区 -->
	<div class="main main-question">
		<div class="main-title">
			<h2>说明：共10题，每答对一题可获得5分奖励。</h2>
		</div>
		<div class="question-box">
<form class="zhishi form-horizontal" action="?z=home/zhishi"  method="post">
			<ul>
            	{foreach from=$res item=value name=foo}
				<li>
					<p class="question">{$smarty.foreach.foo.index+1}、{$value['title']}</p>
					<div class="choose-item">
{if $value['optionA'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="A" {if $da['da'][$value['id']] eq 'A'}checked{/if}>
<label for="">{$value['optionA']}</label>
{/if}
{if $value['optionB'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="B" {if $da['da'][$value['id']] eq 'B'}checked{/if}>
<label for="">{$value['optionB']}</label>
{/if}
{if $value['optionC'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="C" {if $da['da'][$value['id']] eq 'C'}checked{/if}>
<label for="">{$value['optionC']}</label>
{/if}
{if $value['optionD'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="D" {if $da['da'][$value['id']] eq 'D'}checked{/if}>
<label for="">{$value['optionC']}</label>
{/if}

{if $active eq 0 && $value['da'] neq $da['da'][$value['id']]}
本题答案错误
{/if}

					</div>
				</li>
                {/foreach}
				
			</ul>
</form>			
            
            <div class="submit-box">
				<a active={$active} href="javascript:void(0)" class="{if $active eq 1}btn-submit{else}btn-disable{/if} shamsub">提交</a>
                 {if $active eq 0}
				<span>得分：<strong>{$da['fen']}分</strong></span>
                {/if}
			</div>
            
            {if $active eq 0}
			<div class="result-box clearfix">
				<p class="fl">正确答案：</p>
				<div class="fl">
                {foreach from=$res item=value name=foo}
					{$smarty.foreach.foo.index+1}、<strong>{$value['da']}</strong>
                 {/foreach}
				</div>
			</div>
            {/if}
            
            
		</div>

		<div class="page-box clearfix">
			<div class="page-prev fl"><b></b>上一页</div>
			<div class="page-next fr"><b></b>下一页</div>
		</div>
	<!-- -->

	</div>
	<!-- /内容区 -->

	{include file="footer.tpl" title=foo}


</body>
<script src="/static/js/jquery.js"></script>
<script>
	//返回上一页
	$(function(){
		$('.shamsub').on('click',function(){
//		$('.shamsub').on('touchstart',function(){
			if($('.shamsub').attr('active') == 1){
				var tag = '.zhishi';
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
			}
	
	
	
				//alert(1);
		});
	});
</script>
</html>