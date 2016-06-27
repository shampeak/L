<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //ֻ��һ����ҳ,û�е�¼��ת��¼����

    public function doFenranking()
    {
        $uid        = Model('user')->uid();
        $rc = Model('Ph')->jiangtai();

        //计算我的排名
        $pm = 1;
        foreach($rc as $key =>$value){
            if($value['uid'] == $uid){
                break;
            }
            $pm++;
        }


        view('',[
            'user'  =>  Model('user')->userinfo(),
            'pm'    => $pm,
            'rc'    => $rc
        ]);

    }

}
