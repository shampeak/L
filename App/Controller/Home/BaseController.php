<?php

namespace App\Controller;


//hook
class BaseController{

    public function __construct(){
    }

    public function AjaxReturn($res = []){
        if(!is_array($res)) {
            $res['code'] = intval($res);
        }else{
            $res['code']    = $res['code']?:200;
            $res['msg']     = $res['msg']?:(($res['code']>0)?'suceed':'error');
            $res['js']      = $res['js']?:'if(data.code>0){/*alert("操作成功");*/location.reload();}else{alert(data.msg);}';
        }
        echo json_encode($res);
        exit;
    }

    public function actions()
    {

    }

    public function behaviors()
    {
        return [
            'access' => [
                'only' => [],                         //行为限定
                    'rules' => [
                    [
                        'actions' => [],              //行为限定
                        'allow' => true,              //判定
                        'roles' => ['G'],
                    ],
                ],
            ],
        ];
    }

}
