<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 20:19:27
         compiled from "templates/cms-admin/layout/simple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:477472055ce3fadf28fb93-49880109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88033e59b452a5bf3591efc75a00d2de0a99020e' => 
    array (
      0 => 'templates/cms-admin/layout/simple.tpl',
      1 => 1497344640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '477472055ce3fadf28fb93-49880109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3fadf3cc5b6_44836210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3fadf3cc5b6_44836210')) {function content_5ce3fadf3cc5b6_44836210($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('core/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container" style="min-height: 500px;">
	<div class="row-fluid">
	<?php echo $_smarty_tpl->getSubTemplate ("core/feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('source'=>$_smarty_tpl->tpl_vars['oMod']->value->getModule()), 0);?>

    	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['oMod']->value->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<hr>	
<?php echo $_smarty_tpl->getSubTemplate ('core/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>