<?php /* Smarty version Smarty-3.1.8, created on 2019-05-25 09:52:34
         compiled from "templates/cms-admin\layout\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156435cdd103dd9f6d4-71951452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '332657832e7bcf31a998ddcf97468771620b56bb' => 
    array (
      0 => 'templates/cms-admin\\layout\\default.tpl',
      1 => 1558749063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156435cdd103dd9f6d4-71951452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cdd103de2c0f1_44232000',
  'variables' => 
  array (
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdd103de2c0f1_44232000')) {function content_5cdd103de2c0f1_44232000($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('core/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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