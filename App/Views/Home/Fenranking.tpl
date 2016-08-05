<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta content="telephone=no,email=no" name="format-detection">
		<title>积分排行</title>

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
			.color-blue {
				color: #0476CB !important;
			}
			
			.bor-t {
				border-top: none !important;
			}
			
			.bor-l {
				border-left: none !important;
			}
			
			.bor-r {
				border-right: none !important;
			}
			
			.table td {
				color: #646464 !important;
				padding: 15px 10px !important;
			}
			
			.pm-title {
				font-size: 15px;
				font-family: "微软雅黑";
			}
			
			.p-0 {
				padding: 0 !important;
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
				background: url("/static/img/back.png") no-repeat 10px center;
				background-size: 10px 15px;
			}
			
			.user-01 {
				display: inline-block;
				border-radius: 50%;
				width: 60px;
				border: 4px solid #68ADE0;
				height: 60px;
				overflow: hidden;
			}
			
			.user-01 .user-img {
				width: 100%;
				background-position: center center;
			}
			
			.user-02 {
				display: inline-block;
				border-radius: 50%;
				width: 80px;
				border: 4px solid #68ADE0;
				height: 80px;
				overflow: hidden;
			}
			
			.user-02 .user-img {
				width: 100%;
				background-position: center center;
			}
			
			.user-03 {
				display: inline-block;
				border-radius: 50%;
				width: 60px;
				border: 4px solid #68ADE0;
				height: 60px;
				overflow: hidden;
			}
			
			.user-03 .user-img {
				width: 100%;
				background-position: center center;
			}
			
			.table.table-user {
				position: absolute;
				top: 50%;
				margin-top: -60px;
			}
			
			.table.table-user .user-td {
				padding: 0 !important;
				vertical-align: middle;
				text-align: center;
			}
			
			.pos-r {
				position: relative !important;
			}
			
			.users {
				position: absolute;
				top: 50%;
				margin-top: -60px;
				max-width: 23%;
				left: 50%;
				margin-left: 5px;
			}
			
			.user-gj02 {
				position: absolute;
				top: 50%;
				margin-top: -76px;
				max-width: 27%;
				left: 50%;
				margin-left: 9px;
			}
			
			.user-p {
				color: #fff;
				padding-top: 5px;
				font-family: "微软雅黑";
				font-size: 13px;
			}
			
			.user-totle {
				border: none !important;
				text-align: center;
			}
			
			.user-totle p {
				color: #fff;
			}
			
			.user-warning {
				font-size: 15px;
				font-weight: bold;
			}
			
			.w-100per {
				width: 100% !important;
			}
		</style>
	</head>

	<body style="font-size: 14px;font-family: '微软雅黑';">
		<div class="top">
			积分排行
			<a href="javascript:history.go(-1);" class="back">
				返回
			</a>
		</div>
		<div class="container" style="background:#FFF;padding-top: 40px;">
			<div class="row">
				<div class="col-xs-12 p-0">
					<img src="/static/images/frabanner.jpg" class=" w-100per" />
					<table class="table table-user">
						<tr>
							<td class="user-td bor-t  pos-r">
								<span class="user-01">
									<img src="{$rc[1]['headimg']}" class="user-img"/>
									<img src="/static/images/top2.png" class="users"/>
								</span>
								<div class="user-p">
									<p>{$rc[1]['name']}</p>
									<p>
										<span>当前积分:</span>
										<span>{$rc[1]['fen']}</span>
										<span>分</span>
									</p>
								</div>
							</td>
							<td class="user-td bor-t  pos-r">
								<span class="user-02">
									<img src="{$rc[0]['headimg']}" class="user-img"/>
									<img src="/static/images/top1.png" class="user-gj02"/>
								</span>
								<div class="user-p">
									<p class="user-warning">{$rc[0]['name']}</p>
									<p>
										<span>当前积分:</span>
										<span>{$rc[0]['fen']}</span>
										<span>分</span>
									</p>
								</div>
							</td>
							<td class="user-td bor-t  pos-r">
								<span class="user-03">
									<img src="{$rc[2]['headimg']}" class="user-img"/>
									<img src="/static/images/top3.png" class="users"/>
								</span>
								<div class="user-p">
									<p>{$rc[2]['name']}</p>
									<p>
										<span>当前积分:</span>
										<span>{$rc[2]['fen']}</span>
										<span>分</span>
									</p>
								</div>
							</td>
						</tr>
						<!--<tr>
							<td colspan="3" class="user-totle">
								<p>
									<span>当前积分：</span>
									<span>55</span>
									<span>分</span>
								</p>
							</td>
						</tr>-->
					</table>
				</div>
				<div class="col-xs-12 p-0">
					<!-- center><h1>积分排行</h1></center -->
					<center style="margin-bottom: 20px;">
						<h3 class="pm-title">{$user['name']},您目前的排名是第<span class="red">{$pm}</span>名，加油哦！</h3>
					</center>
					<div class="table-responsive">
						<table class="table">
							{foreach from=$rc key=key item=item}
							<tr>
								<td class="bor-l bor-r" {if ($rc[$key][ 'headimg'] neq '') && $key lt 9 }style="padding-top: 15px" {/if}><span {if $key<3}class="color-blue" {/if}>NO.{$key+1}</span></th>
									<td class="bor-l bor-r" width=50px>{if $rc[$key]['headimg'] neq ''}
										<!--<img class="img-circle" height="40" width="40" alt="" src="{$rc[$key]['headimg']}">-->{/if}</th>
										<td class="bor-l bor-r" {if ($rc[$key][ 'headimg'] neq '') && $key lt 9}style="padding-top: 15px" {/if}> {$rc[$key]['name']}</th>
											<td class="bor-l bor-r" {if ($rc[$key][ 'headimg'] neq '') && $key lt 9}style="padding-top: 15px" {/if}><span>{$rc[$key]['fen']}</span>分</td>
							</tr>
							{/foreach}

						</table>
					</div>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->

		</div>
		</div>

		<br>
		<br>
		<br>
		<br> {include file="../footer4.tpl" title=foo}

		<script src="/static/js/jquery.js"></script>

	</body>

</html>