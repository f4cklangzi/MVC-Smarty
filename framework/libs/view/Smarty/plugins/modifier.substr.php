<?php
header('Content-Type: text/html;charset=utf-8');
/**
 *===================================================
 *Filename:modifier.substr.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-12 13:53
 *===================================================
 **/
function smarty_modifier_substr($_str,$_len){
    return mb_substr($_str,0,$_len);
}
?>
