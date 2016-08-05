<?php

namespace Controller;

/*
 * 所有设备都是管理员所在机构的设备
 * login  即为手机号
 */

class Upload extends BaseController {


    public $code    = [
        -101    => '没有获取到上传的文件0',
        -200    => 'extfile is limit!',
        -201    => 'file is too big!',
    ];      //调用             $this->AjaxReturn(['code' => -101,]);


    public function doUserimagePost(){

    }



}
