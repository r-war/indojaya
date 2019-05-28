<?php /* Smarty version Smarty-3.1.8, created on 2019-05-25 08:57:42
         compiled from "templates/www/default\core\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74685cdd0c26ecb4c1-21775314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f3be00f86b234f2a1c31c1d8b7348380bd1af5a' => 
    array (
      0 => 'templates/www/default\\core\\footer.tpl',
      1 => 1558749064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74685cdd0c26ecb4c1-21775314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cdd0c26f05e52_23094459',
  'variables' => 
  array (
    'aConfig' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdd0c26f05e52_23094459')) {function content_5cdd0c26f05e52_23094459($_smarty_tpl) {?>       

    <!--Site Footer Here-->
    <footer id="site-footer" class="padding-80px-tb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <ul class="social-icons margin-5px-bottom no-padding wow fadeInUp" data-wow-delay="300ms">
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
                    <p class="copyrights wow fadeInUp no-margin" data-wow-delay="350ms"><?php echo $_smarty_tpl->tpl_vars['aConfig']->value['copyright_en'];?>
</p>
                </div>
            </div>
        </div>
    </footer>
    <!--Footer ends-->
    
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/jquery-2.2.3.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/jquery.appear.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/jquery.fancybox.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/owl.carousel.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/swiper.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/wow.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/isotop.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/packery.js"></script>
    <!-- morphtext -->
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/morphtext.js"></script>
    <!-- Cube Portfolio JS File -->
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/jquery.cubeportfolio.min.js"></script>
    <!-- Cube Portfolio Lity JS File -->
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/lity.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/parallaxie.js"></script>
    <!-- match height -->
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/matchheight.js"></script>

    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/isotope.pkgd.min.js"></script>


    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
jquery.themepunch.revolution.min.js"></script>


    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.actions.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.carousel.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.migration.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.parallax.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/revolution.extension.video.min.js"></script>


    <!--Google Map Api-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv7LYRzyivt-k-4wMEENhy-cMR_KMO_8A"></script>


    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/map.js"></script>
    <script src="<?php echo $_smarty_tpl->getConfigVariable('JS_PATH');?>
/main.js"></script>
    <script type="text/javascript">
      <?php echo $_smarty_tpl->tpl_vars['aConfig']->value['custom_script'];?>

    </script>
  </body>
</html><?php }} ?>