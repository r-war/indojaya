<?php /* Smarty version Smarty-3.1.8, created on 2019-05-22 15:23:03
         compiled from "templates/cms-admin/ajax/GalleryPictureModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8944675595ce505dd6583f3-23095449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92ddc7a5fb7e07d7ae2cd0144551acc53e41fcc7' => 
    array (
      0 => 'templates/cms-admin/ajax/GalleryPictureModule.tpl',
      1 => 1558513365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8944675595ce505dd6583f3-23095449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce505dd9047a6_93407173',
  'variables' => 
  array (
    'sAjax' => 0,
    'oMod' => 0,
    'oGalleryPicture' => 0,
    'sUri' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce505dd9047a6_93407173')) {function content_5ce505dd9047a6_93407173($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.loc.php';
if (!is_callable('smarty_function_val')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.val.php';
?><?php if ($_smarty_tpl->tpl_vars['sAjax']->value=='form'){?>

	<form id="form" action="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule(),('select=').($_smarty_tpl->tpl_vars['oGalleryPicture']->value->getPrimaryKey()));?>
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

		       <input type="text" name="oGalleryPicture-index" value="<?php echo $_smarty_tpl->tpl_vars['oGalleryPicture']->value->getIndex();?>
" id="index"/>

		     </div>

		   </div>

		   <div class="control-group">

		     <label class="control-label"><?php echo smarty_function_loc(array('k'=>'picture'),$_smarty_tpl);?>
</label>

		     <div class="controls">

		       <input type="file" class="" name="picture" id="picture"/>

		       <span class="help-inline" style="margin-left: 50px"><a href="<?php echo $_smarty_tpl->tpl_vars['oGalleryPicture']->value->getPictureUrl();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oGalleryPicture']->value->getPicture();?>
</a></span>

		     </div>

		   </div>

		   <div class="control-group">

		     <label class="control-label">&nbsp;</label>

		     <div class="controls">

		       <span class="help-inline">

					Recommended Image size is 950 x 580 pixel

		       	</span>

		     </div>

		   </div>

		   <div class="control-group">

		     <label class="control-label"><?php echo smarty_function_loc(array('k'=>'name'),$_smarty_tpl);?>
</label>

		     <div class="controls">

		       <input type="text" class="span12" name="oGalleryPicture-name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['oGalleryPicture']->value->getName();?>
" />

		     </div>

		   </div>

		   <div class="control-group">

		     <label class="control-label">Description</label>

		     <div class="controls">

		       <input type="text" class="span12" name="oGalleryPicture-description" id="name" value="<?php echo $_smarty_tpl->tpl_vars['oGalleryPicture']->value->getDescription();?>
" />

		     </div>

		   </div>

		   <div class="clearfix"></div>

		</div>

	</div>

	<div class="modal-footer">

		<input type="hidden" name="save" value="1"/>

		<input type="submit" value="<?php echo smarty_function_loc(array('k'=>'save'),$_smarty_tpl);?>
" class="btn btn-primary"/>

		<?php if (!$_smarty_tpl->tpl_vars['oGalleryPicture']->value->isNew()){?><input name="delete" type="button" value="<?php echo smarty_function_loc(array('k'=>'delete'),$_smarty_tpl);?>
" class="btn btn-danger" onclick="doDelete('<?php echo $_smarty_tpl->tpl_vars['oGalleryPicture']->value->getPrimaryKey();?>
','<?php echo smarty_function_val(array('v'=>$_smarty_tpl->tpl_vars['oGalleryPicture']->value->getPicture(),'parsequote'=>true),$_smarty_tpl);?>
')"/><?php }?>

		<a href="<?php echo $_smarty_tpl->tpl_vars['sUri']->value;?>
" class="btn">Close</a>

	</div>

	</form>

<?php }?><?php }} ?>