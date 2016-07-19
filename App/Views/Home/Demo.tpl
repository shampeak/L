<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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

 <link href="http://cdn.bootcss.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Ionicons -->
<link href="/assets/LTE/css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />

</head>
<body>




<div class="container">


    <div class="row">
        <div class="col-xs-12">
		        <table class="table">
                    <tr>
                        <td> <img class="img-circle" height="80" width="80" alt="User Image" src="{$user['headimg']}"></th>
                        <td><h4>{$user['name']},您目前排名是<span class="red">{$pm}</span>…… 要加油哦!!</h4></td>
                    </tr>
                </table>
		</div>    
        <div class="col-xs-12">
            <p class="lead">积分排行</p>
            <div class="table-responsive">
                <table class="table">
					{foreach from=$rc key=key item=item}
                    <tr>
                        <th style="width:50%">{$rc[$key]['name']} :</th>
                        <td>{$rc[$key]['fen']}分</td>
                    </tr>
                    {/foreach}

                </table>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->

</div>










</div>



{include file="footer.tpl" title=foo}


<script src="/static/js/jquery.js"></script>
<script src="/assets/LTE/js/AdminLTE/app.js" type="text/javascript"></script>
<script>

</script>

</body>
</html>

