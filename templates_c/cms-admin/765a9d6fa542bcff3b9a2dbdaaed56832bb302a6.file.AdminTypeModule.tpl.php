<?php /* Smarty version Smarty-3.1.8, created on 2019-05-20 15:43:06
         compiled from "templates/cms-admin\ajax\AdminTypeModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35665ce2689ae4bb13-56252443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765a9d6fa542bcff3b9a2dbdaaed56832bb302a6' => 
    array (
      0 => 'templates/cms-admin\\ajax\\AdminTypeModule.tpl',
      1 => 1497348240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35665ce2689ae4bb13-56252443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sAjax' => 0,
    'oMod' => 0,
    'oAdminType' => 0,
    'aPrivileges' => 0,
    'sGroup' => 0,
    'aModule' => 0,
    'sModule' => 0,
    'aCheckedPrivileges' => 0,
    'sName' => 0,
    'sUri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce2689b02e6d5_89201202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce2689b02e6d5_89201202')) {function content_5ce2689b02e6d5_89201202($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\function.loc.php';
if (!is_callable('smarty_function_val')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\function.val.php';
?><?php if ($_smarty_tpl->tpl_vars['sAjax']->value=='form'){?>
	<form id="form" action="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule(),('select=').($_smarty_tpl->tpl_vars['oAdminType']->value->getPrimaryKey()));?>
" method="POST">
	  <div class="modal-header">
	    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel"><?php echo smarty_function_loc(array('k'=>'form'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['oMod']->value->getName();?>
</h3>
	  </div>
	  <div class="modal-body">
	  	<?php echo $_smarty_tpl->getSubTemplate ("core/feedback.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('source'=>$_smarty_tpl->tpl_vars['oMod']->value->getModule()), 0);?>

		<div class="form-unit form-horizontal">
		   <div class="control-group">
		     <label class="control-label" for="name">Name</label>
		     <div class="controls">
		       <input type="text" class="" name="oAdminType-name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['oAdminType']->value->getName();?>
" />
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label">Access Privileges</label>
		     <div class="controls">
		     	<table cellspacing="0" cellpadding="0" border="0" class="table table-striped table-bordered">
				<?php  $_smarty_tpl->tpl_vars['aModule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['aModule']->_loop = false;
 $_smarty_tpl->tpl_vars['sGroup'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aPrivileges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['aModule']->key => $_smarty_tpl->tpl_vars['aModule']->value){
$_smarty_tpl->tpl_vars['aModule']->_loop = true;
 $_smarty_tpl->tpl_vars['sGroup']->value = $_smarty_tpl->tpl_vars['aModule']->key;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['sGroup']->value;?>
</td>
						<td>
							<?php  $_smarty_tpl->tpl_vars['sName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sName']->_loop = false;
 $_smarty_tpl->tpl_vars['sModule'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aModule']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sName']->key => $_smarty_tpl->tpl_vars['sName']->value){
$_smarty_tpl->tpl_vars['sName']->_loop = true;
 $_smarty_tpl->tpl_vars['sModule']->value = $_smarty_tpl->tpl_vars['sName']->key;
?>
								<label class="checkbox">
									<input type="checkbox" name="privileges[]" value="<?php echo $_smarty_tpl->tpl_vars['sModule']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['sModule']->value,$_smarty_tpl->tpl_vars['aCheckedPrivileges']->value)){?>checked="checked"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['sName']->value;?>

								</label>
							<?php } ?>
						</td>
					</tr>
				<?php } ?>
				</table>
		     </div>
		   </div>
		   <div class="clearfix"></div>
		</div>
	  </div>
	  <div class="modal-footer">
		<input type="hidden" name="save" value="1"/>
		<input type="submit" value="<?php echo smarty_function_loc(array('k'=>'save'),$_smarty_tpl);?>
" class="btn btn-primary"/>
	 	<?php if (!$_smarty_tpl->tpl_vars['oAdminType']->value->isNew()){?><input name="delete" type="button" value="<?php echo smarty_function_loc(array('k'=>'delete'),$_smarty_tpl);?>
" class="btn btn-danger" onclick="doDelete('<?php echo $_smarty_tpl->tpl_vars['oAdminType']->value->getPrimaryKey();?>
','<?php echo smarty_function_val(array('v'=>$_smarty_tpl->tpl_vars['oAdminType']->value->getName(),'parsequote'=>true),$_smarty_tpl);?>
')"/><?php }?>
	 	<a href="<?php echo $_smarty_tpl->tpl_vars['sUri']->value;?>
" class="btn">Close</a>
	  </div>
	</form>
<?php }?>
<?php }} ?>