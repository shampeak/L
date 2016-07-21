<?php
/**
 * Created by PhpStorm.
 * User: shampeak
 * Date: 2016/6/19
 * Time: 18:44
 */

namespace App\Model;


class FenModel
{

    private $jichufen = 0;
    private $send     = 5;

    /**
     * 返回基础分
     * @return int
     */
    public function jichu()
    {
        return $this->jichufen;
    }

        /**
     * @param $uid
     * @return int
     */
    public function fen($uid=0)
    {


        $fen = $this->jichufen;             //基础分
        $fen += $this->diaocha($uid);       //调查分
        $fen += $this->ziliao($uid);        //资料分
        $fen += $this->qiandao($uid);       //签到分

        $fen += $this->zhishi($uid);       //知识
//        $fen += $this->receive($uid);       //收到的分
//        $fen -= $this->send($uid);          //送出的分


        //更新个人资料的数据库
        $res['fen'] = $fen;

        app('db')->autoExecute('user',$res,'UPDATE',"uid = $uid");

        return $fen;
    }

    /**
     * @return int
     */
    public function diaocha($uid = 0)
    {
        //核对该用户的答案计算积分
        $sql = "SELECT * FROM `s_da` where `type` = 'diaocha' and uid = $uid";
        $row = app('db')->getrow($sql);
        $fen = empty($row)?0:30;
        return intval($fen);
    }

    /**
     * @return int
     */
    public function ziliao($uid = 0)
    {
        //看用户资料是否填写完成
        $sql = "select * from user where uid = $uid";
        $row = app('db')->getrow($sql);
        if(!empty($row['headimg']) && !empty($row['name']) && !empty($row['gender']) && !empty($row['company']) && !empty($row['title']) && !empty($row['weixin'])){
            $fen = 20;
        }else{
            $fen = 0;
        }



        return $fen;
    }

    /**
     * @return int
     */
    public function qiandao($uid = 0)
    {
        //计算数据库中有几个签到
        $count = app('db')->getone("select count(*) from qiandao where uid= $uid");
        $res = $count*2;
        return $res;
    }

    //计算有用户的知识分
    public function zhishi($uid = 0)
    {
        //核对该用户的答案计算积分
        $sql = "SELECT fen FROM `s_da` where `type` = 'zhishi' and uid = $uid";
        $fen = app('db')->getone($sql);
        return intval($fen);
    }


    ///====================================
    //下面的已经弃用

    /**
     * @return int
     */
    public function receive($uid = 0)
    {

        //收到的
        $sql = "select count(*) from jifengzengsong where `to` = $uid";
        $count = app('db')->getone($sql);

        $fen = $count*5;
        return intval($fen);
    }

    /**
     * @return int
     */
    public function send($uid = 0)
    {

        $sql = "select count(*) from jifengzengsong where `from` = $uid";
       // echo $sql;
        $count = app('db')->getone($sql);

        $fen = $count*5;
        return intval($fen);
    }




    public function senddetail($uid = 0)
    {
        $sql = "select tm from jifengzengsong where `from` = $uid order by tm desc";
        $tmlist = app('db')->getcol($sql);
        return $tmlist;
    }

    public function receivedetail($uid = 0)
    {
        $sql = "select tm from jifengzengsong where `to` = $uid order by tm desc";
        $tmlist = app('db')->getcol($sql);
        return $tmlist;
    }



}