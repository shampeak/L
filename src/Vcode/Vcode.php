<?php

namespace Grace\Vcode;

/*
* 视图类
*/
class Vcode {

    /*
    * @param string $tplDir
    */
    public function __construct($config = array()){
        session_start();
        require $config['VcodeFile'];
        $vcode = new \Vcode($config['width'],$config['height'],$config['codeNum']);
exit;
        var_dump($vcode);

        D($config);
    }


}



