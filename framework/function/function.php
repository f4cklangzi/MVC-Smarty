<?php
    /**
     *===================================================
     *Filename:function.php
     *Author:f4ck_langzi@foxmail.com
     *Date:2016-07-08 13:23
     *===================================================
     **/
    function C($_name,$_method){
        require_once 'libs/Controller/'.$_name.'Controller.class.php';
        $_objName=$_name.'Controller';
        $_obj=new $_objName();
        $_obj->$_method();
    }
    function M($_name){
        require_once 'libs/Model/'.$_name.'Model.class.php';
        $_objName=$_name.'Model';
        $_obj=new $_objName();
        return $_obj;
    }
    function V($_name){
        require_once 'libs/View/'.$_name.'View.class.php';
        $_objName=$_name.'View';
        $_obj=new $_objName();
        return $_obj;
    }
    function html($_str){
        if (is_array($_str)){
            foreach ($_str as $item =>$value){
                $_str[$item]=html($value);
            }
        }else{
            $_str=htmlspecialchars($_str);
        }
        return $_str;
    }
    function ORG($_path,$_name,$_params=array()){
        require_once 'libs/ORG/'.$_path.$_name.'.class.php';
        $_obj=new $_name;
        if (!empty($_params)){
            foreach ($_params as $_key=> $_value){
                if (substr($_key,0,3)=='set'){
                    $_obj->$_key($_value);

                }else{
                    $_obj->$_key=$_value;
                }
            }
        }
        return $_obj;
    }
?>
