<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 20:19:32
         compiled from "templates/cms-admin/layout/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5806541235ce3fae4902817-67675366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '637d9f14d76b85624ddb6383783163c686d536c6' => 
    array (
      0 => 'templates/cms-admin/layout/default.tpl',
      1 => 1497344640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5806541235ce3fae4902817-67675366',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3fae4bc7af0_85423936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3fae4bc7af0_85423936')) {function content_5ce3fae4bc7af0_85423936($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('core/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container" style="min-height: 500px;">
	<div class="row-fluid">
		
		<div class="modal fade" id="myForm"></div>
		<?php echo $_smarty_tpl->getSubTemplate ("core/feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('source'=>$_smarty_tpl->tpl_vars['oMod']->value->getModule()), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['oMod']->value->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ('core/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>