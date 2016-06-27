<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    //天假好友,并且返回
    public function doMyfriend_addPost()
    {
        $uid = Model('user')->uid();

        $uname = req('Post')['haoyou'];     //好友名字
        $fid = Model('user')->name2uid($uname);

        $res['tm']  =time();

        //先删除
        app('db')->query("delete from haoyou where uid = $uid and fid = $fid");
        app('db')->query("delete from haoyou where uid = $fid and fid = $uid");


        $res['uid'] = $uid;
        $res['fid'] = $fid;
        app('db')->autoExecute('haoyou',$res,'INSERT');
        $res['fid'] = $uid;
        $res['uid'] = $fid;
        app('db')->autoExecute('haoyou',$res,'INSERT');

        R('/home/myfriend/');
    }

    public function doMyfriend()
    {
        $friends = Model('user')->haoyou();     //好友列表

//D($friends);
        view('',[
            'friends'=> $friends
        ]);

    }

}
