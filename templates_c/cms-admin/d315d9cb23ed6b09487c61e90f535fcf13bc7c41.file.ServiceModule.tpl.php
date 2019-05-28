<?php /* Smarty version Smarty-3.1.8, created on 2019-05-25 10:19:39
         compiled from "templates/cms-admin\ajax\ServiceModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79245ce268f9a80461-86986435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd315d9cb23ed6b09487c61e90f535fcf13bc7c41' => 
    array (
      0 => 'templates/cms-admin\\ajax\\ServiceModule.tpl',
      1 => 1558749058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79245ce268f9a80461-86986435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce268f9b30110_61645810',
  'variables' => 
  array (
    'sAjax' => 0,
    'oMod' => 0,
    'oService' => 0,
    'sUri' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce268f9b30110_61645810')) {function content_5ce268f9b30110_61645810($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\function.loc.php';
if (!is_callable('smarty_function_fckeditor')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\function.fckeditor.php';
if (!is_callable('smarty_function_val')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\function.val.php';
?><?php if ($_smarty_tpl->tpl_vars['sAjax']->value=='form'){?>
	<form id="form" action="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule(),('select=').($_smarty_tpl->tpl_vars['oService']->value->getPrimaryKey()));?>
" method="POST" enctype="multipart/form-data">
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
		     <label class="control-label" for="index">Index</label>
		     <div class="controls">
		       <input type="text" name="oService-index" id="index" value="<?php echo $_smarty_tpl->tpl_vars['oService']->value->getIndex();?>
" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="name"><?php echo smarty_function_loc(array('k'=>'name'),$_smarty_tpl);?>
</label>
		     <div class="controls">
		       <input type="text" name="oService-name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['oService']->value->getName();?>
" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="short_description">Icon</label>
		     <div class="controls">
		       <input type="text" name="oService-short_description" id="short_description" value="<?php echo $_smarty_tpl->tpl_vars['oService']->value->getShortDescription();?>
" class="span12"/>
		     </div>
		   </div>
		   
		   <div class="control-group">
		     <label class="control-label" for="description"><?php echo smarty_function_loc(array('k'=>'description'),$_smarty_tpl);?>
</label>
		     <div class="controls">
		     <input type="hidden" id="fixDescription" value="1"/>
		       <?php echo smarty_function_fckeditor(array('name'=>'description','value'=>$_smarty_tpl->tpl_vars['oService']->value->getDescription()),$_smarty_tpl);?>

		     </div>
		   </div>
		   
		   <div class="control-group">
		     <label class="control-label"><?php echo smarty_function_loc(array('k'=>'picture'),$_smarty_tpl);?>

		     	<a href="#" data-toggle="tooltip" title="" data-original-title="Make sure size is fitted enough within the area used on this image (970px x 200px)" class="help"><i class="icon-question-sign"></i></a>
		     </label>
		     <div class="controls">
		       <input type="file" class="" name="picture" id="picture"/>
		       <span class="help-inline" style="margin-left: 50px"><a href="<?php echo $_smarty_tpl->tpl_vars['oService']->value->getPictureUrl();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oService']->value->getPicture();?>
</a></span>
		     </div>
		   </div>
		   <div class="clearfix"></div>
		</div>
	</div>
	<div class="modal-footer">
		<input type="hidden" name="save" value="1"/>
		<input type="submit" value="<?php echo smarty_function_loc(array('k'=>'save'),$_smarty_tpl);?>
" class="btn btn-primary"/>
		<?php if (!$_smarty_tpl->tpl_vars['oService']->value->isNew()){?><input name="delete" type="button" value="<?php echo smarty_function_loc(array('k'=>'delete'),$_smarty_tpl);?>
" class="btn btn-danger" onclick="doDelete('<?php echo $_smarty_tpl->tpl_vars['oService']->value->getPrimaryKey();?>
','<?php echo smarty_function_val(array('v'=>$_smarty_tpl->tpl_vars['oService']->value->getName(),'parsequote'=>true),$_smarty_tpl);?>
')"/><?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['sUri']->value;?>
" class="btn">Close</a><br />
	</div>
	</form>
<?php }?><?php }} ?>