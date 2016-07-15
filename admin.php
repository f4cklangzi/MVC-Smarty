<?php
header('Content-Type: text/html;charset=utf-8');
/**
 *===================================================
 *Filename:index.php
 *Author:f4ck_langzi@foxmail.com
 *Date:2016-07-11 11:20
 *===================================================
 **/
session_start();
require_once 'config.php';
require_once 'framework/pc.php';
PC::run($_config);
?>
