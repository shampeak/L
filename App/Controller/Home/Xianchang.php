<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doXianchang()
    {
        $uid = Model('user')->uid();        //获取用户id

        $res = app('db')->getall("select * from xianchang order by sort,id");

        //对已读未读数据进行记录更新
        $myid = app('db')->getcol("select infoid from message where uid = $uid");

        foreach($res as $key=>$value){
            if(!in_array($value['id'],$myid)){
                $_rc = [
                    'uid'   => $uid,
                    'infoid'=> $value['id'],      //提示ID
                    'read'  => 1
                ];

                app('db')->autoExecute('message',$_rc,'INSERT');
             }
        }

        view('',[
            'res'=> $res
        ]);
    }

}
