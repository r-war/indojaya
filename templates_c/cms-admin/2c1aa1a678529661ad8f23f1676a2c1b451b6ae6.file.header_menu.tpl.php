<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 20:19:32
         compiled from "templates/cms-admin/core/header_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11955907955ce3fae4bdc207-80207354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c1aa1a678529661ad8f23f1676a2c1b451b6ae6' => 
    array (
      0 => 'templates/cms-admin/core/header_menu.tpl',
      1 => 1558408636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11955907955ce3fae4bdc207-80207354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oLoginAdmin' => 0,
    'oMod' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3fae5421403_92933738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3fae5421403_92933738')) {function content_5ce3fae5421403_92933738($_smarty_tpl) {?><?php if (!is_callable('smarty_function_loc')) include '/home/demo/public_html/indojaya/classes/smarty/plugins/function.loc.php';
?><ul class="nav">
  <?php if ($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('AdminType','Admin','User','Subscriber'))){?>
  <li class="dropdown <?php if (in_array($_smarty_tpl->tpl_vars['oMod']->value->getModule(),array('AdminType','Admin','User','Subscriber'))){?>active<?php }?>">
  	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('AdminType','Admin','User','Subscriber')));?>
">
  		<i class="icon-user"></i> User <b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
  	  <?php if (in_array('AdminType',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='AdminType'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('AdminType');?>
">Admin Type / Privileges</a></li>
	    <?php }?>
	    <?php if (in_array('Admin',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Admin'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Admin');?>
">Admin</a></li>
	    <?php }?>
	    <?php if (in_array('User',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='User'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('User');?>
"><?php echo smarty_function_loc(array('k'=>'member'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
	    <?php if (in_array('Subscriber',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Subscriber'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Subscriber');?>
"><?php echo smarty_function_loc(array('k'=>'mailing_list'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
	    <?php if (in_array('Testimonial',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Testimonial'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Testimonial');?>
"><?php echo smarty_function_loc(array('k'=>'testimonial'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
    </ul>
  </li>
  <?php }?>
  
  <?php if ($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('Content','Page','Service','Team','Menu','News','Service','Event'))){?>
  <li class="dropdown <?php if (in_array($_smarty_tpl->tpl_vars['oMod']->value->getModule(),array('Content','Page','Menu','News','Service','Event'))){?>active<?php }?>">
  	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('Content','Page','Menu','News','Service','Event')));?>
">
  		<i class="icon-pencil"></i> Content <b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
      <?php if (in_array('Menu',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
      <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Menu'&&$_GET['mode']=='main'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Menu','mode=main');?>
">Main Menu</a></li>
      <?php }?>
        
	    <?php if (in_array('Page',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Page'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Page');?>
"><?php echo smarty_function_loc(array('k'=>'page'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
	    <?php if (in_array('Service',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Service'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Service');?>
">Services</a></li>
	    <?php }?>
	    <?php if (in_array('Team',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Team'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Team');?>
">Teams</a></li>
	    <?php }?>
	    <?php if (in_array('Content',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Content'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Content');?>
"><?php echo smarty_function_loc(array('k'=>'content'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
	    <?php if (in_array('Service',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Service'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Service');?>
">Service</a></li>
	    <?php }?>
      <?php if (in_array('News',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
      <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='News'&&$_GET['mode']=='news'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('News','mode=news');?>
"><?php echo smarty_function_loc(array('k'=>'news'),$_smarty_tpl);?>
</a></li>
      <?php }?>
      <?php if (in_array('News',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
      <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='News'&&$_GET['mode']=='article'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('News','mode=article');?>
">Articles</a></li>
      <?php }?>
	    <?php if (in_array('Event',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Event'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Event');?>
"><?php echo smarty_function_loc(array('k'=>'event'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
	    <?php if (in_array('Seo',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Seo'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Seo');?>
">SEO</a></li>
	    <?php }?>
	</ul>
  </li>
  <?php }?>
  
  <?php if ($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('Banner','Gallery'))){?>
  <li class="dropdown <?php if (in_array($_smarty_tpl->tpl_vars['oMod']->value->getModule(),array('Banner','Gallery'))){?>active<?php }?>">
  	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('Banner','Gallery')));?>
">
  		<i class="icon-picture"></i> Picture <b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
	    
	    <?php if (in_array('Banner',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Banner'&&($_GET['mode']=='sliding'||!$_GET['mode'])){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Banner','mode=sliding');?>
">Home Banner</a></li>
	    <?php }?>
	    <?php if (in_array('Banner',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Banner'&&($_GET['mode']=='client'||!$_GET['mode'])){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Banner','mode=client');?>
">Client Logo</a></li>
	    <?php }?>
	    <?php if (in_array('Gallery',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Gallery'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Gallery');?>
">Gallery</a></li>
	    <?php }?>
	    
	</ul>
  </li>
  <?php }?>
  
  <?php if ($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('Product','Category','Featured','Promo'))){?>
  <li class="dropdown <?php if (in_array($_smarty_tpl->tpl_vars['oMod']->value->getModule(),array('Product','Category','Featured','Promo'))){?>active<?php }?>">
  	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('Product','Category','Featured','Promo')));?>
">
  		<i class="icon-gift"></i> <?php echo smarty_function_loc(array('k'=>'product'),$_smarty_tpl);?>
 <b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
	    <?php if (in_array('Category',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Category'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Category');?>
"><?php echo smarty_function_loc(array('k'=>'product_category'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
	    <?php if (in_array('Product',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if (($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Product'&&!$_GET['mode'])||$_smarty_tpl->tpl_vars['oMod']->value->getModule()=='ProductTab'||$_smarty_tpl->tpl_vars['oMod']->value->getModule()=='ProductStock'||$_smarty_tpl->tpl_vars['oMod']->value->getModule()=='ProductTab'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Product');?>
"><?php echo smarty_function_loc(array('k'=>'product'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
	    <?php if (in_array('ProductUser',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='ProductUser'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('ProductUser');?>
">Assign Property</a></li>
	    <?php }?>
	    
	    <?php if (in_array('Promo',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Promo'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Promo');?>
"><?php echo smarty_function_loc(array('k'=>'promo'),$_smarty_tpl);?>
</a></li>
	    <?php }?>
	</ul>
  </li>
  <?php }?>
  
  <?php if ($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('Configuration'))){?>
  <li class="dropdown <?php if (in_array($_smarty_tpl->tpl_vars['oMod']->value->getModule(),array('Configuration'))){?>active<?php }?>">
  	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage($_smarty_tpl->tpl_vars['oLoginAdmin']->value->isAuthorized(array('Configuration')));?>
">
  		<i class="icon-wrench"></i> Configuration <b class="caret"></b>
	</a>
	<ul class="dropdown-menu">
	    <?php if (in_array('Configuration',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Configuration'&&!$_GET['mode']){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Configuration');?>
">Website Data</a></li>
	    <?php }?>
	    <?php if (in_array('Configuration',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Configuration'&&$_GET['mode']=='email'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Configuration');?>
?mode=email">Email Configuration</a></li>
	    <?php }?>
	    <?php if (in_array('Configuration',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Configuration'&&$_GET['mode']=='social'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Configuration','mode=social');?>
">Social Media Link</a></li>
	    <?php }?>
	    <?php if (in_array('Configuration',$_smarty_tpl->tpl_vars['oLoginAdmin']->value->getPrivilegesArray())){?>
	    <li <?php if ($_smarty_tpl->tpl_vars['oMod']->value->getModule()=='Configuration'&&$_GET['mode']=='script'){?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['oMod']->value->getBasePage('Configuration','mode=script');?>
">Custom Script</a></li>
	    <?php }?>
	</ul>
  </li>
  <?php }?>
</ul><?php }} ?>