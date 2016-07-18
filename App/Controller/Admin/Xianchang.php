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
            if(empty($value['timeb']) && empty($value['timee']) && empty($value['title']) && empty($value['nr']) ){

                unset($rc[$key]);
            }
        }

        //删除所有数据
        app('db')->query("delete from xianchang");
        foreach($rc as $key => $value){
            app('db')->autoExecute('xianchang',[
                'sort'=>$value['sort'],
                'timeb'=>$value['timeb'],
                'timee'=>$value['timee'],
                'title'=>$value['title'],
                'nr'=>$value['nr'],
            ],'INSERT');
        }

        //然后insert所有数据
//D($rc);

/*
 *

9:00-9:10   开场
9:10-9:50  演讲主题：XXXXXX
9:50-10:30 演讲主题：XXXX
10:30-11:00  颁奖
11:00-11:40  演讲主题：XXXX     刘禾
11:40-12：00  抽奖
12:00-14:00   午餐



15:30-15:50  抽奖






 *
 */

        $this->AjaxReturn();
    }


    public function doXianchang()
    {

        $res =  app('db')->getall("select * from xianchang order by sort,id");

//D($res);
        view('',[
            'res' => $res
        ]);
    }


}
