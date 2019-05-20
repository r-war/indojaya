<?php /* Smarty version Smarty-3.1.8, created on 2019-05-16 14:24:30
         compiled from "templates/cms-admin\layout\simple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241925cdd102e00c107-34842331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc125ccbb79f4e0b2aacf8af1e911ae02136f5d4' => 
    array (
      0 => 'templates/cms-admin\\layout\\simple.tpl',
      1 => 1497348240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241925cdd102e00c107-34842331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cdd102e062011_95749703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdd102e062011_95749703')) {function content_5cdd102e062011_95749703($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('core/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container" style="min-height: 500px;">
	<div class="row-fluid">
	<?php echo $_smarty_tpl->getSubTemplate ("core/feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('source'=>$_smarty_tpl->tpl_vars['oMod']->value->getModule()), 0);?>

    	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['oMod']->value->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<hr>	
<?php echo $_smarty_tpl->getSubTemplate ('core/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>