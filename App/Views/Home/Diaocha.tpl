<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="yes" name="apple-touch-fullscreen">
	<meta content="telephone=no,email=no" name="format-detection">
	<title>问卷调查</title>
	<link rel="stylesheet" href="/static/css/reset.css">
	<link rel="stylesheet" href="/static/css/qa_style.css">
	<script src="/static/js/flexible.js"></script>
<style>
.clearfix{
	margin-bottom: 0px;
}
</style>
	<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/color.css">
	<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    
</head>
<body>

	<!-- 内容区 -->
	<div class="main main-question">
		<!-- center><h1>调查问卷</h1></center -->
		<h3>说明：完成全部调查问卷的填写可以积30分奖励</h3>
		<div class="question-box">
        <form class="diaocha form-horizontal" action="?z=home/diaocha"  method="post">

			<ul>

                {foreach from=$res item=value name=foo}
				<li>
					<h4>{$smarty.foreach.foo.index+1}、{$value['title']}</h4>
					<div class="choose-item">
{if $value['optionA'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="A" {if $da['da'][$value['id']] eq 'A'}checked{/if}>
<label for="">{$value['optionA']}</label>
{/if}<br>
{if $value['optionB'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="B" {if $da['da'][$value['id']] eq 'B'}checked{/if}>
<label for="">{$value['optionB']}</label>
{/if}<br>
{if $value['optionC'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="C" {if $da['da'][$value['id']] eq 'C'}checked{/if}>
<label for="">{$value['optionC']}</label>
{/if}<br>
{if $value['optionD'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="D" {if $da['da'][$value['id']] eq 'D'}checked{/if}>
<label for="">{$value['optionD']}</label>
{/if}<br>
{if $value['optionE'] neq ''}
<input type="radio" name="choose[{$value['id']}]" value="E" {if $da['da'][$value['id']] eq 'E'}checked{/if}>
<label for="">{$value['optionE']}</label>
{/if}
					</div>
				</li>
                {/foreach}
                
                
			</ul>
			<div class="submit-box">
				<a active={$active} href="javascript:void(0)" class="{if $active eq 1}btn-submit{else}btn-disable{/if} shamsub">提交</a>
				{if $active eq 0}
                <span>您已经填写完成,得分：<strong>30分</strong></span>
                {/if}
			</div>
            </form>
		</div>

	</div>
	<br>

	<!-- /内容区 -->
	{include file="footer.tpl" title=foo}
</body>
<script src="/static/js/jquery.js"></script>
<script>
	//返回上一页
	$(function(){
		$('.shamsub').on('click',function(){
			if($('.shamsub').attr('active') == 1){
				var tag = '.diaocha';
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
		});
	});
</script></html>