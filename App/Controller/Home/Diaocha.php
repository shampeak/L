<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }
    public function doDiaochaPost()
    {
        $uid = Model('auth')->uid();        //获取用户id
        //完整新
        $choose = req('Post')['choose'];
        $count = count($choose);        //答案个数
        $dbcount = app('db')->getone("SELECT count(*) FROM `s_diaocha`");
        if($count != $dbcount){
            $this->AjaxReturn([
                'code'=> -200,
                'msg'=>"请填写所有答案"
            ]);
        }

        //计算积分
        $fen = 10;

        //记录数据库
        $res['uid'] = $uid;
        $res['type']= 'diaocha';
        $res['da']  = json_encode($choose);
        $res['fen'] = $fen;
        $res['tm']  = time();

        //如果存在原来的数据,则删除,保证只有一条数据
        app('db')->query("delete from s_da where type = 'diaocha' and uid = ".$uid);

        //写入数据库
        $res = saddslashes($res);
        app('db')->autoExecute('s_da',$res,'INSERT');

        $this->AjaxReturn([
            'code'=> 200,
            'msg'=>"调查问卷完成"
        ]);

    }

    public function doDiaocha()
    {
        $uid = Model('auth')->uid();        //获取用户id

        $res = app('db')->getall("SELECT * FROM `s_diaocha` order by sort desc,id desc");
        $da = app('db')->getrow("select * from s_da where type = 'diaocha' and uid = $uid");
        $active = $da['da']?0:1;
        if($da) $da['da'] = json_decode($da['da'],true);
        //==============================================





        view('',[
            'da'        => $da,
            'res'       => $res,
            'active'    => $active,
        ]);
    }

}
