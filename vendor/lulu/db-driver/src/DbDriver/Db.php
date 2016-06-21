<?php
/**
 * DB Driver
 *
 * connect and manage database
 * @author Silu Zhou <siluzhou_pku@163.com>
 * @version 1.0
 * @Date: 2016/5/24
 * @Time: 15:27
 */

namespace Lulu\DbDriver;

/**
 * Db
 *
 * connect and manage DbInterface by  inheriting interface of DbInterface
 *
 */
class Db implements DbInterface{
    /**
     * config array
     * @access private
     * @var array
     */
    private $_config  = array();    //入口参数

    /**
     * pdo interface
     * @access private
     * @var pdo
     */
    private $_pdo = null;

    /**
     * times of accessing database(only write)
     * @access private
     * @var int
     */
    private $_querycount=0;


    /**
     * constructor  {@link $_config}
     *
     * @param array $config
     */
    public function __construct($config = array()){
        $this->_config = $config;
    }

    /**
     * lower-level function to manipulate database
     * @access private
     * @param string $sql
     * @return boolean
     */
    private function doSQL($sql = '')
    {
        if ($this->_pdo==null) {
            $this->connect();
        }
        $res = $this->_pdo->query($sql);
        $this->_querycount++;
        //$timestart=microtime(TRUE);

        //$timeend=microtime(TRUE);
        //日志
        //$this->querylog($timeend-$timestart,$sql);
        return  $res;
    }
    /*private function querylog(
        $actiontime='',
        $action=''
    )
    {
        if($this->log==null) {
            $log = new Logger('log');
            $log->pushHandler(new StreamHandler(dirname(dirname(__DIR__)) . '/log/dblog.log', Logger::INFO));
        }
        $log->info($action,array("actiontime"=>$actiontime));
        return true;
    }*/


