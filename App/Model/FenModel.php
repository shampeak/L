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

    private $jichufen = 10;
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
        $fen += $this->receive($uid);       //收到的分
        $fen += $this->zhishi($uid);       //收到的分
        $fen -= $this->send($uid);          //送出的分
        return $fen;
    }

    /**
     * @return int
     */
    public function diaocha($uid = 0)
    {
        return 10;
    }

    /**
     * @return int
     */
    public function ziliao($uid = 0)
    {
        return 10;
    }

    /**
     * @return int
     */
    public function qiandao($uid = 0)
    {
        return 10;
    }




    /**
     * @return int
     */
    public function receive($uid = 0)
    {

        return intval($fen);
    }

    /**
     * @return int
     */
    public function send($uid = 0)
    {

        return intval($fen);
    }

    public function zhishi($uid = 0)
    {

        return intval($fen);
    }



    /**
     * 我的排名
     * @param int $uid
     */
    public function paiming($uid = 0)
    {
    }

    /**
     * 积分讲台 1 2 3
     */
    public function jiangtai()
    {
    }

    public function senddetail($uid = 0)
    {
    }

    public function receiveddetail($uid = 0)
    {
    }



}