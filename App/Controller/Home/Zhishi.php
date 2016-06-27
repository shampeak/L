<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doZhishiPost()
    {
        $uid = Model('auth')->uid();        //获取用户id


        $choose = req('Post')['choose'];

        $count = count($choose);        //答案个数
        $dbcount = app('db')->getone("SELECT count(*) FROM `s_zhishi`");
//echo $count,$dbcount;
        if($count != $dbcount){
            $this->AjaxReturn([
                'code'=> -200,
                'msg'=>"请填写所有答案"
            ]);
        }

        //计算积分
        $yuejuan = app('db')->getmap("SELECT id,da FROM `s_zhishi`");

        $fen = 0;
        foreach($choose as $key=>$value){
            if($yuejuan[$key] == $value){
                //积分+5
                $fen += 5;
            }
        }


        //记录数据库
        $res['uid'] = $uid;
        $res['type']= 'zhishi';
        $res['da']  = json_encode($choose);
        $res['fen'] = $fen;
        $res['tm']  = time();


        //如果存在原来的数据,则删除,保证只有一条数据
        app('db')->query("delete from s_da where type = 'zhishi' and uid = ".$uid);

        //写入数据库
        $res = saddslashes($res);
        app('db')->autoExecute('s_da',$res,'INSERT');


        $this->AjaxReturn([
            'code'=> 200,
            'msg'=>"知识问答填写完成"
        ]);

    }

    public function doZhishi()
    {
        $uid = Model('auth')->uid();        //获取用户id


//        $info['page']       = intval(req('Get')['page']);
//        $info['pagesize']   = 10;
//        $info['pagecount']  = app('db')->getOne("SELECT count(*) FROM `s_zhishi`");
//
//        $pageinfo = Model('page')->get($info);

        //$res = app('db')->getall("SELECT * FROM `s_zhishi` order by sort desc,id desc limit ".$pageinfo['limit']);
        $res = app('db')->getall("SELECT * FROM `s_zhishi` order by sort desc,id desc");
//D($res);


        //检查是否已经提交过答案
        $da = app('db')->getrow("select * from s_da where type = 'zhishi' and uid = $uid");

        $active = $da['da']?0:1;
        if($da) $da['da'] = json_decode($da['da'],true);


        view('',[
//            'page'  => $pageinfo['page']  ,
//            'pageinfo'=> $pageinfo,
            'da'    => $da,
            'active'=> $active,
            'res'   => $res
        ]);

    }

}
