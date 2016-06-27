<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }


    //
    public function doMyjifen()
    {
        $uid        = Model('user')->uid();

        $fen        = Model('fen')->fen($uid);            //总分    40
        $jichu      = Model('fen')->jichu($uid);          //基础分    10
        $zhishi     = Model('fen')->zhishi($uid);         //知识    10
        $diaocha    = Model('fen')->diaocha($uid);        //5
        $qiandao    = Model('fen')->qiandao($uid);        //0
        $send       = Model('fen')->send($uid);        //0
        $receive    = Model('fen')->receive($uid);        //0
        $ziliao     = Model('fen')->ziliao($uid);        //0
        //送出详细和收到详细
        $senddetail       = Model('fen')->senddetail($uid);        //0
        $receivedetail    = Model('fen')->receivedetail($uid);        //0


        view('',[
            'fen'       => $fen,
            'jichu'     => $jichu,
            'zhishi'    => $zhishi,
            'diaocha'   => $diaocha,
            'qiandao'   => $qiandao,
            'send'      => $send,
            'receive'   => $receive,
            'ziliao'    => $ziliao,
            'senddetail'    => $senddetail,
            'receivedetail'    => $receivedetail,

        ]);

    }

}
