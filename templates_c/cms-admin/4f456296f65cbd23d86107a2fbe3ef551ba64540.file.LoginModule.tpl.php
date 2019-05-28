<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 20:19:27
         compiled from "templates/cms-admin/LoginModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11392476245ce3fadf7ed554-40757913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f456296f65cbd23d86107a2fbe3ef551ba64540' => 
    array (
      0 => 'templates/cms-admin/LoginModule.tpl',
      1 => 1497344640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11392476245ce3fadf7ed554-40757913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3fadf824cf2_37867115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3fadf824cf2_37867115')) {function content_5ce3fadf824cf2_37867115($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.loc.php';
?><form class="form-horizontal" method="post" action="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage($_smarty_tpl->tpl_vars['oMod']->value->getModule());?>
">
	<fieldset>
		<legend>
			Please login first !
		</legend>
		<div class="control-group">
			<label for="username" class="control-label"><?php echo smarty_function_loc(array('k'=>'username'),$_smarty_tpl);?>
</label>
			<div class="controls">
				<input type="text" class="input-xlarge" name="username" id="username"/>
			</div>
		</div>
		<div class="control-group">
			<label for="password" class="control-label"><?php echo smarty_function_loc(array('k'=>'password'),$_smarty_tpl);?>
</label>
			<div class="controls">
				<input type="password" class="input-xlarge" name="password" id="password"/>
			</div>
		</div>
		<div class="form-actions">
			<button class="btn btn-primary" type="submit" name="login" value="1">
				<?php echo smarty_function_loc(array('k'=>'login'),$_smarty_tpl);?>

			</button>
		</div>
	</fieldset>
</form><?php }} ?>