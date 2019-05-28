<?php /* Smarty version Smarty-3.1.8, created on 2019-05-25 08:57:42
         compiled from "templates/www/default\layout\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289285cdd0c26c90f49-82414039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a93eb856d51fe41f95addc301c9fbd21debfb028' => 
    array (
      0 => 'templates/www/default\\layout\\default.tpl',
      1 => 1558749069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289285cdd0c26c90f49-82414039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cdd0c26cd7455_49223709',
  'variables' => 
  array (
    'aConfig' => 0,
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdd0c26cd7455_49223709')) {function content_5cdd0c26cd7455_49223709($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['aConfig']->value['web_maintenance']==1){?>
	<?php echo $_smarty_tpl->getSubTemplate ('layout/maintenance.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
  <?php echo $_smarty_tpl->getSubTemplate ('core/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['oMod']->value->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ('core/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php }} ?>