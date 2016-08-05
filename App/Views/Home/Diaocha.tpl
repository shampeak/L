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
			.clearfix {
				margin-bottom: 0px;
			}
		</style>
		<link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="/assets/css/color.css">
		<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			.main-title h2 {
				font-size: 0.40625rem;
				color: #f03030;
				margin-top: 0.9375rem;
			}
			
			.diaocha.form-horizontal h4 {
				font-size: 16px;
				line-height: 20px;
				font-family: "微软雅黑";
			}
			
			a.btn-submit {
				width: 100%;
				height: 35px;
				line-height: 35px;
				margin-left: 0;
				font-family: "微软雅黑";
				font-size: 15px;
			}
			
			input[type=radio] {
				width: 18px;
				height: 18px;
			}
			label{
				margin-bottom: 10px;
			}
			input[type=checkbox],
			input[type=radio] {
				margin: 0;
			}
		</style>
		<style type="text/css">
			body {
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
		</style>
	</head>

	<body>
		<div class="top">
			问卷调查
			<a href="javascript:history.go(-1);" class="back">
				返回
			</a>
		</div>
		<!-- 内容区 -->
		<div class="main main-question main-title">
			<!-- center><h1>调查问卷</h1></center -->
			<h2>说明：完成全部调查问卷的填写可以积30分奖励</h2>
			<div class="question-box">
				<form class="diaocha form-horizontal" action="?z=home/diaocha" method="post">

					<ul>

						{foreach from=$res item=value name=foo}
						<li>
							<h4>{$smarty.foreach.foo.index+1}、{$value['title']}</h4>
							<div class="choose-item">
								{if $value['optionA'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="A" {if $da[ 'da'][$value[ 'id']] eq 'A'}checked{/if}>
								<label for="">A、{$value['optionA']}</label> {/if}
								<br> {if $value['optionB'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="B" {if $da[ 'da'][$value[ 'id']] eq 'B'}checked{/if}>
								<label for="">B、{$value['optionB']}</label> {/if}
								<br> {if $value['optionC'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="C" {if $da[ 'da'][$value[ 'id']] eq 'C'}checked{/if}>
								<label for="">C、{$value['optionC']}</label> {/if}
								<br> {if $value['optionD'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="D" {if $da[ 'da'][$value[ 'id']] eq 'D'}checked{/if}>
								<label for="">D、{$value['optionD']}</label> {/if}
								<br> {if $value['optionE'] neq ''}
								<input type="radio" name="choose[{$value['id']}]" value="E" {if $da[ 'da'][$value[ 'id']] eq 'E'}checked{/if}>
								<label for="">E、{$value['optionE']}</label> {/if}
							</div>
						</li>
						{/foreach}

					</ul>
					<div class="submit-box">
						<a active={$active} href="javascript:void(0)" class="{if $active eq 1}btn-submit{else}btn-disable{/if} shamsub">提交</a>
						{if $active eq 0}
						<span>您已经填写完成,得分：<strong>30分</strong></span> {/if}
					</div>
				</form>
			</div>

		</div>
		<br>
		<br>
		<br>

		<!-- /内容区 -->
		{include file="../footer1.tpl" title=foo}
	</body>
	<script src="/static/js/jquery.js"></script>
	<script>
		//返回上一页
		$(function() {
			$('.shamsub').on('click', function() {
				if($('.shamsub').attr('active') == 1) {
					var tag = '.diaocha';
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
			});
		});
	</script>

</html>