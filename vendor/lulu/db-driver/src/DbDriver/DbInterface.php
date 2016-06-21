<?php
/**
 * Dbdriver Interface
 * @author Silu Zhou <siluzhou_pku@163.com>
 * @version 1.0
 * @Date: 2016/5/24
 * @Time: 15:26
 */
namespace Lulu\DbDriver;

/**
 * DbInterface
 *
 * Interface Declaration
 *
 */
interface DbInterface
{
    /**
     * begin transaction
     */
    public function beginTransaction();
    /**
     * commit transaction
     */
    public function commit();
    /**
     * rollback transaction
     */
    public function rollBack();
    /**
     * return times of accessing database
     */
    public function queryCount();
    /**
     * return the last inserted ID
     */
    public function lastInsert();

    /**
     * update database
     * @param string $table
     * @param array $values
     * @param string $where
     */
    public function update($table, $values,$where);
    /**
     * insert database
     * @param string $table
     * @param array $values
     * @return boolean/obj
     */
    public function insert($table, $values);

    /**
     * delete database
     *
     * @param string $table
     * @param string $where
     * @return boolean/obj
     */
    public function delete($table,$where);
    /**
    *execute SQL statements
    */
    public function getAll($sql,$field);

    /**
     *execute SQL statements
     *
     * @param string $sql
     */
    public function getRow($sql);
    /**
     *execute SQL statements
     *
     * @param string $sql
     */
    public function getCol($sql);
    /**
     *execute SQL statements
     *
     * @param string $sql
     */
    public function getMap($sql);
    /**
     *execute SQL statements
     *
     * @param string $sql
     */
    public function getOne($sql);

    /**
     *close database
     */
    public function close();

    /**
    * escaping the field values
    * @param string/array $string
    * @return string/array
    */
    public function saddslashes($string);
}


