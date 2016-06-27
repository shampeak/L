<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //ֻ��һ����ҳ,û�е�¼��ת��¼����

    public function doFenranking()
    {
        view('',[
            'res'=> $res
        ]);

    }

}
