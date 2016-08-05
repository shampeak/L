<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta content="telephone=no,email=no" name="format-detection">
		<title>嘉宾提问</title>
		<link rel="stylesheet" href="/static/css/reset.css">
		<link rel="stylesheet" href="/static/css/qa_style.css">
		<script src="/static/js/flexible.js"></script>
		<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/color.css">
		<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			.zhishi h2 {
				font-size: 20px;
			}
			
			.question-box li h3 {
				font-size: 16px;
				font-family: "微软雅黑";
				line-height: 20px;
			}
			
			a.btn-submit {
				width: 100%;
				margin-left: 0;
				height: 35px;
				line-height: 35px;
				font-family: "微软雅黑";
				font-size: 15px;
			}
			
			input[type=radio] {
				width: 18px;
				height: 18px;
				position: relative;
				top: -1px;
			}
			label{
				margin-bottom: 10px;
			}
			input[type=checkbox],
			input[type=radio] {
				margin: 0;
			}
			small{
				    font-size: 16px !important;
    margin-top: 10px;
    display: block;
			}
		</style>
		<style type="text/css">
			body,* {
				font-family: "微软雅黑";
			}
			.top {
				width: 100%;
				height: 40px;
				line-height: 40px;
				text-align: center;
				color: #fff;
				font-size: 16px;
				background-color: #0476CB;
				position: fixed;
				top: 0;
				left: 0;
				z-index: 2;
			}
			
			.back {
				position: absolute;
				top: 0;
				left: 0;
				display: block;
				color: #fff;
				padding-left: 30px;
				background: url("../static/img/back.png") no-repeat 10px center;
				background-size: 10px 15px;
			}
			
			.main {
				padding-top: 40px;
			}
			label{
				min-width: 85px;
			}
		</style>
	</head>

	<body>
		<div class="top">
			大咖提问
			<a href="javascript:history.go(-1);" class="back">
				返回
			</a>
		</div>
		<!-- 内容区 -->
		<div class="main main-question">
			<div class="main-title">
				<h2>说明：每答对一题可获得3分奖励。</h2>
			</div>

			<form class="zhishi form-horizontal" action="?z=home/zhishi" method="post">
				{foreach from=$jiab key=k item=v}
				<h2>嘉宾 : {$v['jiab']} <br /><small>演讲主题 :{$v['jiatitle']}</small></h2>
				<div class="question-box">
					<ul>
						<!--{math equation=x x=0 assign=i}-->

						{foreach from=$res key=key item=value name=foo} {if $v['jiab'] eq $value['jiab']}
						<!--{math equation=$i+1 assign=i}-->
						<!--{$i}-->
						<li>
							<h3>{$i}、{$value['title']}</h3>
							<div class="choose-item">
								{if $value['optionA'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="A" {if $da[ 'da'][$value[ 'id']] eq 'A'}checked{/if}>
								<label for="">A、{$value['optionA']}</label>
								{/if} 
								
								{if $value['optionB'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="B" {if $da[ 'da'][$value[ 'id']] eq 'B'}checked{/if}>
								<label for="">B、{$value['optionB']}</label>
								<br /> 
								{/if} 
								
								{if $value['optionC'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="C" {if $da[ 'da'][$value[ 'id']] eq 'C'}checked{/if}>
								<label for="">C、{$value['optionC']}</label>
								
								{/if} {if $value['optionD'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="D" {if $da[ 'da'][$value[ 'id']] eq 'D'}checked{/if}>
								<label for="">D、{$value['optionD']}</label> {/if} {if $active eq 0 && $value['da'] neq $da['da'][$value['id']]}
								<br><span class="red">本题回答错误</span> {/if}
							</div>
						</li>
						{/if} {/foreach}
					</ul>
					<hr>
				</div>{/foreach}
			</form>
			<br>
			<div class="submit-box">
				<a active={$active} href="javascript:void(0)" class="{if $active eq 1}btn-submit{else}btn-disable{/if} shamsub">提交</a>
				{if $active eq 0}
				<span>得分：<strong>{$da['fen']}分</strong></span> {/if}
			</div>
			<br> {if $active eq 0}
			<div class="result-box clearfix">
				<div class="fl">
					<p class="fl" style="width: 100px;">正确答案：</p><br> {math equation=x x=0 assign=i} {foreach from=$res item=value name=foo} {math equation=$i+1 assign=i} {if ($i-1) eq 5 || ($i-1) eq 10 || ($i-1) eq 15 || ($i-1) eq 20 || ($i-1) eq 25 || ($i-1) eq 30 || ($i-1) eq 35 || ($i-1) eq 40 || ($i-1) eq 45 || ($i-1) eq 50}<br>{/if} {$smarty.foreach.foo.index+1}:
					<strong class="red">{$value['da']}</strong> {/foreach}
				</div>
			</div>
			{/if}

		</div>

		<!--div class="page-box clearfix">
			<div class="page-prev fl"><b></b>上一页</div>
			<div class="page-next fr"><b></b>下一页</div>
		</div -->
		<!-- -->

		</div>
		<!-- /内容区 -->
		<br>
		<br> <br> {include file="../footer1.tpl" title=foo}

	</body>
	<script src="/static/js/jquery.js"></script>
	<script>
		//返回上一页
		$(function() {
			$('.shamsub').on('click', function() {
				//		$('.shamsub').on('touchstart',function(){
				if($('.shamsub').attr('active') == 1) {
					var tag = '.zhishi';
					$.ajax({
						type: "POST",
						url: $(tag).attr("action"),
						data: $(tag).serialize(),
						dataType: 'json',
						success: function(data) {
							var JS = data.js;
							eval(JS);

						},
						error: function() {
							alert("异常！");
						}
					});
				}

				//alert(1);
			});
		});
	</script>

</html>