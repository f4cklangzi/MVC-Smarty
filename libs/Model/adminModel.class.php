<?php
/**
 *===================================================
 *Filename:adminModel.class.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-11 12:30
 *===================================================
 **/
//仅仅从数据库取数据
class adminModel{
    //定义表名
    public $_table='admin';
    //取用户信息
    public function getRow($_username){
        //表名不能使用占位符
        $_sql="SELECT * FROM {$this->_table} WHERE username=:username";
        return DB::getRow($_sql,array(':username'=>$_username));
    }
    //用户密码核对->auth模型


}
?>