    /**
     * connect database
     * @access private
     * @return boolean
     */
    private function connect()
    {
        $dsn ='mysql:host='.$this->_config['hostname'].';dbname='.$this->_config['database'];
        try{
            $this->_pdo = new \PDO($dsn,$this->_config['username'],$this->_config['password'],array(\PDO::ATTR_PERSISTENT => $this->_config['pconnect']));
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }

    /**
     * begin transaction
     */
    public function beginTransaction()
    {
        if($this->_pdo==null)
            $this->connect();
        return $this->_pdo->beginTransaction();

    }
    /**
     * commit transaction
     */
    public function commit()
    {
        if($this->_pdo==null)
            $this->connect();
        return $this->_pdo->commit();

    }


    /**
     * rollback transaction
     */
    public function rollBack()
    {
        if($this->_pdo==null)
            $this->connect();
        return $this->_pdo->rollBack();
    }

    /**
     * return times of accessing database
     */
    public function queryCount()
    {
        return $this->_querycount;

    }
    
    /**
     * return the last inserted ID
     */
    public function lastInsert()
    {
        if($this->_pdo===null)
            $res=null;
        else
            $res=$this->_pdo->lastInsertId();
        return   $res;
    }

    /**
     * execute SQL statements， update data
     * @access public
     * @param string $table
     * @param array $values
     * @param string $where
     * @return boolean/obj
     */
    public function update($table, $values,$where)
    {

        $table=$this->saddslashes($table);
        $values=$this->saddslashes($values);
        $where=$this->saddslashes($where);
        $count=count($values);
        $field_a=array_keys($values);
        $value_a=array_values($values);
        $value="";
        if($count==0){
            $res=false;
        } else{
            $value.="`".$field_a[0]."` = '".$value_a[0]."'";
            for($i=1;$i<$count;$i++)
            {
                $value.=", `".$field_a[0]."` = '".$value_a[0]."'";
            }
        }
        $sql="UPDATE `".$table."` SET "."$value"." WHERE ".$where;
        $res=$this->doSQL($sql);
        return $res;
    }

    /**
     * execute SQL statements， delete data
     * @access public
     * @param string $table
     * @param array $values
     * @return boolean/obj
     */
    public function insert($table, $values)
    {

        $table=$this->saddslashes($table);
        $values=$this->saddslashes($values);
        $count=count($values);
        $field_a=array_keys($values);
        $value_a=array_values($values);
        $field="";
        $value="";
        if($count==0){
            $res=false;
        } else{
            $field.="`".$field_a[0]."`";
            $value.="'".$value_a[0]."'";
            for($i=1;$i<$count;$i++)
            {
                $field.=",`".$field_a[$i]."`";
                $value.=",'".$value_a[$i]."'";
            }
        }
        $sql="INSERT INTO `".$table."` ( ".$field." ) VALUES (".$value.")";
        $res=$this->doSQL($sql);
        return $res;

    }

    /**
     * execute SQL statements， delete data
     * @access public
     * @param string $table
     * @param string $where
     * @return boolean/obj
     */
    public function delete($table,$where)
    {
        $table=$this->saddslashes($table);
        $where=$this->saddslashes($where);
        $sql="DELETE from `".$table."` WHERE ".$where;
        $res=$this->doSQL($sql);
        return $res;

    }


    /**
     * execute SQL statements， get all data
     * @access public
     * @param string $sql
     * @return array
     */
    public function getAll($sql = '',$field)
    {
        $res = $this->doSQL($sql);
        $shift=array();
        if($res===false) {
            $all=array();
        } else {
            $res->setFetchMode(\PDO::FETCH_ASSOC);
            $all = $res->fetchAll();
            $count=count($all,0);
            $keys=array();
            for($i=0;$i<$count;$i++)
                $keys[] = $all[$i][$field];

            for($i=0;$i<$count;$i++)
                $shift[$keys[$i]]=$all[$i];
        }
        return $shift;
    }
    /**
     * execute SQL statements， get first row of all data
     * @access public
     * @param string $sql
     * @return array
     */
    public function getRow($sql = '')
    {
        $res = $this->doSQL($sql);
        if($res===false) {
            $row=array();
        } else {
            $res->setFetchMode(\PDO::FETCH_ASSOC);
            $row = $res->fetch();
            if($row===false)
                $row=array();
        }
        return $row;
    }

    /**
     * execute SQL statements， get first col of all data
     * @access public
     * @param string $sql
     * @return array
     */
    public function getCol($sql='')
    {
        $res=$this->doSQL($sql);
        if($res===false) {
            $col=array();
        } else {
            $res->setFetchMode(\PDO::FETCH_ASSOC);
            $col=$res->fetchAll(\PDO::FETCH_COLUMN);
        }
        return $col;
    }
    /**
     * execute SQL statements， get the map of first and second cols from all data
     * @access public
     * @param string $sql
     * @return array
     */
    public function getMap($sql='')
    {
        $res=$this->doSQL($sql);
        if($res==false) {
            $map=array();
        } else {
            $map=array();
            $res->setFetchMode(\PDO::FETCH_NUM);
            $res=$res->fetchAll();
            //print_r($res);
            if(count($res[0])>=2) {
                $cou=count($res,0);
                for($i=0;$i<$cou;$i++)
                    $map[$res[$i][0]]=$res[$i][1];
            }
        }

        return $map;

    }
    /**
     * execute SQL statements， get first one of all data
     * @access public
     * @param string $sql
     * @return int/string
     */
    public function getOne($sql='')
    {
        $res = $this->doSQL($sql);
        if($res===false){
            $one=NULL;
        } else {
            $res->setFetchMode(\PDO::FETCH_ASSOC);
            $one=$res->fetchColumn();//fetchAll(\PDO::。。。;查询直接得到值
            if($one===false)
                $one=NULL;
        }
        return $one;

    }
    /**
     * close database
     * @access public
     * @return boolean
     */
    public function close()
    {
        $this->_pdo = null;
        return true;
    }
    /**
     * escaping the field values by using addslashes();
     * @access public
     * @param string/array $string
     * @return string/array
     */
    public function saddslashes($string) {
        if(is_array($string)) {
            foreach($string as $key => $val) {
                $string[$key] = addslashes($val);
            }
        } else {
            $string = addslashes($string);
        }
        return $string;
    }
}


