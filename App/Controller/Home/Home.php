<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //ֻ��һ����ҳ,û�е�¼��ת��¼����

    public function doIndex()
    {
/*
 * ������֤�����
 */

echo '��ҳ';
       // app('Vcode')->test();

exit;



//        app('Vcode')->test();
//       // $res = Model('md')->getar();
//D($res);
        view('',[
            'res'=> $res
        ]);
    }

}
