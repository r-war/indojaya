<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 20:19:41
         compiled from "templates/cms-admin/layout/blank.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5357212265ce3faee004d70-17943415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9556f9c89c35ccc6de04965c93db4a31f30a9a10' => 
    array (
      0 => 'templates/cms-admin/layout/blank.tpl',
      1 => 1497344640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5357212265ce3faee004d70-17943415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sAjax' => 0,
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3faee0ca225_94979555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3faee0ca225_94979555')) {function content_5ce3faee0ca225_94979555($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sAjax']->value=='form'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("core/inline-feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
form-script.js"></script>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['oMod']->value->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>