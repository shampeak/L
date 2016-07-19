<?php
namespace App\Controller;


class Home extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doZiliao_upPost()
    {
        $uid = Model('user')->uid();        //获取用户id

        $liu = $GLOBALS['HTTP_RAW_POST_DATA'];
        $liu = json_decode($liu,true);

        $pic = $liu['base64'];

        $size = strlen($pic);

        $pic = substr(strstr($pic,','),1);
        $img = base64_decode($pic);

        $root = APPROOT.'../wwwroot/upload/';
        $rootshow = '/upload/';

        //路径监测
        $dirp = $root.date("Ym").'/';
        !is_dir($dirp) && @mkdir($dirp);
        $dirp = $root.date("Ym").'/'.date("d").'/';
        !is_dir($dirp) && @mkdir($dirp);


        //-----------------------------------------------------------------
        $filename = date("Ym").'/'.date("d").'/'.md5(time().rand(1000000,9999999)).'.jpg';
        $newfile = $root . $filename;
        $url = $rootshow.$filename;
        //-----------------------------------------------------------------
        file_put_contents($newfile,$img);

        //保存头像数据
        $res['headimg'] = $url;
        app('db')->autoExecute('user',$res,'UPDATE',"uid = $uid");

        $this->AjaxReturn([
            'error'=>false,
            'src'=>$url,                //返回图片地址
            'size'=>$size,
        ]);
    }


    public function doZiliaoPost()
    {
        $uid = Model('user')->uid();        //获取用户id

        $res = req('Post');
        app('db')->autoExecute('user',$res,'UPDATE',"uid = $uid");

        Model('fen')->fen($uid);

        $this->AjaxReturn([
            'code' => -100,
            'msg'   => '修改完成'
        ]);
    }

    public function doZiliao()
    {
        $uid = Model('user')->uid();        //获取用户id
        $userinfo = Model('user')->userinfo();
//D($userinfo);
        view('',[
            'res'       => $res,
            'userinfo'  => $userinfo,
            'uid'       => $uid
        ]);

    }

}
