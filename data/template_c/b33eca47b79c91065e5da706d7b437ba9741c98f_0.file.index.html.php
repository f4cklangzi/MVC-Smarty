<?php
/* Smarty version 3.1.29, created on 2016-07-15 09:34:48
  from "D:\wamp\www\phpStudy\my_framework\tpl\index\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57883db85f8fc5_93653678',
  'file_dependency' => 
  array (
    'b33eca47b79c91065e5da706d7b437ba9741c98f' => 
    array (
      0 => 'D:\\wamp\\www\\phpStudy\\my_framework\\tpl\\index\\index.html',
      1 => 1468313030,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_57883db85f8fc5_93653678 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\wamp\\www\\phpStudy\\my_framework\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_substr')) require_once 'D:\\wamp\\www\\phpStudy\\my_framework\\framework\\libs\\view\\Smarty\\plugins\\modifier.substr.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻发布系统</title>
</head>
<style type="text/css">
	*{
		padding: 0px;
		margin: 0px;
        font-family: 楷体;
        color: #555;
    }
    html{
        background-color: #eee;
    }
	.nav{
		background: #7CCD7C;
		width: 100%;
		height: 200px;

	}
	.nav ul{
		background: black;
		color: white;
		overflow: hidden;


	}
	.nav li{
		float: left;
		list-style: none;
		line-height: 45px;
		margin-left: 10%;
	}
	.nav .spe{
		margin-left:5%;
	}
	a{
		text-decoration: none;
		color: inherit;
		font-weight: bolder;
		/*text-shadow: 0 0 4px #fc6;*/
	}
	.content{
		width: 80%;
		margin: 0 auto;
		box-shadow: 0 0 10px #7CCD7C;
		padding-bottom: 40px;
		z-index: 3;
		position: relative;
		background: white;
		top:-50px;
		left:50%;
		margin-left: -40%;
		overflow: hidden;
	}
	.newslist{
		width: 70%;
		float: left;
		
	}
	.aboutus{
		width: 30%;
		box-sizing: border-box;
		border-left: 2px solid #ccc;
		height: 300px;
		float: left;
		margin-top: 40px;
		padding: 10px;
	}
	.list{
		width: 80%;
		margin: 40px auto;
		border: 1px dotted #ccc;
		padding: 10px;
	}
	.list h3{
		line-height: 30px;
		font-size: 18px;
        color: #7CCD7C;
	}
	.list span{
		padding: 0 5px;
		font-size: 14px;
		color: #999;
	}
	.list p{
		text-indent: 2em;
		padding: 20px;
		font-size: 14px;
	}
    #footer{
        display: inline-block;
        float: left;
        width: 100%;
        text-align: center;
        color: #555;
        /*padding: 10px;*/
        position: relative;
        top: -30px;
    }
</style>
<body>
	<div class="nav">
		<p style='color:#fff;font-size: 40px;padding-top:30px;margin-left:10%;'>新闻发布系统</br></p>
        <span style="display:inline-block;margin: 20px 0 0 250px;color: #fff;font-size: 18px">－获取最新、最热资讯</span>
	</div>
	<div class="content">
		<div class='newslist'>
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_news_0_saved_item = isset($_smarty_tpl->tpl_vars['news']) ? $_smarty_tpl->tpl_vars['news'] : false;
$_smarty_tpl->tpl_vars['news'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['news']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
$__foreach_news_0_saved_local_item = $_smarty_tpl->tpl_vars['news'];
?>
			<div class="list">
				<h3><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h3>
				<span>作者:<?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
</span><span>最后修改:<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],'%Y-%m-%d');?>
</span>
				<p><?php echo smarty_modifier_substr($_smarty_tpl->tpl_vars['news']->value['content'],110);?>
</p>
				<a href='index.php?controller=index&method=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
' style="color:#369;font-size: 13px;font-weight: normal;text-shadow:none">阅读更多</a>
			</div>
        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['news']->_loop) {
?>
            <h3>暂无新闻</h3>
		<?php
}
if ($__foreach_news_0_saved_item) {
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved_item;
}
?>
		</div>
		<div class='aboutus'>
			<h3>关于我们</h3>
			<p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['about']->value)===null||$tmp==='' ? '未添加关于信息' : $tmp);?>
</p>
		</div>
	</div>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
