<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        //parent::__construct();
    }

    public function doLogin_mimaPost()
    {
        $login = req('Post')['login'];
        $info  = Model('user')->infofromlogin($login);
        if(empty($info)){
            $this->AjaxReturn([
                'code' => -300,
                "msg" => "账户错误1"
            ]);
        }

        //发送短信
        $mobile = $info['mobile'];
        if(empty($mobile)){
            $this->AjaxReturn([
                'code' => -200,
                "msg" => "账户错误2"
            ]);
        }
        //========================================
        //发送短信

        $apikey = "9dd84803f54ff467460e7c9ea31489f4"; //修改为您的apikey(https://www.yunpian.com)登陆官网后获取
        $mobile = $info['mobile']; //请用自己的手机号代替
//        $text   ="【排行榜积分系统】您的密码是 {$info['mima']} ";
        $text   ="【SEO排行榜大会】您的密码是 {$info['mima']} ";
        $ch     = curl_init();

        /* 设置验证方式 */
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8', 'Content-Type:application/x-www-form-urlencoded','charset=utf-8'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);/* 设置返回结果为流 */
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);/* 设置超时时间*/
        curl_setopt($ch, CURLOPT_POST, 1);/* 设置通信方式 */
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $data = [
            'text'      => $text,
            'apikey'    => $apikey,
            'mobile'    => $mobile
        ];
        curl_setopt ($ch, CURLOPT_URL, 'https://sms.yunpian.com/v2/sms/single_send.json');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));  // 发送短信
        $json_data = curl_exec($ch);
        $array = json_decode($json_data,true);

        curl_close($ch);
        $res['mobile']  = $array['mobile'];
        $res['code']    = $array['code'];
        $res['msg']     = $array['msg'];
        if($array['code'] ==0){
            //发送成功
            $vs['sendmessage'] = 1;
            $this->AjaxReturn([
                'code' => 200,
                "msg" => "发送成功"
            ]);
        }else{
            $this->AjaxReturn([
                'code' => -200,
                "msg" => "发送失败"
            ]);
        }

    }

    public function doLoginPost()
    {
        $login = req('Post')['login'];
        $password = req('Post')['password'];

        if(Model('user')->login($login,$password)){
            $this->AjaxReturn([
                'code'  => 200,
                'js'    => "window.location.href='/';"
            ]);
        }else{
            $this->AjaxReturn([
                'code'  => -200,
                'msg'    => "用户名密码错误"
            ]);
        }



        //$this->AjaxReturn();
    }

    public function doLogin()
    {
        view('',[
            'res'=> $res
        ]);
    }

    public function doLogin_Signup()
    {
        view('',[
            'res'=> $res
        ]);
    }

    public function doLogin_Signcall()
    {

    }


}
