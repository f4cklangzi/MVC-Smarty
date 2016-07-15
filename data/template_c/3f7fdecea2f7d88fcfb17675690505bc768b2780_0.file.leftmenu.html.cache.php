<?php
/* Smarty version 3.1.29, created on 2016-07-14 22:02:48
  from "D:\wamp\www\phpStudy\my_framework\tpl\admin\leftmenu.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57879b88810dc2_33971397',
  'file_dependency' => 
  array (
    '3f7fdecea2f7d88fcfb17675690505bc768b2780' => 
    array (
      0 => 'D:\\wamp\\www\\phpStudy\\my_framework\\tpl\\admin\\leftmenu.html',
      1 => 1402838738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57879b88810dc2_33971397 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1878557879b8880cf47_54123400';
?>
<aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?controller=admin&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="admin.php?controller=admin&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?controller=admin&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }
}
