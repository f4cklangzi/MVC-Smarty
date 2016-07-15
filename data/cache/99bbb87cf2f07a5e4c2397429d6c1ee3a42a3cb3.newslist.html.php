<?php
/* Smarty version 3.1.29, created on 2016-07-14 22:03:49
  from "D:\wamp\www\phpStudy\my_framework\tpl\admin\newslist.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57879bc50c3910_09145655',
  'file_dependency' => 
  array (
    '99bbb87cf2f07a5e4c2397429d6c1ee3a42a3cb3' => 
    array (
      0 => 'D:\\wamp\\www\\phpStudy\\my_framework\\tpl\\admin\\newslist.html',
      1 => 1468504722,
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
function content_57879bc50c3910_09145655 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理系统</title>
	
	<link rel="stylesheet" href="img/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<script src="img/js/html5.js"></script>
	<![endif]-->
	<script src="img/js/jquery-1.12.4.js" type="text/javascript"></script>
	<script src="img/js/hideshow.js" type="text/javascript"></script>
	<script src="img/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="img/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
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
			<h1 class="site_title"><a href="#">后台管理面板</a></h1>
			<h2 class="section_title"></h2><div class="btn_view_site"><a href="index.php">查看网站</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php?controller=admin">后台管理中心</a> <div class="breadcrumb_divider"></div> <a class="current">新闻管理列表</a></article>
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
		
		<article class="module width_full">
		<header><h3 class="tabs_involved">新闻管理列表</h3>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0" style="margin:0"> 
					<thead> 
						<tr>  
			    				<th>ID</th>
			    				<th>标题</th>
			    				<th>作者</th>
			    				<th>操作</th>
						</tr> 
					</thead>
					<tbody>
											<tr>
			    				<td>10</td> 
			    				<td>Smarty 3.1.25 发布，PHP 模板引擎</td> 
			    				<td>root</td> 
			    				<td><input type="image" src="img/images/icn_edit.png" title="修改" onclick="window.location.href='admin.php?controller=admin&method=newsadd&id=10'"><input type="image" src="img/images/icn_trash.png" title="删除" onclick="window.location.href='admin.php?controller=admin&method=newsdel&id=10'"></td>
						</tr>
											<tr>
			    				<td>7</td> 
			    				<td>习近平对马克思主义政治经济学的新贡献</td> 
			    				<td>学习中国</td> 
			    				<td><input type="image" src="img/images/icn_edit.png" title="修改" onclick="window.location.href='admin.php?controller=admin&method=newsadd&id=7'"><input type="image" src="img/images/icn_trash.png" title="删除" onclick="window.location.href='admin.php?controller=admin&method=newsdel&id=7'"></td>
						</tr>
											<tr>
			    				<td>8</td> 
			    				<td>在南苏丹遇袭、受伤的四级军士长杨树朋抢救无效牺牲</td> 
			    				<td>admin</td> 
			    				<td><input type="image" src="img/images/icn_edit.png" title="修改" onclick="window.location.href='admin.php?controller=admin&method=newsadd&id=8'"><input type="image" src="img/images/icn_trash.png" title="删除" onclick="window.location.href='admin.php?controller=admin&method=newsdel&id=8'"></td>
						</tr>
											<tr>
			    				<td>9</td> 
			    				<td>洪灾致长江流域4900多万人受灾 222人死亡失踪</td> 
			    				<td>administrator</td> 
			    				<td><input type="image" src="img/images/icn_edit.png" title="修改" onclick="window.location.href='admin.php?controller=admin&method=newsadd&id=9'"><input type="image" src="img/images/icn_trash.png" title="删除" onclick="window.location.href='admin.php?controller=admin&method=newsdel&id=9'"></td>
						</tr>
										</tbody>
				</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		<div class="spacer"></div>
	</section>

    <div id="footer">
    本程序由凌云网络提供技术支持(C)
</div>

</body>

</html><?php }
}
