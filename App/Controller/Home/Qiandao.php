<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doQiandaoPost()
    {
        //签到
        $this->AjaxReturn();
    }

    public function doQiandao()
    {
        //克签到时间
        //11点 10点 13点 16点

        //前后五分钟开放签到按钮
        //检查是否已经签到,签到过才可以继续签
        $triger = false;

        view('',[
            'avtive' => $triger,              //是否能签到的开关
            'ratate'=>[
                'hours'     =>'1',              //初始旋转角度
                'miniute'   =>'1',
                'second'    =>'1',
            ],
            'res'=> $res
        ]);

    }

}
