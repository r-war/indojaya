<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 20:19:27
         compiled from "templates/cms-admin/core/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15669276695ce3fadf487503-62441874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a4cd6c0ac4c2255343ed18ff688ff41f1fe81cc' => 
    array (
      0 => 'templates/cms-admin/core/header.tpl',
      1 => 1497344640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15669276695ce3fadf487503-62441874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oMod' => 0,
    'oLoginAdmin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3fadf6161b9_56696272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3fadf6161b9_56696272')) {function content_5ce3fadf6161b9_56696272($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.loc.php';
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $_smarty_tpl->tpl_vars['oMod']->value->getMetaData('title');?>
 | <?php echo $_smarty_tpl->tpl_vars['oMod']->value->getConfigurationValue('web_title');?>
</title>
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getMetaData('keywords');?>
">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getMetaData('description');?>
">
		<meta name="author" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.png"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
bootstrap-responsive.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
style.css">
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
jquery.form.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
cal.js"></script>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
script.js"></script>
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getConfigVariable('IMG_PATH');?>
icon.jpg" type="image/x-icon" />

		<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
checkAll.js"></script>
		<script type="text/javascript">
		
			function doDelete(id,name)
			{
			
				if(confirm("<?php echo smarty_function_loc(array('k'=>'confirm_delete'),$_smarty_tpl);?>
 \'" + name + "\'?"))
			
				{
					
					redirect('<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule());?>
&delete=' + id);
			
				}
			}
			function doDeleteAttr(id,name)
			{
			
				if(confirm("<?php echo smarty_function_loc(array('k'=>'confirm_delete'),$_smarty_tpl);?>
 \'" + name + "\'?"))
			
				{
					
					redirect('<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule());?>
&deleteattr=' + id);
			
				}
			}
		
		</script>
	</head>
	<body>
		<?php echo $_smarty_tpl->getSubTemplate ("core/inline-feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="navbar navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <?php if ($_smarty_tpl->tpl_vars['oMod']->value->isAdminLogin()){?>
	          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          <?php }?>
	          <a class="brand" href="#" style="padding-left: 0px;">
				<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getName();?>

	          </a>
	          <?php if ($_smarty_tpl->tpl_vars['oMod']->value->isAdminLogin()){?>
	          <div class="btn-group pull-right">
	            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
	              <i class="icon-tasks"></i> <?php echo $_smarty_tpl->tpl_vars['oLoginAdmin']->value->getUsername();?>

	              <span class="caret"></span>
	            </a>
	            <ul class="dropdown-menu">
	              <li><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Profile');?>
"><i class="icon-edit"></i> <?php echo smarty_function_loc(array('k'=>'profile'),$_smarty_tpl);?>
</a></li>
	              <li><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage();?>
?logout=1"><i class="icon-off"></i> <?php echo smarty_function_loc(array('k'=>'sign_out'),$_smarty_tpl);?>
</a></li>
	            </ul>
	          </div>
	          <div class="nav-collapse">
	          	<?php echo $_smarty_tpl->getSubTemplate ("core/header_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	          </div>
	          <?php }?>
	        </div>
	      </div>
	    </div><?php }} ?>