<?php /* Smarty version Smarty-3.1.8, created on 2019-05-20 10:51:05
         compiled from "templates/cms-admin\layout\blank.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164655ce224294703b6-06685979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58ab9f8cbbe7ea9032ce4762d37c7d6c02f2b5d9' => 
    array (
      0 => 'templates/cms-admin\\layout\\blank.tpl',
      1 => 1497348240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164655ce224294703b6-06685979',
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
  'unifunc' => 'content_5ce224294ca154_27160522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce224294ca154_27160522')) {function content_5ce224294ca154_27160522($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sAjax']->value=='form'){?>
	<?php echo $_smarty_tpl->getSubTemplate ("core/inline-feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
form-script.js"></script>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['oMod']->value->getTemplateName(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>