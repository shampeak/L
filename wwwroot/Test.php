<?php


$apikey = "9dd84803f54ff467460e7c9ea31489f4"; //修改为您的apikey(https://www.yunpian.com)登陆官网后获取
$mobile = "13811069199"; //请用自己的手机号代替
$text   ="【排行榜积分系统】感谢您对“2016第六届中国SEO排行榜大会”的支持与关注, 请点击 http://jifen.netconcepts.cn/?code=3448893 进入您的大会个人专属系统，您可通过该系统完善个人资料并实时了解大会信息。大会当天系统将开启更多功能，您可参与现场互动并赚取积分兑换奖品。会务组全体同仁期待您的到来！ ";
$ch     = curl_init();

/* 设置验证方式 */
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8', 'Content-Type:application/x-www-form-urlencoded','charset=utf-8'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);/* 设置返回结果为流 */
curl_setopt($ch, CURLOPT_TIMEOUT, 10);/* 设置超时时间*/
curl_setopt($ch, CURLOPT_POST, 1);/* 设置通信方式 */
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$data = [
    'text'=>$text,
    'apikey'=>$apikey,
    'mobile'=>$mobile
];
curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/sms/single_send.json');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));  // 发送短信
$json_data = curl_exec($ch);
$array = json_decode($json_data,true);
curl_close($ch);


echo '<pre>';print_r($array);

//





/***************************************************************************************/
//获得账户

function send($ch,$data){
}

