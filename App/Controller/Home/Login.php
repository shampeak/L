<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }



    //ֻ��һ����ҳ,û�е�¼��ת��¼����
    public function doLoginPost()
    {
        echo '��¼��Ӧ';
    }

    public function doLogin()
    {
        view('',[
            'res'=> $res
        ]);
    }

    //ע��
    public function doLogin_Signup()
    {
        view('',[
            'res'=> $res
        ]);
    }
    //ע��
    public function doLogin_Signcall()
    {
        echo '�һ�����';
    }


}
