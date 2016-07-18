<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <title>现场提醒</title>

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
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
<table class="table table-striped table-condensed">
{foreach from=$res key=key item=item}
<tr class="active">
    <td width="95"><span class="red">{$item['timeb']}</span> - <span class="red">{$item['timee']}</span></td>
    <td><spna class="blue">{$item['title']}</span></td>
    <td>{$item['nr']}</td>
    
</tr>
{/foreach}
</table>
                </div>
            </div>


        </div>
    </div>
</div>

<br>


{include file="footer.tpl" title=foo}


<script src="/static/js/jquery.js"></script>

<script>

</script>

</body>
</html>

