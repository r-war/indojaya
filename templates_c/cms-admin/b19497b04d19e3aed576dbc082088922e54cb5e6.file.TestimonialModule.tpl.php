<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 11:26:33
         compiled from "templates/cms-admin\ajax\TestimonialModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188515ce37df99de0b9-35955780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b19497b04d19e3aed576dbc082088922e54cb5e6' => 
    array (
      0 => 'templates/cms-admin\\ajax\\TestimonialModule.tpl',
      1 => 1522217764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188515ce37df99de0b9-35955780',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sAjax' => 0,
    'oMod' => 0,
    'oTestimonial' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce37df9aeb975_96196660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce37df9aeb975_96196660')) {function content_5ce37df9aeb975_96196660($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\function.loc.php';
?><?php if ($_smarty_tpl->tpl_vars['sAjax']->value=='form'){?>
<form id="form" action="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule(),('select=').($_smarty_tpl->tpl_vars['oTestimonial']->value->getPrimaryKey()));?>
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
		    <label class="control-label"><?php echo smarty_function_loc(array('k'=>'picture'),$_smarty_tpl);?>
</label>
		    <div class="controls">
		      <input type="file" name="file" />
		      <span class="help-inline" style="margin-left: 50px"><a href="<?php echo $_smarty_tpl->tpl_vars['oTestimonial']->value->getPictureUrl();?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['oTestimonial']->value->getPicture();?>
</a></span>
		    </div>
		  </div>
			<div class="control-group">
				<label class="control-label" for="name">Author</label>
				<div class="controls">
					<input type="text" class="input-block-level" name="oTestimonial-name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['oTestimonial']->value->getName();?>
" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">Description</label>
				<div class="controls">
					<textarea name="oTestimonial-description" class="input-block-level"><?php echo $_smarty_tpl->tpl_vars['oTestimonial']->value->getDescription();?>
</textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo smarty_function_loc(array('k'=>'active'),$_smarty_tpl);?>
</label>
				<div class="controls">
					<select name="oTestimonial-active" id="active">
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['oTestimonial']->value->getActive()==true){?> selected="selected" <?php }?>><?php echo smarty_function_loc(array('k'=>'yes'),$_smarty_tpl);?>
</option>
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['oTestimonial']->value->getActive()==false){?> selected="selected" <?php }?>><?php echo smarty_function_loc(array('k'=>'no'),$_smarty_tpl);?>
</option>
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<input type="hidden" name="save" value="1"/>
		<input type="submit" name="save" value="<?php echo smarty_function_loc(array('k'=>'save'),$_smarty_tpl);?>
" class="btn btn-primary"/>
	</div>
</form>
<?php }?><?php }} ?>