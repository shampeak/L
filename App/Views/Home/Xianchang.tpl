<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <title>会议议程</title>

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
        <div class="col-xs-12">
<br>
<table class="table table-striped table-condensed">
{foreach from=$res key=key item=item}
<tr class="active">
    <td width="50">{if $key<3}<small class="badge pull-right bg-red">new</small>{/if}</td>
    <td width="95"><span class="red">{$item['timeb']}</span> - <span class="red">{$item['timee']}</span></td>
    <td><spna class="blue">{$item['title']}</span></td>
    <td>{$item['nr']}</td>

</tr>
{/foreach}
</table>


        </div>
    </div>
</div>


<br>
<br><br>
{include file="footer.tpl" title=foo}

<script src="/static/js/jquery.js"></script>

</body>
</html>

