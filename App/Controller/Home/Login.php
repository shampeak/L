<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }



    //ֻ��һ����ҳ,û�е�¼��ת��¼����
    public function doLoginPost()
    {
        //��¼����cookie
        //Ȼ�󷵻�
        $this->AjaxReturn([
            'code'  => -200,
            'js'    => "window.location.href='http://www.ddhbb.com';"
        ]);

        $this->AjaxReturn();
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
