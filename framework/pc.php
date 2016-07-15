<?php
/**
 *===================================================
 *Filename:pc.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-11 10:45
 *===================================================
 **/
    define('ROOT_PATH',dirname(__FILE__));
    include_once ROOT_PATH.'/include.list.php';
    foreach ($_paths as $path){
        include_once ROOT_PATH.'/'.$path;
    }
    class PC{
        public static $_controller;
        public static $_method;
        public static $_config;
        private static function init_db(){
            DB::init('Mysql_PDO',self::$_config['dbConfig']);
        }
        private static function init_view(){
            View::init('Smarty',self::$_config['viewConfig']);
        }
        private static function init_controller(){
            self::$_controller=isset($_GET['controller'])?html($_GET['controller']):'index';
        }
        private static function init_method(){
            self::$_method=isset($_GET['method'])?html($_GET['method']):'index';
        }
        public static function run($_config){
            self::$_config=$_config;
            self::init_db();
            self::init_view();
            self::init_controller();
            self::init_method();
            C(self::$_controller,self::$_method);
        }
    }
?>
