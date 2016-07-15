<?php
/**
 *===================================================
 *Filename:VIEW.class.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-11 10:30
 *工厂模式Smarty视图类
 *===================================================
 **/
class View{
    public static $_view;

    /**
     * 初始化配置
     * @param $_viewType
     * @param $_config
     */
    public static function init($_viewType,$_config){
        self::$_view=new $_viewType;
        foreach ($_config as $key => $value){
            if (substr($key,0,3)=='set'){
                self::$_view->$key($value);

            }else{
                self::$_view->$key=$value;
            }
        }
    }

    /**
     * 注册变量
     * @param $_data
     */
    public static function assign($_data){
        foreach ($_data as $key => $value){
            self::$_view->assign($key,$value);
        }
    }

    /**
     * 注册模板
     * @param $_template
     */
    public static function display($_template){
        self::$_view->display($_template);
    }
}
?>
