<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 20:19:38
         compiled from "templates/cms-admin/core/sortable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2484449455ce3faea628554-12866925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515360f2e787129798f3459e901af09e8bf1ca2a' => 
    array (
      0 => 'templates/cms-admin/core/sortable.tpl',
      1 => 1497344640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2484449455ce3faea628554-12866925',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oSortable' => 0,
    'width' => 0,
    'colspan' => 0,
    'field' => 0,
    'oMod' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3faea7c4ef6_45162230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3faea7c4ef6_45162230')) {function content_5ce3faea7c4ef6_45162230($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.loc.php';
?><?php if ($_smarty_tpl->tpl_vars['oSortable']->value instanceof Sortable){?>
	<th width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['colspan']->value){?>colspan=<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
<?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['oSortable']->value->isAscending($_smarty_tpl->tpl_vars['field']->value)){?>
	class="sorting_asc"
	<?php }elseif($_smarty_tpl->tpl_vars['oSortable']->value->isDescending($_smarty_tpl->tpl_vars['field']->value)){?>
	class="sorting_desc"
	<?php }else{ ?>
	class="sorting"
	<?php }?>
	 onclick="redirect('<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule(),$_smarty_tpl->tpl_vars['oSortable']->value->getURL($_smarty_tpl->tpl_vars['field']->value));?>
')"><?php echo smarty_function_loc(array('k'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
</th>
<?php }else{ ?>
	<th width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
"><?php echo smarty_function_loc(array('k'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
</th>
<?php }?><?php }} ?>