<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //����
    public function doYc_actpbPost()
    {
        $id = intval(req('Post')['relid']);
        //�޸ı��
        $res['deny'] = 1;
        app('db')->autoExecute('remote',$res,'UPDATE',"rid = $id");
        $this->AjaxReturn();

        //ֻ��Ҫ�����ݿ��н��б��
    }

    //����
    public function doYc_actdrPost()
    {
        $id = intval(req('Post')['relid']);
        //�������
        //do something
        //daoru($id);
        //����
//        if(Model('remote')->daoru($id)){
            //����ɹ�
            //�޸ı��
            $res['save'] = 1;
            app('db')->autoExecute('remote',$res,'UPDATE',"rid = $id");
            $this->AjaxReturn();
//        }else{
//            $this->AjaxReturn([
//                'code'  => -100,
//                'msg'   => '����ʧ��'
//            ]);
//        }

    }

    //Զ����������
    public function doYc()
    {
        //like
        /*
        [id] => 88
                [name] => ��ɺɺ
                [tel] => 13789002222
                [postion] => ����
                [company] => ���ؿ���
                [pay_time] => 0
                [email] => xingcn@126.com
        [address] =>
        [branch] =>
        [pay_price] => 88000
        [source] => 1
        [trade_no] =>
        [trade_id] => 201606280949446713944564318776
        [trade_name] => �������й�SEO���а�����Ʊ1��
        [pay_num] => 1
        [invoice] => 2
        [pay_type] => 1
        [status] => 0
        [c_time] => 1467078584
         */

        //Զ������
        $remote = app('db2')->getall("select * from attend_order where tel <>''");

        //�ܾ��ͱ�����
        $bj = app('db')->getall("SELECT * FROM `remote` ",'rid');

        //��������µ�������INSERT
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


        //���������Ѿ����ڵ��û��˺�
        $tellist = app('db')->getcol("SELECT mobile FROM `user` ");

        view('',[
            'remote'    => $remote,
            'bj'        => $bj,
            'tellist'   => $tellist
        ]);
    }

}
