<?php
/**
 *===================================================
 *Filename:aboutModel.class.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-12 16:20
 *===================================================
 **/
class aboutModel{
    public function aboutInfo(){
        return file_get_contents('data/about.txt');
    }
}
?>
