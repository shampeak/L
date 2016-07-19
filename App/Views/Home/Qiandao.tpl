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


<div id="watch">
    <div class="v">
        <div class="fill">
            <div class="clock" id="utility-clock">
                <div class="centre">
                    <div class="dynamic"></div>
                    <div class="expand round circle-1"></div>
                    <div class="anchor hour">
                        <div class="element thin-hand"></div>
                        <div class="element fat-hand"></div>
                    </div>
                    <div class="anchor minute">
                        <div class="element thin-hand"></div>
                        <div class="element fat-hand minute-hand"></div>
                    </div>
                    <div class="anchor second">
                        <div class="element second-hand"></div>
                    </div>
                    <div class="expand round circle-2"></div>
                    <div class="expand round circle-3"></div>
                </div>
            </div>
        </div>
</div>


<div class="btn-sign-box">
    <a href="javascript:void(0)" class="btn-sign{if $triger eq 0}disable{/if}">签到</a>
    <div class="sign-score">+2</div>
</div>
<div class="sign-tips">
    <p>签到说明 : 签到时间 9点 - 15点</p>
    <p>签到环节，每成功签到一次可获得2分奖励</p>
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

                //签到
                //$('.btn-sign').on('touchstart',function(){
                $('.btn-sign').on('click',function(){
					
					//提交
					var tag = '.zhishi';
					$.ajax({
						type: "POST",
						url: $(tag).attr("action"),
						data: $(tag).serialize(),
						dataType:'json',
						success: function(data){
							var JS = data.js;
							eval(JS);
							
							},
						error : function() {
							   alert("异常！");
						  }
					});	
					
					
                    if($('.sign-score').hasClass('shownow')){
                        $('.sign-score').fadeIn('slow').delay(1000).fadeOut('slow');
                    }else{
                        $('.sign-score').addClass('shownow').delay(1000).fadeOut('slow');
                    }
                });
            });
</script>

</body>
</html>

