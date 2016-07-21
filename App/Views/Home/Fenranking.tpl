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
<body  style="font-size: 14px;">




<div class="container" style="background:#FFF">


    <div class="row">
        <div class="col-xs-12">
		        <table class="table">
                    <tr>
                        <td> <img class="img-circle" height="80" width="80" alt="User Image" src="{$user['headimg']}"></th>
                        <td><h4>{$user['name']},您目前排名是第<span class="red">{$pm}</span>名!</h4>
                        <h4>要加油哦!!</h4></td>
                    </tr>
                </table>
		</div>    
        <div class="col-xs-12">
            <!-- center><h1>积分排行</h1></center -->
            <center style="margin-bottom: 20px;"><img src="/static/qw.jpg" height="40"></center -->
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>名次</th>
                        <td style="width:50%">姓名</th>
                        <td>积分</td>
                    </tr>
					{foreach from=$rc key=key item=item}
                    <tr >
                        <td><span {if $key<3}class="white b_red"{else}{/if}>NO.{$key+1}</span></th>
                        <td>{$rc[$key]['name']}</th>
                        <td><span class="red">{$rc[$key]['fen']}</span>分</td>
                    </tr>
                    {/foreach}

                </table>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->

</div>
</div>

<br>
<br>
<br>
<br>


{include file="footer4.tpl" title=foo}


<script src="/static/js/jquery.js"></script>


</body>
</html>

