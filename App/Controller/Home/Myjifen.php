<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }


    //
    public function doMyjifen()
    {
        $uid    = Model('user')->uid();
        $fen    = Model('fen')->fen($uid);           //总分
        $jichu  = Model('fen')->jichu($uid);           //基础分
        $zhishi =  Model('fen')->zhishi($uid);
        $diaocha =  Model('fen')->diaocha($uid);
        $qiandao =  Model('fen')->qiandao($uid);




        view('',[
            'res'=> $res
        ]);

    }

}
