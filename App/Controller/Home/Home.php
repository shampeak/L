<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){

        if(req('Get')['code']){
            $code = req('Get')['code'];
            $code = saddslashes($code);
            $name = app('db')->getone("select name from user where code = '$code'");
            view('Welcome',[
                'name'=>$name
            ]);
            exit;
        }
        parent::__construct();
    }


    public function doIndex()
    {
        $uid = Model('user')->uid();        //��ȡ�û�id
        $myid = app('db')->getcol("select infoid from message where uid = $uid");

        //��ȡδ����Ϣ
        $midc = app('db')->getcol("select id from xianchang");       //���е���Ϣ

        //�����
        $rc = array_diff($midc,$myid);
        $count = count($rc);

        view('',[
            'count' => $count
        ]);
    }

    public function doHuodonglist()
    {
        view('',[
            'res'=> $res
        ]);
    }





}
