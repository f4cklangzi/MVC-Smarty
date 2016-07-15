<?php
/**
 *===================================================
 *Filename:DB.class.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-11 10:59
 *===================================================
 **/
class DB{
    public static $_db;
    public static function init($_dbType,$_config){
        foreach ($_config as $key => $value){
            $_set='set'.$key;
            dbconfig::$_set($value);
        }
        self::$_db=$_dbType::getInstance();
    }

    public static function getRows($sql, $parameters = null){
        return self::$_db->getRows($sql, $parameters);
    }
    public static function getRow($sql, $parameters = null){
        return self::$_db->getRow($sql, $parameters);
    }
    public static function update($sql, $parameters = null){
        return self::$_db->update($sql, $parameters);
    }
}
?>
