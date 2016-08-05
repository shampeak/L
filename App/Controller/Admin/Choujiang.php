<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doChoujiang_zhongjiangPost()
    {
        //存 数据库
        $res = [
            'uid' => $_POST['uid'],
            'des' => $_POST['des'],
            'tm'  => time()
        ];

        app('db')->autoExecute('zhongjiang',$res,'INSERT');
        $this->AjaxReturn();
    }

    public function doChoujiang_zhongjiang()
    {
        //$uid
        $uid = $_GET['uid'];
        $zhongjiangidarr = app('db')->getcol("SELECT uid FROM `zhongjiang`");

        if(in_array($uid,$zhongjiangidarr)){            //中奖拦截
            die('该用户已经中奖;');
        }

        view('',[
            'uid' => $uid
        ]);

    }
    //用户列表
    public function doChoujiang()
    {
        $jifenweishu = strlen($_GET['jifenweishu']) ? intval($_GET['jifenweishu']) : '';
        $paiming = intval($_GET['paiming']);

        //根据条件检索出用户
        $user = app('db')->getall("SELECT * FROM `user` order by fen desc");

        //1 检索出积分尾数的人
        if (empty($paiming) && strlen($jifenweishu) != 0) {
            foreach ($user as $key => $value) {
                if ($jifenweishu == substr($value['fen'], -strlen($jifenweishu))) {
                    $vs[] = $value;
                }
            }
        }
        if(empty($paiming) && strlen($jifenweishu) == 0) {     //没有尾数限制
        }

        if(!empty($paiming) && strlen($jifenweishu) == 0) {
            //有排名限制
            $vs = app('db')->getall("SELECT * FROM `user` where fen = '{$user[$paiming-1]['fen']}'");
            $vs[] = $user[$paiming-1];
        }

        if(!empty($paiming) && strlen($jifenweishu) != 0) {
            //有排名限制
            $vs = app('db')->getall("SELECT * FROM `user` where fen = '{$user[$paiming-1]['fen']}'");
            $vs[] = $user[$paiming-1];

            foreach ($user as $key => $value) {
                if ($jifenweishu == substr($value['fen'], -strlen($jifenweishu))) {
                    $vs[] = $value;
                }
            }

        }


        $res = $vs;


        view('',[
            'jiang' => app('db')->getcol("SELECT uid FROM `zhongjiang`"),
            'res' => $res,
            'user'=>$user
        ]);
    }


}
