<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <meta content="telephone=no,email=no" name="format-detection">
    <title>首页</title>
    <link rel="stylesheet" href="/static/css/reset.css">
    <link rel="stylesheet" href="/static/css/qa_style.css">
    <script src="/static/js/flexible.js"></script>
    <link rel="stylesheet" href="/assets/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/color.css">
    <link href="/assets/LTE/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <script src="/static/js/flexible.js"></script>


    <style>
        .yuan{
            border-radius: 20px; /* 所有角都使用半径为5px的圆角，此属性为CSS3标准属性 */
            -moz-border-radius: 20px; /* Mozilla浏览器的私有属性 */
            -webkit-border-radius: 20px; /* Webkit浏览器的私有属性 */
            border-radius: 20px 20px 20px 20px; /* 四个半径值分别是左上角、右上角、右下角和左下角 */
            width:150px;
            padding:3px;
        }
    </style>
</head>
<body>

<!-- 内容区 -->
<div class="main bg-index">
    <div class="banner-box"><img src="/static/images/jifen.png"></div>
    <div class="nav-container">
        <ul class="clearfix">


            <!--li><a href="?z=home/qiandao" class="nav-sign"><span>整点签到</span></a></ li-->
            <li><a href="?z=home/zhuanjia" class="nav-question"><span>专家介绍</span></a></li>
            <li><a href="?z=home/huodonglist" class="nav-sign"><span>游戏互动</span></a></li>
            <li><a href="?z=home/xianchang" class="nav-user"><span>{if $count neq 0}<small class="b_red white yuan">{$count}</small>{/if}现场指导</span></a></li>
            <li><a href="?z=home/diaocha" class="nav-survey"><span>问卷调查</span></a></li>


        </ul>
    </div>
</div>
<!-- /内容区 -->
<br>
<br>
<br>
{include file="footer.tpl" title=foo}

</body>

</html>