<?php /* Smarty version Smarty-3.1.8, created on 2019-05-21 12:03:33
         compiled from "templates/www/default\NewsModule.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54945ce3853039afe2-06442067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3c91be6c2aea1314c4e4d861fe619633ae6560f' => 
    array (
      0 => 'templates/www/default\\NewsModule.tpl',
      1 => 1558415012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54945ce3853039afe2-06442067',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3853044ac86_62362303',
  'variables' => 
  array (
    'news' => 0,
    'news_list' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3853044ac86_62362303')) {function content_5ce3853044ac86_62362303($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp5\\htdocs\\itconcept\\classes\\smarty\\plugins\\modifier.truncate.php';
?>        <?php if ($_smarty_tpl->tpl_vars['news']->value){?>
          <section class="blog-header no-padding-bottom blog-page-padding-top bg-blog-right">
              <div class="container">
                      <div class="font-style-1-outer">
                      <h3 class="alt-font font-weight-100 text-white text-center"><?php echo $_smarty_tpl->tpl_vars['news']->value->getName();?>
</h3>
                  </div>
              </div>
          </section>
          <div class="row">
            <!-- start post item -->
            <div class="col-md-6 col-sm-6 col-xs-12 blog-post-content padding-30px-tb margin-30px-bottom bg-white xs-margin-30px-bottom xs-text-center">
                <div class="blog-image">
                  <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['news']->value->getPictureUrl();?>
" alt="" data-no-retina=""></a>
                </div>
                <div class="blog-text border-all display-inline-block width-100">
                    <div class="content padding-30px-top">
                        <div class="text-medium-gray text-small margin-10px-bottom text-capitalizealt-font font-weight-400">
                          <span>Posted on <?php echo $_smarty_tpl->tpl_vars['news']->value->getDate('F d, Y');?>
</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                          
                        </div>
                        <a href="#" class="text-blackish text-capitalize alt-font text-heading-small font-weight-600 margin-15px-bottom display-block"><?php echo $_smarty_tpl->tpl_vars['news']->value->getName();?>
</a>
                        <p class="no-margin"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value->getDescription(),300);?>
</p>
                    </div>
                </div>
            </div>
          </div>
        <?php }else{ ?>
          <section class="blog-header no-padding-bottom blog-page-padding-top bg-blog-right">
              <div class="container">
                      <div class="font-style-1-outer">
                      <h3 class="alt-font font-weight-100 text-white text-center">Latest Blogs</h3>
                  </div>
              </div>
          </section>
          <div class="row">
            <!-- start post item -->
            <?php if (count($_smarty_tpl->tpl_vars['news_list']->value)>0){?>
            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
            <div class="col-md-6 col-sm-6 col-xs-12 blog-post-content padding-30px-tb margin-30px-bottom bg-white xs-margin-30px-bottom xs-text-center">
                <div class="blog-image">
                  <a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value->getPictureUrl();?>
" alt="" data-no-retina=""></a>
                </div>
                <div class="blog-text border-all display-inline-block width-100">
                    <div class="content padding-30px-top">
                        <div class="text-medium-gray text-small margin-10px-bottom text-capitalizealt-font font-weight-400">
                          <span>Posted on <?php echo $_smarty_tpl->tpl_vars['data']->value->getDate('F d, Y');?>
</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                          
                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value->getUrl();?>
" class="text-blackish text-capitalize alt-font text-heading-small font-weight-600 margin-15px-bottom display-block"><?php echo $_smarty_tpl->tpl_vars['data']->value->getName();?>
</a>
                        <p class="no-margin"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value->getDescription(),300);?>
</p>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php }?>
          </div>
        <?php }?><?php }} ?>