<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    function send($value = []){

        $apikey = "9dd84803f54ff467460e7c9ea31489f4"; //修改为您的apikey(https://www.yunpian.com)登陆官网后获取
        $mobile = $value['mobile']; //请用自己的手机号代替
        //$text   ="【排行榜积分系统】感谢您对“2016第六届中国SEO排行榜大会”的支持与关注, 请点击 http://jifen.netconcepts.cn/?code=".$value['code']." 进入您的大会个人专属系统，您可通过该系统完善个人资料并实时了解大会信息。大会当天系统将开启更多功能，您可参与现场互动并赚取积分兑换奖品。会务组全体同仁期待您的到来！ ";
        //$text   ="	【排行榜积分系统】感谢您对“2016第六届中国SEO排行榜大会”的支持与关注, 请点击 http://jifen.netconcepts.cn/?code=".$value['code']." 进入您的大会个人中心系统，您可通过该系统完善个人资料并实时了解大会信息。大会当天系统将开启更多功能，您可参与现场互动并赚取积分兑换奖品。会务组全体同仁期待您的到来！";
        $text   ="【SEO排行榜大会】您好！您已成功报名“2016第六届中国SEO排行榜大会”，请点击 http://jifen.netconcepts.cn/?code=".$value['code']." 进入您的大会个人中心系统，大会当天系统将开启更多功能，您可参与现场互动并赚取积分兑换奖品。会务组全体同仁期待您的到来！";
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
            app('db')->autoExecute('user',$vs,'UPDATE',"mobile = '{$res['mobile']}'");
        }
        return $res;
    }

    public function doUser_messagetest()
    {
        header("Content-Type:text/html;charset=utf-8");
        echo '测试';
        $res = app('db')->getall("SELECT * FROM `user` where mobile in('18519330917','15688406165','13811283540','13581728785','13811069199')");
        //所有的记录
        foreach($res as $key=>$value){
            if(!empty($value['mobile'])) $vs[] = $this->send($value);
        }
        echo '<pre>';
        print_r($vs);
        echo '</pre>';
        exit;

    }

    public function doUser_message()
    {
        header("Content-Type:text/html;charset=utf-8");
        //die("功能关闭中");
        //发送短信
        $res = app('db')->getall("SELECT * FROM `user` where sendmessage= 0");
        //所有的记录
        foreach($res as $key=>$value){
            if(!empty($value['mobile'])) $vs[] = $this->send($value);
        }
        echo '<pre>';
        print_r($vs);
        echo '</pre>';
        exit;
    }

    public function doUser_mailtest()
    {
        $smtpserver = "mail.guangjuli.com";//SMTP服务器
        $smtpserverport =25;//SMTP服务器端口
        $smtpusermail = "shampeak@guangjuli.com";//SMTP服务器的用户邮箱
        $smtpemailto = "xxx@qq.com";//发送给谁
        $smtpuser = "xxx@looklo.com";//SMTP服务器的用户帐号
        $smtppass = "*****";//SMTP服务器的用户密码
        $mailsubject = "PHP100测试邮件系统";//邮件主题
        $mailbody = "<h1> 这是一个测试程序 PHP100.com </h1>";//邮件内容
        $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
        //##########################################
        $smtp = new \App\Smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
        $smtp->debug = true;//是否显示发送的调试信息
        $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);

        echo 'mail';
    }

    //删除操作
    public function doUserPost()
    {
        $act = req('Post')['act'];
        $uid = intval(req('Post')['relid']);
        if($act == 'delete'){
            app('db')->query("delete from user where uid = $uid");
        }

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }


    //用户列表
    public function doUser()
    {
        //最大的远程id
        $_minid = app('db')->getone("SELECT max(rid) FROM `remote`");
        $_minid = intval($minid);

        //远程数据
        $remote = app('db2')->getall("select * from attend_order where tel <>'' and id>$_minid");

        //拒绝和保存标记
        $bj = app('db')->getall("SELECT * FROM `remote` ",'rid');

        //如果存在新的数据则INSERT
        foreach($remote as $key => $value){
            //$rid = $value['id'];
            if(empty($bj[$value['id']])){
                //tianjia
                $res['rid'] = $value['id'];
                $res['deny'] = 0;
                $res['save'] = 0;
                app('db')->autoExecute('remote',$res,'INSERT');
            }
        }

        //上面是保存remote完整性
        //==================================================

        $minid = app('db')->getone("SELECT max(rid) FROM `remote` where save = 1");
        $minid = intval($minid);

        //==================================================
        //导入
        $res = app('db')->getcol("SELECT rid FROM `remote` where save = 0 and rid>$minid");

        foreach($res as $remoteid){

            if(Model('remote')->daoru($remoteid)){
                //导入成功
                //修改标记
                $res['save'] = 1;
                app('db')->autoExecute('remote',$res,'UPDATE',"rid = $remoteid");
            }
        }

//        //远程最小的id
//        $minid = app('db')->getone("SELECT max(rid) FROM `remote` where save = 1");
//        $minid = intval($minid);
//
//        //获取远程数据,进行比对,执行导入操作
//        $remote = app('db2')->getall("select * from attend_order where id > $minid");
//
//
//
//        //获取本地ID 列表 进行过滤
//        $localtel = app('db')->getcol("select mobile from user");
//        foreach($remote as $key=>$value){
//            if(in_array($remote['tel'],$localtel)){
//                unset($remote[$key]);
//            }
//        }
//
//        foreach($remote as $key=>$value){
//            Model('remote')->daorunr($value);       //静默
//        }
//        //导入结束

        $res = app('db')->getall("select * from user order by sort desc,uid desc");
        view('',[
            'res' => $res
        ]);
    }

    //用户添加保存
    public function doUser_addPost()
    {
        $res = req('Post');
        if(empty($res['mobile'])){
            $this->AjaxReturn([
                "code"  => -200,
                "msg"   => "手机号必须填写"
            ]);
        }

        if(preg_match("/^1[34578]{1}\d{9}$/",$res['mobile'])){
            //echo "是手机号码";
        }else{
            $this->AjaxReturn([
                "code"  => -200,
                "msg"   => "手机号错误"
            ]);
        }

        //数据库中是否存在
        $mobile = saddslashes($res['mobile']);
        if(app('db')->getone("select count(*) from user where mobile = '$mobile'")){
            $this->AjaxReturn([
                "code"  => -200,
                "msg"   => "已经存在该用户"
            ]);
        }

        //添加
        $res = saddslashes($res);
        $res['createAt'] = time();
        app('db')->autoExecute('user',$res,'INSERT');

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }

    public function doUser_add()
    {
        view('',[
            'res' => $res
        ]);
    }

    //修改用户信息响应
    public function doUser_editPost()
    {
        $res = req('Post');
        $uid = intval($res['uid']);
        $res = saddslashes($res);
        app('db')->autoExecute("user",$res,'UPDATE',"uid = $uid");

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }

    //修改用户对话框
    public function doUser_edit()
    {
        $uid = intval(req('Get')['uid']);
        $row = app('db')->getrow("select * from user where uid = $uid");
        view('',[
            'row' => $row
        ]);
    }

    public function doUser_drPost()
    {
        //-----------------------------------------------------------------
        //接收数据上传文件
        //-----------------------------------------------------------------
        if(empty($_FILES['tfile']['name'])){
            die('空的文件');
        }

        /*
         * 在发布目录下简历目录
         * './U/v/              --------> 手动
         */
        $dirp = APPROOT.'Upload/';
        !is_dir($dirp) && @mkdir($dirp);
        $extname = pathinfo($_FILES['tfile']['name'], PATHINFO_EXTENSION);
        //-----------------------------------------------------------------
        $target_path = $dirp . md5($_FILES['tfile']['name'].time().rand(1000000,9999999)).'.'.$extname;
        //-----------------------------------------------------------------
        //检查文件扩展名
        if(!in_array($extname,['xls'])){
            die('格式不对，请上传excel2003格式，扩展名xls');
        }

        //检查文件大小
        if($_FILES['tfile']['size'] > 104857600){
            die('文件大小不符合要求 ： 太大');
        }

        move_uploaded_file($_FILES['tfile']['tmp_name'], $target_path);


        // Test CVS
        require_once APPROOT.'Library/Excel/reader.php';
        header("Content-Type:text/html;charset=utf-8");

        $data = new \Spreadsheet_Excel_Reader();
        $data->setOutputEncoding('UTF-8');
        $data->read($target_path);

        error_reporting(E_ALL ^ E_NOTICE);



        for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
            $res['createAt'] = time();
            $res['mima'] =  rand(1111111,9999999);
            $res['code'] =  $this->vcode(rand(1111111,9999999));       //不能重复
            $res['name']    = $data->sheets[0]['cells'][$i][1];
            $res['company'] = $data->sheets[0]['cells'][$i][2];
            $res['title']   = $data->sheets[0]['cells'][$i][3];
            $res['email']   = $data->sheets[0]['cells'][$i][4];
            $res['mobile']  = $data->sheets[0]['cells'][$i][5];
            $flag = true;
            if(!preg_match("/^1[34578]{1}\d{9}$/",$res['mobile'])){
                //可以导入
                $flag = false;
            }

            //数据库中是否存在
            $mobile = saddslashes($res['mobile']);
            if(app('db')->getone("select count(*) from user where mobile = '$mobile'")){
                $flag = false;
            }
            if($flag){
                //可以insert
                $res = saddslashes($res);
                app('db')->autoExecute('user',$res,'INSERT');
            }else{
                echo  $res['name'].'<br>';
                echo  $res['company'].'<br>';
                echo  $res['title'].'<br>';
                echo  $res['email'].'<br>';
                echo  $res['mobile'].'<br>';
                echo  '导入失败<br>';
            }

        }

/**
* "姓名","公司","职位","E-mail","手机",
 * mima     //jisuan
 * code     //jisuan
 * name
 * mobile
 * company
 * title
 * email
 * createAt
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 */


    }

    public function vcode($code = 0)
    {
        $code = saddslashes($code);
        //对code 进行重复性验证
        $count = app('db')->getone("select count(*) from user where code = '$code'");
        if($count != 0){
            $code = rand(1111111,9999999);
        }
        return $code;
    }

    public function doUser_dr()
    {
        view('',[
            'row' => $row
        ]);
    }

}
