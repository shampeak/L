<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doFensendPost()
    {
        $uid = Model('user')->uid();
        $friendname = req('Post')['friendname'];
        $fid = Model('user')->name2uid($friendname);
        if(empty($fid)){
            $this->AjaxReturn([
                'code'=>-200,
                'msg'=>'用户不存在'
            ]);
        }

        //首先检查 有没有给这个人送过分
        $md = app('db')->getone("select count(*) from jifengzengsong where `from` = $uid and `to` = $fid");
        if(!empty($md)){
            $this->AjaxReturn([
                'code'=>-200,
                'msg'=>'已经赠送过积分'
            ]);
        }

        //检查我的送分次数
        $_cishu = Model('user')->userinfo();
        $cishu = $_cishu['send'];
        if($cishu>=10){
            $this->AjaxReturn([
                'code'=>-200,
                'msg'=>'最多能给10个好友赠送积分'
            ]);
        }


        //检查对方的接收次数
        $finfo = Model('user')->userinfo($fid);
        $cishu = $finfo['received'];
        if($cishu>=10){
            $this->AjaxReturn([
                'code'=>-200,
                'msg'=>'对方接收到的积分超过10'
            ]);
        }

        //送分操作
        $res['from']    = $uid;
        $res['to']      = $fid;
        $res['fenshu']  = 5;
        $res['tm']  = time();

        app('db')->autoExecute('jifengzengsong',$res,'INSERT');

        //赠送加1
        app('db')->query("update user set `send` = send+1 where uid = $uid");

        //接收 +1
        app('db')->query("update user set `received` = received+1 where uid = $fid");

        //次数调整


        $this->AjaxReturn([
            'code'=>-200,
            'msg'=>'送分完成'
        ]);
    }
    public function doFensend()
    {
        view('',[
            'res'=> $res
        ]);

    }

}
