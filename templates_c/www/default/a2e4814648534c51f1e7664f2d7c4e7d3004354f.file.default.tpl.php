<?php /* Smarty version Smarty-3.1.8, created on 2019-05-22 14:56:49
         compiled from "templates/www/default/layout/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15629746635ce3cf29a8e8d3-93201439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2e4814648534c51f1e7664f2d7c4e7d3004354f' => 
    array (
      0 => 'templates/www/default/layout/default.tpl',
      1 => 1558509431,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15629746635ce3cf29a8e8d3-93201439',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3cf29d2dbb0_94530280',
  'variables' => 
  array (
    'aConfig' => 0,
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3cf29d2dbb0_94530280')) {function content_5ce3cf29d2dbb0_94530280($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aConfig']->value['web_maintenance']==1){?>
	<?php echo $_smarty_tpl->getSubTemplate ('layout/maintenance.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
  <?php echo $_smarty_tpl->getSubTemplate ('core/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['oMod']->value->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ('core/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }} ?>