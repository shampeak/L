<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //屏蔽
    public function doYc_actpbPost()
    {
        $id = intval(req('Post')['relid']);
        //修改标记
        $res['deny'] = 1;
        app('db')->autoExecute('remote',$res,'UPDATE',"rid = $id");
        $this->AjaxReturn();

        //只需要在数据库中进行标记
    }

    //导入
    public function doYc_actdrPost()
    {
        $id = intval(req('Post')['relid']);
        //导入操作
        //do something
        //daoru($id);
        //导入
        if(Model('remote')->daoru($id)){
            //导入成功
            //修改标记
            $res['save'] = 1;
            app('db')->autoExecute('remote',$res,'UPDATE',"rid = $id");
            $this->AjaxReturn();
        }else{
            $this->AjaxReturn([
                'code'  => -100,
                'msg'   => '导入失败:已经导入或其他'
            ]);
        }

    }

    //远程数据屏蔽
    public function doYc()
    {
        //like
        /*
        [id] => 88
                [name] => 雒珊珊
                [tel] => 13789002222
                [postion] => 主管
                [company] => 耐特康赛
                [pay_time] => 0
                [email] => xingcn@126.com
        [address] =>
        [branch] =>
        [pay_price] => 88000
        [source] => 1
        [trade_no] =>
        [trade_id] => 201606280949446713944564318776
        [trade_name] => 第六届中国SEO排行榜大会门票1张
        [pay_num] => 1
        [invoice] => 2
        [pay_type] => 1
        [status] => 0
        [c_time] => 1467078584
         */

        //远程数据
        $remote = app('db2')->getall("select * from attend_order where tel <>''");

        //拒绝和保存标记
        $bj = app('db')->getall("SELECT * FROM `remote` ",'rid');

        //如果存在新的数据则INSERT
        foreach($remote as $key => $value){
            //$rid = $value['id'];
            if(empty($bj[$value['id']])){
                //tianjia
                $res['rid'] = $value['id'];
                $res['deny'] = 0;
                $res['save'] = 0;
                app('db')->autoExecute('remote',$res,'INSERT');
            }
        }

        //上面的过程已经在userlist页面完成


        //检索所有已经存在的用户账号
        $tellist = app('db')->getcol("SELECT mobile FROM `user` ");

        view('',[
            'remote'    => $remote,
            'bj'        => $bj,
            'tellist'   => $tellist
        ]);
    }

}
