<?php
/* Smarty version 3.1.29, created on 2016-07-14 22:02:48
  from "D:\wamp\www\phpStudy\my_framework\tpl\admin\newsadd.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57879b88882261_20960186',
  'file_dependency' => 
  array (
    '37ff34142bcb550c2f3d1332a0b2f772d2cbc947' => 
    array (
      0 => 'D:\\wamp\\www\\phpStudy\\my_framework\\tpl\\admin\\newsadd.html',
      1 => 1468504709,
      2 => 'file',
    ),
    '3f7fdecea2f7d88fcfb17675690505bc768b2780' => 
    array (
      0 => 'D:\\wamp\\www\\phpStudy\\my_framework\\tpl\\admin\\leftmenu.html',
      1 => 1402838738,
      2 => 'file',
    ),
    '6953d7bb90280f4b99dd33b42bf1927a9423c382' => 
    array (
      0 => 'D:\\wamp\\www\\phpStudy\\my_framework\\tpl\\footer.html',
      1 => 1468311306,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_57879b88882261_20960186 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理系统</title>
	<link rel="stylesheet" href="img/css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="img/js/cleditor/jquery.cleditor.css" type="text/css"/>
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<script src="img/js/html5.js"></script>
	<![endif]-->
	<script src="img/js/jquery-1.12.4.min.js" type="text/javascript"></script>
	<script src="img/js/hideshow.js" type="text/javascript"></script>
	<script src="img/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="img/js/jquery.equalHeight.js"></script>
	<script src="img/js/cleditor/jquery.cleditor.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
        $('#editor').cleditor({
//            width:150,
            height:180
        });
        $(".tablesorter").tablesorter();
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">后台管理面板</a></h1>
			<h2 class="section_title"></h2><div class="btn_view_site"><a href="index.php">查看网站</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php?controller=admin">后台管理系统</a> <div class="breadcrumb_divider"></div> <a class="current">文章发布</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
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
</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		<form id="form1" name="form1" method="post" action="admin.php?controller=admin&method=newsadd">
			<article class="module width_full">
				<header><h3>发表新文章</h3></header>
					<div class="module_content">
							<fieldset>
								<label>标题</label>
								<input type="text" name="title" value="Smarty 3.1.25 发布，PHP 模板引擎">
							</fieldset>
							<fieldset>
								<label>内容</label>
								<textarea rows="12" id="editor" name="content">Smarty 3.1.25 发布，主要是 Bug 修复、代码优化。详细更新内容请看更新日志，下载：https://github.com/smarty-php/smarty/releases/tag/v3.1.25。

smarty 是一个基于PHP开发的PHP模板引擎。它提供了逻辑与外在内容的分离，简单的讲，目的就是要使 用PHP程序员同美工分离,使用的程序员改变程序的逻辑内容不会影响到美工的页面设计，美工重新修改页面不会影响到程序的程序逻辑，这在多人合作的项目中 显的尤为重要。</textarea>
							</fieldset>
							<fieldset style="width:48%; float:left; margin-right: 3%;">
                                <label>作者</label>
                                <input type="text" name="author" style="width:92%;" value="root">
							</fieldset>
							<fieldset style="width:48%; float:left;">
								<label>出处</label>
								<input type="text" name="from" style="width:92%;" value="开源中国社区">
							</fieldset><div class="clear"></div>
					</div>
				<footer>
					<div class="submit_link">
						<input type="hidden" name="id" value="10">
						<input type="submit" name="submit" value="发布" class="alt_btn">
					</div>
				</footer>
			</article>
		</form>
		<div class="spacer"></div>
	</section>
    <style>
        #footer{
            top: -10px;
        }
    </style>
    <div id="footer">
    本程序由凌云网络提供技术支持(C)
</div>

</body>

</html><?php }
}
