<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //调查问卷
    public function doZhishi()
    {
        view('',[
            'res'=>app('db')->getall("select * from s_zhishi order by jiab,sort desc,id desc")
        ]);
    }

    public function doZhishi_deletePost()
    {
        $id = intval(req('Post')['relid']);
        app('db')->query("delete from s_zhishi where id = $id");

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }


    public function doZhishi_editPost()
    {
        $res = req('Post');
        $id = intval($res['id']);
        $res = saddslashes($res);

        if($res['da']){
            $res['da'] = strtoupper(substr(trim($res['da']),0,1));
        }
        app('db')->autoExecute("s_zhishi",$res,'UPDATE',"id = $id");

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }

    public function doZhishi_edit()
    {
        $id = intval(req('Get')['id']);
        $row = app('db')->getrow("select * from s_zhishi where id = $id");
        view('',[
            'row'=>$row
        ]);
    }

    public function doZhishi_addPost()
    {

        $res = req('Post');

        //添加
        $res = saddslashes($res);
        if($res['da']){
           $res['da'] = strtoupper(substr(trim($res['da']),0,1));
        }
        app('db')->autoExecute('s_zhishi',$res,'INSERT');

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }

    public function doZhishi_add()
    {
        view('',[
        ]);
    }


}
