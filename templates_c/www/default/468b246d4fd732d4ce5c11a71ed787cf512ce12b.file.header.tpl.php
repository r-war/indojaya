<?php /* Smarty version Smarty-3.1.8, created on 2019-05-22 17:18:15
         compiled from "templates/www/default/core/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13546343545ce3cf29df33d6-80306088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '468b246d4fd732d4ce5c11a71ed787cf512ce12b' => 
    array (
      0 => 'templates/www/default/core/header.tpl',
      1 => 1558520294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13546343545ce3cf29df33d6-80306088',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5ce3cf2a202693_67979259',
  'variables' => 
  array (
    'oSeo' => 0,
    'oMod' => 0,
    'aConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce3cf2a202693_67979259')) {function content_5ce3cf2a202693_67979259($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php if ($_smarty_tpl->tpl_vars['oSeo']->value instanceof Seo){?><?php echo $_smarty_tpl->tpl_vars['oSeo']->value->getMetaTitle();?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['oMod']->value->getMetaData('title');?>
 | <?php echo $_smarty_tpl->tpl_vars['aConfig']->value['web_title'];?>
<?php }?></title>
    <?php if ($_smarty_tpl->tpl_vars['aConfig']->value['meta_name_description']){?>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['meta_name_description'];?>
">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['aConfig']->value['meta_name_keywords']){?>
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['meta_name_keywords'];?>
">
    <?php }?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/bootstrap.min.css"/>
    <!-- font awsome -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/font-awesome.min.css"/>
    <!-- animate -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/animate.css"/>
    <!-- swiper -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/swiper.min.css"/>
    <!-- cerosel slider-->
    <link href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/owl.carousel.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/owl.theme.default.min.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- fancey box-->
    <link href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/jquery.fancybox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Cube Portfolio CSS File -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/cubeportfolio.min.css">
    <!-- Cube Portfolio Lity CSS File -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/lity.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/layers.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/navigation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/settings.css">
    <!--core css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/core.css"/>
    <!-- my style -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('CSS_PATH');?>
/style.css"/>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="90">

    <!--Loader-->
    <div id="loader">
        <!-- Loader -->
        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>
        </div>
    </div>
    <!-- Loader end -->

    <!--starts header -->
    <header>

        <nav class="navbar navbar-inverse width-100 z-index-5 alt-font">
            <div class="container nav-header">
                <div class="navbar-header margin-5px-top">
                    <a href="/" title="Logo" class="logo scroll"><img src="/contents/images/<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['web_logo'];?>
" class="logo-dark" alt="Digione"><img src="/contents/images/<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['web_logo'];?>
" alt="Digione" class="logo-light default"></a>

                </div>
                <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs margin-5px-top" aria-hidden="true">
                    <li class="active"><a href="#home" class="scroll">Home</a></li>
                    <li><a href="#services" class="scroll-top">Services</a></li>
                    <li><a href="#team" class="scroll">Team</a></li>
                    <li><a href="#portfolio" class="scroll">Portfolio</a></li>
                    
                    <li><a href="#our-testimonial" class="scroll">Clients</a></li>
                    <li><a href="#blog" class="scroll-top">Blog</a></li>
                    <li><a href="#contactus" class="scroll">Contact</a></li>
                </ul>
            </div>

            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-none d-lg-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span> <span></span> <span></span>
            </a>
        </nav>

        <!-- side menu -->
        <div class="side-menu">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav w-100 alt-font">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#banner-main">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-top" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#team">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#portfolio">Portfolio</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#our-testimonial">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-top" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll" href="#contactus">Contact</a>
                        </li>
                    </ul>
                </nav>

                <div class="side-footer w-100">
                    <ul class="social-icons-simple white top40">
                      <?php if ($_smarty_tpl->tpl_vars['aConfig']->value['facebook_link']!=''){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['facebook_link'];?>
"><i class="fa fa-facebook"></i> </a> </li>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['aConfig']->value['twitter_link']!=''){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['twitter_link'];?>
"><i class="fa fa-twitter"></i> </a> </li>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['aConfig']->value['linkedin_link']!=''){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['linkedin_link'];?>
"><i class="fa fa-linkedin"></i> </a> </li>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['aConfig']->value['instagram_link']!=''){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['instagram_link'];?>
"><i class="fa fa-instagram"></i> </a> </li>
                      <?php }?>
                      <?php if ($_smarty_tpl->tpl_vars['aConfig']->value['mail_link']!=''){?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['aConfig']->value['mail_link'];?>
"><i class="fa fa-envelope-o"></i> </a> </li>
                      <?php }?>
                    </ul>
                    <p class="whitecolor"><?php echo $_smarty_tpl->tpl_vars['aConfig']->value['copyright_en'];?>
</p>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!-- End side menu -->


    </header>
    <!-- ends header -->
<?php }} ?>