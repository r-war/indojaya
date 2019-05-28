<?php /* Smarty version Smarty-3.1.8, created on 2019-05-22 15:39:37
         compiled from "templates/cms-admin/ajax/GalleryModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8825005945ce50ac95d41e4-43278491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368efb92ebb7d39d907de85b369f9aa09fbe7611' => 
    array (
      0 => 'templates/cms-admin/ajax/GalleryModule.tpl',
      1 => 1497344640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8825005945ce50ac95d41e4-43278491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sAjax' => 0,
    'oMod' => 0,
    'oGallery' => 0,
    'sUrl' => 0,
    'sUri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce50ac9a97871_75295916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce50ac9a97871_75295916')) {function content_5ce50ac9a97871_75295916($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.loc.php';
if (!is_callable('smarty_function_fckeditor')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.fckeditor.php';
if (!is_callable('smarty_function_val')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.val.php';
?><?php if ($_smarty_tpl->tpl_vars['sAjax']->value=='form'){?>
<script>
	function redirect2(url)
	{
		document.location=url;
	}
</script>

	<form id="form" action="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule(),('select=').($_smarty_tpl->tpl_vars['oGallery']->value->getPrimaryKey()));?>
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
		     <label class="control-label"><?php echo smarty_function_loc(array('k'=>'index'),$_smarty_tpl);?>

		     	<a href="#" data-toggle="tooltip" title="" data-original-title="<?php echo smarty_function_loc(array('k'=>'index_desc'),$_smarty_tpl);?>
" class="help"><i class="icon-question-sign"></i></a>
		     </label>
		     <div class="controls">
		       <input type="text" name="oGallery-index" value="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getIndex();?>
" class="span12"/>
		     </div>
		   </div>
		   	<!--
	      <div class="control-group">
		     <label class="control-label" for="name"></label>
		     <div class="controls">
		       <b>English</b>
		     </div>
		   	</div>
		   	-->
		   <div class="control-group">
		     <label class="control-label"><?php echo smarty_function_loc(array('k'=>'name'),$_smarty_tpl);?>
</label>
		     <div class="controls">
		       <input type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getName('en');?>
" class="span12" onchange="updateValue('name2',this.value);"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label"><?php echo smarty_function_loc(array('k'=>'description'),$_smarty_tpl);?>
</label>
		     <div class="controls">
		     	<input type="hidden" id="fixDescription" value="1"/>
		     	<?php echo smarty_function_fckeditor(array('name'=>'description','value'=>$_smarty_tpl->tpl_vars['oGallery']->value->getDescription('en')),$_smarty_tpl);?>

		     </div>
		   </div>
		   <!--
		   <div class="control-group">
		     <label class="control-label" for="name"></label>
		     <div class="controls">
		       <b>Chinese</b>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="name"><?php echo smarty_function_loc(array('k'=>'name'),$_smarty_tpl);?>
</label>
		     <div class="controls">
		       <input type="text" name="namecn" id="name" value="<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getName('cn');?>
" class="span12"/>
		     </div>
		   </div>
		   <div class="control-group">
		     <label class="control-label" for="description"><?php echo smarty_function_loc(array('k'=>'description'),$_smarty_tpl);?>
</label>
		     <div class="controls">
		     <input type="hidden" id="fixDescriptionCn" value="1"/>
		       <?php echo smarty_function_fckeditor(array('name'=>'descriptioncn','value'=>$_smarty_tpl->tpl_vars['oGallery']->value->getDescription('cn')),$_smarty_tpl);?>

		     </div>
		   </div>
		   <div class="clearfix"></div>
		   -->
		</div>
	</div>
	<div class="modal-footer">
		<input type="hidden" name="save" value="1"/>
		<?php $_smarty_tpl->tpl_vars['sUrl'] = new Smarty_variable(('sub=').($_smarty_tpl->tpl_vars['oGallery']->value->getId()), null, 0);?>
		<?php if (!$_smarty_tpl->tpl_vars['oGallery']->value->isNew()){?><input name="redirect" type="button" value="<?php echo smarty_function_loc(array('k'=>'picture'),$_smarty_tpl);?>
" class="btn btn-info pull-left" onclick="redirect2('<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('GalleryPicture',$_smarty_tpl->tpl_vars['sUrl']->value);?>
'); return false;"/><?php }?>
		<input type="submit" id="submit_button" value="<?php echo smarty_function_loc(array('k'=>'save'),$_smarty_tpl);?>
" class="btn btn-primary"/>
		<?php if (!$_smarty_tpl->tpl_vars['oGallery']->value->isNew()){?><input name="delete" type="button" value="<?php echo smarty_function_loc(array('k'=>'delete'),$_smarty_tpl);?>
" class="btn btn-danger" onclick="doDelete('<?php echo $_smarty_tpl->tpl_vars['oGallery']->value->getPrimaryKey();?>
','<?php echo smarty_function_val(array('v'=>$_smarty_tpl->tpl_vars['oGallery']->value->getName(),'parsequote'=>true),$_smarty_tpl);?>
')"/><?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['sUri']->value;?>
" class="btn">Close</a>
	</div>
	</form>
<?php }?><?php }} ?>