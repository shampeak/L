<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doXianchang()
    {
        $uid = Model('user')->uid();        //��ȡ�û�id

        $res = app('db')->getall("select * from xianchang order by sort,id");

        //���Ѷ�δ�����ݽ��м�¼����
        $myid = app('db')->getcol("select infoid from message where uid = $uid");

        foreach($res as $key=>$value){
            if(!in_array($value['id'],$myid)){
                $_rc = [
                    'uid'   => $uid,
                    'infoid'=> $value['id'],      //��ʾID
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
