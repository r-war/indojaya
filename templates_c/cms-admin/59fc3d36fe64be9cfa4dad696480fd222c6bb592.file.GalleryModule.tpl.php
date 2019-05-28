<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 15:02:21
         compiled from "templates/cms-admin\GalleryModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139115ce3b08dc0eb81-40636351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59fc3d36fe64be9cfa4dad696480fd222c6bb592' => 
    array (
      0 => 'templates/cms-admin\\GalleryModule.tpl',
      1 => 1497348240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139115ce3b08dc0eb81-40636351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oMod' => 0,
    '_sortable' => 0,
    'aGallery' => 0,
    'oObj' => 0,
    'sSubUrl' => 0,
    'sSelectUrl' => 0,
    '_pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3b08dcd20a7_97522894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3b08dcd20a7_97522894')) {function content_5ce3b08dcd20a7_97522894($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\function.loc.php';
if (!is_callable('smarty_function_val')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\function.val.php';
?><script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/ckfinder/ckfinder.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("core/add_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form name="theForm" action="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule());?>
" method="POST">
<table cellspacing="0" cellpadding="0" border="0" id="listing" class="table table-striped table-bordered dataTable">
<thead>
<tr>
	<th width="20px" class="center"><input type="checkbox" class="checkbox" id="checkAll" onclick="ToggleCheck(document.theForm)"/></th>
	<?php echo $_smarty_tpl->getSubTemplate ('core/sortable.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'#','field'=>'gallery.INDEX','oSortable'=>$_smarty_tpl->tpl_vars['_sortable']->value), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate ('core/sortable.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'name','field'=>'gallery.NAME','oSortable'=>$_smarty_tpl->tpl_vars['_sortable']->value), 0);?>

	<th width="350px"><?php echo smarty_function_loc(array('k'=>'options'),$_smarty_tpl);?>
</th>
</tr>
</thead>
<?php  $_smarty_tpl->tpl_vars['oObj'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oObj']->_loop = false;
 $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['aGallery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oObj']->key => $_smarty_tpl->tpl_vars['oObj']->value){
$_smarty_tpl->tpl_vars['oObj']->_loop = true;
 $_smarty_tpl->tpl_vars['idx']->value = $_smarty_tpl->tpl_vars['oObj']->key;
?>
<?php $_smarty_tpl->tpl_vars['sSelectUrl'] = new Smarty_variable(('select=').($_smarty_tpl->tpl_vars['oObj']->value->getPrimaryKey()), null, 0);?>
<?php $_smarty_tpl->tpl_vars['sSubUrl'] = new Smarty_variable(('sub=').($_smarty_tpl->tpl_vars['oObj']->value->getPrimaryKey()), null, 0);?>
<?php $_smarty_tpl->tpl_vars['sRelatedUrl'] = new Smarty_variable(('mode=gallery_').($_smarty_tpl->tpl_vars['oObj']->value->getPrimaryKey()), null, 0);?>
<?php $_smarty_tpl->tpl_vars['sPropertyUrl'] = new Smarty_variable(('galleryid=').($_smarty_tpl->tpl_vars['oObj']->value->getPrimaryKey()), null, 0);?>
<tr>
	<td class="center"><input type="checkbox" class="checkbox" name="c[]" value="<?php echo $_smarty_tpl->tpl_vars['oObj']->value->getPrimaryKey();?>
" id="c"/></td>
	<td><?php echo $_smarty_tpl->tpl_vars['oObj']->value->getIndex();?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['oObj']->value->getName();?>
</td>
	<td class="center">
	    <a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('GalleryPicture',$_smarty_tpl->tpl_vars['sSubUrl']->value);?>
" role="button" class="btn btn-primary" title="Common picture always showed on every gallery detail"><?php echo smarty_function_loc(array('k'=>'picture'),$_smarty_tpl);?>
</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getPage($_smarty_tpl->tpl_vars['oMod']->value->getModule(),$_smarty_tpl->tpl_vars['sSelectUrl']->value);?>
" role="button" class="btn btn-primary" data-toggle="modal" data-target="#myForm"><?php echo smarty_function_loc(array('k'=>'edit'),$_smarty_tpl);?>
</a>
		<input name="delete_<?php echo $_smarty_tpl->tpl_vars['oObj']->value->getCode();?>
" type="button" value="<?php echo smarty_function_loc(array('k'=>'delete'),$_smarty_tpl);?>
" class="btn btn-danger" onclick="doDelete('<?php echo $_smarty_tpl->tpl_vars['oObj']->value->getPrimaryKey();?>
','<?php echo smarty_function_val(array('v'=>$_smarty_tpl->tpl_vars['oObj']->value->getCode(),'parsequote'=>true),$_smarty_tpl);?>
')"/>
	</td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['oObj']->_loop) {
?>
<tr>
	<td colspan="9" class="center">
	<?php echo smarty_function_loc(array('k'=>'no_data'),$_smarty_tpl);?>

	</td>
</tr>
<?php } ?>
<?php if (count($_smarty_tpl->tpl_vars['aGallery']->value)>0){?>
<tr>
	<td colspan="9">
	<input type="submit" value="<?php echo smarty_function_loc(array('k'=>'delete_checked'),$_smarty_tpl);?>
" name="deleteChecked" class="btn" onclick="return confirm('<?php echo smarty_function_loc(array('k'=>'confirm_delete_checked'),$_smarty_tpl);?>
?');"/>
	</td>
</tr>
<?php }?>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("core/page_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('oPager'=>$_smarty_tpl->tpl_vars['_pager']->value), 0);?>

</form><?php }} ?>