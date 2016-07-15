<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doQiandaoPost()
    {
        $uid        = Model('user')->uid();
        Model('qiandao')->qiandao($uid);

        //签到
        $this->AjaxReturn([
            'code'  => 200,
            'msg'   => 'OK',
            'js'    => 'if(data.code>0){$(".btn-sign").addClass("btn-signdisable");$(".btn-sign").removeClass("btn-sign");}else{alert(data.msg);}'
        ]);
    }

    public function doQiandao()
    {
        //克签到时间
        //11点 10点 13点 16点
        $uid        = Model('user')->uid();

        view('',[
            'triger' => Model('qiandao')->isQiandao($uid),              //是否能签到的开关
            'ratate'=>[
                'hours'     =>'1',              //初始旋转角度
                'miniute'   =>'1',
                'second'    =>'1',
            ],
            'res'=> $res
        ]);

    }

}
