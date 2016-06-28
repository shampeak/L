<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //删除操作
    public function doUserPost()
    {
        $act = req('Post')['act'];
        $uid = intval(req('Post')['relid']);
        if($act == 'delete'){
            app('db')->query("delete from user where uid = $uid");
        }

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }


    //用户列表
    public function doUser()
    {
        //导入
        //远程最小的id
        $minid = app('db')->getall("SELECT max(rid) FROM `remote`");
        $minid = intval($minid);

        //获取远程数据,进行比对,执行导入操作
        $remote = app('db2')->getall("select * from attend_order where id > $minid");

        //获取本地ID 列表 进行过滤
        $localtel = app('db')->getcol("select mobile from user");
        foreach($remote as $key=>$value){
            if(in_array($remote['tel'],$localtel)){
                unset($remote[$key]);
            }
        }

        foreach($remote as $key=>$value){
            Model('remote')->daorunr($value);       //静默
        }
        //导入结束

        $res = app('db')->getall("select * from user order by sort desc,uid desc");
        view('',[
            'res' => $res
        ]);
    }

    //用户添加保存
    public function doUser_addPost()
    {
        $res = req('Post');
        if(empty($res['mobile'])){
            $this->AjaxReturn([
                "code"  => -200,
                "msg"   => "手机号必须填写"
            ]);
        }

        if(preg_match("/^1[34578]{1}\d{9}$/",$res['mobile'])){
            //echo "是手机号码";
        }else{
            $this->AjaxReturn([
                "code"  => -200,
                "msg"   => "手机号错误"
            ]);
        }

        //数据库中是否存在
        $mobile = saddslashes($res['mobile']);
        if(app('db')->getone("select count(*) from user where mobile = '$mobile'")){
            $this->AjaxReturn([
                "code"  => -200,
                "msg"   => "已经存在该用户"
            ]);
        }

        //添加
        $res = saddslashes($res);
        $res['createAt'] = time();
        app('db')->autoExecute('user',$res,'INSERT');

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }

    public function doUser_add()
    {
        view('',[
            'res' => $res
        ]);
    }

    //修改用户信息响应
    public function doUser_editPost()
    {
        $res = req('Post');
        $uid = intval($res['uid']);
        $res = saddslashes($res);
        app('db')->autoExecute("user",$res,'UPDATE',"uid = $uid");

        $this->AjaxReturn([
            "code"  => 200,
        ]);
    }

    //修改用户对话框
    public function doUser_edit()
    {
        $uid = intval(req('Get')['uid']);
        $row = app('db')->getrow("select * from user where uid = $uid");
        view('',[
            'row' => $row
        ]);
    }


}
