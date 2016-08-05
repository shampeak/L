<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }


    public function doQuestion()
    {
        $uid = Model('auth')->uid();        //获取用户id

        //嘉宾分组列表
        $jiab = app('db')->getall("SELECT jiab,jiatitle FROM `s_zhishi` group by jiab");



        $res = app('db')->getall("SELECT * FROM `s_zhishi` order by sort desc,id desc");
//D($res);

        //检查是否已经提交过答案
        $da = app('db')->getrow("select * from s_da where type = 'zhishi' and uid = $uid");

        $active = $da['da']?0:1;
        if($da) $da['da'] = json_decode($da['da'],true);


        view('',[
            'da'    => $da,
            'active'=> $active,
            'res'   => $res,
            'jiab'   => $jiab,        //嘉宾名字

        ]);
    }

}
