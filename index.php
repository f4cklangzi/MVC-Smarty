<?php
header('Content-Type: text/html;charset=utf-8');
/**
 *===================================================
 *Filename:index.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-12 13:02
 *===================================================
 **/
date_default_timezone_set('Asia/Shanghai');
require_once 'config.php';
require_once 'framework/pc.php';
PC::run($_config);
?>
