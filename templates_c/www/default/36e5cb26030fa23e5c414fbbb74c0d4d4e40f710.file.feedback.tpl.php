<?php /* Smarty version Smarty-3.1.8, created on 2019-05-16 14:07:18
         compiled from "templates/www/default\core\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32955cdd0c26e4a621-07779823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e5cb26030fa23e5c414fbbb74c0d4d4e40f710' => 
    array (
      0 => 'templates/www/default\\core\\feedback.tpl',
      1 => 1498124520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32955cdd0c26e4a621-07779823',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'source' => 0,
    'info_messages' => 0,
    'idx' => 0,
    'message' => 0,
    'error_messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cdd0c26eb3dc4_84801171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdd0c26eb3dc4_84801171')) {function content_5cdd0c26eb3dc4_84801171($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['info_messages']->value[$_smarty_tpl->tpl_vars['source']->value])&&is_array($_smarty_tpl->tpl_vars['info_messages']->value[$_smarty_tpl->tpl_vars['source']->value])&&count($_smarty_tpl->tpl_vars['info_messages']->value[$_smarty_tpl->tpl_vars['source']->value])>0){?>
<div class="alert alert-info">
    <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info_messages']->value[$_smarty_tpl->tpl_vars['source']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['idx']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['idx']->value>0){?><br/><?php }?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <?php } ?>
</div>
<?php }?>
<?php if (((isset($_smarty_tpl->tpl_vars['info_messages']->value[$_smarty_tpl->tpl_vars['source']->value])&&is_array($_smarty_tpl->tpl_vars['info_messages']->value[$_smarty_tpl->tpl_vars['source']->value])&&count($_smarty_tpl->tpl_vars['info_messages']->value[$_smarty_tpl->tpl_vars['source']->value])>0)&&isset($_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['source']->value])&&is_array($_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['source']->value])&&count($_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['source']->value])>0)){?>
<br/>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['source']->value])&&is_array($_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['source']->value])&&count($_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['source']->value])>0){?>
<div class="alert alert-danger" role="alert">
    <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['error_messages']->value[$_smarty_tpl->tpl_vars['source']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['idx']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
        <?php if ($_smarty_tpl->tpl_vars['idx']->value>0){?><br/><?php }?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>

    <?php } ?>
</div>
<?php }?><?php }} ?>