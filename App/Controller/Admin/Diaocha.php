<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //调查问卷
    public function doDiaocha()
    {
        view('',[
            'res'=>app('db')->getall("select * from s_diaocha order by sort desc,id desc")
        ]);
    }

    public function doDiaocha_deletePost()
    {
        $id = intval(req('Post')['relid']);
        app('db')->query("delete from s_diaocha where id = $id");

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }


    public function doDiaocha_editPost()
    {
        $res = req('Post');
        $id = intval($res['id']);
        $res = saddslashes($res);

        app('db')->autoExecute("s_diaocha",$res,'UPDATE',"id = $id");

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }

    public function doDiaocha_edit()
    {
        $id = intval(req('Get')['id']);
        $row = app('db')->getrow("select * from s_diaocha where id = $id");
        view('',[
            'row'=>$row
        ]);
    }

    public function doDiaocha_addPost()
    {

        $res = req('Post');

        //添加
        $res = saddslashes($res);
        app('db')->autoExecute('s_diaocha',$res,'INSERT');

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }

    public function doDiaocha_add()
    {
        view('',[
        ]);
    }


}
