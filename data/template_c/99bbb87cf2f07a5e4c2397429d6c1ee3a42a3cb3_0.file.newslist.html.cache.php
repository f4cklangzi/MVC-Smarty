<?php
/* Smarty version 3.1.29, created on 2016-07-14 22:03:49
  from "D:\wamp\www\phpStudy\my_framework\tpl\admin\newslist.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57879bc5098991_99976796',
  'file_dependency' => 
  array (
    '99bbb87cf2f07a5e4c2397429d6c1ee3a42a3cb3' => 
    array (
      0 => 'D:\\wamp\\www\\phpStudy\\my_framework\\tpl\\admin\\newslist.html',
      1 => 1468504722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/leftmenu.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_57879bc5098991_99976796 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2634957879bc4f0fb66_50254789';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>后台管理系统</title>
	
	<link rel="stylesheet" href="img/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="img/css/ie.css" type="text/css" media="screen" />
	<?php echo '<script'; ?>
 src="img/js/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="img/js/jquery-1.12.4.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/hideshow.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="img/js/jquery.tablesorter.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="img/js/jquery.equalHeight.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
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
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
<?php echo '</script'; ?>
>

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
			<p><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="admin.php?controller=admin">后台管理中心</a> <div class="breadcrumb_divider"></div> <a class="current">新闻管理列表</a></article>
		</div>
	</section><!-- end of secondary bar -->

	<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:admin/leftmenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
					<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
						<tr>
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td> 
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</td> 
			    				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td> 
			    				<td><input type="image" src="img/images/icn_edit.png" title="修改" onclick="window.location.href='admin.php?controller=admin&method=newsadd&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'"><input type="image" src="img/images/icn_trash.png" title="删除" onclick="window.location.href='admin.php?controller=admin&method=newsdel&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
'"></td>
						</tr>
					<?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
						<tr>
							<td  colspan=4>
								暂无新闻
							</td>
						</tr>
					<?php
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?>
					</tbody>
				</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		<div class="spacer"></div>
	</section>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html><?php }
}
