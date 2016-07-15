<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <title>整点签到</title>
    <link rel="stylesheet" href="/static/css/reset.css">
    <link rel="stylesheet" href="/static/css/qa_style.css">
    <script src="/static/js/flexible.js"></script>
    <link rel="stylesheet" href="/static/css/style.css" media="screen" type="text/css" />

</head>
<body>


<div class="main bg-sign">

<div class="btn-sign-box">

</div>
<div class="sign-tips">
    现场
</div>
</div>

{include file="footer.tpl" title=foo}


<script src="/static/js/jquery.js"></script>
<script type="text/javascript" src="/static/js/script.js"></script>

<script>
    var fff =
        // $('.sign-score').fadeOut('slow');

        //返回上一页
            $(function(){
                $('.link-back').on('touchstart',function(){
                    history.back();
                });

               
            });
</script>

</body>
</html>

