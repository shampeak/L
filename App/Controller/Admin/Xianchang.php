<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doXianchangPost()
    {
        $rc = req('Post')['rc'];

        foreach($rc as $key=>$value){
            if(empty($value['tm']) && empty($value['title']) && empty($value['nr']) ){
                unset($rc[$key]);
            }else{
                $_rc[] = $value;
            }
        }

        foreach($_rc as $value){
            $_v[] = $value['sort'];
        }
        array_multisort($_v,SORT_ASC,$_rc);

        D($_rc);
//D($rc);

        app('Mmcfile')->file('file.json')->set($_rc);

        $this->AjaxReturn();
    }

    //µ÷²éÎÊ¾í
    public function doXianchang()
    {

        $res =  app('Mmcfile')->file('file.json')->get();
print_r($res);
//D($res);
        //ÅÅĞò
        $res = $res?:array();

        //¶Ôsort×Ö¶ÎÅÅĞò


        //»ñÈ¡ÄÚÈİ
        $res[] = [];
        $res[] = [];

        view('',[
            'res' => $res
        ]);
    }


}
