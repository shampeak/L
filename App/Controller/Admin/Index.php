<?php
namespace App\Controller;


class Admin extends BaseController {

    public function __construct(){
        parent::__construct();
    }

    public function doIndex(){
        R('/Admin/User');
    }

}
