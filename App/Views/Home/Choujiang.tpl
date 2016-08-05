<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <title>抽奖</title>

    <link rel="stylesheet" href="/static/css/reset.css">
    <link rel="stylesheet" href="/static/css/qa_style.css">
    <script src="/static/js/flexible.js"></script>
    <link rel="stylesheet" href="/static/css/style.css" media="screen" type="text/css" />
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



<div class="container">
    <div class="row">
    {if $res eq ''}
    <center><span style="padding-top:200px;margin-top: 200px;">抽奖活动还未开始!!</span></center>
    {/if}
    {foreach from=$res key=key item=item}
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-body">
<center><img class="img-circle" width="140" height="140" alt="头像" src="{$user[$item['uid']]['headimg']}">
    <h4 class="media-heading" style="margin-top: 20px;margin-bottom: 20px;"><button class="btn btn-primary">{$user[$item['uid']]['name']}</button> </h4>
<h4 class="media-heading">{$user[$item['uid']]['title']}</h4>
<h3 class="media-heading" style="margin-bottom:20px;margin-top: 10px;">{$user[$item['uid']]['company']}</h3></center>
<p style="font-size: 16px">
{if $user[$item['uid']]['fen'] neq ''}积分 : {$user[$item['uid']]['fen']}<br>{/if}
{if $user[$item['uid']]['weixin'] neq ''}微信号 : {$user[$item['uid']]['weixin']}<br>{/if}
{if $item['des'] neq ''}中奖 : {$item['des']}<br>{/if}
{if $item['tm'] neq ''}中奖时间 : {$item['tm']|date_format:"%Y-%m-%d %H:%M:%S"}<br>{/if}

</p>
                </div>	
            </div>
		</div>
    {/foreach}
	</div>
</div>

<br>
<br>
<br>

{include file="footer.tpl" title=foo}


<script src="/static/js/jquery.js"></script>

<script>

</script>


</body>
</html>

