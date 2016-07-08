<?php /* Smarty version 2.6.26, created on 2016-07-08 10:30:18
         compiled from index.dwt */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
<meta name="generator" content="DouPHP v1.3" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<link href="http://localhost/~dawson/saiou/theme/default/hover-min.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/~dawson/saiou/theme/default/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/~dawson/saiou/theme/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://localhost/~dawson/saiou/theme/default/images/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/~dawson/saiou/theme/default/images/global.js"></script>
<script type="text/javascript" src="http://localhost/~dawson/saiou/theme/default/images/jquery.flexslider-min.js"></script>
</head>
<body>
<div id="wrapper"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="index"> <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/slide_show.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 	<div id="content" class="wrap mb">
 		<div id="product"> 
		   <?php if ($this->_tpl_vars['open']['product']): ?>
		   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/recommend_product.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		   <?php endif; ?>
		</div>
 	</div>
 	<div class="perfect text-center">
		<div class="container">
			<h3 style=" font-family: Microsoft Yahei, \5FAE\8F6F\96C5\9ED1, \5b8b\4f53, Arial, Lucida, Verdana, Helvetica, sans-serif;"><?php echo $this->_tpl_vars['site']['site_name']; ?>
</h3>
			<div class="perfect-buttons">
				<a href="page.php?id=1" class="bor"><?php echo $this->_tpl_vars['lang']['aboutme']; ?>
</a>
				<a href="product_category.php" class="red"><?php echo $this->_tpl_vars['lang']['ourproduct']; ?>
</a>
			</div>
			</div>
		</div>
 	<div>
	<div id="index-news" class="wrap mb">
	   <?php if ($this->_tpl_vars['open']['article']): ?>
	   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/recommend_article.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	   <?php endif; ?>
 	</div>
  <div class="clear"></div>
 </div>
 <?php if ($this->_tpl_vars['open']['link']): ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/link.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php endif; ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/online_service.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>