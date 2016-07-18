<?php

namespace Grace\Mmcfile;


class Mmcfile{ // class start

    private $_root      = '';
    private $_config    = array();                       // default expire
    private $_jsonFile  = array();
    private $_nr      = array();

    public function __construct($config = array()){
        $this->_config      = $config;
        $this->_root        = $config['root'];
    }

    public function file($filename = '')
    {
        $this->_jsonFile = $this->_root.$filename;
        return $this;
    }



    public function get($key = '')
    {
        $this->read();
        if($key){
            return $this->_nr[$this->_jsonFile][$key];
        }else{
            return $this->_nr[$this->_jsonFile];
        }
    }

    public function set($value = array(),$key = '')
    {
        $this->read();
        if($key){
            $this->nr[$this->_jsonFile]['key'] = $value;
        }else{
            $this->nr[$this->_jsonFile] = $value;
        }
        $this->save();
    }

    //===========================================

    private function read()
    {
        if(empty($this->_nr[$this->_jsonFile])) {
            if (file_exists($this->_jsonFile)) {
                $_ar = @file_get_contents($this->_jsonFile);
                $ar = json_decode($_ar,true);
            } else {
                $ar = array();
            }
            $this->_nr[$this->_jsonFile] = $ar;
        }

        return $this;
    }

    private function save()
    {
        if(!is_dir($this->_root)){            //路径不存在
            die("mmcfile 存储路径不存在");
        }
        @file_put_contents($this->_jsonFile,json_encode($this->nr[$this->_jsonFile]));
    }

}
